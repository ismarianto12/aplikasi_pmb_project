<?php

/*developed by ismarianto putra
  you can visit my site in ismarianto.com
  for more complain anda more information.  
*/

  if (!defined('BASEPATH'))
  	exit('No direct script access allowed');

  class Aplikan extends CI_Controller
  {
  	function __construct()
  	{
  		parent::__construct();
  		login_access();
  		hak_akses();
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

  	public function detail($id) 
  	{
  		$row = $this->Aplikan_model->get_by_id($id);
  		if ($row) {
  			$data = array(
  				'id_aplikan' => $row->id_aplikan,
  				'id_periode' => $row->id_periode,
  				'no_pendaftaran' => $row->no_pendaftaran,
  				'nama' => $row->nama,
  				'kelamin' => $row->kelamin,
  				'tempatlahir' => $row->tempatlahir,
  				'alamat' => $row->alamat,
  				'kota' => $row->kota,
  				'propinsi' => $row->propinsi,
  				'kodePos' => $row->kodePos,
  				'rt' => $row->rt,
  				'rW' => $row->rW,
  				'telepon' => $row->telepon,
  				'handphone' => $row->handphone,
  				'email' => $row->email,
  				'no_hp' => $row->no_hp,
  				'jenisSekolah' => $row->jenisSekolah,
  				'namaSekolah' => $row->namaSekolah,
  				'jurusanSekolah' => $row->jurusanSekolah,
  				'tahunLulus' => $row->tahunLulus,
  				'nilaiSekolah' => $row->nilaiSekolah,
  				'tgl_daftar' => $row->tgl_daftar,
  				'prodi_1' => $row->prodi_1,
  				'prodi_2' => $row->prodi_2,
  				'prodi_3' => $row->prodi_3,
  				'pembayaran' => $row->pembayaran,

  				'judul'=>'Detail :  APLIKAN',
  			);
  			$this->template->load('template','aplikan/aplikan_read', $data);
  		} else {
  			$this->session->set_flashdata('message', '<div class="alert alert-warniing fade-in">Data Tidak Di Temukan.</div>');
  			redirect(site_url('aplikan'));
  		}
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

  	public function tambah_data() 
  	{
  		$this->_rules();

  		if ($this->form_validation->run() == FALSE) {
  			$this->tambah();
  		} else {
  			$data = array(
  				'id_periode' => $this->input->post('id_periode',TRUE),
  				'no_pendaftaran' => $this->input->post('no_pendaftaran',TRUE),
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
  				'handphone' => $this->input->post('handphone',TRUE),
  				'email' => $this->input->post('email',TRUE),
  				'no_hp' => $this->input->post('no_hp',TRUE),
  				'jenisSekolah' => $this->input->post('jenisSekolah',TRUE),
  				'namaSekolah' => $this->input->post('namaSekolah',TRUE),
  				'jurusanSekolah' => $this->input->post('jurusanSekolah',TRUE),
  				'tahunLulus' => $this->input->post('tahunLulus',TRUE),
  				'nilaiSekolah' => $this->input->post('nilaiSekolah',TRUE),
  				'tgl_daftar' => $this->input->post('tgl_daftar',TRUE),
  				'prodi_1' => $this->input->post('prodi_1',TRUE),
  				'prodi_2' => $this->input->post('prodi_2',TRUE),
  				'prodi_3' => $this->input->post('prodi_3',TRUE),
  				'pembayaran' => $this->input->post('pembayaran',TRUE),
  			);

  			$this->Aplikan_model->insert($data);
  			$this->session->set_flashdata('message', '<div class="alert alert-success fade-in"><i class="fa fa-check"></i>Data Berhasil Di Tambahkan.</div>');
  			redirect(site_url('aplikan'));
  		}
  	}

  	public function edit($id) 
  	{
  		$row = $this->Aplikan_model->get_by_id($id);

  		if ($row) {
  			$data = array(
  				'judul'=>'Data APLIKAN',
  				'button' => 'Update',
  				'action' => site_url('aplikan/edit_data'),
  				'id_aplikan' => set_value('id_aplikan', $row->id_aplikan),
  				'id_periode' => set_value('id_periode', $row->id_periode),
  				'no_pendaftaran' => set_value('no_pendaftaran', $row->no_pendaftaran),
  				'nama' => set_value('nama', $row->nama),
  				'kelamin' => set_value('kelamin', $row->kelamin),
  				'tempatlahir' => set_value('tempatlahir', $row->tempatlahir),
  				'alamat' => set_value('alamat', $row->alamat),
  				'kota' => set_value('kota', $row->kota),
  				'propinsi' => set_value('propinsi', $row->propinsi),
  				'kodePos' => set_value('kodePos', $row->kodePos),
  				'rt' => set_value('rt', $row->rt),
  				'rW' => set_value('rW', $row->rW),
  				'telepon' => set_value('telepon', $row->telepon),
  				'handphone' => set_value('handphone', $row->handphone),
  				'email' => set_value('email', $row->email),
  				'no_hp' => set_value('no_hp', $row->no_hp),
  				'jenisSekolah' => set_value('jenisSekolah', $row->jenisSekolah),
  				'namaSekolah' => set_value('namaSekolah', $row->namaSekolah),
  				'jurusanSekolah' => set_value('jurusanSekolah', $row->jurusanSekolah),
  				'tahunLulus' => set_value('tahunLulus', $row->tahunLulus),
  				'nilaiSekolah' => set_value('nilaiSekolah', $row->nilaiSekolah),
  				'tgl_daftar' => set_value('tgl_daftar', $row->tgl_daftar),
  				'prodi_1' => set_value('prodi_1', $row->prodi_1),
  				'prodi_2' => set_value('prodi_2', $row->prodi_2),
  				'prodi_3' => set_value('prodi_3', $row->prodi_3),
  				'pembayaran' => set_value('pembayaran', $row->pembayaran),
  			);
  			$this->template->load('template','aplikan/aplikan_form', $data);
  		} else {
  			$this->session->set_flashdata('message', '<div class="alert alert-info fade-in">Data Tidak Di Temukan.</div>');
  			redirect(site_url('aplikan'));
  		}
  	}

  	public function edit_data() 
  	{
  		$this->_rules();

  		if ($this->form_validation->run() == FALSE) {
  			$this->edit($this->input->post('id_aplikan', TRUE));
  		} else {
  			$data = array(
  				'id_periode' => $this->input->post('id_periode',TRUE),
  				'no_pendaftaran' => $this->input->post('no_pendaftaran',TRUE),
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
  				'handphone' => $this->input->post('handphone',TRUE),
  				'email' => $this->input->post('email',TRUE),
  				'no_hp' => $this->input->post('no_hp',TRUE),
  				'jenisSekolah' => $this->input->post('jenisSekolah',TRUE),
  				'namaSekolah' => $this->input->post('namaSekolah',TRUE),
  				'jurusanSekolah' => $this->input->post('jurusanSekolah',TRUE),
  				'tahunLulus' => $this->input->post('tahunLulus',TRUE),
  				'nilaiSekolah' => $this->input->post('nilaiSekolah',TRUE),
  				'tgl_daftar' => $this->input->post('tgl_daftar',TRUE),
  				'prodi_1' => $this->input->post('prodi_1',TRUE),
  				'prodi_2' => $this->input->post('prodi_2',TRUE),
  				'prodi_3' => $this->input->post('prodi_3',TRUE),
  				'pembayaran' => $this->input->post('pembayaran',TRUE),
  			);

  			$this->Aplikan_model->update($this->input->post('id_aplikan', TRUE), $data);
  			$this->session->set_flashdata('message', '<div class="alert alert-success fade-in"><i class="fa fa-check"></i>Edit Data Berhasil.</div>');
  			redirect(site_url('aplikan'));
  		}
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
                          'jumlah'=>$sql_rows['jumlah'],
                           'file_pembayaran'=>$sql_rows['file_pembayaran'],
                           'tanggal'=>$sql_rows['tanggal'],
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
       $no_pendaftarand = $this->input->post('no_pendaftaran');
       if($this->input->post('konfirmasi') == 'Y'):
       /*salin data dari table aplikan ke table pmb*/
       $data_aplikan = $this->db->get_where('aplikan',array('no_pendaftaran'=>$no_pendaftaran));
       if($data_aplikan->num_rows() > 0){
          $row = $data_aplikan->row();
         
         /*data table update*/
         $data_update = array ('pembayaran'=>'Y');
         $this->db->update('aplikan',$data_update,array('no_pendaftaran'=>$no_pendaftaran)); 

       }else{
        /*do nothing */
       }   
       elseif($this->input->post('konfirmasi') == 'N'):

       endif;
     else:
      echo "{data:'do nothing'}";
     endif; 
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

  	public function _rules() 
  	{
  		$this->form_validation->set_rules('id_periode', 'id periode', 'trim|required');
  		$this->form_validation->set_rules('no_pendaftaran', 'no pendaftaran', 'trim|required');
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
  		$this->form_validation->set_rules('handphone', 'handphone', 'trim|required');
  		$this->form_validation->set_rules('email', 'email', 'trim|required');
  		$this->form_validation->set_rules('no_hp', 'no hp', 'trim|required');
  		$this->form_validation->set_rules('jenisSekolah', 'jenissekolah', 'trim|required');
  		$this->form_validation->set_rules('namaSekolah', 'namasekolah', 'trim|required');
  		$this->form_validation->set_rules('jurusanSekolah', 'jurusansekolah', 'trim|required');
  		$this->form_validation->set_rules('tahunLulus', 'tahunlulus', 'trim|required');
  		$this->form_validation->set_rules('nilaiSekolah', 'nilaisekolah', 'trim|required');
  		$this->form_validation->set_rules('tgl_daftar', 'tgl daftar', 'trim|required');
  		$this->form_validation->set_rules('prodi_1', 'prodi 1', 'trim|required');
  		$this->form_validation->set_rules('prodi_2', 'prodi 2', 'trim|required');
  		$this->form_validation->set_rules('prodi_3', 'prodi 3', 'trim|required');
  		$this->form_validation->set_rules('pembayaran', 'pembayaran', 'trim|required');
  		$this->form_validation->set_rules('id_aplikan', 'id_aplikan', 'trim');
  		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
  	}

  }

