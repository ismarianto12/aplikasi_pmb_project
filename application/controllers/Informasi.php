<?php

/*developed by ismarianto putra
  you can visit my site in ismarianto.com
  for more complain anda more information.  
*/

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Informasi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        login_access();
        hak_akses();
        $this->load->model('Informasi_model');
        $this->load->library('form_validation');   
	$this->load->library('datatables');
    }

    public function index()
    {
         $x['judul'] = 'Data : Informasi';
         $this->template->load('template','informasi/informasi_list',$x);
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Informasi_model->json();
    }

    public function detail($id) 
    {
        $row = $this->Informasi_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_informasi' => $row->id_informasi,
		'id_admin' => $row->id_admin,
		'judul_informasi' => $row->judul_informasi,
		'isi' => $row->isi,
		'gambar' => $row->gambar,
		'tanggal' => $row->tanggal,
		'hits' => $row->hits,
		'ket' => $row->ket,
	    
'judul'=>'Detail :  INFORMASI',
);
            $this->template->load('template','informasi/informasi_read', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-warniing fade-in">Data Tidak Di Temukan.</div>');
            redirect(site_url('informasi'));
        }
    }

    public function tambah() 
    {
        $data = array(
            'judul'=>'Tambah Informasi',
            'button' => 'Create',
            'action' => site_url('informasi/tambah_data'),
	    'id_informasi' => set_value('id_informasi'),
	    'id_admin' => set_value('id_admin'),
	    'judul_informasi' => set_value('judul_informasi'),
	    'isi' => set_value('isi'),
	    'gambar' => set_value('gambar'),
	    'tanggal' => set_value('tanggal'),
	    'hits' => set_value('hits'),
	    'ket' => set_value('ket'),
	);
        $this->template->load('template','informasi/informasi_form', $data);
    }
    
    public function tambah_data() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah();
        } else {
            $data = array(
		'id_admin' => $this->input->post('id_admin',TRUE),
		'judul_informasi' => $this->input->post('judul_informasi',TRUE),
		'isi' => $this->input->post('isi',TRUE),
		'gambar' => $this->input->post('gambar',TRUE),
		'tanggal' => $this->input->post('tanggal',TRUE),
		'hits' => $this->input->post('hits',TRUE),
		'ket' => $this->input->post('ket',TRUE),
	    );

            $this->Informasi_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success fade-in"><i class="fa fa-check"></i>Data Berhasil Di Tambahkan.</div>');
            redirect(site_url('informasi'));
        }
    }
    
    public function edit($id) 
    {
        $row = $this->Informasi_model->get_by_id($id);

        if ($row) {
            $data = array(
                'judul'=>'Data INFORMASI',
                'button' => 'Update',
                'action' => site_url('informasi/edit_data'),
		'id_informasi' => set_value('id_informasi', $row->id_informasi),
		'id_admin' => set_value('id_admin', $row->id_admin),
		'judul_informasi' => set_value('judul_informasi', $row->judul_informasi),
		'isi' => set_value('isi', $row->isi),
		'gambar' => set_value('gambar', $row->gambar),
		'tanggal' => set_value('tanggal', $row->tanggal),
		'hits' => set_value('hits', $row->hits),
		'ket' => set_value('ket', $row->ket),
	    );
             $this->template->load('template','informasi/informasi_form', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-info fade-in">Data Tidak Di Temukan.</div>');
            redirect(site_url('informasi'));
        }
    }
    
    public function edit_data() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->edit($this->input->post('id_informasi', TRUE));
        } else {
            $data = array(
		'id_admin' => $this->input->post('id_admin',TRUE),
		'judul_informasi' => $this->input->post('judul_informasi',TRUE),
		'isi' => $this->input->post('isi',TRUE),
		'gambar' => $this->input->post('gambar',TRUE),
		'tanggal' => $this->input->post('tanggal',TRUE),
		'hits' => $this->input->post('hits',TRUE),
		'ket' => $this->input->post('ket',TRUE),
	    );

            $this->Informasi_model->update($this->input->post('id_informasi', TRUE), $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success fade-in"><i class="fa fa-check"></i>Edit Data Berhasil.</div>');
            redirect(site_url('informasi'));
        }
    }
    
    public function hapus($id) 
    {
        $row = $this->Informasi_model->get_by_id($id);

        if ($row) {
            $this->Informasi_model->delete($id);
            $this->session->set_flashdata('message', '<div class="alert alert-danger fade-in"><i class="fa fa-check"></i>Data Berhasil Di Hapus</div>');
            redirect(site_url('informasi'));
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-warniing fade-in">Ops Something Went Wrong Please Contact Administrator.</div>');
            redirect(site_url('informasi'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('id_admin', 'id admin', 'trim|required');
	$this->form_validation->set_rules('judul_informasi', 'judul informasi', 'trim|required');
	$this->form_validation->set_rules('isi', 'isi', 'trim|required');
	$this->form_validation->set_rules('gambar', 'gambar', 'trim|required');
	$this->form_validation->set_rules('tanggal', 'tanggal', 'trim|required');
	$this->form_validation->set_rules('hits', 'hits', 'trim|required');
	$this->form_validation->set_rules('ket', 'ket', 'trim|required');

	$this->form_validation->set_rules('id_informasi', 'id_informasi', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

