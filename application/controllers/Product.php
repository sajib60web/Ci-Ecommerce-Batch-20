<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Product extends CI_Controller
{
	function __construct()
	{
		parent:: __construct();
		$this->load->model('product_model');
	}

	public function index()
	{
		$data = [];
		$data['title'] = 'Manage Product';
//		$data['category_info'] = $this->product_model->manage_product_info();
		$data['sidebar'] = $this->load->view('backend/include/sidebar', '', true);
		$data['main_content'] = $this->load->view('backend/product/manage_product', '', true);
		$this->load->view('backend/master', $data);
	}

	public function create_product()
	{
		$data = [];
		$data['title'] = 'Create Category';
		$data['sidebar'] = $this->load->view('backend/include/sidebar', '', true);
		$data['main_content'] = $this->load->view('backend/product/create_product', '', true);
		$this->load->view('backend/master', $data);
	}

	public function store_product()
	{
		$this->form_validation->set_rules('category_name', 'Category Name', 'required|max_length[255]');
		$this->form_validation->set_rules('category_description', 'Category Description', 'required');

		if ($this->form_validation->run()){
			$this->category_model->store_category_info();
			$data = [];
			$data['title'] = 'Create Product';
			$data['success_massage'] = 'Category Created Successfully';
			$data['sidebar'] = $this->load->view('backend/include/sidebar', '', true);
			$data['main_content'] = $this->load->view('backend/category/create_category', $data, true);
			$this->load->view('backend/master', $data);
		}else{
			$this->create_product();
		}
	}
}
