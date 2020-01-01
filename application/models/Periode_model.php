<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Periode_model extends CI_Model
{

    public $table = 'periode';
    public $id = 'id_periode';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // datatables
    function json() {
        $nama_gelombang = nama_gelombang();
        
        $this->datatables->select('id_periode,tahun_akademik,tahun,semester,buka,mulai,selesai');
        $this->datatables->from('periode');
        if($this->input->post('periode')){
           $this->datatables->where('id_periode',$this->input->post('periode')); 
        }else{
          $this->datatables->where('id_periode',$nama_gelombang);
        } 
        //$this->datatables->join('table2', 'periode.field = table2.field');
        $this->datatables->add_column('action', anchor(site_url('periode/detail/$1'),'<i class="fa fa-book"></i>Read','class="btn btn-info btn-xs edit"')."  ".anchor(site_url('periode/edit/$1'),'<i class="fa fa-edit"></i> Update','class="btn btn-success btn-xs edit"')."<a href='#' class='btn btn-danger btn-xs delete' onclick='javasciprt: return hapus($1)'><i class='fa fa-trash'></i> Delete</a>", 'id_periode');
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
        $this->db->like('id_periode', $q);
	$this->db->or_like('tahun_akademik', $q);
	$this->db->or_like('tahun', $q);
	$this->db->or_like('semester', $q);
	$this->db->or_like('buka', $q);
	$this->db->or_like('mulai', $q);
	$this->db->or_like('selesai', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id_periode', $q);
	$this->db->or_like('tahun_akademik', $q);
	$this->db->or_like('tahun', $q);
	$this->db->or_like('semester', $q);
	$this->db->or_like('buka', $q);
	$this->db->or_like('mulai', $q);
	$this->db->or_like('selesai', $q);
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

 
