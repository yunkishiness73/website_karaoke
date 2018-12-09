<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


include 'quanly_karaoke.php';

class rbac extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('main_model');
	}

	public function index()
	{

		$this->checkUserPermission();
		
		$role = $this->main_model->getTableFromDB('role');
		$permission = $this->main_model->getAllPermissionFromDB('user_permission');

		$data = array(
			'role' => $role,
			'user_permission' => $permission
			);

		// echo "<pre>";
		// var_dump($data);
		// echo "</pre>";
		// die;
		$this->load->view('rbac_view', $data);
	}

	public function addPermission() {

		$level = $this->input->post('level');
		$title = $this->input->post('role');
		$selectedPermission = $this->input->post('selectedPermission');
		$permission = $this->main_model->getPermission($level);

		$this->main_model->updateRole($level, $title);
		$this->main_model->deletePermissionByLevel($level);
		$this->main_model->addPermissionByLevel($level, $selectedPermission);

		$permission = $this->main_model->getPermissionByLevel($_SESSION['admin'][0]['level']);

		$this->session->set_userdata('permission',$permission);

	}

	public function getRole() {
		$level = $this->input->post('level');
		$permission = $this->main_model->getPermission($level);
		echo json_encode($permission);
	}

	public function addRole() {
		$title = $this->input->post('title');
		echo $this->main_model->insertRole($title);
	}

	public function removeRole() {
		$level = $this->input->post('level');
		$this->main_model->removeRoleByLevel($level);
	}

	public function loadAccountView() {

		$this->checkUserPermission();

		$role = $this->main_model->getTableFromDB('role');
		$user_account = $this->main_model->getAllAccount();

		$data = array(
			'role' => $role,
			'user_account' => $user_account
			);

		// echo "<pre>";
		// var_dump($data);
		// echo "</pre>";

		// die;

		$this->load->view('accountManagement', $data);
	}

	public function editAccInfo() {

		$id = $this->input->post('accountId');
		$name = $this->input->post('name');
		$level = $this->input->post('level');
		echo "<pre>";
		var_dump($id);
		var_dump($name);
		var_dump($level);
		echo "</pre>";
		$this->main_model->updateAccountById($id, $name, $level);
	}

	public function checkUserPermission() {

		if(isset($_SESSION['admin']) == true) {
			$name = $_SESSION['admin'][0]['name'];
			$uri = $_SERVER['REQUEST_URI'];
			$uri = explode("/", $uri);
			$permission = null;
			if(isset($uri[4])) {
				$permission = $uri[3]."/".$uri[4];
				if(in_array($permission, $_SESSION['permission']) == false) {
					echo "<script>alert('Bạn không đủ quyền truy cập!');</script>";
					redirect('quanly_karaoke','refresh'); 
				}
			} else {
				$permission = $uri[3];
				if(in_array($permission, $_SESSION['permission']) == false) {
					echo "<script>alert('Bạn không đủ quyền truy cập!');</script>";
					redirect('quanly_karaoke','refresh'); 
				}

			}
		}
		else 
			redirect('quanly_karaoke/logIn','refresh'); 

	}

	public function addNewAccount() {
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$name = $this->input->post('name');
		$level = $this->input->post('level');

		if($this->main_model->addAccountToDB($username, $password, $name, $level))
			echo '1';
		else
			echo '0';
	}

	public function removeAccount() {

		$id = $this->input->post('id');
		
		if($this->main_model->removeAccountById($id))
			echo '1';
		else 
			echo '0';
	}

	public function resetPassword() {
		$id = $this->input->post('id');
		$password = md5($this->input->post('password'));
		// echo "<pre>";
		// var_dump($id);
		// var_dump($password);
		// echo "</pre>";
		echo $this->main_model->updatePasswordById($id, $password);
	}


	
}

/* End of file rabc.php */
/* Location: ./application/controllers/rabc.php */