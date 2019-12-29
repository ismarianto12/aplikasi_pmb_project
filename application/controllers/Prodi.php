<?php

/*developed by ismarianto putra
  you can visit my site in ismarianto.com
  for more complain anda more information.  
*/

  if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Prodi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        login_access();
        hak_akses();
        $this->load->model('Prodi_model');
        $this->load->library('form_validation');   
        $this->load->library('datatables');
    }

    public function index()
    {
       $x['judul'] = 'Data : Prodi';
       $this->template->load('template','prodi/prodi_list',$x);
   } 
   
   public function json() {
    header('Content-Type: application/json');
    echo $this->Prodi_model->json();
}

public function detail($id) 
{
    $row = $this->Prodi_model->get_by_id($id);
    if ($row) {
        $data = array(
          'id_prodi' => $row->id_prodi,
          'nama_prodi' => $row->nama_prodi,
          'kode_prodi' => $row->kode_prodi,
          'akreditasi' => $row->akreditasi,
          'jenjang' => $row->jenjang,
          
          'judul'=>'Detail :  PRODI',
      );
        $this->template->load('template','prodi/prodi_read', $data);
    } else {
        $this->session->set_flashdata('message', '<div class="alert alert-warniing fade-in">Data Tidak Di Temukan.</div>');
        redirect(site_url('prodi'));
    }
}

public function tambah() 
{
    $data = array(
        'judul'=>'Tambah Prodi',
        'button' => 'Create',
        'action' => site_url('prodi/tambah_data'),
        'id_prodi' => set_value('id_prodi'),
        'nama_prodi' => set_value('nama_prodi'),
        'kode_prodi' => set_value('kode_prodi'),
        'akreditasi' => set_value('akreditasi'),
        'jenjang' => set_value('jenjang'),
    );
    $this->template->load('template','prodi/prodi_form', $data);
}

public function tambah_data() 
{
    $this->_rules();

    if ($this->form_validation->run() == FALSE) {
        $this->tambah();
    } else {
        $data = array(
          'nama_prodi' => $this->input->post('nama_prodi',TRUE),
          'kode_prodi' => $this->input->post('kode_prodi',TRUE),
          'akreditasi' => $this->input->post('akreditasi',TRUE),
          'jenjang' => $this->input->post('jenjang',TRUE),
      );

        $this->Prodi_model->insert($data);
        $this->session->set_flashdata('message', '<div class="alert alert-success fade-in"><i class="fa fa-check"></i>Data Berhasil Di Tambahkan.</div>');
        redirect(site_url('prodi'));
    }
}

public function edit($id) 
{
    $row = $this->Prodi_model->get_by_id($id);

    if ($row) {
        $data = array(
            'judul'=>'Data PRODI',
            'button' => 'Update',
            'action' => site_url('prodi/edit_data'),
            'id_prodi' => set_value('id_prodi', $row->id_prodi),
            'nama_prodi' => set_value('nama_prodi', $row->nama_prodi),
            'kode_prodi' => set_value('kode_prodi', $row->kode_prodi),
            'akreditasi' => set_value('akreditasi', $row->akreditasi),
            'jenjang' => set_value('jenjang', $row->jenjang),
        );
        $this->template->load('template','prodi/prodi_form', $data);
    } else {
        $this->session->set_flashdata('message', '<div class="alert alert-info fade-in">Data Tidak Di Temukan.</div>');
        redirect(site_url('prodi'));
    }
}

public function edit_data() 
{
    $this->_rules();

    if ($this->form_validation->run() == FALSE) {
        $this->edit($this->input->post('id_prodi', TRUE));
    } else {
        $data = array(
          'nama_prodi' => $this->input->post('nama_prodi',TRUE),
          'kode_prodi' => $this->input->post('kode_prodi',TRUE),
          'akreditasi' => $this->input->post('akreditasi',TRUE),
          'jenjang' => $this->input->post('jenjang',TRUE),
      );

        $this->Prodi_model->update($this->input->post('id_prodi', TRUE), $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success fade-in"><i class="fa fa-check"></i>Edit Data Berhasil.</div>');
        redirect(site_url('prodi'));
    }
}

public function hapus($id) 
{
    $row = $this->Prodi_model->get_by_id($id);

    if ($row) {
        $this->Prodi_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger fade-in"><i class="fa fa-check"></i>Data Berhasil Di Hapus</div>');
        redirect(site_url('prodi'));
    } else {
        $this->session->set_flashdata('message', '<div class="alert alert-warniing fade-in">Ops Something Went Wrong Please Contact Administrator.</div>');
        redirect(site_url('prodi'));
    }
}

public function _rules() 
{
	$this->form_validation->set_rules('nama_prodi', 'nama prodi', 'trim|required');
	$this->form_validation->set_rules('kode_prodi', 'kode prodi', 'trim|required');
	$this->form_validation->set_rules('akreditasi', 'akreditasi', 'trim|required');
	$this->form_validation->set_rules('jenjang', 'jenjang', 'trim|required');

	$this->form_validation->set_rules('id_prodi', 'id_prodi', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
}

}

