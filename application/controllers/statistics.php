<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class statistics extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('main_model');

	}

	public function index()
	{
		$this->checkUserPermission();
		$data = $this->main_model->revenueByCurrDay();
		$data = array('data' => $data);

		$this->load->view('revenue_by_currDay', $data);
	}

	public function revenueByMonth() {
		$this->checkUserPermission();
		$this->load->view('revenue_by_month');
	}

	public function getDataByMonth() {
		
		$data = $this->main_model->getRevenueByMonth();

		echo json_encode($data);
	}

	public function revenueByDay() {
		$this->checkUserPermission();
		$this->load->view('revenue_by_day');
	}


	public function getDataByDay() {

		$data = $this->main_model->getRevenueByDay();

		echo json_encode($data);
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





}
