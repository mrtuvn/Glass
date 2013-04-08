<?php 

class Mproducts extends CI_Model{
	
	var $gallery_path;
	var $gallery_path_url;
	
	function Mproducts(){
		parent::__construct();
		
		$this->gallery_path = realpath(APPPATH . '../template/images/uploads');
		$this->gallery_path_url = base_url().'template/images/uploads/';
		
	}
	//pagination
	public function getProducts($catid, $perpage, $offset) {
		$data = array();
		$q = $this->db->get_where('products',array('category_id' => $catid), $perpage, $offset);
		if($q->num_rows() > 0){
			foreach($q->result_array() as $row)
				$data[] = $row;
		}
		
		return $data;
	}
	
	function getProduct($id){
		$data = array();
		$options = array('id' => $id);
		$Q = $this->db->get_where('products',$options,1);
		if ($Q->num_rows() > 0){
			$data = $Q->row_array();
		}
		$Q->free_result();
		return $data;
	}
	
	function addProduct(){
		$data = array(
				'name' => $_POST['name'],
				'shortdesc' => $_POST['shortdesc'],
				'longdesc' => $_POST['longdesc'],
				'status' => $_POST['status'],
				'grouping' => $_POST['grouping'],
				'category_id' => $_POST['category_id'],
				'featured' => $_POST['featured'],
				'price' => $_POST['price'],
				
		);
		
		$config = array(
				'allowed_types' => 'jpg|jpeg|gif|png',
				'upload_path' => $this->gallery_path,
				'max_size' => 2000,
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

		
		$config = array(
				'source_image' => $upload_data['full_path'],
				'new_image' => $this->gallery_path . '/thumbs',
				'maintain_ration' => true,
				'width' => 150,
				'height' => 100
		);
		
		$this->load->library('image_lib', $config);
		$this->image_lib->resize();
		
		
		$data['image'] = "template/images/uploads/".$upload_data['file_name'];
		$data['thumbnail'] = "template/images/uploads/thumbs/".$upload_data['file_name'];
		
		$this->db->insert('products',$data);
		
		//return $data;
	}
	
	
			
	function getAllProducts(){
		$data = array();
		$Q = $this->db->get('products');
		if ($Q->num_rows() > 0){
			foreach ($Q->result_array() as $row){
				$data[] = $row;
			}
		}
		$Q->free_result();
		return $data;
	}
	
	function updateProduct(){
		$data = array(
				'name' => $_POST['name'],
				'shortdesc' => $_POST['shortdesc'],
				'longdesc' => $_POST['longdesc'],
				'status' => $_POST['status'],
				'grouping' => $_POST['grouping'],
				'category_id' => $_POST['category_id'],
				'featured' => $_POST['featured'],
				'price' => $_POST['price']
		);
		$config['upload_path'] = './images/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '200';
		$config['remove_spaces'] = true;
		$config['overwrite'] = false;
		$config['max_width'] = '0';
		$config['max_height'] = '0';
		$this->load->library('upload', $config);
		if(!$this->upload->do_upload('image')){
		$this->upload->display_errors();
		exit();
	}
	$image = $this->upload->data();
	if ($image['file_name']){
	$data['image'] = "/images/".$image['file_name'];
	}
	if(!$this->upload->do_upload('thumbnail')){
	$this->upload->display_errors();
	exit();
	}
	$thumb = $this->upload->data();
	if ($thumb['file_name']){
	$data['thumbnail'] = "/images/".$thumb['file_name'];
	}
	$this->db->where('id', $_POST['id']);
	$this->db->update('products', $data);
	}
	
	function getMainFeature(){
		$data = array();
		$this->db->select("id,name,shortdesc,image");
		$this->db->where('featured','true');
		$this->db->where('status', 'active');
		$this->db->order_by("rand()");
		$this->db->limit(1);
		$Q = $this->db->get('products');
		if ($Q->num_rows() > 0){
			foreach ($Q->result_array() as $row){
				$data = array(
						"id" => $row['id'],
						"name" => $row['name'],
						"shortdesc" => $row['shortdesc'],
						"image" => $row['image']
				);
			}
	}
	$Q->free_result();
	return $data;
	}
	
	
	function getRandomProducts($limit,$skip){
		$data = array();
		$temp = array();
		if ($limit == 0){
			$limit=3;
		}
		$this->db->select("id,name,thumbnail,category_id");
		$this->db->where('id !=', $skip);
		$this->db->where('status', 'active');
		$this->db->orderby("category_id","asc");
		$this->db->limit(100);
		$Q = $this->db->get('products');
		if ($Q->num_rows() > 0){
			foreach ($Q->result_array() as $row){
				$temp[$row['category_id']] = array(
						"id" => $row['id'],
						"name" => $row['name'],
						"thumbnail" => $row['thumbnail']
				);
	}
	}
	shuffle($temp);
	if (count($temp)){
	for ($i=1;$i <= $limit;$i++){
	$data[] = array_shift($temp);
	}
	}
	$Q->free_result();
	return $data;
	}
	
	
	function deleteProduct($id){
		$data = array('status' => 'inactive');
		$this->db->where('id', $id);
		$this->db->update('products', $data);
	}
	
}

?>