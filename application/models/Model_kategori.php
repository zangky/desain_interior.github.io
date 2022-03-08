<?php


class Model_kategori extends CI_Model{
	function tampil_kategori(){
		return $this->db->get('kategori');
	}
 
	
}