<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Aplikan_model extends CI_Model
{

    public $table = 'aplikan';
    public $id = 'id_aplikan';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // datatables
    function json() {
        $periode = nama_gelombang('id_periode');
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
            
            b.id_periode,b.tahun_akademik,b.tahun,b.semester,b.buka,b.mulai,b.selesai,

            c.id_bayar,c.no_pendaftaran,c.jumlah,c.file_pembayaran,c.tanggal,c.id_user,
            
            d.id_prodi,d.nama_prodi,d.kode_prodi,d.akreditasi,d.jenjang
            ');
        $this->datatables->from('aplikan a');
        //add this line for join
        $this->datatables->join('periode b', 'a.id_periode = b.id_periode','left');
        $this->datatables->join('pembayaran c', 'a.no_pendaftaran = c.no_pendaftaran','left');
        $this->datatables->join('prodi d','d.id_prodi= a.prodi_1','d.id_prodi= a.prodi_2','d.id_prodi= a.prodi_3','left');  
        if($this->input->post('periode')):
          $this->datatables->where('a.id_periode',$this->input->post('periode'));
      else:
       $this->datatables->where('a.id_periode',$periode);
   endif;
   $this->datatables->add_column('nama_periode','$1','tahun_akademik'); 
   $this->datatables->add_column('action', anchor(site_url('aplikan/detail/$1'),'<i class="fa fa-book"></i>Read','class="btn btn-info btn-xs edit"')."<a href='#' class='btn btn-info btn-xs' onclick='javasciprt: return _konfirmasi(\"$1\")'><i class='fa fa-money'></i> Konfirmasi  Pemabayaran</a> <a href='#' class='btn btn-danger btn-xs delete' onclick='javasciprt: return hapus($1)'><i class='fa fa-trash'></i> Delete</a>", 'no_pend');
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
    $this->db->like('id_aplikan', $q);
    $this->db->or_like('id_periode', $q);
    $this->db->or_like('no_pendaftaran', $q);
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
    $this->db->or_like('tgl_daftar', $q);
    $this->db->or_like('prodi_1', $q);
    $this->db->or_like('prodi_2', $q);
    $this->db->or_like('prodi_3', $q);
    $this->db->or_like('pembayaran', $q);
    $this->db->from($this->table);
    return $this->db->count_all_results();
}

    // get data with limit and search
function get_limit_data($limit, $start = 0, $q = NULL) {
    $this->db->order_by($this->id, $this->order);
    $this->db->like('id_aplikan', $q);
    $this->db->or_like('id_periode', $q);
    $this->db->or_like('no_pendaftaran', $q);
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
    $this->db->or_like('tgl_daftar', $q);
    $this->db->or_like('prodi_1', $q);
    $this->db->or_like('prodi_2', $q);
    $this->db->or_like('prodi_3', $q);
    $this->db->or_like('pembayaran', $q);
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


/*tambahana aplikan model*/
function tahun_akademik()
{
   $this->db->distinct('tahn_akademik');
   $this->db->from('periode');
   $this->db->where('buka','Y'); 
   $data = $this->db->get();
   return $data;  
} 

/*detai*/
function get_detail_pembayaran($id)
{ 
 $this->db->select('
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
 $this->db->from('aplikan a');
 $this->db->join('pembayaran b','a.no_pendaftaran = b.no_pendaftaran','left');
 $this->db->where('a.no_pendaftaran',$id);
 return $this->db->get();
}

}



