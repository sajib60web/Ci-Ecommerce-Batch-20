<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	function __construct() {
		parent::__construct();
//		$this->load->helper(form);
	}

	public function index()
	{
		$data = [];
		$data['title'] = 'Home';
		$data['slider'] = $this->load->view('frontend/include/slider', '', true);
		$data['header'] = $this->load->view('frontend/include/header', '', true);
		$data['footer'] = $this->load->view('frontend/include/footer', '', true);
		$data['left_sidebar'] = $this->load->view('frontend/include/left_sidebar', '', true);
		$data['home'] = $this->load->view('frontend/home/home', '', true);
		$this->load->view('frontend/master', $data);
	}

	public function cart()
	{
		$data = [];
		$data['slider'] = '';
		$data['title'] = 'Cart';
		$data['header'] = $this->load->view('frontend/include/header', '', true);
		$data['footer'] = $this->load->view('frontend/include/footer', '', true);
		$data['home'] = $this->load->view('frontend/cart/cart', '', true);
		$this->load->view('frontend/master', $data);
	}
}
