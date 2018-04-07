<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function getData($table){
		return $this->db->get($table)->result_array();
	}

	public function addData($table, $data){
		return $this->db->insert($table, $data);
	}

	public function updateData($table, $data, $where){
		$this->db->where($where);
		return $this->db->update($table, $data);
		//check query
		// $this->db->update($table, $data);
		// echo $this->db->last_query();
	}

	public function deleteData($table, $where){
		return $this->db->delete($table, $where);
	}

	public function getAltImage($where)
	{
		$this->db->select('gambar');
		$this->db->where($where);
		return $this->db->get('alternatif')->result_array();
	}

	public function getColumn($table,$column)
	{
		$this->db->select($column);
		return $this->db->get($table)->result_array();
	}

	public function getWhere($table,$where)
	{
		return $this->db->get_where($table,$where)->result_array();
	}
		
}