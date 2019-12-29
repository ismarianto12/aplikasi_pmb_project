<?php
   
  if (!defined('BASEPATH'))
    exit('No direct script access allowed');

  class Histori extends CI_Controller
  {
    function __construct()
    {
      parent::__construct();
      login_access();

      $this->load->model('Histori_model');
      $this->load->library('form_validation');   
      $this->load->library('datatables');
    }

    public function index()
    {
     $x['judul'] = 'Histroi akses system.';
     $this->template->load('template','histori/histori_list',$x);
   } 
   
   public function json() {
    header('Content-Type: application/json');
    echo $this->Histori_model->json();
  }

  public function detail($id) 
  {
    $row = $this->Histori_model->get_by_id($id);
    if ($row) {
      $data = array(
        'id_histori' => $row->id_histori,
        'id_user' => $row->id_user,
        'url' => $row->url,
        'aktivitasi' => $row->aktivitasi,
        'tanggal' => $row->tanggal,
        'ip_address' => $row->ip_address,
        'browser' => $row->browser, 
        'judul'=>'Histori akses log',
      );
      $this->template->load('template','histori/histori_read', $data);
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-warniing fade-in">Data Tidak Di Temukan.</div>');
      redirect(site_url('histori'));
    }
  }
 

}

