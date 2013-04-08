<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	
	
	public function __construct() {
		parent::__construct();
		$this->load->library('pagination');
		
	}
	
	public function index()
	{
	
		// pagination
		$this->load->library('pagination');
		$this->load->helper('url');
		$this->load->library('table');
		
		$data['title'] = "Homepage";
		$data['main'] = "home";
		$data['products'] = $this->Mproducts->getAllProducts();
		//echo $this->Musers->getText(); exit;
		//var_dump($data); exit;
		$this->load->view('layout',$data);
		
		
			
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
					
				if($data) {
	
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
			else $this->load->view('login-form.php');
				
		}
			
	}
	
	function logout() {
		echo 'session deleting';
		unset($_SESSION['userid']);
		unset($_SESSION['username']);
	
		$this->session->set_flashdata('error','You have been logged out');
		redirect('admin','refresh');
	}
	
	public function product($id) {
		
		$data['title'] = 'Product page';
		$data['main'] = 'product';
		
		$data['products'] = $this->Mproducts->getProduct($id);

		$this->load->vars($data);
		$data['id'] = $id;
		//var_dump($data); exit;
		$this->load->view('layout');
			
	}
	
	public function product_list() {
	
		$data['title'] = 'All Product';
		$data['main'] = 'product_list';
	
		$data['products'] = $this->Mproducts->getAllProducts();
		
		$this->load->vars($data);
	
		//var_dump($data); exit;
		$this->load->view('layout');
	
	}
	
	public function categories($id) {
	
		
		$data['title'] = 'Categories page';
		$data['main'] = 'cate';
		
		$data['categories'] = $this->Mcats->getAllCategories();
		
		$config['base_url'] = site_url('welcome/categories/'.$id.'/page/');
		$config['total_rows'] = $this->db->get('products')->num_rows();
		$config['per_page'] = 6;
		$config['uri_segment'] = 5;
		
		$this->pagination->initialize($config);
		$data['products'] = $this->Mproducts->getProducts($id, $config['per_page'], $this->uri->segment(5));
		
		$this->load->vars($data);
		$this->load->view('layout');
		
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
