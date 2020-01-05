<?php 

class Pendaftar extends CI_controller{ 
	function __construct()
	{ 
		parent::__construct();
		if($this->session->level == 'pendaftar'):
		   $this->load->model('Pendaftar_model');  
		   $this->load->library('form_validation');
		else: 
	      exit();
		endif;
	}

	function lengkapi_pendaftaran(){
		$no_pendaftaran = $this->session->no_pendaftaran;
		$cek = $this->Pendaftar_model->cek_pendaftaran($no_pendaftaran);
		if ($cek->num_rows() > 0) { 
			$row = $cek->row();
			$render_view = array(
				'judul'=>'Lengkapi Pendaftaran.',
				'button' => 'Lengkapi Pendaftaran',
				'action' => site_url('pedaftar/edit_kelengkapan'),
				'id_pendaftar' => set_value('id_pendaftar', $row->id_pendaftar),
				'id_periode' => set_value('id_periode', $row->id_periode),
				'no_pendaftaran' => set_value('no_pendaftaran', $row->no_pendaftaran),
				'nomor_pmb' => set_value('nomor_pmb', $row->nomor_pmb),
				'password' => set_value('password', $row->password),
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
				'no_ijazah' => set_value('no_ijazah', $row->no_ijazah),
				'prog_pendidikan' => set_value('prog_pendidikan', $row->prog_pendidikan),
				'namaAyah' => set_value('namaAyah', $row->namaAyah),
				'pendidikanAyah' => set_value('pendidikanAyah', $row->pendidikanAyah),
				'pekerjaanAyah' => set_value('pekerjaanAyah', $row->pekerjaanAyah),
				'catatan' => set_value('catatan', $row->catatan),
				'jurusan' => set_value('jurusan', $row->jurusan),
				'sumberinfo' => set_value('sumberinfo', $row->sumberinfo),
				'tgl_daftar' => set_value('tgl_daftar', $row->tgl_daftar),
				'prodi_1' => set_value('prodi_1', $row->prodi_1),
				'prodi_2' => set_value('prodi_2', $row->prodi_2),
				'prodi_3' => set_value('prodi_3', $row->prodi_3),
				'pembayaran' => set_value('pembayaran', $row->pembayaran),
				'lulus' => set_value('lulus', $row->lulus),
				'program_pen' => set_value('program_pen', $row->program_pen),
			); 
$this->template->load('template','pendaftar/lengkapi_pendaftaran',$render_view); 
}  
}

function edit_kelengkapan()
{
	$this->_rules();

	if ($this->form_validation->run() == FALSE) {
		$this->lengkapi_pendaftaran($this->session->no_pendaftaran);
	} else {
		$data = array(
			'id_periode' => $this->input->post('id_periode',TRUE),
			'no_pendaftaran' => $this->input->post('no_pendaftaran',TRUE),
			'nomor_pmb' => $this->input->post('nomor_pmb',TRUE),
			'password' => $this->input->post('password',TRUE),
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
			'no_ijazah' => $this->input->post('no_ijazah',TRUE),
			'prog_pendidikan' => $this->input->post('prog_pendidikan',TRUE),
			'namaAyah' => $this->input->post('namaAyah',TRUE),
			'pendidikanAyah' => $this->input->post('pendidikanAyah',TRUE),
			'pekerjaanAyah' => $this->input->post('pekerjaanAyah',TRUE),
			'catatan' => $this->input->post('catatan',TRUE),
			'jurusan' => $this->input->post('jurusan',TRUE),
			'sumberinfo' => $this->input->post('sumberinfo',TRUE),
			'tgl_daftar' => $this->input->post('tgl_daftar',TRUE),
			'prodi_1' => $this->input->post('prodi_1',TRUE),
			'prodi_2' => $this->input->post('prodi_2',TRUE),
			'prodi_3' => $this->input->post('prodi_3',TRUE),
			'pembayaran' => $this->input->post('pembayaran',TRUE),
			'lulus' => $this->input->post('lulus',TRUE),
			'program_pen' => $this->input->post('program_pen',TRUE),
		);
		$this->db->update('pmb',$data,array('no_pendaftaran'=>$this->session->no_pendaftaran));
		$this->session->set_flashdata('message', '<div class="alert alert-success fade-in"><i class="fa fa-check"></i>Edit Data Berhasil.</div>');
		redirect(site_url('pmb'));
	}
}


function cetak_kartu_ujian(){
	$no_pendaftaran = $this->session->no_pendaftaran;

	$cek = $this->Pendaftar_model->cek_pendaftaran($no_pendaftaran);
	if ($cek->num_rows() > 0) { 
		$data_pedaftar = $cek->row();
		$render_view = array('judul' =>'Cetak kartu ujian',
			'data'=>$data_pedaftar);
		$this->templat->load('template','pendaftar/cetak_kartu_ujian',$render_view);
	} 
}  


function _rules(){

	$this->form_validation->set_rules('id_periode', 'id periode', 'trim|required');
	$this->form_validation->set_rules('no_pendaftaran', 'no pendaftaran', 'trim|required');
	$this->form_validation->set_rules('nomor_pmb', 'nomor pmb', 'trim|required');
	$this->form_validation->set_rules('password', 'password', 'trim|required');
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
	$this->form_validation->set_rules('no_ijazah', 'no ijazah', 'trim|required');
	$this->form_validation->set_rules('prog_pendidikan', 'prog pendidikan', 'trim|required');
	$this->form_validation->set_rules('namaAyah', 'namaayah', 'trim|required');
	$this->form_validation->set_rules('pendidikanAyah', 'pendidikanayah', 'trim|required');
	$this->form_validation->set_rules('pekerjaanAyah', 'pekerjaanayah', 'trim|required');
	$this->form_validation->set_rules('catatan', 'catatan', 'trim|required');
	$this->form_validation->set_rules('jurusan', 'jurusan', 'trim|required');
	$this->form_validation->set_rules('sumberinfo', 'sumberinfo', 'trim|required');
	$this->form_validation->set_rules('tgl_daftar', 'tgl daftar', 'trim|required');
	$this->form_validation->set_rules('prodi_1', 'prodi 1', 'trim|required');
	$this->form_validation->set_rules('prodi_2', 'prodi 2', 'trim|required');
	$this->form_validation->set_rules('prodi_3', 'prodi 3', 'trim|required');
	$this->form_validation->set_rules('pembayaran', 'pembayaran', 'trim|required');
	$this->form_validation->set_rules('lulus', 'lulus', 'trim|required');
	$this->form_validation->set_rules('program_pen', 'program pen', 'trim|required'); 
	$this->form_validation->set_rules('id_pendaftar', 'id_pendaftar', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>'); 
 }

}