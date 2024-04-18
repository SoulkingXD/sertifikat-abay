<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
{
    public function index()   
    {
        $data['user'] = $this->db->get_where('user ', ['username' => $this->session->userdata('username')])->row_array();
        
        $this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('template/sidebar');
		$this->load->view('admin/vw_home', $data);
		$this->load->view('template/footer');
        

    }
}