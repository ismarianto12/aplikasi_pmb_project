<?php 

/**
 * 
 */
class Depan_model extends CI_model
{
	
 function detail_data_aplikan($no_pendaftaran){ 
    $this->db->select('a.id_aplikan,a.id_periode,a.no_pendaftaran,a.nama,a.kelamin,a.tempatlahir,a.alamat,a.kota,a.propinsi,a.kodePos,a.rt,a.rW,a.telepon,a.email,a.no_hp,a.jenisSekolah,a.namaSekolah,a.jurusanSekolah,a.tahunLulus,a.nilaiSekolah,a.tgl_daftar,a.prodi_1,a.prodi_2,a.prodi_3,a.pembayaran,
    
	b.id_prodi,
	b.nama_prodi,
	b.kode_prodi,
	b.akreditasi,
	b.jenjang,
   
	c.id_periode,
	c.tahun_akademik,
	c.tahun,
	c.semester,
	c.buka,
	c.mulai,
	c.selesai,   
    	');
    $this->db->from('aplikan a');
    $this->db->join('prodi b','b.id_prodi= a.prodi_1','b.id_prodi= a.prodi_2','b.id_prodi= a.prodi_3','left');
 
    $this->db->join('periode c','a.id_periode= c.id_periode','left');
    $this->db->where('a.no_pendaftaran',$no_pendaftaran);
    return $this->db->get();  
 
 }	 


 function cek_data_pendaftaran($no_pendaftaran)
 {
   
    $this->db->select('a.id_aplikan,a.id_periode,a.no_pendaftaran,a.nama,a.kelamin,a.tempatlahir,a.alamat,a.kota,a.propinsi,a.kodePos,a.rt,a.rW,a.telepon,a.email,a.no_hp,a.jenisSekolah,a.namaSekolah,a.jurusanSekolah,a.tahunLulus,a.nilaiSekolah,a.tgl_daftar,a.prodi_1,a.prodi_2,a.prodi_3,a.pembayaran,
  
	b.id_prodi,
	b.nama_prodi,
	b.kode_prodi,
	b.akreditasi,
	b.jenjang,
   
	c.id_periode,
	c.tahun_akademik,
	c.tahun,
	c.semester,
	c.buka,
	c.mulai,
	c.selesai,   
    	');
    $this->db->from('aplikan a');
    $this->db->join('prodi b','b.id_prodi= a.prodi_1','b.id_prodi= a.prodi_2','b.id_prodi= a.prodi_3','left'); 
    $this->db->join('periode c','a.id_periode= c.id_periode','left');
    $this->db->where('a.no_pendaftaran',$no_pendaftaran);
    //$this->db->where('a.pembayaran','Y');
    return $this->db->get();  

 }



}