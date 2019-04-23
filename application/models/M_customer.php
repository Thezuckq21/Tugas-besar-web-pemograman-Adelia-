<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Customer extends CI_Model {

	//COMPLETE ALL FUNCTION IN HERE
	
	public function GetCustomer(){
		$this->db->select('*');
		$this->db->from('customer');
		$query = $this->db->get();
		return $query->result();
	}
	//COMPLETE ALL FUNCTION IN HERE

	//FUNCTION TO DELETE PENGGUNA
	public function hapus_Customer($email)
	{
		$this->db->where('Email',$email);
		$this->db->delete('Customer');
	}

	//FUNCTION TO DELETE EDIT
	public function edit_Customer($email,$data)
	{
		$this->db->where('email',$email);
		$this->db->update('Customer', $data);
	}

	//FUNCTION TO ADD PENGGUNA
	public function tambah_Customer($data)
	{
		$this->db->insert('Customer', $data);
	}


	//FUNCTION TO DELETE KOTA

	public function hapus_kota($kodekota)
	{
		$this->db->where('kodekota',$kodekota);
		$this->db->delete('kota');
	}


	//FUNCTION TO EDIT KOTA
	public function edit_kota($kodekota,$data)
	{
		$this->db->where('kodekota',$kodekota);
		$this->db->update('kota',$data);
	}


	//FUNCTION TO ADD KOTA
	public function tambah_kota($data)
	{
		$this->db->insert('kota', $data);
	}



}
