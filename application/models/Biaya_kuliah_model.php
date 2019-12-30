<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Biaya_kuliah_model extends CI_Model
{

    public $table = 'biaya_kuliah';
    public $id = 'id_biaya';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }
 
    function json() {
        $this->datatables->select(' 
            a.id_biaya,a.id_prodi,a.jumlah,
            b.id_prodi,b.nama_prodi,b.kode_prodi,b.akreditasi,b.jenjang   
            ');
        $this->datatables->from('biaya_kuliah a');
        $this->datatables->join('prodi b', 'a.id_prodi = b.id_prodi','left');
        $this->datatables->add_column('action', anchor(site_url('biaya_kuliah/detail/$1'),'<i class="fa fa-book"></i>Read','class="btn btn-info btn-xs edit"')."  ".anchor(site_url('biaya_kuliah/edit/$1'),'<i class="fa fa-edit"></i> Update','class="btn btn-success btn-xs edit"')."<a href='#' class='btn btn-danger btn-xs delete' onclick='javasciprt: return hapus($1)'><i class='fa fa-trash'></i> Delete</a>", 'id_biaya');
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
        $this->db->like('id_biaya', $q);
	$this->db->or_like('id_prodi', $q);
	$this->db->or_like('jumlah', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id_biaya', $q);
	$this->db->or_like('id_prodi', $q);
	$this->db->or_like('jumlah', $q);
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

 