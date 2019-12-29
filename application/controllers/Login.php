<?php

/*developed by ismarianto putra
  you can visit my site in ismarianto.com
  for more complain anda more information.  
*/

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        login_access();
        hak_akses();
        $this->load->model('Login_model');
        $this->load->library('form_validation');   
	$this->load->library('datatables');
    }

    public function index()
    {
         $x['judul'] = 'Data : Login';
         $this->template->load('template','login/login_list',$x);
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Login_model->json();
    }

    public function detail($id) 
    {
        $row = $this->Login_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_user' => $row->id_user,
		'username' => $row->username,
		'password' => $row->password,
		'nama' => $row->nama,
		'email' => $row->email,
		'foto' => $row->foto,
		'level' => $row->level,
		'active' => $row->active,
		'date_create' => $row->date_create,
		'log' => $row->log,
	    
'judul'=>'Detail :  LOGIN',
);
            $this->template->load('template','login/login_read', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-warniing fade-in">Data Tidak Di Temukan.</div>');
            redirect(site_url('login'));
        }
    }

    public function tambah() 
    {
        $data = array(
            'judul'=>'Tambah Login',
            'button' => 'Create',
            'action' => site_url('login/tambah_data'),
	    'id_user' => set_value('id_user'),
	    'username' => set_value('username'),
	    'password' => set_value('password'),
	    'nama' => set_value('nama'),
	    'email' => set_value('email'),
	    'foto' => set_value('foto'),
	    'level' => set_value('level'),
	    'active' => set_value('active'),
	    'date_create' => set_value('date_create'),
	    'log' => set_value('log'),
	);
        $this->template->load('template','login/login_form', $data);
    }
    
    public function tambah_data() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah();
        } else {
            $data = array(
		'username' => $this->input->post('username',TRUE),
		'password' => $this->input->post('password',TRUE),
		'nama' => $this->input->post('nama',TRUE),
		'email' => $this->input->post('email',TRUE),
		'foto' => $this->input->post('foto',TRUE),
		'level' => $this->input->post('level',TRUE),
		'active' => $this->input->post('active',TRUE),
		'date_create' => $this->input->post('date_create',TRUE),
		'log' => $this->input->post('log',TRUE),
	    );

            $this->Login_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success fade-in"><i class="fa fa-check"></i>Data Berhasil Di Tambahkan.</div>');
            redirect(site_url('login'));
        }
    }
    
    public function edit($id) 
    {
        $row = $this->Login_model->get_by_id($id);

        if ($row) {
            $data = array(
                'judul'=>'Data LOGIN',
                'button' => 'Update',
                'action' => site_url('login/edit_data'),
		'id_user' => set_value('id_user', $row->id_user),
		'username' => set_value('username', $row->username),
		'password' => set_value('password', $row->password),
		'nama' => set_value('nama', $row->nama),
		'email' => set_value('email', $row->email),
		'foto' => set_value('foto', $row->foto),
		'level' => set_value('level', $row->level),
		'active' => set_value('active', $row->active),
		'date_create' => set_value('date_create', $row->date_create),
		'log' => set_value('log', $row->log),
	    );
             $this->template->load('template','login/login_form', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-info fade-in">Data Tidak Di Temukan.</div>');
            redirect(site_url('login'));
        }
    }
    
    public function edit_data() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->edit($this->input->post('id_user', TRUE));
        } else {
            $data = array(
		'username' => $this->input->post('username',TRUE),
		'password' => $this->input->post('password',TRUE),
		'nama' => $this->input->post('nama',TRUE),
		'email' => $this->input->post('email',TRUE),
		'foto' => $this->input->post('foto',TRUE),
		'level' => $this->input->post('level',TRUE),
		'active' => $this->input->post('active',TRUE),
		'date_create' => $this->input->post('date_create',TRUE),
		'log' => $this->input->post('log',TRUE),
	    );

            $this->Login_model->update($this->input->post('id_user', TRUE), $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success fade-in"><i class="fa fa-check"></i>Edit Data Berhasil.</div>');
            redirect(site_url('login'));
        }
    }
    
    public function hapus($id) 
    {
        $row = $this->Login_model->get_by_id($id);

        if ($row) {
            $this->Login_model->delete($id);
            $this->session->set_flashdata('message', '<div class="alert alert-danger fade-in"><i class="fa fa-check"></i>Data Berhasil Di Hapus</div>');
            redirect(site_url('login'));
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-warniing fade-in">Ops Something Went Wrong Please Contact Administrator.</div>');
            redirect(site_url('login'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('username', 'username', 'trim|required');
	$this->form_validation->set_rules('password', 'password', 'trim|required');
	$this->form_validation->set_rules('nama', 'nama', 'trim|required');
	$this->form_validation->set_rules('email', 'email', 'trim|required');
	$this->form_validation->set_rules('foto', 'foto', 'trim|required');
	$this->form_validation->set_rules('level', 'level', 'trim|required');
	$this->form_validation->set_rules('active', 'active', 'trim|required');
	$this->form_validation->set_rules('date_create', 'date create', 'trim|required');
	$this->form_validation->set_rules('log', 'log', 'trim|required');

	$this->form_validation->set_rules('id_user', 'id_user', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

