<?php 

/*developed by ismarianto putra
  you can visit my site in ismarianto.com
  for more complain anda more information.  
*/
  class Dasboard extends CI_Controller
  {

  	function __construct()
  	{  
      parent::__construct();
      login_access();
      // hak_akses();
      $this->load->model('Dasboard_model'); 
    }

    private function session_id(){
     return $this->session->userdata('id_user'); 
   }

   function index(){ 
    catat_log($this->session->id_user,$_SERVER['REQUEST_URI'],'Akses dasboard web',$_SERVER['REMOTE_ADDR'],$_SERVER['HTTP_USER_AGENT']);
    $x = array ('judul'=>'Selamat datang di halaman administrator');
    $this->template->load('template','dasboard/admin',$x); 
  }  

  function ganti_foto($action=''){
    $foto =$this->db->get_where('login',array('id_user'=>$this->session->userdata('id_user')));

    if($action == 'save'){

      $config['file_name'] ='foto'.time();
      $config['upload_path'] ='assets/img/foto';
      $config['allowed_types'] = 'jpg|png|png';

      $this->upload->initialize($config);
      if($this->upload->do_upload('foto') == TRUE){

       $update = ['foto'=>$this->upload->file_name];
       $this->db->update('login',$update,array('id_user'=>$this->session_id()));
       @unlink('assets/img/foto/'.$foto->row()->foto);

     }else{
      echo $this->upload->display_errors('<div class="alert alert-danger">','</div>');
    } 
  }else{
    $x['judul'] = "edit foto profil";
    $x['data'] = $this->db->get_where('login',array('id_user'=>$this->session_id()));
    $this->template->load('template','dasboard/foto',$x);
  } 
}


function ganti_password($action=''){
  if ($action == 'simpan') {
    $password = $this->input->post('password_baru');
    $data = ['password'=>md5($password)];
    $this->db->update('login',$data,array('id_user'=>$this->session_id()));
  }else{
    $x['data'] =$this->db->get_where('login',array('id_user'=>$this->session_id()));
    $x['judul'] = "Ganti Password";
    $this->template->load('template','dasboard/profil',$x);
  }

}


function select($level='admin'){
  $cek=$this->db->order_by('urutan')
  ->where('aktif','Ya') 
  ->where('position','Bottom') 
  ->where('locate("'.$level.'",level) > 0') 
  ->get('menu');
  echo $cek->num_rows();

}


function logout(){
  $this->session->sess_destroy();
  redirect(base_url('?log=true'));  
}


function page_sc(){
  $cari = $this->input->post('page');
  if ($cari != '') {
   redirect(base_url($cari));
   unset($cari);
 }else{
   redirect(base_url('dasboard?false=search-not-found'));
 }

}

function _404(){
  $x['judul'] = 'Not Found';
  $this->template->load('template','dasboard/404',$x);
}




function backup_db(){
  $this->load->dbutil();
  // Backup your entire database and assign it to a variable
  $backup = $this->dbutil->backup(); 
 // Load the file helper and write the file to your server
  $this->load->helper('file');
  write_file('/assets/backup/data'.date('y-m-d h:i:s').'sql.gz', $backup);
 // Load the download helper and send the file to your desktop
  $this->load->helper('download');
  force_download('mybackup.gz', $backup);
}

}