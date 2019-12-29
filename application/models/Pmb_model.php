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
        $this->datatables->select('id_pendaftar,id_periode,no_pendaftaran,nomor_pmb,password,nama,kelamin,tempatlahir,alamat,kota,propinsi,kodePos,rt,rW,telepon,handphone,email,no_hp,jenisSekolah,namaSekolah,jurusanSekolah,tahunLulus,nilaiSekolah,no_ijazah,prog_pendidikan,namaAyah,pendidikanAyah,pekerjaanAyah,catatan,jurusan,sumberinfo,tgl_daftar,prodi_1,prodi_2,prodi_3,pembayaran,lulus,program_pen');
        $this->datatables->from('pmb');
        //add this line for join
        //$this->datatables->join('table2', 'pmb.field = table2.field');
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

 