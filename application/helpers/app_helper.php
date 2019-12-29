<?php 

 function nama_gelombang($param){
   $CI =& get_instance();
   $CI->db->distinct('tahn_akademik');
   $CI->db->from('periode');
   $CI->db->where('buka','Y'); 
   $data = $CI->db->get()->row();
   return $data->$param; 
 }


 function nomor_pendaftaran()
 {
  $tahun = nama_gelombang('tahun');

  $CI =& get_instance();
  $CI->db->select('max(id_aplikan) as nomor_daftar');
  $CI->db->from('aplikan');
  $CI->db->order_by('id_aplikan','asc');
  $data = $CI->db->get()->row(); 
  if($data->nomor_daftar == 0):
  	$nomor = 1;
  else:
    $nomor = $data->nomor_daftar;
  endif;
  return  'PMB-STAI-'.$tahun.'-'.$nomor;  
 }