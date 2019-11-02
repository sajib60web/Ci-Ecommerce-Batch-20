<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model
{
	public function adminLogin($user_email)
	{
		$user_detail = $this->db->select('*')
			->from('tbl_user')
			->where('user_email', $user_email)
			->get()
			->row();
		return $user_detail;
	}

	public function admin_register_info()
	{
		$data = [];
		$data['user_name'] = $this->input->post('user_name', true);
		$data['user_email'] = $this->input->post('user_email', true);
		$data['user_password'] = password_hash($this->input->post('user_password', true), PASSWORD_DEFAULT);
		$data['user_role'] = $this->input->post('user_role', true);
		$data['user_status'] = $this->input->post('user_status', true);
		$this->db->insert('tbl_user', $data);
	}
}
