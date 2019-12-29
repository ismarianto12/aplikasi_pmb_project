<?php 

class Dasboard_model extends CI_model{ 

/*jumlah surat dasboard*/

/*graph for archive*/
function grap_arsip()
{ 
 
  $this->db->select('a.id_arsip,a.id_jenis,a.id_pejabat,a.nama_arsip,a.file_arsip,a.jumlah,a.id_satuan,a.lokasi,a.ket_isi,a.tanggal as tgl_arsip,a.permision,count(a.id_arsip) as jum_arsip,

    b.id_jenis,b.jenis_arsip,b.create_id,b.create_date,

    c.id_user,c.username,c.nama,c.level,c.email,c.log,
    d.id_satuan,d.nama_satuan,d.keterangan,
    e.id_lokasi,e.nama_lokasi,e.tanggal  
    ');
  $this->db->from('arsip a');  
  $this->db->join('jenis_arsip b', 'b.id_jenis=a.id_jenis','left');
  $this->db->join('login c', 'c.id_user=a.id_pejabat','left');
  $this->db->join('m_satuan d', 'a.id_satuan=d.id_satuan','left');
  $this->db->join('lokasi e', 'e.id_lokasi=a.lokasi','left'); 
  $this->db->group_by('a.tanggal');
  return $this->db->get();
}  
/*end graph*/

function j_surat_masuk(){
  return $this->db->get_where('tbl_surat_masuk',array('disposisi'=>'y')); 
} 

/*end hitungan untuk jumlah surat */
function surat_masuk(){
   $this->db->select('id_surat,no_agenda,no_surat,asal_surat,isi,kode,indeks,tgl_surat,tgl_diterima,file,keterangan,id_user,count(disposisi) = "y" as y_disposisi, count(disposisi) = "n" as no_disposisi'); 
   $this->db->from('tbl_surat_masuk');
   $this->db->group_by('tgl_diterima');
   return $this->db->get();  
}
function surat_keluar(){
   $this->db->select(' 
        count(id_surat) as jumlah,
        no_agenda,
        id_jenis_surat,
        tujuan,
        no_surat,
        isi,
        kode,
        tgl_surat,
        tgl_catat,
        file,
        keterangan,
        id_user 
    ');
   $this->db->from('tbl_surat_keluar');
   $this->db->group_by('tgl_surat');
   return $this->db->get();  
 }

  /*end date get*/ 
  function grap_surat_masuk(){
    $this->db->select('tgl_diterima,sum(disposisi ="n") as no_disposisi,sum(disposisi ="y") as disposisi');
    $this->db->from('tbl_surat_masuk');
    $this->db->group_by('tgl_diterima');  
    return $this->db->get();
  } 

  function grap_surat_keluar(){
    $this->db->select('tgl_surat,COUNT(id_surat) as jum');
    $this->db->from('tbl_surat_keluar');
    $this->db->group_by('tgl_surat');  
    return $this->db->get();
  }
  
/*end*/


}

// y_disposisi
// no_disposisi