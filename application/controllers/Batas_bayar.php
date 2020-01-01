  if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Batas_bayar extends CI_Controller
{
  class Batas_bayar extends CI_Controller
  {
    function __construct()
    {
        parent::__construct();
        login_access();
        hak_akses();
        $this->load->model('Batas_bayar_model');
        $this->load->library('form_validation');   
        $this->load->library('datatables');
      parent::__construct();
      login_access();
      hak_akses();
      $this->load->model('Batas_bayar_model');
      $this->load->library('form_validation');   
      $this->load->library('datatables');
    }

    public function index()
    {
       $x['judul'] = 'Data : Batas bayar';
       $this->template->load('template','batas_bayar/batas_bayar_list',$x);
   } 

     $x['judul'] = 'Data : Batas bayar';
     $this->template->load('template','batas_bayar/batas_bayar_list',$x);
   }  
   public function json() {
    header('Content-Type: application/json');
    echo $this->Batas_bayar_model->json();
}
  }

public function detail($id) 
{
  public function detail($id) 
  {
    $row = $this->Batas_bayar_model->get_by_id($id);
    if ($row) {
        $data = array(
          'id_batas' => $row->id_batas,
          'id_periode' => $row->id_periode,
          'program' => $row->program,
          'tahun_mulai' => $row->tahun_mulai,
          'batas_' => $row->batas_,

          'judul'=>'Detail :  BATAS_BAYAR',
      $data = array(
        'id_batas' => $row->id_batas,
        'id_periode' => $row->id_periode,
        'program' => $row->program,
        'tahun_mulai' => $row->tahun_mulai,
        'batas_' => $row->batas_,

        'judul'=>'Detail :  BATAS PEMBAYARAN',
      );
        $this->template->load('template','batas_bayar/batas_bayar_read', $data);
      $this->template->load('template','batas_bayar/batas_bayar_read', $data);
    } else {
        $this->session->set_flashdata('message', '<div class="alert alert-warniing fade-in">Data Tidak Di Temukan.</div>');
        redirect(site_url('batas_bayar'));
      $this->session->set_flashdata('message', '<div class="alert alert-warniing fade-in">Data Tidak Di Temukan.</div>');
      redirect(site_url('batas_bayar'));
    }
}
  }

public function tambah() 
{
  public function tambah() 
  {
    $data = array(
        'judul'=>'Tambah Batas bayar',
        'button' => 'Create',
        'tahun_akademik'=>$this->db->get('periode'),
        'action' => site_url('batas_bayar/tambah_data'),
        'id_batas' => set_value('id_batas'),
        'id_periode' => set_value('id_periode'),
        'program' => set_value('program'),
        'tahun_mulai' => set_value('tahun_mulai'),
        'batas_' => set_value('batas_'),
      'judul'=>'Tambah Batas bayar',
      'button' => 'Create',
      'tahun_akademik'=>$this->db->get('periode'),
      'action' => site_url('batas_bayar/tambah_data'),
      'id_batas' => set_value('id_batas'),
      'id_periode' => set_value('id_periode'),
      'program' => set_value('program'),
      'tahun_mulai' => set_value('tahun_mulai'),
      'batas_' => set_value('batas_'),
    );
    $this->template->load('template','batas_bayar/batas_bayar_form', $data);
}
  }

public function tambah_data() 
{
  public function tambah_data() 
  {
    $this->_rules();

    if ($this->form_validation->run() == FALSE) {
        $this->tambah();
      $this->tambah();
    } else {
        $data = array(
          'id_periode' => $this->input->post('id_periode',TRUE),
          'program' => $this->input->post('program',TRUE),
          'tahun_mulai' => $this->input->post('tahun_mulai',TRUE),
          'batas_' => $this->input->post('batas_',TRUE),
      $data = array(
        'id_periode' => $this->input->post('id_periode',TRUE),
        'program' => $this->input->post('program',TRUE),
        'tahun_mulai' => $this->input->post('tahun_mulai',TRUE),
        'batas_' => $this->input->post('batas_',TRUE),
      );

        $this->Batas_bayar_model->insert($data);
        $this->session->set_flashdata('message', '<div class="alert alert-success fade-in"><i class="fa fa-check"></i>Data Berhasil Di Tambahkan.</div>');
        redirect(site_url('batas_bayar'));
      $this->Batas_bayar_model->insert($data);
      $this->session->set_flashdata('message', '<div class="alert alert-success fade-in"><i class="fa fa-check"></i>Data Berhasil Di Tambahkan.</div>');
      redirect(site_url('batas_bayar'));
    }
}
  }

public function edit($id) 
{
  public function edit($id) 
  {
    $row = $this->Batas_bayar_model->get_by_id($id);

    if ($row) {
        $data = array(
            'judul'=>'Data BATAS_BAYAR',
            'button' => 'Update',
            'action' => site_url('batas_bayar/edit_data'),
            'id_batas' => set_value('id_batas', $row->id_batas),
            'id_periode' => set_value('id_periode', $row->id_periode),
            'program' => set_value('program', $row->program),
            'tahun_mulai' => set_value('tahun_mulai', $row->tahun_mulai),
            'batas_' => set_value('batas_', $row->batas_),
        );
        $this->template->load('template','batas_bayar/batas_bayar_form', $data);
      $data = array(
        'judul'=>'Data BATAS_BAYAR',
        'button' => 'Update',
        'action' => site_url('batas_bayar/edit_data'),
        'id_batas' => set_value('id_batas', $row->id_batas),
        'id_periode' => set_value('id_periode', $row->id_periode),
        'program' => set_value('program', $row->program),
        'tahun_mulai' => set_value('tahun_mulai', $row->tahun_mulai),
        'batas_' => set_value('batas_', $row->batas_),
      );
      $this->template->load('template','batas_bayar/batas_bayar_form', $data);
    } else {
        $this->session->set_flashdata('message', '<div class="alert alert-info fade-in">Data Tidak Di Temukan.</div>');
        redirect(site_url('batas_bayar'));
      $this->session->set_flashdata('message', '<div class="alert alert-info fade-in">Data Tidak Di Temukan.</div>');
      redirect(site_url('batas_bayar'));
    }
}
  }

public function edit_data() 
{
  public function edit_data() 
  {
    $this->_rules();

    if ($this->form_validation->run() == FALSE) {
        $this->edit($this->input->post('id_batas', TRUE));
      $this->edit($this->input->post('id_batas', TRUE));
    } else {
        $data = array(
          'id_periode' => $this->input->post('id_periode',TRUE),
          'program' => $this->input->post('program',TRUE),
          'tahun_mulai' => $this->input->post('tahun_mulai',TRUE),
          'batas_' => $this->input->post('batas_',TRUE),
      $data = array(
        'id_periode' => $this->input->post('id_periode',TRUE),
        'program' => $this->input->post('program',TRUE),
        'tahun_mulai' => $this->input->post('tahun_mulai',TRUE),
        'batas_' => $this->input->post('batas_',TRUE),
      );

        $this->Batas_bayar_model->update($this->input->post('id_batas', TRUE), $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success fade-in"><i class="fa fa-check"></i>Edit Data Berhasil.</div>');
        redirect(site_url('batas_bayar'));
      $this->Batas_bayar_model->update($this->input->post('id_batas', TRUE), $data);
      $this->session->set_flashdata('message', '<div class="alert alert-success fade-in"><i class="fa fa-check"></i>Edit Data Berhasil.</div>');
      redirect(site_url('batas_bayar'));
    }
}
  }

public function hapus($id) 
{
  public function hapus($id) 
  {
    $row = $this->Batas_bayar_model->get_by_id($id);

    if ($row) {
        $this->Batas_bayar_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger fade-in"><i class="fa fa-check"></i>Data Berhasil Di Hapus</div>');
        redirect(site_url('batas_bayar'));
      $this->Batas_bayar_model->delete($id);
      $this->session->set_flashdata('message', '<div class="alert alert-danger fade-in"><i class="fa fa-check"></i>Data Berhasil Di Hapus</div>');
      redirect(site_url('batas_bayar'));
    } else {
        $this->session->set_flashdata('message', '<div class="alert alert-warniing fade-in">Ops Something Went Wrong Please Contact Administrator.</div>');
        redirect(site_url('batas_bayar'));
      $this->session->set_flashdata('message', '<div class="alert alert-warniing fade-in">Ops Something Went Wrong Please Contact Administrator.</div>');
      redirect(site_url('batas_bayar'));
    }
}

public function _rules() 
{
	$this->form_validation->set_rules('id_periode', 'id periode', 'trim|required');
	$this->form_validation->set_rules('program', 'program', 'trim|required');
	$this->form_validation->set_rules('tahun_mulai', 'tahun mulai', 'trim|required');
	$this->form_validation->set_rules('batas_', 'batas ', 'trim|required');

	$this->form_validation->set_rules('id_batas', 'id_batas', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
}
  }

  public function _rules() 
  {
   $this->form_validation->set_rules('id_periode', 'id periode', 'trim|required');
   $this->form_validation->set_rules('program', 'program', 'trim|required');
   $this->form_validation->set_rules('tahun_mulai', 'tahun mulai', 'trim|required');
   $this->form_validation->set_rules('batas_', 'batas ', 'trim|required');

   $this->form_validation->set_rules('id_batas', 'id_batas', 'trim');
   $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
 }

}

