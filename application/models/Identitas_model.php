<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Identitas_model extends CI_Model
{

    public $table = 'identitas';
    public $id = 'Kode';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // datatables
    function json() {
        $this->datatables->select('Kode,KodeHukum,KodeInstitusi,Nama,TglMulai,Alamat1,Alamat2,Kota,KodePos,Telepon,Fax,Email,Website,NoAkta,TglAkta,NoSah,TglSah,Logo,StartNoIdentitas,NoIdentitas,CatatanDPNA,CatatanKursiUAS');
        $this->datatables->from('identitas');
        //add this line for join
        //$this->datatables->join('table2', 'identitas.field = table2.field');
        $this->datatables->add_column('action', anchor(site_url('identitas/detail/$1'),'<i class="fa fa-book"></i>Read','class="btn btn-info btn-xs edit"')."  ".anchor(site_url('identitas/edit/$1'),'<i class="fa fa-edit"></i> Update','class="btn btn-success btn-xs edit"')."<a href='#' class='btn btn-danger btn-xs delete' onclick='javasciprt: return hapus($1)'><i class='fa fa-trash'></i> Delete</a>", 'Kode');
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
        $this->db->like('Kode', $q);
	$this->db->or_like('KodeHukum', $q);
	$this->db->or_like('KodeInstitusi', $q);
	$this->db->or_like('Nama', $q);
	$this->db->or_like('TglMulai', $q);
	$this->db->or_like('Alamat1', $q);
	$this->db->or_like('Alamat2', $q);
	$this->db->or_like('Kota', $q);
	$this->db->or_like('KodePos', $q);
	$this->db->or_like('Telepon', $q);
	$this->db->or_like('Fax', $q);
	$this->db->or_like('Email', $q);
	$this->db->or_like('Website', $q);
	$this->db->or_like('NoAkta', $q);
	$this->db->or_like('TglAkta', $q);
	$this->db->or_like('NoSah', $q);
	$this->db->or_like('TglSah', $q);
	$this->db->or_like('Logo', $q);
	$this->db->or_like('StartNoIdentitas', $q);
	$this->db->or_like('NoIdentitas', $q);
	$this->db->or_like('CatatanDPNA', $q);
	$this->db->or_like('CatatanKursiUAS', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('Kode', $q);
	$this->db->or_like('KodeHukum', $q);
	$this->db->or_like('KodeInstitusi', $q);
	$this->db->or_like('Nama', $q);
	$this->db->or_like('TglMulai', $q);
	$this->db->or_like('Alamat1', $q);
	$this->db->or_like('Alamat2', $q);
	$this->db->or_like('Kota', $q);
	$this->db->or_like('KodePos', $q);
	$this->db->or_like('Telepon', $q);
	$this->db->or_like('Fax', $q);
	$this->db->or_like('Email', $q);
	$this->db->or_like('Website', $q);
	$this->db->or_like('NoAkta', $q);
	$this->db->or_like('TglAkta', $q);
	$this->db->or_like('NoSah', $q);
	$this->db->or_like('TglSah', $q);
	$this->db->or_like('Logo', $q);
	$this->db->or_like('StartNoIdentitas', $q);
	$this->db->or_like('NoIdentitas', $q);
	$this->db->or_like('CatatanDPNA', $q);
	$this->db->or_like('CatatanKursiUAS', $q);
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

 