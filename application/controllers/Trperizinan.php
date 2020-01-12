<?php

/*developed by ismarianto putra
  you can visit my site in ismarianto.com
  for more complain anda more information.  
*/

  if (!defined('BASEPATH'))
  	exit('No direct script access allowed');

  class Trperizinan extends CI_Controller
  {
  	function __construct()
  	{
  		parent::__construct();
  		login_access();
  		hak_akses();
  		$this->load->model('Trperizinan_model');
  		$this->load->library('form_validation');   
  		$this->load->library('datatables');
  	}

  	public function index()
  	{
  		$x['judul'] = 'Data : Trperizinan';
  		$this->template->load('template','trperizinan/trperizinan_list',$x);
  	} 
  	
  	public function json() {
  		header('Content-Type: application/json');
  		echo $this->Trperizinan_model->json();
  	}

  	public function detail($id) 
  	{
  		$row = $this->Trperizinan_model->get_by_id($id);
  		if ($row) {
  			$data = array(
  				'id' => $row->id,
  				'n_perizinan' => $row->n_perizinan,
  				'initial' => $row->initial,
  				'c_tarif' => $row->c_tarif,
  				'is_open' => $row->is_open,
  				'v_hari' => $row->v_hari,
  				'v_berlaku_tahun' => $row->v_berlaku_tahun,
  				'v_perizinan' => $row->v_perizinan,
  				'c_foto' => $row->c_foto,
  				'c_keputusan' => $row->c_keputusan,
  				'kode_ijin' => $row->kode_ijin,
  				'id_bidang' => $row->id_bidang,
  				'no_rek' => $row->no_rek,
  				'no_rek_denda' => $row->no_rek_denda,
  				'keterangan' => $row->keterangan,
  				'is_peruntukan' => $row->is_peruntukan,
  				'id_kelompok_ijin' => $row->id_kelompok_ijin,
  				'draft_sk' => $row->draft_sk,
  				'draft_sertifikat' => $row->draft_sertifikat,
  				
  				'judul'=>'Detail :  TRPERIZINAN',
  			);
  			$this->template->load('template','trperizinan/trperizinan_read', $data);
  		} else {
  			$this->session->set_flashdata('message', '<div class="alert alert-warniing fade-in">Data Tidak Di Temukan.</div>');
  			redirect(site_url('trperizinan'));
  		}
  	}

  	public function tambah() 
  	{
  		$data = array(
  			'judul'=>'Tambah Trperizinan',
  			'button' => 'Create',
  			'action' => site_url('trperizinan/tambah_data'),
  			'id' => set_value('id'),
  			'n_perizinan' => set_value('n_perizinan'),
  			'initial' => set_value('initial'),
  			'c_tarif' => set_value('c_tarif'),
  			'is_open' => set_value('is_open'),
  			'v_hari' => set_value('v_hari'),
  			'v_berlaku_tahun' => set_value('v_berlaku_tahun'),
  			'v_perizinan' => set_value('v_perizinan'),
  			'c_foto' => set_value('c_foto'),
  			'c_keputusan' => set_value('c_keputusan'),
  			'kode_ijin' => set_value('kode_ijin'),
  			'id_bidang' => set_value('id_bidang'),
  			'no_rek' => set_value('no_rek'),
  			'no_rek_denda' => set_value('no_rek_denda'),
  			'keterangan' => set_value('keterangan'),
  			'is_peruntukan' => set_value('is_peruntukan'),
  			'id_kelompok_ijin' => set_value('id_kelompok_ijin'),
  			'draft_sk' => set_value('draft_sk'),
  			'draft_sertifikat' => set_value('draft_sertifikat'),
  		);
  		$this->template->load('template','trperizinan/trperizinan_form', $data);
  	}
  	
  	public function tambah_data() 
  	{
  		$this->_rules();

  		if ($this->form_validation->run() == FALSE) {
  			$this->tambah();
  		} else {
  			$data = array(
  				'n_perizinan' => $this->input->post('n_perizinan',TRUE),
  				'initial' => $this->input->post('initial',TRUE),
  				'c_tarif' => $this->input->post('c_tarif',TRUE),
  				'is_open' => $this->input->post('is_open',TRUE),
  				'v_hari' => $this->input->post('v_hari',TRUE),
  				'v_berlaku_tahun' => $this->input->post('v_berlaku_tahun',TRUE),
  				'v_perizinan' => $this->input->post('v_perizinan',TRUE),
  				'c_foto' => $this->input->post('c_foto',TRUE),
  				'c_keputusan' => $this->input->post('c_keputusan',TRUE),
  				'kode_ijin' => $this->input->post('kode_ijin',TRUE),
  				'id_bidang' => $this->input->post('id_bidang',TRUE),
  				'no_rek' => $this->input->post('no_rek',TRUE),
  				'no_rek_denda' => $this->input->post('no_rek_denda',TRUE),
  				'keterangan' => $this->input->post('keterangan',TRUE),
  				'is_peruntukan' => $this->input->post('is_peruntukan',TRUE),
  				'id_kelompok_ijin' => $this->input->post('id_kelompok_ijin',TRUE),
  				'draft_sk' => $this->input->post('draft_sk',TRUE),
  				'draft_sertifikat' => $this->input->post('draft_sertifikat',TRUE),
  			);

  			$this->Trperizinan_model->insert($data);
  			$this->session->set_flashdata('message', '<div class="alert alert-success fade-in"><i class="fa fa-check"></i>Data Berhasil Di Tambahkan.</div>');
  			redirect(site_url('trperizinan'));
  		}
  	}
  	
  	public function edit($id) 
  	{
  		$row = $this->Trperizinan_model->get_by_id($id);

  		if ($row) {
  			$data = array(
  				'judul'=>'Data TRPERIZINAN',
  				'button' => 'Update',
  				'action' => site_url('trperizinan/edit_data'),
  				'id' => set_value('id', $row->id),
  				'n_perizinan' => set_value('n_perizinan', $row->n_perizinan),
  				'initial' => set_value('initial', $row->initial),
  				'c_tarif' => set_value('c_tarif', $row->c_tarif),
  				'is_open' => set_value('is_open', $row->is_open),
  				'v_hari' => set_value('v_hari', $row->v_hari),
  				'v_berlaku_tahun' => set_value('v_berlaku_tahun', $row->v_berlaku_tahun),
  				'v_perizinan' => set_value('v_perizinan', $row->v_perizinan),
  				'c_foto' => set_value('c_foto', $row->c_foto),
  				'c_keputusan' => set_value('c_keputusan', $row->c_keputusan),
  				'kode_ijin' => set_value('kode_ijin', $row->kode_ijin),
  				'id_bidang' => set_value('id_bidang', $row->id_bidang),
  				'no_rek' => set_value('no_rek', $row->no_rek),
  				'no_rek_denda' => set_value('no_rek_denda', $row->no_rek_denda),
  				'keterangan' => set_value('keterangan', $row->keterangan),
  				'is_peruntukan' => set_value('is_peruntukan', $row->is_peruntukan),
  				'id_kelompok_ijin' => set_value('id_kelompok_ijin', $row->id_kelompok_ijin),
  				'draft_sk' => set_value('draft_sk', $row->draft_sk),
  				'draft_sertifikat' => set_value('draft_sertifikat', $row->draft_sertifikat),
  			);
  			$this->template->load('template','trperizinan/trperizinan_form', $data);
  		} else {
  			$this->session->set_flashdata('message', '<div class="alert alert-info fade-in">Data Tidak Di Temukan.</div>');
  			redirect(site_url('trperizinan'));
  		}
  	}
  	
  	public function edit_data() 
  	{
  		$this->_rules();

  		if ($this->form_validation->run() == FALSE) {
  			$this->edit($this->input->post('id', TRUE));
  		} else {
  			$data = array(
  				'n_perizinan' => $this->input->post('n_perizinan',TRUE),
  				'initial' => $this->input->post('initial',TRUE),
  				'c_tarif' => $this->input->post('c_tarif',TRUE),
  				'is_open' => $this->input->post('is_open',TRUE),
  				'v_hari' => $this->input->post('v_hari',TRUE),
  				'v_berlaku_tahun' => $this->input->post('v_berlaku_tahun',TRUE),
  				'v_perizinan' => $this->input->post('v_perizinan',TRUE),
  				'c_foto' => $this->input->post('c_foto',TRUE),
  				'c_keputusan' => $this->input->post('c_keputusan',TRUE),
  				'kode_ijin' => $this->input->post('kode_ijin',TRUE),
  				'id_bidang' => $this->input->post('id_bidang',TRUE),
  				'no_rek' => $this->input->post('no_rek',TRUE),
  				'no_rek_denda' => $this->input->post('no_rek_denda',TRUE),
  				'keterangan' => $this->input->post('keterangan',TRUE),
  				'is_peruntukan' => $this->input->post('is_peruntukan',TRUE),
  				'id_kelompok_ijin' => $this->input->post('id_kelompok_ijin',TRUE),
  				'draft_sk' => $this->input->post('draft_sk',TRUE),
  				'draft_sertifikat' => $this->input->post('draft_sertifikat',TRUE),
  			);

  			$this->Trperizinan_model->update($this->input->post('id', TRUE), $data);
  			$this->session->set_flashdata('message', '<div class="alert alert-success fade-in"><i class="fa fa-check"></i>Edit Data Berhasil.</div>');
  			redirect(site_url('trperizinan'));
  		}
  	}
  	
  	public function hapus($id) 
  	{
  		$row = $this->Trperizinan_model->get_by_id($id);

  		if ($row) {
  			$this->Trperizinan_model->delete($id);
  			$this->session->set_flashdata('message', '<div class="alert alert-danger fade-in"><i class="fa fa-check"></i>Data Berhasil Di Hapus</div>');
  			redirect(site_url('trperizinan'));
  		} else {
  			$this->session->set_flashdata('message', '<div class="alert alert-warniing fade-in">Ops Something Went Wrong Please Contact Administrator.</div>');
  			redirect(site_url('trperizinan'));
  		}
  	}

  	public function _rules() 
  	{
  		$this->form_validation->set_rules('n_perizinan', 'n perizinan', 'trim|required');
  		$this->form_validation->set_rules('initial', 'initial', 'trim|required');
  		$this->form_validation->set_rules('c_tarif', 'c tarif', 'trim|required');
  		$this->form_validation->set_rules('is_open', 'is open', 'trim|required');
  		$this->form_validation->set_rules('v_hari', 'v hari', 'trim|required');
  		$this->form_validation->set_rules('v_berlaku_tahun', 'v berlaku tahun', 'trim|required');
  		$this->form_validation->set_rules('v_perizinan', 'v perizinan', 'trim|required');
  		$this->form_validation->set_rules('c_foto', 'c foto', 'trim|required');
  		$this->form_validation->set_rules('c_keputusan', 'c keputusan', 'trim|required');
  		$this->form_validation->set_rules('kode_ijin', 'kode ijin', 'trim|required');
  		$this->form_validation->set_rules('id_bidang', 'id bidang', 'trim|required');
  		$this->form_validation->set_rules('no_rek', 'no rek', 'trim|required');
  		$this->form_validation->set_rules('no_rek_denda', 'no rek denda', 'trim|required');
  		$this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required');
  		$this->form_validation->set_rules('is_peruntukan', 'is peruntukan', 'trim|required');
  		$this->form_validation->set_rules('id_kelompok_ijin', 'id kelompok ijin', 'trim|required');
  		$this->form_validation->set_rules('draft_sk', 'draft sk', 'trim|required');
  		$this->form_validation->set_rules('draft_sertifikat', 'draft sertifikat', 'trim|required');

  		$this->form_validation->set_rules('id', 'id', 'trim');
  		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
  	}

  }

