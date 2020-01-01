<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pmb_model extends CI_Model
{

    public $table = 'pmb';
    public $id = 'id_pendaftar';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // datatables
    function json() {
        $this->datatables->select('
        	a.id_pendaftar,
        	a.id_periode,a.no_pendaftaran,
        	a.nomor_pmb,
        	a.password,
        	a.nama,
        	a.kelamin,
        	a.tempatlahir,
        	a.alamat,
        	a.kota,
        	a.propinsi,
        	a.kodePos,
        	a.rt,
        	a.rW,
        	a.telepon,
        	a.handphone,
        	a.email,
        	a.no_hp,a.jenisSekolah,
        	a.namaSekolah,
        	a.jurusanSekolah,
        	a.tahunLulus,
        	a.nilaiSekolah,
        	a.no_ijazah,
        	a.prog_pendidikan,
        	a.namaAyah,
        	a.pendidikanAyah,
        	a.pekerjaanAyah,
        	a.catatan,
        	a.jurusan,
        	a.sumberinfo,
        	a.tgl_daftar,
        	a.prodi_1,
        	a.prodi_2,
        	a.prodi_3,
        	a.pembayaran,
        	a.lulus,
        	a.program_pen,  
        
         b.id_periode,b.tahun_akademik,b.tahun,b.semester,b.buka,b.mulai,b.selesai,

      c.id_bayar,c.no_pendaftaran,c.jumlah,c.file_pembayaran,c.tanggal,c.id_user,

      d.id_prodi,d.nama_prodi,d.kode_prodi,d.akreditasi,d.jenjang
      ');
    $this->datatables->from('pmb a');
        //add this line for join
    $this->datatables->join('periode b', 'a.id_periode = b.id_periode','left');
    $this->datatables->join('pembayaran c', 'a.no_pendaftaran = c.no_pendaftaran','left');
    $this->datatables->join('prodi d','d.id_prodi= a.prodi_1','d.id_prodi= a.prodi_2','d.id_prodi= a.prodi_3','left');  
    if($this->input->post('periode')):
      $this->datatables->where('a.id_periode',$this->input->post('periode'));
    else:
     $this->datatables->where('a.id_periode',$periode);
   endif;

        $this->datatables->add_column('action', anchor(site_url('pmb/detail/$1'),'<i class="fa fa-book"></i>Read','class="btn btn-info btn-xs edit"')."  ".anchor(site_url('pmb/edit/$1'),'<i class="fa fa-edit"></i> Update','class="btn btn-success btn-xs edit"')."<a href='#' class='btn btn-danger btn-xs delete' onclick='javasciprt: return hapus($1)'><i class='fa fa-trash'></i> Delete</a>", 'id_pendaftar');
        return $this->datatables->generate();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('id_pendaftar', $q);
	$this->db->or_like('id_periode', $q);
	$this->db->or_like('no_pendaftaran', $q);
	$this->db->or_like('nomor_pmb', $q);
	$this->db->or_like('password', $q);
	$this->db->or_like('nama', $q);
	$this->db->or_like('kelamin', $q);
	$this->db->or_like('tempatlahir', $q);
	$this->db->or_like('alamat', $q);
	$this->db->or_like('kota', $q);
	$this->db->or_like('propinsi', $q);
	$this->db->or_like('kodePos', $q);
	$this->db->or_like('rt', $q);
	$this->db->or_like('rW', $q);
	$this->db->or_like('telepon', $q);
	$this->db->or_like('handphone', $q);
	$this->db->or_like('email', $q);
	$this->db->or_like('no_hp', $q);
	$this->db->or_like('jenisSekolah', $q);
	$this->db->or_like('namaSekolah', $q);
	$this->db->or_like('jurusanSekolah', $q);
	$this->db->or_like('tahunLulus', $q);
	$this->db->or_like('nilaiSekolah', $q);
	$this->db->or_like('no_ijazah', $q);
	$this->db->or_like('prog_pendidikan', $q);
	$this->db->or_like('namaAyah', $q);
	$this->db->or_like('pendidikanAyah', $q);
	$this->db->or_like('pekerjaanAyah', $q);
	$this->db->or_like('catatan', $q);
	$this->db->or_like('jurusan', $q);
	$this->db->or_like('sumberinfo', $q);
	$this->db->or_like('tgl_daftar', $q);
	$this->db->or_like('prodi_1', $q);
	$this->db->or_like('prodi_2', $q);
	$this->db->or_like('prodi_3', $q);
	$this->db->or_like('pembayaran', $q);
	$this->db->or_like('lulus', $q);
	$this->db->or_like('program_pen', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id_pendaftar', $q);
	$this->db->or_like('id_periode', $q);
	$this->db->or_like('no_pendaftaran', $q);
	$this->db->or_like('nomor_pmb', $q);
	$this->db->or_like('password', $q);
	$this->db->or_like('nama', $q);
	$this->db->or_like('kelamin', $q);
	$this->db->or_like('tempatlahir', $q);
	$this->db->or_like('alamat', $q);
	$this->db->or_like('kota', $q);
	$this->db->or_like('propinsi', $q);
	$this->db->or_like('kodePos', $q);
	$this->db->or_like('rt', $q);
	$this->db->or_like('rW', $q);
	$this->db->or_like('telepon', $q);
	$this->db->or_like('handphone', $q);
	$this->db->or_like('email', $q);
	$this->db->or_like('no_hp', $q);
	$this->db->or_like('jenisSekolah', $q);
	$this->db->or_like('namaSekolah', $q);
	$this->db->or_like('jurusanSekolah', $q);
	$this->db->or_like('tahunLulus', $q);
	$this->db->or_like('nilaiSekolah', $q);
	$this->db->or_like('no_ijazah', $q);
	$this->db->or_like('prog_pendidikan', $q);
	$this->db->or_like('namaAyah', $q);
	$this->db->or_like('pendidikanAyah', $q);
	$this->db->or_like('pekerjaanAyah', $q);
	$this->db->or_like('catatan', $q);
	$this->db->or_like('jurusan', $q);
	$this->db->or_like('sumberinfo', $q);
	$this->db->or_like('tgl_daftar', $q);
	$this->db->or_like('prodi_1', $q);
	$this->db->or_like('prodi_2', $q);
	$this->db->or_like('prodi_3', $q);
	$this->db->or_like('pembayaran', $q);
	$this->db->or_like('lulus', $q);
	$this->db->or_like('program_pen', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

}

 
