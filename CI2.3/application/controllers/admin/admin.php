<?php 
	class Admin extends CI_Controller {
		
		public function __construct() {
			parent::__construct();
			
		}
		

		public function login() {
				
			//check logged in
			if(isset($_SESSION['username'])) redirect('admin/dashboard/','refresh');
			else {
		
				if($this->input->post('username'))
				{
						
					$u = $this->input->post('username');
					$pw = $this->input->post('password');
					$data = $this->Madmins->verifyUser($u,$pw);
						
					if(count($data)) {
		
						//var_dump($data); exit;
						$_SESSION['userid'] = $data['id'];
						$_SESSION['username'] = $data['username'];
		
						redirect('admin','refresh');
		
					}
					else {
						$this->session->set_flashdata('error','Password or Username not valid');
						redirect('admin/','refresh');
					}
						
						
				}
				else { $data['title'] ="LOGIN"; $this->load->view('login-form.php',$data); }
		
			}
				
		}
		
		/* 
		 * 
		 * 
		public function verify() {
		if($this->input->post('username')) {
			$u = $this->input->post('username');
			$pw = $this->input->post('password');
			$this->Madmins->verifyUser($u,$pw);
			if($_SESSION['userid'] > 0) {
				redirect('admin/dashboard','refresh');
			}
		}
		
		$data['main'] = 'login';
		$data['title'] = 'Admin login';
		$data['navList'] = $this->MCats->getCategoriesNav();
		$this->load->vars($data);
		$this->load->view('template',$data);
		}
		
		function create(){
			if ($this->input->post('username')){
			$this->Madmins->addUser();
			$this->session->set_flashdata('message','User created');
			redirect('admin/admins/index','refresh');
			}else{
				$data['title'] = "Create User";
				$data['main'] = 'admin_admins_create';
				$this->load->vars($data);
				$this->load->view('dashboard');
			}
		}
		
		
		
		function edit($id=0){
				if ($this->input->post('username')){
				
				$this->Madmins->updateUser();
				$this->session->set_flashdata('message','User updated');
				redirect('admin/admins/index','refresh');
				
				}else{
					$data['title'] = "Edit User";
					$data['main'] = 'admin_admins_edit';
					$data['admin'] = $this->Madmins->getUser($id);
					$this->load->vars($data);
					$this->load->view('dashboard');
				}
		}
		
		function delete($id){
			$this->Madmins->deleteUser($id);
			$this->session->set_flashdata('message','User deleted');
			redirect('admin/admins/index','refresh');
		} */
		
		
}
?>