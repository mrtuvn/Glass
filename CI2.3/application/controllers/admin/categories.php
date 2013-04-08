<?php 

	class Categories extends CI_Controller {
		
		function Categories() {
			parent::__construct();

		}
		
		public function index() {

			
			$data['title'] = "Manage Categories";
			$data['main'] = 'admin/categories/home';
			//echo get_class($this); exit;
			$data['categories'] = $this->Mcats->getAllCategories();
			$this->load->vars($data);
			$this->load->view('admin/dashboard');
			
		}
		
		
		function create(){
			
			if ($this->input->post('name')){
			$this->Mcats->addCategory();
			$this->session->set_flashdata('message','Category created');
			
			redirect('admin/categories','refresh');
			
			}else{
				$data['title'] = "Create Category";
				$data['main'] = 'admin/categories/create';
				$data['categories'] = $this->Mcats->getTopCategories();
				$this->load->vars($data);
				$this->load->view('admin/dashboard');
			}
			
		}
		
		function edit($id=0){
			if ($this->input->post('name')){
			$this->Mcats->updateCategory();
			$this->session->set_flashdata('message','Category updated');
			redirect('admin/categories/home','refresh');
			}else{
				$data['title'] = "Edit Category";
				$data['main'] = 'categories/edit';
				$data['category'] = $this->Mcats->getCategory($id);
				$data['categories'] = $this->Mcats->getTopCategories();
				$this->load->vars($data);
				$this->load->view('admin/dashboard');
			}
		}
		
		function delete($id){
			$this->Mcats->deleteCategory($id);
			$this->session->set_flashdata('message','Category deleted');
			redirect('admin/categories','refresh');
		}
	
	}


?>