<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');
class Aplikan extends CI_Controller
{
 function __construct()
 {
  parent::__construct();
  login_access();
  hak_akses();
  $this->load->model('Depan_model');
  $this->load->model('Aplikan_model');
  $this->load->library('form_validation');   
  $this->load->library('datatables');
}

public function index()
{
  $x['judul'] = 'Data : Aplikan';
  $x['tahun_akademik'] = $this->Aplikan_model->tahun_akademik();
  $this->template->load('template','aplikan/aplikan_list',$x);
} 

public function json() {
  header('Content-Type: application/json');
  echo $this->Aplikan_model->json();
}

public function tambah() 
{
  $data = array(
   'judul'=>'Tambah Aplikan',
   'button' => 'Create',
   'action' => site_url('aplikan/tambah_data'),
   'id_aplikan' => set_value('id_aplikan'),
   'id_periode' => set_value('id_periode'),
   'no_pendaftaran' => set_value('no_pendaftaran'),
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
  $this->template->load('template','aplikan/aplikan_form', $data);
}


function get_detail_confirm()
{
  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
   $no_pendaftaran = $this->input->post('no_pendaftaran');
   $data =  $this->Aplikan_model->get_detail_pembayaran($no_pendaftaran);
   if($data->num_rows() > 0):
     $sql_rows = $data->row_array();
     $encode = array('no_pendaftaran'=>$sql_rows['no_pendaftaran'],
      'jumlah'=>'Rp.'.number_format($sql_rows['jumlah'],0,0,'.'),
      'file_pembayaran'=>$sql_rows['file_pembayaran'],
      'tanggal'=>tgl_indonesia($sql_rows['tanggal']),
    );
     echo json_encode($encode); 
   else:
         //$sql_rows = $data->row();
     $encode = array('no_pendaftaran'=>'',
      'jumlah'=>'',
      'file_pembayaran'=>'',
      'tanggal'=>'',
    );
     echo json_encode($encode); 
   endif; 
 } 
}

function confirm(){
 if($_SERVER["REQUEST_METHOD"] == "POST"):
   $no_pendaftaran = $this->input->post('no_pendaftaran');
   if($this->input->post('periksa') == 'Y'){ 
     /*salin data dari table aplikan ke table pmb*/
     $data_aplikan = $this->db->get_where('aplikan',array('no_pendaftaran'=>$no_pendaftaran));
     if($data_aplikan->num_rows() > 0){
      $row = $data_aplikan->row();
      /*data table update*/
      $data_update = array ('pembayaran'=>'Y');
      $this->db->update('aplikan',$data_update,array('no_pendaftaran'=>$no_pendaftaran)); 
      $cek_pmb = $this->db->get_where('pmb',array('no_pendaftaran'=>$this->input->post('no_pendaftaran')));
      if($cek_pmb->num_rows() > 0):
        $data_pmb = array(
         'id_periode'=>$row->id_periode,
         'no_pendaftaran'=>$row->no_pendaftaran,
         'nama'=>$row->nama,
         'kelamin'=>$row->kelamin,
         'tempatlahir'=>$row->tempatlahir,
         'alamat'=>$row->alamat,
         'kota'=>$row->kota,
         'propinsi'=>$row->propinsi,
         'kodePos'=>$row->kodePos,
         'rt'=>$row->rt,
         'rW'=>$row->rW,
         'telepon'=>$row->telepon,
         'email'=>$row->email,
         'no_hp'=>$row->no_hp,
         'jenisSekolah'=>$row->jenisSekolah,
         'namaSekolah'=>$row->namaSekolah,
         'jurusanSekolah'=>$row->jurusanSekolah,
         'tahunLulus'=>$row->tahunLulus,
         'nilaiSekolah'=>$row->nilaiSekolah,
         'tgl_daftar'=>$row->tgl_daftar,
         'prodi_1'=>$row->prodi_1,
         'prodi_2'=>$row->prodi_2,
         'prodi_3'=>$row->prodi_3,
         'pembayaran'=>$row->pembayaran, 
       ); 
        $this->db->update('pmb',$data_pmb,array('no_pendaftaran'=>$row->no_pendaftaran));
        $this->db->update('aplikan',array('set_pmb'=>'Y'),array('no_pendaftaran'=>$this->input->post('no_pendaftaran')));

      else:
        $data_pmb = array(
         'id_periode'=>$row->id_periode,
         'no_pendaftaran'=>$row->no_pendaftaran,
         'nama'=>$row->nama,
         'password'=>md5(123),
         'kelamin'=>$row->kelamin,
         'tempatlahir'=>$row->tempatlahir,
         'alamat'=>$row->alamat,
         'kota'=>$row->kota,
         'propinsi'=>$row->propinsi,
         'kodePos'=>$row->kodePos,
         'rt'=>$row->rt,
         'rW'=>$row->rW,
         'telepon'=>$row->telepon,
         'email'=>$row->email,
         'no_hp'=>$row->no_hp,
         'jenisSekolah'=>$row->jenisSekolah,
         'namaSekolah'=>$row->namaSekolah,
         'jurusanSekolah'=>$row->jurusanSekolah,
         'tahunLulus'=>$row->tahunLulus,
         'nilaiSekolah'=>$row->nilaiSekolah,
         'tgl_daftar'=>$row->tgl_daftar,
         'prodi_1'=>$row->prodi_1,
         'prodi_2'=>$row->prodi_2,
         'prodi_3'=>$row->prodi_3,
         'pembayaran'=>$row->pembayaran, 
       ); 
        $this->db->insert('pmb',$data_pmb); 
        $this->db->update('aplikan',array('set_pmb'=>'Y'),array('no_pendaftaran'=>$this->input->post('no_pendaftaran')));
      /*email property*/
     
     $from = '';   
     $to= $row->email; 
     $subject='Informasi Persetujuan Formulir ';
     $message='Selamat informasi pembelian formulir berhasil di verifikasi silahkan gunakan akes berikut untuk <br />Untuk login melengkapi informasi biodata PMB, Username :'.$row->no_pendaftaran.' Password : 123';   
      /*end email properti*/        
     send_email($from='',$to,$subject,$message); 
     endif;   
    } 
  }elseif($this->input->post('konfirmasi') == 'N'){ 
    /*no action to add system*/  
  }  
endif; 
} 

function detail($id)
{
  if($id !=''){
    $x = array('sql'=>$this->Depan_model->detail_data_aplikan($id),
      'judul'=>'Detail pendaftaran pmb gelombang'.nama_gelombang('tahun_akademik')
    );
    $this->template->load('template','aplikan/detail_aplikan',$x);
  }else{
   echo show_404();
   exit();
 } 
}

public function hapus($id) 
{
  $row = $this->Aplikan_model->get_by_id($id);
  if ($row) {
   $this->Aplikan_model->delete($id);
   $this->session->set_flashdata('message', '<div class="alert alert-danger fade-in"><i class="fa fa-check"></i>Data Berhasil Di Hapus</div>');
   redirect(site_url('aplikan'));
 } else {
   $this->session->set_flashdata('message', '<div class="alert alert-warniing fade-in">Ops Something Went Wrong Please Contact Administrator.</div>');
   redirect(site_url('aplikan'));
 }
}



/*send email to aplican*/
private function send_email($from='',$to,$subject,$message){ 
  $config = array(
    'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
    'smtp_host' => 'smtp.example.com', 
    'smtp_port' => 465,
    'smtp_user' => 'no-reply@example.com
    ',
    'smtp_pass' => '12345!',
    'smtp_crypto' => 'ssl', //can be 'ssl' or 'tls' for example
    'mailtype' => 'text', //plaintext 'text' mails or 'html'
    'smtp_timeout' => '4', //in seconds
    'charset' => 'iso-8859-1',
    'wordwrap' => TRUE
  );
   
    $this->load->library('email');
    $from = $config['protocol'];
    $to = $this->input->post('to');
    $subject = $this->input->post('subject');
    $message = $this->input->post('message');

    $this->email->set_newline("\r\n");
    $this->email->from($from);
    $this->email->to($to);
    $this->email->subject($subject);
    $this->email->message($message);

    // if ($this->email->send()) {
    //   echo 'Your Email has successfully been sent.';
    // } else {
    //   show_error($this->email->print_debugger());
    // }  
}

/*end function aadd from class*/
}

