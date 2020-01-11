<?php

/*developed by ismarianto putra
  you can visit my site in ismarianto.com
  for more complain anda more information.  
*/

  if (!defined('BASEPATH'))
    exit('No direct script access allowed');

  class Batas_bayar extends CI_Controller
  {
    function __construct()
    {
      parent::__construct();
      login_access();
      hak_akses();
      $this->load->model('Batas_bayar_model');
      $this->load->library('form_validation');   
      $this->load->library('datatables');
    }

    public function index()
    {
     $x['judul'] = 'Data : Batas bayar';
     $x['tahun_akademik'] = $this->db->get('periode');
     $this->template->load('template','batas_bayar/batas_bayar_list',$x);
   }  
   public function json() {
    header('Content-Type: application/json');
    echo $this->Batas_bayar_model->json();
  }

  public function detail($id) 
  {
    $row = $this->Batas_bayar_model->get_by_id($id);
    if ($row) {
      $data = array(
        'id_batas' => $row->id_batas,
        'id_periode' => $row->id_periode,
        'program' => $row->program,
        'tahun_mulai' => $row->tahun_mulai,
        'batas_' => $row->batas_,

        'judul'=>'Detail :  BATAS PEMBAYARAN',
      );
      $this->template->load('template','batas_bayar/batas_bayar_read', $data);
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-warniing fade-in">Data Tidak Di Temukan.</div>');
      redirect(site_url('batas_bayar'));
    }
  }

  public function tambah() 
  {
    //if ($_SERVER["REQUEST_METHOD"] == 'POST') {
     $data = array(
      'judul'=>'Tambah Batas bayar',
      'button' => 'Create',
      'tahun_akademik'=>$this->db->get('periode'),
      'action' => site_url('batas_bayar/tambah_data'),
      'id_batas' => set_value('id_batas'),
      'id_periode' => set_value('id_periode'),
      'program' => set_value('program'),
      'tahun_mulai' => set_value('tahun_mulai'),
      'batas_' => set_value('batas_'),
    );
    $this->load->view('batas_bayar/batas_bayar_form', $data);
  // }
  }

  public function tambah_data() 
  {
     
     $data = array(
        'id_periode' => $this->input->post('id_periode',TRUE),
        'program' => $this->input->post('program',TRUE),
        'tahun_mulai' => $this->input->post('tahun_mulai',TRUE),
        'batas_' => $this->input->post('batas_',TRUE),
      );
     $this->Batas_bayar_model->insert($data);
     $output = array(
      'status' => 22
    );
     echo json_encode($output);            
 
  }

  public function edit($id) 
  {
    $row = $this->Batas_bayar_model->get_by_id($id);

    if ($row) {
      $data = array(
        'judul'=>'EDIT BATAS BAYAR',
        'button' => 'Update',
        'tahun_akademik'=>$this->db->get('periode'),
        'action' => site_url('batas_bayar/edit_data'),
        'id_batas' => set_value('id_batas', $row->id_batas),
        'id_periode' => set_value('id_periode', $row->id_periode),
        'program' => set_value('program', $row->program),
        'tahun_mulai' => set_value('tahun_mulai', $row->tahun_mulai),
        'batas_' => set_value('batas_', $row->batas_),
      );
      $this->load->view('batas_bayar/batas_bayar_form', $data);
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-info fade-in">Data Tidak Di Temukan.</div>');
      redirect(site_url('batas_bayar'));
    }
  }

  public function edit_data() 
  { 
     $data = array(
        'id_periode' => $this->input->post('id_periode',TRUE),
        'program' => $this->input->post('program',TRUE),
        'tahun_mulai' => $this->input->post('tahun_mulai',TRUE),
        'batas_' => $this->input->post('batas_',TRUE),
      ); 
      $this->Batas_bayar_model->update($this->input->post('id_batas', TRUE), $data); 

      $output = array(
        'status' => 22
      );
      echo json_encode($output);    
  }

  public function hapus() 
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $id = $this->input->post('id_batas');   
      $this->db->delete('batas_bayar',array('id_batas'=>$id)); 
    }
  } 
  public function _rules() 
  {
   $this->form_validation->set_rules('id_periode', 'id periode', 'trim|required');
   $this->form_validation->set_rules('program', 'program', 'trim|required');
   $this->form_validation->set_rules('tahun_mulai', 'tahun mulai', 'trim|required');
   $this->form_validation->set_rules('batas_', 'batas ', 'trim|required');

   $this->form_validation->set_rules('id_batas', 'id_batas', 'trim');
   $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
 }

}

