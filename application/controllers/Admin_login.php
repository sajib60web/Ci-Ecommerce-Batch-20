<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_login extends CI_Controller
{
	function __construct()
	{
		parent:: __construct();
		$this->load->model('admin_model');
	}
	public function index()
	{
		if (isset($this->session->user_id)){
			redirect('admin');
		}else{
			$data = [];
			$data['title'] = 'Admin Login';
			$this->load->view('backend/login/login', $data);
		}
	}

	public function checkAdminLogin()
	{
		$user_email = $this->input->post('user_email', true);
		$user_password = $this->input->post('user_password', true);
		$user_detail = $this->admin_model->adminLogin($user_email);
		if ($user_detail) {
			if (password_verify($user_password, $user_detail->user_password)) {
				if (($user_detail->user_status == 1) && ($user_detail->user_role == 1)) {
					$session_data = [];
					$session_data['user_id'] = $user_detail->user_id;
					$session_data['user_name'] = $user_detail->user_name;
					$session_data['user_email'] = $user_detail->user_email;
					$session_data['user_role'] = $user_detail->user_role;
					$session_data['user_status'] = $user_detail->user_status;
					$this->session->set_userdata($session_data);
					redirect('admin-dashboard');
				} else {
					$data = [];
					$data['title'] = 'Admin Login';
					$data['error_massage'] = 'User not active';
					$this->load->view('backend/login/login', $data);
				}
			} else {
				$data = [];
				$data['title'] = 'Admin Login';
				$data['error_massage'] = 'Password not match';
				$this->load->view('backend/login/login', $data);
			}
		} else {
			$data = [];
			$data['title'] = 'Admin Login';
			$data['error_massage'] = 'E-mail address invalid';
			$this->load->view('backend/login/login', $data);
		}
	}

	public function adminLogout()
	{
		$this->session->sess_destroy();
		redirect('admin');
	}
}
