<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Histori_model extends CI_Model
{

    public $table = 'histori';
    public $id = 'id_histori';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // datatables
    function json() {
        $this->datatables->select('
            a.id_histori,a.id_user,a.url,a.aktivitasi,a.tanggal,a.ip_address,a.browser,  
            b.id_user,b.username,b.password,b.nama,b.level,b.email,b.log 
            ');
        $this->datatables->from('histori a');
        //add this line for join
        if ($this->input->post('dari') !='' AND $this->input->post('sampai') !='') { 
        $this->datatables->where('a.tanggal >=',$this->input->post('dari'));
        $this->datatables->where('a.tanggal <=',$this->input->post('sampai'));
        }
        if ($this->session->level != 'admin') { 
         $this->datatables->where('a.id_user',$this->session->id_user);
        } 
        $this->datatables->join('login b','a.id_user=b.id_user','left');
        $this->datatables->add_column('nama_user','$1','nama');
        $this->datatables->add_column('action', anchor(site_url('histori/detail/$1'),'<i class="fa fa-book"></i>Read'),'id_histori');
        return $this->datatables->generate();
    }

     
}

 