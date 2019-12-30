<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

  function __construct(){
    parent::__construct();
    if($this->uri->segment(1) == 'welcome' OR $this->uri->segment(1) == 'Welcome'){
      $this->template->load('template_depan','Not_found',array('judul'=>'Halaman tidak ada.'));   
      exit();  
    };
    if ($this->session->userdata('id_user') != '' OR $this->session->userdata('Login') == TRUE) {
      redirect(base_url('dasboard?login=true')); 
      exit();
    };     
    /*load model */
    $this->load->model('Depan_model');
    $this->load->model('Pmb_model');
    $this->load->library('form_validation');   
  } 
  function index()
  { 
    $x = array('judul'=>$this->config->item('judul_utama')); 
    $this->template->load('template_depan','depan/home',$x);   
  } 
  function daftar(){ 
   $data = array(
    'judul'=>'Pendaftaran peserta SPMB.',
    'button' => 'Daftar',
    'data_prodi'=>$this->db->get('prodi'),
    'action' => site_url('insert_data_peserta.aspx'), 
    'id_periode' => set_value('id_periode'),
    'nama' => set_value('nama'),
    'kelamin' => set_value('kelamin'),
    'tempatlahir' => set_value('tempatlahir'),
    'alamat' => set_value('alamat'),
    'kota' => set_value('kota'),
    'propinsi' => set_value('propinsi'),
    'kodePos' => set_value('kodePos'),
    'rt' => set_value('rt'),
    'rW' => set_value('rW'),
    'telepon' => set_value('telepon'),
    'handphone' => set_value('handphone'),
    'email' => set_value('email'),
    'no_hp' => set_value('no_hp'),
    'jenisSekolah' => set_value('jenisSekolah'),
    'namaSekolah' => set_value('namaSekolah'),
    'jurusanSekolah' => set_value('jurusanSekolah'),
    'tahunLulus' => set_value('tahunLulus'),
    'nilaiSekolah' => set_value('nilaiSekolah'),
    'tgl_daftar' => set_value('tgl_daftar'),
    'prodi_1' => set_value('prodi_1'),
    'prodi_2' => set_value('prodi_2'),
    'prodi_3' => set_value('prodi_3'),
    'pembayaran' => set_value('pembayaran'),
  );
   $this->template->load('template_depan','depan/daftar_pmb',$data); 
 }
 /*daftar action*/

 function insert_data_peserta()
 { 
  $this->_rules(); 
  if ($this->form_validation->run() == FALSE) {
   $this->daftar();
  } else {
    $id_periode = nama_gelombang('id_periode'); 
    $nomor_pendaftaran = nomor_pendaftaran();
    $data = array(
      'id_periode'=>$id_periode,
      'no_pendaftaran' => $nomor_pendaftaran,
      'nama' => $this->input->post('nama',TRUE),
      'kelamin' => $this->input->post('kelamin',TRUE),
      'tempatlahir' => $this->input->post('tempatlahir',TRUE),
      'alamat' => $this->input->post('alamat',TRUE),
      'kota' => $this->input->post('kota',TRUE),
      'propinsi' => $this->input->post('propinsi',TRUE),
      'kodePos' => $this->input->post('kodePos',TRUE),
      'rt' => $this->input->post('rt',TRUE),
      'rW' => $this->input->post('rW',TRUE),
      'telepon' => $this->input->post('telepon',TRUE), 
      'email' => $this->input->post('email',TRUE),
      'no_hp' => $this->input->post('no_hp',TRUE),
      'jenisSekolah' => $this->input->post('jenisSekolah',TRUE),
      'namaSekolah' => $this->input->post('namaSekolah',TRUE),
      'jurusanSekolah' => $this->input->post('jurusanSekolah',TRUE),
      'tahunLulus' => $this->input->post('tahunLulus',TRUE),
      'nilaiSekolah' => $this->input->post('nilaiSekolah',TRUE),
      'tgl_daftar' => date('Y-m-d'),
      'prodi_1' => $this->input->post('prodi_1',TRUE),
      'prodi_2' => $this->input->post('prodi_2',TRUE),
      'prodi_3' => $this->input->post('prodi_3',TRUE), 
    ); 
    $this->db->insert('aplikan',$data);
    $this->session->set_flashdata('message', '<div class="alert alert-success fade-in"><i class="fa fa-check"></i>Data Berhasil Di Tambahkan.</div>');
    redirect(site_url('cetak_pendaftaran.aspx/'.$nomor_pendaftaran));
  }   
}

/*end daftar funciton*/

function cetak_data_aplikan($id){
  if($id !=''){
    $x = array('sql'=>$this->Depan_model->detail_data_aplikan($id),
      'judul'=>'Detail pendaftaran pmb gelombang'.nama_gelombang('tahun_akademik')
    );
    $this->load->view('cetak_data_aplikan',$x);
  }else{
   echo show_404();
   exit();
 } 
}

/*data pembayaran formulir*/
function pembayaran_formulir()
{
  $data = array('judul' =>'Pembayaran Formulir pendaftaran');
  $this->template->load('template_depan','depan/pembayaran_formulir',$data); 
} 
/*end pembayaran formulir*/
function pembayaran_formulir_action()
{
 if($_SERVER['REQUEST_METHOD'] == "POST")
 {
   $no_pendaftaran = $this->input->post('no_pendaftaran');
   $cek = $this->db->get_where('aplikan',array('no_pendaftaran'=>$no_pendaftaran)); 
   if($cek->num_rows() > 0): 

   $conf['file_name'] = ' pembayaran_'.time();
   $conf['allowed_types'] = 'pdf|png|jpg';
   $conf['upload_path'] = 'assets/file_pembayaran';
   $this->upload->initialize($conf);
   if($this->upload->do_upload('file_pembayaran'))
   { 
     $data = array ( 
      'no_pendaftaran'=>$this->input->post('no_pendaftaran'),
      'jumlah'=>$this->input->post('jumlah'),
      'file_pembayaran'=>$this->upload->file_name,
      'tanggal'=>date("Y-m-d"),
    ); 
     $this->db->insert('Pembayaran',$data);
     $pesan = array ('pesan'=>'berhasil');
     echo json_encode($pesan);
   }else{
    $pesan = array ('pesan'=>'maaf file yang izinkan cuma pdf dan jpg');
    echo json_encode($pesan);
  } 
else:
  $pesan = array ('pesan'=>'No Pendaftaran Formulir tidak di temukan.');
  echo json_encode($pesan);
endif;
} 
}


function cek_pendaftaran()
{
  $data = array('judul' =>'Check pendaftaran');
  $this->template->load('template_depan','depan/cek_pendaftaran',$data); 
}

function cek_data_pendaftaran()
{
  if($_SERVER['REQUEST_METHOD'] == "POST"):
    $no_pendaftaran = $this->input->post('no_pendaftaran');
    $data = $this->Depan_model->cek_data_pendaftaran($no_pendaftaran)->row_array();
    if($data['pembayaran'] == 'Y'):
      $this->load->view('detail_data_pendaftaran',$x); 
     elseif($data['pembayaran'] == 'N'):
       echo "<div class='alert alert-warning'>Data Formulir anda sedang di proses.</div>";
    else:
      echo "<div class='alert alert-danger'>Maaf nomor formulir tidak di temukan </div>";
    endif;   
  endif;
}

/*login access*/
function login(){
  if ($this->input->post('username') == '' OR $this->input->post('username') == '') {
    redirect(base_url('?login=false'));
  }else{
   $username = $this->input->post('username'); 
   $password = $this->input->post('password');

   $cek = $this->db->limit(1)->get_where('login',array('username'=>$username,'password'=>md5($password)));

   if ($cek->num_rows() > 0) {
    $session = [ 
      'username'=>$cek->row()->username,
      'password'=>$cek->row()->password,
      'nama'=>$cek->row()->nama,
      'id_user'=>$cek->row()->id_user,
      'level'=>$cek->row()->level,
      'login'=>TRUE,
    ];
    $this->session->set_userdata($session);
    echo "y";
  }else{
   echo "n";
 }
}
}

function akses_login()
{
  $x = array('judul'=>'Login Akses System.'); 
  $this->template->load('template_depan','depan/login_form',$x);   
} 
/*validasi pendaftaran user*/

function _rules() 
{  
  $this->form_validation->set_rules('nama', 'nama', 'trim|required');
  $this->form_validation->set_rules('kelamin', 'kelamin', 'trim|required');
  $this->form_validation->set_rules('tempatlahir', 'tempatlahir', 'trim|required');
  $this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
  $this->form_validation->set_rules('kota', 'kota', 'trim|required');
  $this->form_validation->set_rules('propinsi', 'propinsi', 'trim|required');
  $this->form_validation->set_rules('kodePos', 'kodepos', 'trim|required');
  $this->form_validation->set_rules('rt', 'rt', 'trim|required');
  $this->form_validation->set_rules('rW', 'rw', 'trim|required');
  $this->form_validation->set_rules('telepon', 'telepon', 'trim|required'); 
  $this->form_validation->set_rules('email', 'email', 'trim|required'); 
  $this->form_validation->set_rules('jenisSekolah', 'jenissekolah', 'trim|required');
  $this->form_validation->set_rules('namaSekolah', 'namasekolah', 'trim|required');
  $this->form_validation->set_rules('jurusanSekolah', 'jurusansekolah', 'trim|required');
  $this->form_validation->set_rules('tahunLulus', 'tahunlulus', 'trim|required');
  $this->form_validation->set_rules('nilaiSekolah', 'nilaisekolah', 'trim|required');
  $this->form_validation->set_rules('prodi_1', 'prodi 1', 'trim|required');
  $this->form_validation->set_rules('prodi_2', 'prodi 2', 'trim|required');
  $this->form_validation->set_rules('prodi_3', 'prodi 3', 'trim|required'); 
  $this->form_validation->set_rules('id_aplikan', 'id_aplikan', 'trim');
  $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
} 
/*end validasi pendaftaran user*/

function _404(){
  $this->template->load('template_depan','Not_found',array('judul'=>'Halaman tidak ada.'));    
}  

}
