<?php
class Mgallery extends CI_Model {
	
	var $gallery_path;
	var $gallery_path_url;
	
	function __construct() {
		parent::__construct();
		
		$this->gallery_path = realpath(APPPATH . '../template/images');
		$this->gallery_path_url = base_url().'template/images/';
	}
	
	function do_upload() {
		//echo 'in do-upload function call ';
		$config = array(
			'allowed_types' => 'jpg|jpeg|gif|png',
			'upload_path' => $this->gallery_path,
			'max_size' => 2000
		);
		
		//$name = $this->input->post('image_img');
		//$thumb = $this->input->post('thumbnail_img');
		
		$this->load->library('upload', $config);
		
		if ( !$this->upload->do_upload('image_img'))
	    {
	        $error = array('error' => $this->upload->display_errors());
	        print_r($error);exit;
	        //$this->load->view('upload_form', $error);
	    }
	    
	    $upload_data = $this->upload->data();
	    
		
		$data = array(
		
			'image' => $upload_data['file_name']
		
		);
		
		$this->db->insert('products',$data);
		
	}
	
	function get_images() {
		
		$files = scandir($this->gallery_path);
		$files = array_diff($files, array('.', '..', 'uploads'));
		
		$images = array();
		
		foreach ($files as $file) {
			$images[]= array (
				'url' => $this->gallery_path_url . $file,
				'thumb_url' => $this->gallery_path_url . 'uploads/' . $file
			);
		}
		
		return $images;
	}
	
}



