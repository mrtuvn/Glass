<?php
	class Musers extends CI_Model {
		
		public function __construct() {
			
			parent::__construct();
			
		}
		public function getText() {
			return 'hello';	
		}
		
		public function getUser($id){
			$data = array();
			$options = array('id' => $id);
		
			$Q = $this->db->get_where('admins',$options,1);
			if ($Q->num_rows() > 0){
				$data = $Q->row_array();
			}
			$Q->free_result();
			return $data;
		}
		
		public function getAllUsers(){
			$data = array();
			$Q = $this->db->get('admins');
			if ($Q->num_rows() > 0){
				foreach ($Q->result_array() as $row){
					$data[] = $row;
				}
			}
			$Q->free_result();
			return $data;
		}
		
		function addUser(){
			$data = array(
					'username' => $_POST['username'],
					'email' => $_POST['email'],
					'status' => $_POST['status'],
					'password' => $_POST['password']
			);
			$this->db->insert('admins',$data);
		}
		
		function updateUser(){
			$data = array('username' => $_POST['username'],
					'email' => $_POST['email'],
					'status' => $_POST['status'],
					'password' => $_POST['password']
			);
			$this->db->where('id',$_POST['id']);
			$this->db->update('admins',$data);
		}
			
		function deleteUser($id){
			$data = array('status' => 'inactive');
			$this->db->where('id', $id);
			$this->db->update('admins', $data);
		
		}
	}