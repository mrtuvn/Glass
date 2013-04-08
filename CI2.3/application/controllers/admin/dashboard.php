<?php 
	class Dashboard extends CI_Controller {
		function Dashboard() {
			parent::__construct();
			if(!isset($_SESSION['username'])) redirect('admin/','refresh');
			
		}
		
		
		function index() {
			
			$data['title'] = "Dashboard";
			$data['main'] = 'admin/home';
			$this->load->vars($data);
			$this->load->view("admin/dashboard",$data);
			
		}
		
	}
	
?>