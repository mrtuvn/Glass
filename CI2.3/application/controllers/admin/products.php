<?php 
	class Products extends CI_Controller {
		public function __construct() {
			
			parent::__construct();
			
			
		}
		
		public function index() {
			
				$data['title'] = "Manage Products";
				$data['main'] = 'admin/products/home';
				$data['products'] = $this->Mproducts->getAllProducts();
				$this->load->vars($data);
				$this->load->view('admin/dashboard');
		
			
		}
		
		public function edit($id=0){
				if ($this->input->post('name')){
				$this->Mproducts->updateProduct();
				$this->session->set_flashdata('message','Product updated');
				redirect('admin/products/home','refresh');
			}else{
				$data['title'] = "Edit Product";
				$data['main'] = 'admin/products/edit';
				$data['product'] = $this->Mproducts->getProduct($id);
				$data['categories'] = $this->Mcats->getCategoriesDropDown();
				$this->load->vars($data);
				$this->load->view('admin/dashboard');
			}
		}
		
		public function create(){
			if ($this->input->post('name')){
			
				$this->Mproducts->addProduct();
				
				$this->session->set_flashdata('message','Product created');
				redirect('admin/products','refresh');
			
			}
			else{
				//echo 'test';
				$data['title'] = "Create Product";
				$data['main'] = 'admin/products/create';
				$data['categories'] = $this->Mcats->getCategoriesDropDown(); //data2 array from model 
			
				$this->load->vars($data);
				$this->load->view('admin/dashboard');
			}
		}
		
		
		
		public function delete($id){
			$this->Mproducts->deleteProduct($id);
			$this->session->set_flashdata('message','Product deleted');
			redirect('admin/products','refresh');
		}
		
	}


?>