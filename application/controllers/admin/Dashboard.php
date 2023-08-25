<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function dashboard()
	{
		$this->load->view('home/dashboard');
	}
	public function data_produksi()
	{
		$this->load->view('home/data_produksi');
	}
	public function data_delivery()
	{
		$this->load->view('home/data_delivery');
	}
	public function status_part()
	{
		$this->load->view('home/status_part');
	}
	public function edit_data()
	{
		$this->load->view('home/edit_data');
	}

}