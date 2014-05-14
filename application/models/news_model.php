<?php
class News_model extends CI_Model{

	public function __construct(){
		$this->load->database();
	}

	public function insert($data){
		$this->load->helper('date');

		$data['created'] = date('Y-m-d H:i:s', now());
		$data['modified'] = date('Y-m-d H:i:s', now());

		return $this->db->insert($this->table, $data);
	}

	public function update($data, $where = array()){
		$this->load->helper('date');

		$data['modified'] = date('Y-m-d H:i:s', now());

		return $this->db->update($this->table, $data, $where);
	}

}