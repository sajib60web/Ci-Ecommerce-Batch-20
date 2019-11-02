<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Category_model extends CI_Model
{
	public function manage_category_info()
	{
		$category_info = $this->db->select('*')->from('tbl_category')->get();
		return $category_info;
	}

	public function store_category_info()
	{
		$data = [];
		$data['category_name'] = $this->input->post('category_name', true);
		$data['category_description'] = $this->input->post('category_description', true);
		$data['category_status'] = $this->input->post('category_status', true);
		$this->db->insert('tbl_category', $data);
	}
}
