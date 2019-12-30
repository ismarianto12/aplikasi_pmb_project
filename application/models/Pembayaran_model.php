<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pembayaran_model extends CI_Model
{

    public $table = 'pembayaran';
    public $id = '';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    } 
    // datatables
    function json() {
       $this->datatables->select('
          a.id_aplikan,
          a.id_periode,
          a.no_pendaftaran as no_pend,
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
          a.email,
          a.no_hp,
          a.jenisSekolah,
          a.namaSekolah,
          a.jurusanSekolah,
          a.tahunLulus,
          a.nilaiSekolah,
          a.tgl_daftar,
          a.prodi_1,
          a.prodi_2,
          a.prodi_3,
          a.pembayaran,

          b.id_bayar,b.no_pendaftaran,b.jumlah,b.file_pembayaran,b.tanggal,b.id_user,   
          '); 
         $this->datatables->from('aplikan a');
         $this->datatables->join('pembayaran b','a.no_pendaftaran = b.no_pendaftaran','left');
         if($this->input->post('periode')){
           $this->datatables->where('a.id_periode',$this->input->post('periode'));
         }else{ 
         }
         $this->datatables->where('a.pembayaran','Y');
         $this->datatables->add_column('action', anchor(site_url('pembayaran/detail/$1'),'<i class="fa fa-book"></i>Read','class="btn btn-info btn-xs edit"')."<a href='#' class='btn btn-danger btn-xs delete' onclick='javasciprt: return hapus($1)'><i class='fa fa-trash'></i> Delete</a>", 'id_bayar');
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
        $this->db->like('', $q);
	$this->db->or_like('id_bayar', $q);
	$this->db->or_like('no_pendaftaran', $q);
	$this->db->or_like('jumlah', $q);
	$this->db->or_like('file_pembayaran', $q);
	$this->db->or_like('tanggal', $q);
	$this->db->or_like('id_user', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('', $q);
	$this->db->or_like('id_bayar', $q);
	$this->db->or_like('no_pendaftaran', $q);
	$this->db->or_like('jumlah', $q);
	$this->db->or_like('file_pembayaran', $q);
	$this->db->or_like('tanggal', $q);
	$this->db->or_like('id_user', $q);
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

 