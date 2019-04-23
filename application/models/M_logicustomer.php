<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_logincustomer extends CI_Model {

    public function findUser() {
            $scrm = array(
                "email" => $this->input->post('email'),
                "password"  => $this->input->post('password')
            );
            
            $this->db->where($data);
            $result = $this->db->get('Customer');
            return $result->result_array();

    }
}