<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{

	public function __construct()
	{
		parent:: __construct();
		$this->load->library('form_validation');
	} 
	public function index()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		
		
		if($this->form_validation->run() == false) {
			$username = $this->input->post('Username');
			$password = $this->input->post('password');
			
			$this->load->view('vw_login');
		} else {
			// validasinya succes
			$this->_login();
		}
	} 


	private function _login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$user = $this->db->get_where('user', ['username' => $username])->row_array();
		
		
		if($user) {	
			
			

			
			if(password_verify($password, $user['password'])) {
				$data = [
					'username' => $user['username'],
					'role_id' => $user['role_id']
				];
				$this->session->set_userdata($data);
				if ($user['role_id'] == 1) {
					redirect('admin');
				} else {
					redirect('user');
				} 
					redirect('user');
				} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			Wrong password!
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
			redirect('auth');
			}

		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			Email is not registered!
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
			redirect('auth');
		}
	}
	
	
	public function registration()
	{
		$this->form_validation->set_rules('username', 'Username', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');
		$this->form_validation->set_rules('fullname', 'Fullname', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim');

		if($this->form_validation->run() == false) {
			$this->load->view('registration');
		}else {
			$data = [
				'username' => htmlspecialchars ($this->input->post('username', true)),
				'password' => password_hash ($this->input->post('password'),
				PASSWORD_DEFAULT),
				'fullname' => htmlspecialchars ($this->input->post('fullname', true)),
				'email' => htmlspecialchars ($this->input->post('email', true)),
				'role_id' => 2

			];
			$this->db->insert('user', $data);
			$this->session->set_flashdata('pesanevent', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
            <strong>Registrasi  Berhasil!</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>');
			redirect('auth');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('role_id');
		
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			You have been logout! 
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
		redirect('auth');
	}
}
