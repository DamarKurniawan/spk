<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->database();
		$this->load->model('admin_model');
		
	}

	public function index()
	{
		//$this->load->view('index');
		$this->load->view('layout/admin_header');
		$this->load->view('login');
		$this->load->view('layout/admin_footer');
	}
}
