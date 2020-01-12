<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Histori_model extends CI_Model
{

    public $table = 'histori';
    public $id = '';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    } 
    // datatables
    function json() {
        $this->datatables->select('a.id_histori,a.id_user,a.url,a.aktivitasi,a.file_download,a.tanggal,a.ip_address,a.browser,  
         b.id_user,b.username,b.password,b.nama,b.email,b.foto,b.level,b.active,b.date_create,b.log 
         ');
        $this->datatables->from('histori a');
        $this->datatables->join('login b','a.id_user=b.id_user','left');
        if ($this->input->post('hak_akses')) {
            $this->datatables->where('a.id_user',$this->input->post('hak_akses'));     
        }
        if ($this->input->post('dari')) {
            $this->datatables->where('a.tanggal <=',$this->input->post('dari'));    
        }
        if ($this->input->post('sampai')) {
            $this->datatables->where('a.tanggal >=',$this->input->post('sampai'));
        } 
        $this->datatables->add_column('action', anchor(site_url('histori/detail/$1'),'<i class="fa fa-book"></i>Read','class="btn btn-info btn-xs edit"')."  ".anchor(site_url('histori/edit/$1'),'<i class="fa fa-edit"></i> Update','class="btn btn-success btn-xs edit"')."<a href='#' class='btn btn-danger btn-xs delete' onclick='javasciprt: return hapus($1)'><i class='fa fa-trash'></i> Delete</a>", '');
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
        $this->db->or_like('id_histori', $q);
        $this->db->or_like('id_user', $q);
        $this->db->or_like('url', $q);
        $this->db->or_like('aktivitasi', $q);
        $this->db->or_like('file_download', $q);
        $this->db->or_like('tanggal', $q);
        $this->db->or_like('ip_address', $q);
        $this->db->or_like('browser', $q);
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('', $q);
        $this->db->or_like('id_histori', $q);
        $this->db->or_like('id_user', $q);
        $this->db->or_like('url', $q);
        $this->db->or_like('aktivitasi', $q);
        $this->db->or_like('file_download', $q);
        $this->db->or_like('tanggal', $q);
        $this->db->or_like('ip_address', $q);
        $this->db->or_like('browser', $q);
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

