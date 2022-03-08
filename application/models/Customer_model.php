<?php


class Customer_model extends CI_Model{
	function tampil_data(){
		return $this->db->get('customer');
	}
 
	function insert_data($data,$table){
		$this->db->insert($table,$data);
	}
}