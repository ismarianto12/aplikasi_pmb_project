<?php

/*developed by ismarianto putra
  you can visit my site in ismarianto.com
  for more complain anda more information.  
*/

  if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Biaya_kuliah extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        login_access();
        hak_akses();
        $this->load->model('Biaya_kuliah_model');
        $this->load->library('form_validation');   
        $this->load->library('datatables');
    }

    public function index()
    {
       $x['judul'] = 'Data : Biaya kuliah';
       $this->template->load('template','biaya_kuliah/biaya_kuliah_list',$x);
   } 
   
   public function json() {
    header('Content-Type: application/json');
    echo $this->Biaya_kuliah_model->json();
}

public function detail($id) 
{
    $row = $this->Biaya_kuliah_model->get_by_id($id);
    if ($row) {
        $data = array(
          'id_biaya' => $row->id_biaya,
          'id_prodi' => $row->id_prodi,
          'jumlah' => $row->jumlah,
          
          'judul'=>'Detail :  BIAYA_KULIAH',
      );
        $this->template->load('template','biaya_kuliah/biaya_kuliah_read', $data);
    } else {
        $this->session->set_flashdata('message', '<div class="alert alert-warniing fade-in">Data Tidak Di Temukan.</div>');
        redirect(site_url('biaya_kuliah'));
    }
}

public function tambah() 
{
    $data = array(
        'judul'=>'Tambah Biaya kuliah',
        'button' => 'Create',
        'action' => site_url('biaya_kuliah/tambah_data'),
        'id_biaya' => set_value('id_biaya'),
        'id_prodi' => set_value('id_prodi'),
        'jumlah' => set_value('jumlah'),
    );
    $this->template->load('template','biaya_kuliah/biaya_kuliah_form', $data);
}

public function tambah_data() 
{
    $this->_rules();

    if ($this->form_validation->run() == FALSE) {
        $this->tambah();
    } else {
        $data = array(
          'id_prodi' => $this->input->post('id_prodi',TRUE),
          'jumlah' => $this->input->post('jumlah',TRUE),
      );

        $this->Biaya_kuliah_model->insert($data);
        $this->session->set_flashdata('message', '<div class="alert alert-success fade-in"><i class="fa fa-check"></i>Data Berhasil Di Tambahkan.</div>');
        redirect(site_url('biaya_kuliah'));
    }
}

public function edit($id) 
{
    $row = $this->Biaya_kuliah_model->get_by_id($id);

    if ($row) {
        $data = array(
            'judul'=>'Data BIAYA_KULIAH',
            'button' => 'Update',
            'action' => site_url('biaya_kuliah/edit_data'),
            'id_biaya' => set_value('id_biaya', $row->id_biaya),
            'id_prodi' => set_value('id_prodi', $row->id_prodi),
            'jumlah' => set_value('jumlah', $row->jumlah),
        );
        $this->template->load('template','biaya_kuliah/biaya_kuliah_form', $data);
    } else {
        $this->session->set_flashdata('message', '<div class="alert alert-info fade-in">Data Tidak Di Temukan.</div>');
        redirect(site_url('biaya_kuliah'));
    }
}

public function edit_data() 
{
    $this->_rules();

    if ($this->form_validation->run() == FALSE) {
        $this->edit($this->input->post('id_biaya', TRUE));
    } else {
        $data = array(
          'id_prodi' => $this->input->post('id_prodi',TRUE),
          'jumlah' => $this->input->post('jumlah',TRUE),
      );

        $this->Biaya_kuliah_model->update($this->input->post('id_biaya', TRUE), $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success fade-in"><i class="fa fa-check"></i>Edit Data Berhasil.</div>');
        redirect(site_url('biaya_kuliah'));
    }
}

public function hapus($id) 
{
    $row = $this->Biaya_kuliah_model->get_by_id($id);

    if ($row) {
        $this->Biaya_kuliah_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger fade-in"><i class="fa fa-check"></i>Data Berhasil Di Hapus</div>');
        redirect(site_url('biaya_kuliah'));
    } else {
        $this->session->set_flashdata('message', '<div class="alert alert-warniing fade-in">Ops Something Went Wrong Please Contact Administrator.</div>');
        redirect(site_url('biaya_kuliah'));
    }
}

public function _rules() 
{
	$this->form_validation->set_rules('id_prodi', 'id prodi', 'trim|required');
	$this->form_validation->set_rules('jumlah', 'jumlah', 'trim|required');

	$this->form_validation->set_rules('id_biaya', 'id_biaya', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
}

}

