<?php 

 /**
  * 
  */
 class Lupa_password extends CI_controller
 {
 	
 	function __construct()
 	{ 
    parent::__construct();
  }

  function index(){
    $data = array('judul'=>'Lupa Password Login');  
    $this->load->view('Forget_password',$data);

  }
  
  function cek_email(){
    if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
      $email = $this->input->post('email');
      $cek = $this->db->get_where('login',array('email'=>$email));
      if($cek->num_rows() > 0){
       $this->load->library('email');
       $this->email
       ->from('info@sistem_arsip.com', 'Example Inc.')
       ->to($email)
       ->subject('Informasi Perubahan Password Anda Adalah.')
       ->message('Hello, We are <strong>Example Inc.</strong>')
       ->set_mailtype('html');
       $this->email->send(); 

     }else{
      echo "n"; 
    }

  }else{
    show_404();
  }

}


}