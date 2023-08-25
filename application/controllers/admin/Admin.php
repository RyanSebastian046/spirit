<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Mdata_produksi'); // Load model

        $this->load->model('Mdata_delivery'); // Load model
    }

	public function dashboard()
	{
		$this->load->view('admin/dashboard');
	}
	public function data_produksi()
	{
		$data['records'] = $this->Mdata_produksi->get_data(); // Panggil method model
		$this->load->view('admin/data_produksi', $data);
	}
	public function data_delivery()
	{
		$data['records'] = $this->Mdata_delivery->get_data(); // Panggil method model
		$this->load->view('admin/data_delivery', $data);
	}
	public function status_part()
	{
		$this->load->view('admin/status_part');
	}
	public function edit_data()
	{
		$this->load->view('admin/edit_data');
	}

}