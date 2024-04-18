<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Certificate extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_certif');
	}

	public function index()
	{
		$data['certificate'] = $this->m_certif->get_data('certificates')->result();
		$data['event'] = $this->m_certif->get_data('events')->result();
		$data['user'] = $this->m_certif->get_data('user')->result();
		

		
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('template/sidebar');
		$this->load->view('admin/sertifikat', $data);
		$this->load->view('template/footer');


	}

	public function tambah()
	{
		$data['certificate'] = $this->m_certif->get_data('certificates')->result();
		$data['event'] = $this->m_certif->get_data('events')->result();
		$data['user'] = $this->m_certif->get_data('user')->result();
		


		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('template/sidebar');
		$this->load->view('admin/tambah_sertif', $data);
		$this->load->view('template/footer');


	}

	public function tambah_data()
	{

		$this->_rules();
		if($this->form_validation->run() == FALSE){
			$this->index();
		}else{
			$data = array(
				'participant_name' => $this->input->post('participant_name'),
                'event_name' => $this->input->post('event_name'),
                'event_date' => $this->input->post('event_date'),
                'certificate_text' => $this->input->post('certificate_text'),
			);
			$this->m_certif->insert_data($data, 'certificates');
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            Data Berhasil DiTambahkan! </div>');
			redirect('certificate');

		}
	}

	public function edit($certificate_id)
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $data = array(
                'certificate_id' => $certificate_id,
                'participant_name' => $this->input->post('participant_name'),
                'event_name' => $this->input->post('event_name'),
                'event_date' => $this->input->post('event_date'),
                'certificate_text' => $this->input->post('certificate_text'),
            );

            $this->m_certif->update_data($data, 'certificates');
            $this->session->set_flashdata('pesanevent', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Data Sertifikat Berhasil Di Ubah!</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>');
            redirect('certificate');
        }
    }


	public function _rules()
    {
        $this->form_validation->set_rules('participant_name', 'Participant Name', 'required', array(
            'required' => '%s harus diisi !!'
        ));
        $this->form_validation->set_rules('event_name', 'event Name', 'required', array(
            'required' => '%s harus diisi !!'
        ));
        $this->form_validation->set_rules('event_date', 'Event date', 'required', array(
            'required' => '%s harus diisi !!'
        ));
        $this->form_validation->set_rules('certificate_text', 'Certificate text', 'required', array(
            'required' => '%s harus diisi !!'
        ));
    }

	function hapus($id){
		$where = array('certificate_id' => $id);
		$this->m_certif->hapus($where,'certificates');
		redirect('certificate');
	}
}