<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Trperizinan_model extends CI_Model
{

    public $table = 'trperizinan';
    public $id = 'id';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // datatables
    function json() {
        $this->datatables->select('id,n_perizinan,initial,c_tarif,is_open,v_hari,v_berlaku_tahun,v_perizinan,c_foto,c_keputusan,kode_ijin,id_bidang,no_rek,no_rek_denda,keterangan,is_peruntukan,id_kelompok_ijin,draft_sk,draft_sertifikat');
        $this->datatables->from('trperizinan');
        //add this line for join
        //$this->datatables->join('table2', 'trperizinan.field = table2.field');
        $this->datatables->add_column('action', anchor(site_url('trperizinan/detail/$1'),'<i class="fa fa-book"></i>Read','class="btn btn-info btn-xs edit"')."  ".anchor(site_url('trperizinan/edit/$1'),'<i class="fa fa-edit"></i> Update','class="btn btn-success btn-xs edit"')."<a href='#' class='btn btn-danger btn-xs delete' onclick='javasciprt: return hapus($1)'><i class='fa fa-trash'></i> Delete</a>", 'id');
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
        $this->db->like('id', $q);
	$this->db->or_like('n_perizinan', $q);
	$this->db->or_like('initial', $q);
	$this->db->or_like('c_tarif', $q);
	$this->db->or_like('is_open', $q);
	$this->db->or_like('v_hari', $q);
	$this->db->or_like('v_berlaku_tahun', $q);
	$this->db->or_like('v_perizinan', $q);
	$this->db->or_like('c_foto', $q);
	$this->db->or_like('c_keputusan', $q);
	$this->db->or_like('kode_ijin', $q);
	$this->db->or_like('id_bidang', $q);
	$this->db->or_like('no_rek', $q);
	$this->db->or_like('no_rek_denda', $q);
	$this->db->or_like('keterangan', $q);
	$this->db->or_like('is_peruntukan', $q);
	$this->db->or_like('id_kelompok_ijin', $q);
	$this->db->or_like('draft_sk', $q);
	$this->db->or_like('draft_sertifikat', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id', $q);
	$this->db->or_like('n_perizinan', $q);
	$this->db->or_like('initial', $q);
	$this->db->or_like('c_tarif', $q);
	$this->db->or_like('is_open', $q);
	$this->db->or_like('v_hari', $q);
	$this->db->or_like('v_berlaku_tahun', $q);
	$this->db->or_like('v_perizinan', $q);
	$this->db->or_like('c_foto', $q);
	$this->db->or_like('c_keputusan', $q);
	$this->db->or_like('kode_ijin', $q);
	$this->db->or_like('id_bidang', $q);
	$this->db->or_like('no_rek', $q);
	$this->db->or_like('no_rek_denda', $q);
	$this->db->or_like('keterangan', $q);
	$this->db->or_like('is_peruntukan', $q);
	$this->db->or_like('id_kelompok_ijin', $q);
	$this->db->or_like('draft_sk', $q);
	$this->db->or_like('draft_sertifikat', $q);
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

 