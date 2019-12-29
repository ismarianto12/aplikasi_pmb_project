<?php

/*developed by ismarianto putra
  you can visit my site in ismarianto.com
  for more complain anda more information.  
*/

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Periode extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        login_access();
        hak_akses();
        $this->load->model('Periode_model');
        $this->load->library('form_validation');   
	$this->load->library('datatables');
    }

    public function index()
    {
         $x['judul'] = 'Data : Periode';
         $this->template->load('template','periode/periode_list',$x);
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Periode_model->json();
    }

    public function detail($id) 
    {
        $row = $this->Periode_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_periode' => $row->id_periode,
		'tahun_akademik' => $row->tahun_akademik,
		'tahun' => $row->tahun,
		'semester' => $row->semester,
		'buka' => $row->buka,
		'mulai' => $row->mulai,
		'selesai' => $row->selesai,
	    
'judul'=>'Detail :  PERIODE',
);
            $this->template->load('template','periode/periode_read', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-warniing fade-in">Data Tidak Di Temukan.</div>');
            redirect(site_url('periode'));
        }
    }

    public function tambah() 
    {
        $data = array(
            'judul'=>'Tambah Periode',
            'button' => 'Create',
            'action' => site_url('periode/tambah_data'),
	    'id_periode' => set_value('id_periode'),
	    'tahun_akademik' => set_value('tahun_akademik'),
	    'tahun' => set_value('tahun'),
	    'semester' => set_value('semester'),
	    'buka' => set_value('buka'),
	    'mulai' => set_value('mulai'),
	    'selesai' => set_value('selesai'),
	);
        $this->template->load('template','periode/periode_form', $data);
    }
    
    public function tambah_data() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah();
        } else {
            $data = array(
		'tahun_akademik' => $this->input->post('tahun_akademik',TRUE),
		'tahun' => $this->input->post('tahun',TRUE),
		'semester' => $this->input->post('semester',TRUE),
		'buka' => $this->input->post('buka',TRUE),
		'mulai' => $this->input->post('mulai',TRUE),
		'selesai' => $this->input->post('selesai',TRUE),
	    );

            $this->Periode_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success fade-in"><i class="fa fa-check"></i>Data Berhasil Di Tambahkan.</div>');
            redirect(site_url('periode'));
        }
    }
    
    public function edit($id) 
    {
        $row = $this->Periode_model->get_by_id($id);

        if ($row) {
            $data = array(
                'judul'=>'Data PERIODE',
                'button' => 'Update',
                'action' => site_url('periode/edit_data'),
		'id_periode' => set_value('id_periode', $row->id_periode),
		'tahun_akademik' => set_value('tahun_akademik', $row->tahun_akademik),
		'tahun' => set_value('tahun', $row->tahun),
		'semester' => set_value('semester', $row->semester),
		'buka' => set_value('buka', $row->buka),
		'mulai' => set_value('mulai', $row->mulai),
		'selesai' => set_value('selesai', $row->selesai),
	    );
             $this->template->load('template','periode/periode_form', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-info fade-in">Data Tidak Di Temukan.</div>');
            redirect(site_url('periode'));
        }
    }
    
    public function edit_data() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->edit($this->input->post('id_periode', TRUE));
        } else {
            $data = array(
		'tahun_akademik' => $this->input->post('tahun_akademik',TRUE),
		'tahun' => $this->input->post('tahun',TRUE),
		'semester' => $this->input->post('semester',TRUE),
		'buka' => $this->input->post('buka',TRUE),
		'mulai' => $this->input->post('mulai',TRUE),
		'selesai' => $this->input->post('selesai',TRUE),
	    );

            $this->Periode_model->update($this->input->post('id_periode', TRUE), $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success fade-in"><i class="fa fa-check"></i>Edit Data Berhasil.</div>');
            redirect(site_url('periode'));
        }
    }
    
    public function hapus($id) 
    {
        $row = $this->Periode_model->get_by_id($id);

        if ($row) {
            $this->Periode_model->delete($id);
            $this->session->set_flashdata('message', '<div class="alert alert-danger fade-in"><i class="fa fa-check"></i>Data Berhasil Di Hapus</div>');
            redirect(site_url('periode'));
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-warniing fade-in">Ops Something Went Wrong Please Contact Administrator.</div>');
            redirect(site_url('periode'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('tahun_akademik', 'tahun akademik', 'trim|required');
	$this->form_validation->set_rules('tahun', 'tahun', 'trim|required');
	$this->form_validation->set_rules('semester', 'semester', 'trim|required');
	$this->form_validation->set_rules('buka', 'buka', 'trim|required');
	$this->form_validation->set_rules('mulai', 'mulai', 'trim|required');
	$this->form_validation->set_rules('selesai', 'selesai', 'trim|required');

	$this->form_validation->set_rules('id_periode', 'id_periode', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

