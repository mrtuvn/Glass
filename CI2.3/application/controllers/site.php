<?php

class Site extends CI_Controller {
	
	
	public function __construct() {

		parent::__construct();
		
	}
	
	function index()
	{
		$this->load->library('pagination');
		$this->load->library('table');
		
		//$this->table->set_heading('Id', 'The Title', 'The Content');
		
		$config['base_url'] = 'http://tu.test/CI2.3/index.php/site/index';
		$config['total_rows'] = $this->db->get('data')->num_rows();
		$config['per_page'] = 6;
		$config['num_links'] = 20;
		$config['full_tag_open'] = '<div id="pagination">';
		$config['full_tag_close'] = '</div>';
		
		$this->pagination->initialize($config);
		
		$data['records'] = $this->db->get('data', $config['per_page'], $this->uri->segment(3));
		//var_dump($data); exit;
		
		$this->load->view('site_view', $data);
		
	}
	
	public function product($id) {
	
		$data['title'] = 'Product page';
		$data['main'] = 'product';
	
		$data['products'] = $this->Mproducts->getProduct($id);
		//echo 'product function call in controller site with argument id= '.$id; exit;
		$data['id'] = $id;
		
		
		$this->load->vars($data);
		$this->load->view('layout');
	
	}
	
	public function categories($id) {
	
	
		$data['title'] = 'Categories page';
		$data['main'] = 'cate';
	
		$data['categories'] = $this->Mcats->getAllCategories();
	
		$this->load->vars($data);
		$this->load->view('layout');
	
	}
	
	
}