<?php

/*developed by ismarianto putra
  you can visit my site in ismarianto.com
  for more complain anda more information.  
*/

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Histori extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        login_access();
        hak_akses();
        $this->load->model('Histori_model');
        $this->load->library('form_validation');   
	$this->load->library('datatables');
    }

    public function index()
    {
         $x['judul'] = 'Data : Histori';
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
		'file_download' => $row->file_download,
		'tanggal' => $row->tanggal,
		'ip_address' => $row->ip_address,
		'browser' => $row->browser,
	    
'judul'=>'Detail :  HISTORI',
);
            $this->template->load('template','histori/histori_read', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-warniing fade-in">Data Tidak Di Temukan.</div>');
            redirect(site_url('histori'));
        }
    }

    public function tambah() 
    {
        $data = array(
            'judul'=>'Tambah Histori',
            'button' => 'Create',
            'action' => site_url('histori/tambah_data'),
	    'id_histori' => set_value('id_histori'),
	    'id_user' => set_value('id_user'),
	    'url' => set_value('url'),
	    'aktivitasi' => set_value('aktivitasi'),
	    'file_download' => set_value('file_download'),
	    'tanggal' => set_value('tanggal'),
	    'ip_address' => set_value('ip_address'),
	    'browser' => set_value('browser'),
	);
        $this->template->load('template','histori/histori_form', $data);
    }
    
    public function tambah_data() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah();
        } else {
            $data = array(
		'id_histori' => $this->input->post('id_histori',TRUE),
		'id_user' => $this->input->post('id_user',TRUE),
		'url' => $this->input->post('url',TRUE),
		'aktivitasi' => $this->input->post('aktivitasi',TRUE),
		'file_download' => $this->input->post('file_download',TRUE),
		'tanggal' => $this->input->post('tanggal',TRUE),
		'ip_address' => $this->input->post('ip_address',TRUE),
		'browser' => $this->input->post('browser',TRUE),
	    );

            $this->Histori_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success fade-in"><i class="fa fa-check"></i>Data Berhasil Di Tambahkan.</div>');
            redirect(site_url('histori'));
        }
    }
    
    public function edit($id) 
    {
        $row = $this->Histori_model->get_by_id($id);

        if ($row) {
            $data = array(
                'judul'=>'Data HISTORI',
                'button' => 'Update',
                'action' => site_url('histori/edit_data'),
		'id_histori' => set_value('id_histori', $row->id_histori),
		'id_user' => set_value('id_user', $row->id_user),
		'url' => set_value('url', $row->url),
		'aktivitasi' => set_value('aktivitasi', $row->aktivitasi),
		'file_download' => set_value('file_download', $row->file_download),
		'tanggal' => set_value('tanggal', $row->tanggal),
		'ip_address' => set_value('ip_address', $row->ip_address),
		'browser' => set_value('browser', $row->browser),
	    );
             $this->template->load('template','histori/histori_form', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-info fade-in">Data Tidak Di Temukan.</div>');
            redirect(site_url('histori'));
        }
    }
    
    public function edit_data() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->edit($this->input->post('', TRUE));
        } else {
            $data = array(
		'id_histori' => $this->input->post('id_histori',TRUE),
		'id_user' => $this->input->post('id_user',TRUE),
		'url' => $this->input->post('url',TRUE),
		'aktivitasi' => $this->input->post('aktivitasi',TRUE),
		'file_download' => $this->input->post('file_download',TRUE),
		'tanggal' => $this->input->post('tanggal',TRUE),
		'ip_address' => $this->input->post('ip_address',TRUE),
		'browser' => $this->input->post('browser',TRUE),
	    );

            $this->Histori_model->update($this->input->post('', TRUE), $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success fade-in"><i class="fa fa-check"></i>Edit Data Berhasil.</div>');
            redirect(site_url('histori'));
        }
    }
    
    public function hapus($id) 
    {
        $row = $this->Histori_model->get_by_id($id);

        if ($row) {
            $this->Histori_model->delete($id);
            $this->session->set_flashdata('message', '<div class="alert alert-danger fade-in"><i class="fa fa-check"></i>Data Berhasil Di Hapus</div>');
            redirect(site_url('histori'));
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-warniing fade-in">Ops Something Went Wrong Please Contact Administrator.</div>');
            redirect(site_url('histori'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('id_histori', 'id histori', 'trim|required');
	$this->form_validation->set_rules('id_user', 'id user', 'trim|required');
	$this->form_validation->set_rules('url', 'url', 'trim|required');
	$this->form_validation->set_rules('aktivitasi', 'aktivitasi', 'trim|required');
	$this->form_validation->set_rules('file_download', 'file download', 'trim|required');
	$this->form_validation->set_rules('tanggal', 'tanggal', 'trim|required');
	$this->form_validation->set_rules('ip_address', 'ip address', 'trim|required');
	$this->form_validation->set_rules('browser', 'browser', 'trim|required');

	$this->form_validation->set_rules('', '', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

