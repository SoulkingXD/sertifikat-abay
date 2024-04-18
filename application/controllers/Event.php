<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_event');
	}

	public function index()
	{
		$data['events_certificates'] = $this->m_event->get_data('events')->result();

		$this->load->view('template/header',);
		$this->load->view('template/navbar');
		$this->load->view('template/sidebar');
		$this->load->view('Admin/event', $data);
		$this->load->view('template/footer');


	}
	public function tambah()
	{
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('template/sidebar');
		$this->load->view('admin/tambah_event');
		$this->load->view('template/footer');


	}

	public function tambah_aksi()
	{

		$this->_rules();
		if($this->form_validation->run() == FALSE){
			$this->tambah();
		}else{
			$data = array(
				'event_name' =>$this->input->post('event_name'),
				'event_date' =>$this->input->post('event_date'),
				'location' =>$this->input->post('location'),
				'organizer' =>$this->input->post('organizer'),
			);
			$this->m_event->tambah_aksi($data, 'events');
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            Data Berhasil DiTambahkan! </div>');
			redirect('event');

		}
	}

	function hapus($id){
		$where = array('event_id' => $id);
		$this->m_event->hapus($where,'events');
		redirect('event');
	}

	
	public function edit($event_id)
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->index();
		} else {
			$data = array(
				'event_id' => $event_id,
				'event_name' => $this->input->post('event_name'),
				'event_date' => $this->input->post('event_date'),
				'location' => $this->input->post('location'),
				'organizer' => $this->input->post('organizer'),
			);

			$this->m_event->update_data($data, 'events');
			$this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Data Event Berhasil Di Ubah!</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>');
			redirect('event');
		}
	}


	public function _rules()
	{
		$this->form_validation->set_rules('event_name', 'event_name', 'required', array());
		$this->form_validation->set_rules('event_date', 'event_date', 'required', array());
		$this->form_validation->set_rules('location', 'location', 'required', array());
		$this->form_validation->set_rules('organizer', 'organizer', 'required', array());
		
	}
}