<?php 

/**
 * 
 */
class Piutang_kecamatan extends CI_model
{
	
	function __construct()
	{
		if($this->session->level == 'admin'){
			$this->load->model('Piutang_kecamatan_model');  
		}else{
			redirect(base_url());
			exit();
		} 
		parent::__construct();
	}
	function index()
	{
		

	}
}