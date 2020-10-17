<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function index()
	{
		$data['title'] = 'Dashboard';
		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar');
		$this->load->view('admin/dashboard');
		$this->load->view('layout/footer');
	}
}
