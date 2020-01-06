<?php 
 /*edit bagian mode by ismarianto*/
 
class Pendaftar_model extends CI_model
{
	
	function __construct()
	{ 
		parent::__construct();
	}

	function cek_pendaftaran($no_pendaftaran)
	{  
		$this->db->select('
			a.id_pendaftar,
			a.id_periode,
			a.no_pendaftaran as no_pend,
			a.nomor_pmb,
			a.password,
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
			a.handphone,
			a.email,
			a.no_hp,a.jenisSekolah,
			a.namaSekolah,
			a.jurusanSekolah,
			a.tahunLulus,
			a.nilaiSekolah,
			a.no_ijazah,
			a.prog_pendidikan,
			a.namaAyah,
			a.pendidikanAyah,
			a.pekerjaanAyah,
			a.catatan,
			a.jurusan,
			a.sumberinfo,
			a.tgl_daftar,
			a.prodi_1,
			a.prodi_2,
			a.prodi_3,
			a.pembayaran,
			a.lulus,
			a.program_pen,  
			a.foto,

			b.id_periode,b.tahun_akademik,b.tahun,b.semester,b.buka,b.mulai,b.selesai,

			c.id_bayar,c.no_pendaftaran,c.jumlah,c.file_pembayaran,c.tanggal,c.id_user,

			d.id_prodi,d.nama_prodi,d.kode_prodi,d.akreditasi,d.jenjang
			');
		$this->db->from('pmb a'); 
		$this->db->join('periode b', 'a.id_periode = b.id_periode','left');
		$this->db->join('pembayaran c', 'a.no_pendaftaran = c.no_pendaftaran','left');
		$this->db->join('prodi d','d.id_prodi= a.prodi_1','d.id_prodi= a.prodi_2','d.id_prodi= a.prodi_3','left');  
		$this->db->where('a.no_pendaftaran',$no_pendaftaran); 
		return $this->db->get();
	}

}