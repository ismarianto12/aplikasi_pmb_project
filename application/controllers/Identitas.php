<?php

/*developed by ismarianto putra
  you can visit my site in ismarianto.com
  for more complain anda more information.  
*/

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Identitas extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        login_access();
        hak_akses();
        $this->load->model('Identitas_model');
        $this->load->library('form_validation');   
	$this->load->library('datatables');
    }

    public function index()
    {
         $x['judul'] = 'Data : Identitas';
         $this->template->load('template','identitas/identitas_list',$x);
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Identitas_model->json();
    }

    public function detail($id) 
    {
        $row = $this->Identitas_model->get_by_id($id);
        if ($row) {
            $data = array(
		'Kode' => $row->Kode,
		'KodeHukum' => $row->KodeHukum,
		'KodeInstitusi' => $row->KodeInstitusi,
		'Nama' => $row->Nama,
		'TglMulai' => $row->TglMulai,
		'Alamat1' => $row->Alamat1,
		'Alamat2' => $row->Alamat2,
		'Kota' => $row->Kota,
		'KodePos' => $row->KodePos,
		'Telepon' => $row->Telepon,
		'Fax' => $row->Fax,
		'Email' => $row->Email,
		'Website' => $row->Website,
		'NoAkta' => $row->NoAkta,
		'TglAkta' => $row->TglAkta,
		'NoSah' => $row->NoSah,
		'TglSah' => $row->TglSah,
		'Logo' => $row->Logo,
		'StartNoIdentitas' => $row->StartNoIdentitas,
		'NoIdentitas' => $row->NoIdentitas,
		'CatatanDPNA' => $row->CatatanDPNA,
		'CatatanKursiUAS' => $row->CatatanKursiUAS,
	    
'judul'=>'Detail :  IDENTITAS',
);
            $this->template->load('template','identitas/identitas_read', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-warniing fade-in">Data Tidak Di Temukan.</div>');
            redirect(site_url('identitas'));
        }
    }

    public function tambah() 
    {
        $data = array(
            'judul'=>'Tambah Identitas',
            'button' => 'Create',
            'action' => site_url('identitas/tambah_data'),
	    'Kode' => set_value('Kode'),
	    'KodeHukum' => set_value('KodeHukum'),
	    'KodeInstitusi' => set_value('KodeInstitusi'),
	    'Nama' => set_value('Nama'),
	    'TglMulai' => set_value('TglMulai'),
	    'Alamat1' => set_value('Alamat1'),
	    'Alamat2' => set_value('Alamat2'),
	    'Kota' => set_value('Kota'),
	    'KodePos' => set_value('KodePos'),
	    'Telepon' => set_value('Telepon'),
	    'Fax' => set_value('Fax'),
	    'Email' => set_value('Email'),
	    'Website' => set_value('Website'),
	    'NoAkta' => set_value('NoAkta'),
	    'TglAkta' => set_value('TglAkta'),
	    'NoSah' => set_value('NoSah'),
	    'TglSah' => set_value('TglSah'),
	    'Logo' => set_value('Logo'),
	    'StartNoIdentitas' => set_value('StartNoIdentitas'),
	    'NoIdentitas' => set_value('NoIdentitas'),
	    'CatatanDPNA' => set_value('CatatanDPNA'),
	    'CatatanKursiUAS' => set_value('CatatanKursiUAS'),
	);
        $this->template->load('template','identitas/identitas_form', $data);
    }
    
    public function tambah_data() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah();
        } else {
            $data = array(
		'KodeHukum' => $this->input->post('KodeHukum',TRUE),
		'KodeInstitusi' => $this->input->post('KodeInstitusi',TRUE),
		'Nama' => $this->input->post('Nama',TRUE),
		'TglMulai' => $this->input->post('TglMulai',TRUE),
		'Alamat1' => $this->input->post('Alamat1',TRUE),
		'Alamat2' => $this->input->post('Alamat2',TRUE),
		'Kota' => $this->input->post('Kota',TRUE),
		'KodePos' => $this->input->post('KodePos',TRUE),
		'Telepon' => $this->input->post('Telepon',TRUE),
		'Fax' => $this->input->post('Fax',TRUE),
		'Email' => $this->input->post('Email',TRUE),
		'Website' => $this->input->post('Website',TRUE),
		'NoAkta' => $this->input->post('NoAkta',TRUE),
		'TglAkta' => $this->input->post('TglAkta',TRUE),
		'NoSah' => $this->input->post('NoSah',TRUE),
		'TglSah' => $this->input->post('TglSah',TRUE),
		'Logo' => $this->input->post('Logo',TRUE),
		'StartNoIdentitas' => $this->input->post('StartNoIdentitas',TRUE),
		'NoIdentitas' => $this->input->post('NoIdentitas',TRUE),
		'CatatanDPNA' => $this->input->post('CatatanDPNA',TRUE),
		'CatatanKursiUAS' => $this->input->post('CatatanKursiUAS',TRUE),
	    );

            $this->Identitas_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success fade-in"><i class="fa fa-check"></i>Data Berhasil Di Tambahkan.</div>');
            redirect(site_url('identitas'));
        }
    }
    
    public function edit($id) 
    {
        $row = $this->Identitas_model->get_by_id($id);

        if ($row) {
            $data = array(
                'judul'=>'Data IDENTITAS',
                'button' => 'Update',
                'action' => site_url('identitas/edit_data'),
		'Kode' => set_value('Kode', $row->Kode),
		'KodeHukum' => set_value('KodeHukum', $row->KodeHukum),
		'KodeInstitusi' => set_value('KodeInstitusi', $row->KodeInstitusi),
		'Nama' => set_value('Nama', $row->Nama),
		'TglMulai' => set_value('TglMulai', $row->TglMulai),
		'Alamat1' => set_value('Alamat1', $row->Alamat1),
		'Alamat2' => set_value('Alamat2', $row->Alamat2),
		'Kota' => set_value('Kota', $row->Kota),
		'KodePos' => set_value('KodePos', $row->KodePos),
		'Telepon' => set_value('Telepon', $row->Telepon),
		'Fax' => set_value('Fax', $row->Fax),
		'Email' => set_value('Email', $row->Email),
		'Website' => set_value('Website', $row->Website),
		'NoAkta' => set_value('NoAkta', $row->NoAkta),
		'TglAkta' => set_value('TglAkta', $row->TglAkta),
		'NoSah' => set_value('NoSah', $row->NoSah),
		'TglSah' => set_value('TglSah', $row->TglSah),
		'Logo' => set_value('Logo', $row->Logo),
		'StartNoIdentitas' => set_value('StartNoIdentitas', $row->StartNoIdentitas),
		'NoIdentitas' => set_value('NoIdentitas', $row->NoIdentitas),
		'CatatanDPNA' => set_value('CatatanDPNA', $row->CatatanDPNA),
		'CatatanKursiUAS' => set_value('CatatanKursiUAS', $row->CatatanKursiUAS),
	    );
             $this->template->load('template','identitas/identitas_form', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-info fade-in">Data Tidak Di Temukan.</div>');
            redirect(site_url('identitas'));
        }
    }
    
    public function edit_data() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->edit($this->input->post('Kode', TRUE));
        } else {
            $data = array(
		'KodeHukum' => $this->input->post('KodeHukum',TRUE),
		'KodeInstitusi' => $this->input->post('KodeInstitusi',TRUE),
		'Nama' => $this->input->post('Nama',TRUE),
		'TglMulai' => $this->input->post('TglMulai',TRUE),
		'Alamat1' => $this->input->post('Alamat1',TRUE),
		'Alamat2' => $this->input->post('Alamat2',TRUE),
		'Kota' => $this->input->post('Kota',TRUE),
		'KodePos' => $this->input->post('KodePos',TRUE),
		'Telepon' => $this->input->post('Telepon',TRUE),
		'Fax' => $this->input->post('Fax',TRUE),
		'Email' => $this->input->post('Email',TRUE),
		'Website' => $this->input->post('Website',TRUE),
		'NoAkta' => $this->input->post('NoAkta',TRUE),
		'TglAkta' => $this->input->post('TglAkta',TRUE),
		'NoSah' => $this->input->post('NoSah',TRUE),
		'TglSah' => $this->input->post('TglSah',TRUE),
		'Logo' => $this->input->post('Logo',TRUE),
		'StartNoIdentitas' => $this->input->post('StartNoIdentitas',TRUE),
		'NoIdentitas' => $this->input->post('NoIdentitas',TRUE),
		'CatatanDPNA' => $this->input->post('CatatanDPNA',TRUE),
		'CatatanKursiUAS' => $this->input->post('CatatanKursiUAS',TRUE),
	    );

            $this->Identitas_model->update($this->input->post('Kode', TRUE), $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success fade-in"><i class="fa fa-check"></i>Edit Data Berhasil.</div>');
            redirect(site_url('identitas'));
        }
    }
    
    public function hapus($id) 
    {
        $row = $this->Identitas_model->get_by_id($id);

        if ($row) {
            $this->Identitas_model->delete($id);
            $this->session->set_flashdata('message', '<div class="alert alert-danger fade-in"><i class="fa fa-check"></i>Data Berhasil Di Hapus</div>');
            redirect(site_url('identitas'));
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-warniing fade-in">Ops Something Went Wrong Please Contact Administrator.</div>');
            redirect(site_url('identitas'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('KodeHukum', 'kodehukum', 'trim|required');
	$this->form_validation->set_rules('KodeInstitusi', 'kodeinstitusi', 'trim|required');
	$this->form_validation->set_rules('Nama', 'nama', 'trim|required');
	$this->form_validation->set_rules('TglMulai', 'tglmulai', 'trim|required');
	$this->form_validation->set_rules('Alamat1', 'alamat1', 'trim|required');
	$this->form_validation->set_rules('Alamat2', 'alamat2', 'trim|required');
	$this->form_validation->set_rules('Kota', 'kota', 'trim|required');
	$this->form_validation->set_rules('KodePos', 'kodepos', 'trim|required');
	$this->form_validation->set_rules('Telepon', 'telepon', 'trim|required');
	$this->form_validation->set_rules('Fax', 'fax', 'trim|required');
	$this->form_validation->set_rules('Email', 'email', 'trim|required');
	$this->form_validation->set_rules('Website', 'website', 'trim|required');
	$this->form_validation->set_rules('NoAkta', 'noakta', 'trim|required');
	$this->form_validation->set_rules('TglAkta', 'tglakta', 'trim|required');
	$this->form_validation->set_rules('NoSah', 'nosah', 'trim|required');
	$this->form_validation->set_rules('TglSah', 'tglsah', 'trim|required');
	$this->form_validation->set_rules('Logo', 'logo', 'trim|required');
	$this->form_validation->set_rules('StartNoIdentitas', 'startnoidentitas', 'trim|required');
	$this->form_validation->set_rules('NoIdentitas', 'noidentitas', 'trim|required');
	$this->form_validation->set_rules('CatatanDPNA', 'catatandpna', 'trim|required');
	$this->form_validation->set_rules('CatatanKursiUAS', 'catatankursiuas', 'trim|required');

	$this->form_validation->set_rules('Kode', 'Kode', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

