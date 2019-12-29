<?php

/*developed by ismarianto putra
  you can visit my site in ismarianto.com
  for more complain anda more information.  
*/

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pembayaran extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        login_access();
        hak_akses();
        $this->load->model('Pembayaran_model');
        $this->load->library('form_validation');   
	$this->load->library('datatables');
    }

    public function index()
    {
         $x['judul'] = 'Data : Pembayaran';
         $this->template->load('template','pembayaran/pembayaran_list',$x);
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Pembayaran_model->json();
    }

    public function detail($id) 
    {
        $row = $this->Pembayaran_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_bayar' => $row->id_bayar,
		'no_pendaftaran' => $row->no_pendaftaran,
		'jumlah' => $row->jumlah,
		'file_pembayaran' => $row->file_pembayaran,
		'tanggal' => $row->tanggal,
		'id_user' => $row->id_user,
	    
'judul'=>'Detail :  PEMBAYARAN',
);
            $this->template->load('template','pembayaran/pembayaran_read', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-warniing fade-in">Data Tidak Di Temukan.</div>');
            redirect(site_url('pembayaran'));
        }
    }

    public function tambah() 
    {
        $data = array(
            'judul'=>'Tambah Pembayaran',
            'button' => 'Create',
            'action' => site_url('pembayaran/tambah_data'),
	    'id_bayar' => set_value('id_bayar'),
	    'no_pendaftaran' => set_value('no_pendaftaran'),
	    'jumlah' => set_value('jumlah'),
	    'file_pembayaran' => set_value('file_pembayaran'),
	    'tanggal' => set_value('tanggal'),
	    'id_user' => set_value('id_user'),
	);
        $this->template->load('template','pembayaran/pembayaran_form', $data);
    }
    
    public function tambah_data() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah();
        } else {
            $data = array(
		'id_bayar' => $this->input->post('id_bayar',TRUE),
		'no_pendaftaran' => $this->input->post('no_pendaftaran',TRUE),
		'jumlah' => $this->input->post('jumlah',TRUE),
		'file_pembayaran' => $this->input->post('file_pembayaran',TRUE),
		'tanggal' => $this->input->post('tanggal',TRUE),
		'id_user' => $this->input->post('id_user',TRUE),
	    );

            $this->Pembayaran_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success fade-in"><i class="fa fa-check"></i>Data Berhasil Di Tambahkan.</div>');
            redirect(site_url('pembayaran'));
        }
    }
    
    public function edit($id) 
    {
        $row = $this->Pembayaran_model->get_by_id($id);

        if ($row) {
            $data = array(
                'judul'=>'Data PEMBAYARAN',
                'button' => 'Update',
                'action' => site_url('pembayaran/edit_data'),
		'id_bayar' => set_value('id_bayar', $row->id_bayar),
		'no_pendaftaran' => set_value('no_pendaftaran', $row->no_pendaftaran),
		'jumlah' => set_value('jumlah', $row->jumlah),
		'file_pembayaran' => set_value('file_pembayaran', $row->file_pembayaran),
		'tanggal' => set_value('tanggal', $row->tanggal),
		'id_user' => set_value('id_user', $row->id_user),
	    );
             $this->template->load('template','pembayaran/pembayaran_form', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-info fade-in">Data Tidak Di Temukan.</div>');
            redirect(site_url('pembayaran'));
        }
    }
    
    public function edit_data() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->edit($this->input->post('', TRUE));
        } else {
            $data = array(
		'id_bayar' => $this->input->post('id_bayar',TRUE),
		'no_pendaftaran' => $this->input->post('no_pendaftaran',TRUE),
		'jumlah' => $this->input->post('jumlah',TRUE),
		'file_pembayaran' => $this->input->post('file_pembayaran',TRUE),
		'tanggal' => $this->input->post('tanggal',TRUE),
		'id_user' => $this->input->post('id_user',TRUE),
	    );

            $this->Pembayaran_model->update($this->input->post('', TRUE), $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success fade-in"><i class="fa fa-check"></i>Edit Data Berhasil.</div>');
            redirect(site_url('pembayaran'));
        }
    }
    
    public function hapus($id) 
    {
        $row = $this->Pembayaran_model->get_by_id($id);

        if ($row) {
            $this->Pembayaran_model->delete($id);
            $this->session->set_flashdata('message', '<div class="alert alert-danger fade-in"><i class="fa fa-check"></i>Data Berhasil Di Hapus</div>');
            redirect(site_url('pembayaran'));
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-warniing fade-in">Ops Something Went Wrong Please Contact Administrator.</div>');
            redirect(site_url('pembayaran'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('id_bayar', 'id bayar', 'trim|required');
	$this->form_validation->set_rules('no_pendaftaran', 'no pendaftaran', 'trim|required');
	$this->form_validation->set_rules('jumlah', 'jumlah', 'trim|required');
	$this->form_validation->set_rules('file_pembayaran', 'file pembayaran', 'trim|required');
	$this->form_validation->set_rules('tanggal', 'tanggal', 'trim|required');
	$this->form_validation->set_rules('id_user', 'id user', 'trim|required');

	$this->form_validation->set_rules('', '', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

