<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_barang extends CI_Model{

	public function __construct()
	{
		parent::__construct();
	}

	function tampil_data(){
		return $this->db->get('data')->result();
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);	
	}

}