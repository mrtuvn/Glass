<?php

	class Mcats extends CI_Model{
		
		public function Mcats(){
			parent::__construct();
		}
		
		public function getCategory($id){
			$data = array();
			$options = array('id' => $id);
			$Q = $this->db->get_where('categories',$options,1);
			if ($Q->num_rows() > 0){
				$data = $Q->row_array();
			}
			$Q->free_result();
			return $data;
		}
		
		
		
		public function getTopCategories(){
			$data[0] = 'root';
			$this->db->where('parentid',0);
			$Q = $this->db->get('categories');
			if ($Q->num_rows() > 0){
				foreach ($Q->result_array() as $row){
					$data[$row['id']] = $row['name'];
				}
			}
			$Q->free_result();
			return $data;
		}
		
		
		public function getAllCategories(){
			$data = array();
			$Q = $this->db->get('categories');
			if ($Q->num_rows() > 0){
				foreach ($Q->result_array() as $row){
					$data[] = $row;
				}
			}
			$Q->free_result();
			return $data;
		}
		
		public function getCategoriesDropDown(){
			$data2 = array();
			$Q = $this->db->get('categories');
			if ($Q->num_rows() > 0){
				foreach ($Q->result_array() as $row){
					$data2[$row['id']] = $row['name'];
				}
			}
			$Q->free_result();
			return $data2;
		}
		
		
		public function getCategoriesNav(){
			$data = array();
			$Q = $this->db->get('categories');
			if ($Q->num_rows() > 0){
				
				foreach ($Q->result_array() as $row){
					$data[$row['id']] = $row['name'];
				}
			}
			$Q->free_result();
			return $data;
		}
		
		public function addCategory(){
			$data = array(
					'name' => $_POST['name'],
					'shortdesc' => $_POST['shortdesc'],
					'longdesc' => $_POST['longdesc'],
					'status' => $_POST['status'],
					'parentid' => $_POST['parentid']
			);
			$this->db->insert('categories', $data);
		}
		
		public function updateCategory(){
			$data = array(
					'name' => $_POST['name'],
					'shortdesc' => $_POST['shortdesc'],
					'longdesc' => $_POST['longdesc'],
					'status' => $_POST['status'],
					'parentid' => $_POST['parentid']
			);
			$this->db->where('id', $_POST['id']);
		$this->db->update('categories', $data);
		}
		
		public function deleteCategory($id){
			$data = array('status' => 'inactive');
			$this->db->where('id', $id);
			$this->db->update('categories', $data);
		}
		
		
	}

?>
