<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Category extends CI_Controller
{
	function __construct()
	{
		parent:: __construct();
		$this->load->model('category_model');
	}

	public function index()
	{
		$data = [];
		$data['title'] = 'Manage Category';
		$data['category_info'] = $this->category_model->manage_category_info();
		$data['sidebar'] = $this->load->view('backend/include/sidebar', '', true);
		$data['main_content'] = $this->load->view('backend/category/manage_category', $data, true);
		$this->load->view('backend/master', $data);
	}

	public function create_category()
	{
		$data = [];
		$data['title'] = 'Create Category';
		$data['sidebar'] = $this->load->view('backend/include/sidebar', '', true);
		$data['main_content'] = $this->load->view('backend/category/create_category', '', true);
		$this->load->view('backend/master', $data);
	}

	public function store_category()
	{
		$this->form_validation->set_rules('category_name', 'Category Name', 'required|max_length[255]');
		$this->form_validation->set_rules('category_description', 'Category Description', 'required');

		if ($this->form_validation->run()){
			$this->category_model->store_category_info();
			$data = [];
			$data['title'] = 'Create Category';
			$data['success_massage'] = 'Category Created Successfully';
			$data['sidebar'] = $this->load->view('backend/include/sidebar', '', true);
			$data['main_content'] = $this->load->view('backend/category/create_category', $data, true);
			$this->load->view('backend/master', $data);
		}else{
			$this->create_category();
		}
	}
}
