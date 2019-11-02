<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{

	function __construct()
	{
		parent:: __construct();
		$this->load->model('admin_model');
		if (!isset($this->session->user_id) && ($this->session->user_status !== 1)){
			if (!isset($this->session->user_role)){
				redirect('admin');
			}
		}
	}

	public function index()
	{
		$data = [];
		$data['title'] = 'Dashboard';
		$data['sidebar'] = $this->load->view('backend/include/sidebar', '', true);
		$data['main_content'] = $this->load->view('backend/home/home', '', true);
		$this->load->view('backend/master', $data);
	}

	public function admin_register_from_show()
	{
		$data = [];
		$data['title'] = 'Register Admin';
		$data['sidebar'] = $this->load->view('backend/include/sidebar', '', true);
		$data['main_content'] = $this->load->view('backend/admin/admin_register', '', true);
		$this->load->view('backend/master', $data);
	}

	public function admin_register_info_save()
	{
		$this->form_validation->set_rules('user_name', 'User Name', 'required|max_length[255]');
		$this->form_validation->set_rules('user_email', 'E-mail address', 'required|max_length[255]|is_unique[tbl_user.user_email]');
		$this->form_validation->set_rules('user_password', 'Password', 'required|min_length[8]');
		$this->form_validation->set_rules('confirm_password', 'Password Confirmation', 'required|matches[user_password]');

		if ($this->form_validation->run()){
			$this->admin_model->admin_register_info();
			$data = [];
			$data['title'] = 'Register Admin';
			$data['success_massage'] = 'User Registration Successfully';
			$data['sidebar'] = $this->load->view('backend/include/sidebar', '', true);
			$data['main_content'] = $this->load->view('backend/admin/admin_register', $data, true);
			$this->load->view('backend/master', $data);
		}else{
			$this->admin_register_from_show();
		}
	}
}
