<?php
class Gallery extends CI_Controller {
	
	function index() {
		
		$this->load->model('Mgallery');
		
		if ($this->input->post('upload')) {
			$this->Mgallery->do_upload();
		}
		
		$data['images'] = $this->Mgallery->get_images();
		
		$this->load->vars($data);
		$this->load->view('gallery');
		
	}
	
}
