<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class main_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function getTableFromDB($table) {
		$this->db->select('*');
		$data = $this->db->get($table);
		$data = $data->result_array();

		return $data;
	}

	public function getAllRoom() {
		$query = $this->db->query("
			SELECT p.*, lp.tenloai FROM phong p, loaiphong lp
			WHERE p.maloai = lp.maloai ORDER BY p.tenphong
			");

		$query = $query->result_array();
		return $query;
	}

	public function orderRoom($maphong) {

		date_default_timezone_set('Asia/Ho_Chi_Minh');
		$currDate = date('Y-m-d H:i');


		$query = $this->db->query("SELECT trangthai, dat_truoc FROM phong WHERE maphong = '$maphong'");
		$result = $query->result_array();

		if(count($result) == 1) {

			$currStatus = $result[0]['trangthai'];
			$bookingTime = $result[0]['dat_truoc'];

			if($currStatus == 2 && $bookingTime != 0) 
				$this->updateRoomStatusById($maphong);
			
			$status = array('trangthai' => 1);
			$data = array(
				'maphong' => $maphong,
				'checkin' => $currDate
			);

			$this->db->where('maphong', $maphong);
			$this->db->update('phong', $status);

		}

		return $this->db->insert('hoadon', $data);
	}
	

	public function getBillIdByRoomId($maphong) {
		
		$this->db->select('mahoadon');
		$this->db->where('maphong', $maphong);
		$this->db->where('tongtien', 0);

		$data = $this->db->get('hoadon');
		$data = $data->result_array();

		return $data[0]['mahoadon'];
	}

	public function getBillDetailsByBillId($mahoadon) {
		$this->db->select('*');
		$this->db->where('mahoadon', $mahoadon);
		$result = $this->db->get('hoadon');
		$result = $result->result_array();

		return $result;

	}

	public function getBillInfoByBillId($mahoadon) {

		$this->db->select('*, td.tenmonan');
		$this->db->where('mahoadon', $mahoadon);
		$this->db->from('chitiethoadon as cthd');
		$this->db->join('thucdon as td', 'cthd.mathucdon = td.mathucdon');
		$details = $this->db->get();
		$details = $details->result_array();

		return $details;
	}



	public function insertBillInfo($mahoadon, $mathucdon, $soluong) {

		$this->db->select('giatien');
		$this->db->where('mathucdon', $mathucdon);
		$price = $this->db->get('thucdon');
		$price = $price->result_array();
		// $price = intval($price[0]['giatien']) * intval($soluong);


		$order = array(
			'mahoadon' => $mahoadon,
			'mathucdon' => $mathucdon,
			'soluong' => $soluong,
			);
		
		return $this->db->insert('chitiethoadon', $order);
	}

	public function checkExistDupBillDetail($mahoadon, $mathucdon) {

		$query =  $this->db->query("
			SELECT * FROM chitiethoadon
			WHERE mahoadon = '$mahoadon'
			AND mathucdon = '$mathucdon'
			");

		return $query->result_array();
	}



	public function editCountDishByBillId($mahoadon, $mathucdon, $soluong) {

		$this->db->select('giatien');
		$this->db->where('mathucdon', $mathucdon);

		$price = $this->db->get('thucdon');
		$price = $price->result_array();
		$price = intval($price[0]['giatien']) * intval($soluong);

		$order = array(
			'mahoadon' => $mahoadon,
			'mathucdon' => $mathucdon,
			'soluong' => $soluong,
			);

		$this->db->where('mahoadon', $mahoadon);
		$this->db->where('mathucdon', $mathucdon);
		$this->db->update('chitiethoadon', $order);

		return $price;
	}

	public function getRoomNameById($maphong) {
		$this->db->select('tenphong, tenloai, giatien');
		$this->db->from('phong as p');
		$this->db->join('loaiphong as lp', 'p.maloai = lp.maloai');
		$this->db->where('p.maphong', $maphong);
		$result = $this->db->get();
		$result = $result->result_array();

		return $result;
	}

	public function removeDishById($mahoadon, $mathucdon) {

		$this->db->where('mahoadon', $mahoadon);
		$this->db->where('mathucdon', $mathucdon);
		return $this->db->delete('chitiethoadon');
	}

	public function getServicePrice($mahoadon) {
		$this->db->select('sum(dongia) as dongia');
		$this->db->where('mahoadon', $mahoadon);
		$result = $this->db->get('chitiethoadon');
		$result = $result->result_array();

		return $result[0]['dongia'] == '' ? 0 :  $result[0]['dongia'];

	}

	public function updateStatus($mahoadon, $maphong, $checkout, $tongtien,$chitiet,$thungan) {

		$data = array(
			'mahoadon' => $mahoadon, 
			'maphong' => $maphong, 
			'checkout' => $checkout, 
			'tongtien' => $tongtien,
			'chitiet' => $chitiet,
			'thungan' => $thungan
			);

		// echo "<pre>";
		// var_dump($data);
		// echo "</pre>";

		$this->db->where('mahoadon', $mahoadon);
		$this->db->where('maphong', $maphong);
		$this->db->update('hoadon', $data);

		$trangthai = array('trangthai' => 0);

		$this->db->where('maphong', $maphong);
		$this->db->update('phong', $trangthai);

	}

	public function revenueByCurrDay() {

		$query = $this->db->query("
			SELECT hoadon.*, tenphong from hoadon, phong
			WHERE hoadon.maphong = phong.maphong 
			AND day(checkout) = day(CURDATE())
			AND month(checkout) = month(CURDATE())
			AND YEAR(checkout) = YEAR(CURDATE())
			ORDER BY checkout

			");

		$query = $query->result_array();

		return $query;
	}

	public function getRevenueByMonth() {
		$query = $this->db->query('
			SELECT SUM(tongtien) as total, month(checkout) as month 
			from hoadon where YEAR(checkout) = YEAR(CURDATE())
			group by month(checkout)
			');

		$query = $query->result_array();

		return $query;
	}

	public function getRevenueByDay() {
		$query = $this->db->query('
			SELECT count(*) soluong, day(checkout) ngay, sum(tongtien) tongtien FROM `hoadon`
			where month(checkout) = month(curdate()) 
			and year(checkout) = year(curdate())
			group by day(checkout)
			');

		$query = $query->result_array();

		return $query;
	}

	public function getRoomStatus($maphong) {
		$query = $this->db->query("
			SELECT * FROM phong 
			WHERE maphong = '$maphong'
			");

		$query = $query->result_array();
		return $query;
	}

	public function editProductById($mathucdon, $tenmonan, $donvitinh, $giatien) {
		
		$product = array(
			'tenmonan' => $tenmonan,
			'donvitinh' => $donvitinh,
			'giatien' => $giatien
			);

		$this->db->where('mathucdon', $mathucdon);
		return $this->db->update('thucdon', $product);
	}

	public function removeProductById($mathucdon) {
		$this->db->where('mathucdon', $mathucdon);
		return $this->db->delete('thucdon');
	}

	public function addProduct($tenmonan, $donvitinh, $giatien) {
		$product = array(
			'tenmonan' => $tenmonan,
			'donvitinh' => $donvitinh,
			'giatien' => $giatien
			);

		$this->db->insert('thucdon', $product);
		return $this->db->insert_id();
	}

	public function preBookingById($maphong, $checkin, $bookingTime) {


		$this->db->query("update phong set trangthai = 2, dat_truoc = '$bookingTime' where maphong = '$maphong'");

		$this->db->query("Set GLOBAL event_scheduler = ON");

		$booking = 'booking'.'_'.$maphong;

		$query = $this->db->query("
			CREATE EVENT $booking
			ON SCHEDULE AT '$checkin'
			DO 
			BEGIN 
			update phong set trangthai = 0, dat_truoc = 0 where maphong = '$maphong';
				END
				");

		return $query;
	}

	public function updateRoomStatusById($maphong) {

		$booking = 'booking'.'_'.$maphong;
		$this->db->query("drop event $booking");
		$this->db->query("update phong set trangthai = 0, dat_truoc = 0 where maphong = '$maphong'");
		return 1;
	}

	public function getTypeRoomByTypeId($maloai) {

		$query = $this->db->query("
			SELECT count(*) lastId from phong
			WHERE maloai = $maloai
			");

		$query = $query->result_array();

		return $query[0]['lastId'];
	}

	public function insertIntoRoom($tenphong, $maloai) {

		$data = array(
			'tenphong' => $tenphong,
			'maloai' => $maloai
			);

		$this->db->insert('phong', $data);
		return $this->db->insert_id();
	}

	public function removeRoomById($maphong) {

		$this->db->where('maphong', $maphong);
		$this->db->delete('phong');

	}

	public function getAccountFromDB($username, $password) {

		$query = $this->db->query("
			SELECT * FROM user_account
			WHERE username = '$username'
			AND password = '$password'
			");

		return $query->result_array();
	}

	public function getPermissionByLevel($level) {
		$query = $this->db->query("
			SELECT up.permission from user_permission up, user_account uc, role, permission_details pd
			WHERE uc.level = role.level
			AND role.level = pd.level
			AND pd.permission_id = up.permission_id
			AND uc.level = '$level'
			");

		$query = $query->result_array();
		$permission = array();

		foreach ($query as $value) {
			$permission[] = $value['permission'];
		}

		// echo "<pre>";
		// var_dump($permission);
		// echo "</pre>";

		// die;

		return $permission;
	}

	public function addPermissionByLevel($level, $selectedPermission) {
		
		$permission = [];
		$temp = [];


		if(isset($selectedPermission)) {

			foreach ($selectedPermission as $value) {
				$temp = array(
					'level' => $level,
					'permission_id' => $value
					);

				array_push($permission,  $temp);
			}


			$this->db->insert_batch('permission_details', $permission);
		}

		

	}

	public function deletePermissionByLevel($level) {
		$this->db->where('level', $level);
		$this->db->delete('permission_details');
	}

	public function getPermission($level) {

		$this->db->select('permission_id');
		$this->db->where('level', $level);
		$permission = $this->db->get('permission_details');
		$permission = $permission->result_array();

		$data = [];

		foreach ($permission as $value) {
			$data[] = $value['permission_id'];
		}

		
		return $data;
	}


	public function insertRole($title) {
		$data = array('title' => $title);
		$this->db->insert('role', $data);
		return $this->db->insert_id();
	}

	public function removeRoleByLevel($level) {
		$this->db->where('level', $level);
		$this->db->delete('role');
	}

	public function getAllAccount() {

		$query = $this->db->query("
			SELECT user_account.*, role.title FROM user_account, role
			WHERE user_account.level = role.level
			");

		return $query->result_array();
	}

	public function updateAccountById($id, $name, $level) {
		$query = $this->db->query("
			UPDATE user_account 
			SET name = '$name', level = '$level' 
			WHERE id = '$id'
			");
		
	}

	public function addAccountToDB($username, $password, $name, $level) {
		
		$data = array(
			'username' => $username,
			'password' => $password,
			'name' => $name,
			'level' => $level
			);

		$this->db->insert('user_account', $data);
		return $this->db->insert_id();
	}

	public function removeAccountById($id) {

		$this->db->where('id', $id);
		return $this->db->delete('user_account');

	}

	public function getAllBillFromDB() {

		$query = $this->db->query("
			SELECT hd.*, p.tenphong, uc.name FROM hoadon hd, phong p, user_account uc  
			WHERE hd.maphong = p.maphong
			AND hd.thungan = uc.id
			AND hd.mahoadon >= 76
			AND hd.tongtien <> 0
			ORDER BY hd.mahoadon DESC
			");

		return $query->result_array();
	}


	public function getBillByViewMode($item) {
		$query = $this->db->query("
			SELECT hd.*, p.tenphong, uc.name FROM hoadon hd, phong p, user_account uc  
			WHERE hd.maphong = p.maphong
			AND hd.thungan = uc.id
			AND hd.mahoadon >= 76
			AND hd.tongtien <> 0
			AND DATE(hd.checkout) = '$item'
			ORDER BY hd.mahoadon DESC
			");

		return $query->result_array();
	}


	public function getAllPermissionFromDB() {

		$this->db->select('*');
		$this->db->order_by('title');
		$data = $this->db->get('user_permission');
		$data = $data->result_array();

		return $data;

	}

	public function updateRole($level, $title) {

		$data = array(
			'level' => $level,
			'title' => $title
			);

		$this->db->where('level', $level);
		$this->db->update('role', $data);
	}

	public function updatePasswordById($id, $password) {
		$data = array(
			'id' => $id,
			'password' => $password
			);

		$this->db->where('id', $id);
		return $this->db->update('user_account', $data);
	}

	






}

/* End of file main_model.php */
/* Location: ./application/models/main_model.php */