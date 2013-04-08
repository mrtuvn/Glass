<?php
	class Users extends CI_Controller {
		
		public function __construct() {
			parent::__construct();
			
		}
		
		public function index() {

			
			$data['title'] = "Manage Users";
			$data['main'] = 'admin/users/home';
			//echo get_class($this); exit;
			$data['admins'] = $this->Musers->getAllUsers();
			$this->load->vars($data);
			$this->load->view('admin/dashboard');
			
		}
		
		function create(){
			if ($this->input->post('username')){
				$this->Musers->addUser();
				$this->session->set_flashdata('message','User created');
				redirect('admin/users','refresh');
			}else{
				$data['title'] = "Create User";
				$data['main'] = 'admin/users/create';
				$this->load->vars($data);
				$this->load->view('admin/dashboard');
			}
		}
		
		function edit($id=0){
			if ($this->input->post('username')){
		
				$this->Musers->updateUser();
				$this->session->set_flashdata('message','User updated');
				redirect('admin/users','refresh');
		
			}else{
				$data['title'] = "Edit User";
				$data['main'] = 'admin/users/edit';
				$data['admin'] = $this->Musers->getUser($id);
				$this->load->vars($data);
				$this->load->view('admin/dashboard');
			}
		}
		
		function delete($id){
			$this->Musers->deleteUser($id);
			$this->session->set_flashdata('message','User deleted');
			redirect('admin/users','refresh');
		}
	}