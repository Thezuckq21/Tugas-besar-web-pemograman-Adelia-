<?php
defined('BASEPATH') or exit('No direct script access allowed');

class scrm extends CI_Controller
{
	public function index()
	{
		$this->load->view('v_index');
		$this->load->view('format/v_footer');
	}

	public function registrasi()
	{
		$this->load->view('v_registrasi');
		$this->load->view('format/v_footer');
	}

	public function ongkir()
	{
		$this->load->view('v_ongkir');
		$this->load->view('format/v_footer');
	}
	public function service()
	{
		$this->load->view('v_service');
		$this->load->view('format/v_footer');
	}

	public function short()
	{
		$this->load->view('v_short');
		$this->load->view('format/v_footer');
	}
	public function jaket()
	{
		$this->load->view('v_jaket');
		$this->load->view('format/v_footer');
	}
		public function tshirt()
	{
		$this->load->view('v_tshirt');
		$this->load->view('format/v_footer');
	}
		public function login()
	{
		$this->load->view('v_login');
	}
}
