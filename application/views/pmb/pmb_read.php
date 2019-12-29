 
<div class='row'>
    <div class='col-sm-12'>
      <?= $this->session->userdata('message') ?>
      <div class='white-box'>
         <h3 class='box-title m-b-0'><?= ucfirst($judul) ?></h3> 
   <div class='table-responsive'>  
        
        <table class="table">
	    <tr><td>Id Periode</td><td><?php echo $id_periode; ?></td></tr>
	    <tr><td>No Pendaftaran</td><td><?php echo $no_pendaftaran; ?></td></tr>
	    <tr><td>Nomor Pmb</td><td><?php echo $nomor_pmb; ?></td></tr>
	    <tr><td>Password</td><td><?php echo $password; ?></td></tr>
	    <tr><td>Nama</td><td><?php echo $nama; ?></td></tr>
	    <tr><td>Kelamin</td><td><?php echo $kelamin; ?></td></tr>
	    <tr><td>Tempatlahir</td><td><?php echo $tempatlahir; ?></td></tr>
	    <tr><td>Alamat</td><td><?php echo $alamat; ?></td></tr>
	    <tr><td>Kota</td><td><?php echo $kota; ?></td></tr>
	    <tr><td>Propinsi</td><td><?php echo $propinsi; ?></td></tr>
	    <tr><td>KodePos</td><td><?php echo $kodePos; ?></td></tr>
	    <tr><td>Rt</td><td><?php echo $rt; ?></td></tr>
	    <tr><td>RW</td><td><?php echo $rW; ?></td></tr>
	    <tr><td>Telepon</td><td><?php echo $telepon; ?></td></tr>
	    <tr><td>Handphone</td><td><?php echo $handphone; ?></td></tr>
	    <tr><td>Email</td><td><?php echo $email; ?></td></tr>
	    <tr><td>No Hp</td><td><?php echo $no_hp; ?></td></tr>
	    <tr><td>JenisSekolah</td><td><?php echo $jenisSekolah; ?></td></tr>
	    <tr><td>NamaSekolah</td><td><?php echo $namaSekolah; ?></td></tr>
	    <tr><td>JurusanSekolah</td><td><?php echo $jurusanSekolah; ?></td></tr>
	    <tr><td>TahunLulus</td><td><?php echo $tahunLulus; ?></td></tr>
	    <tr><td>NilaiSekolah</td><td><?php echo $nilaiSekolah; ?></td></tr>
	    <tr><td>No Ijazah</td><td><?php echo $no_ijazah; ?></td></tr>
	    <tr><td>Prog Pendidikan</td><td><?php echo $prog_pendidikan; ?></td></tr>
	    <tr><td>NamaAyah</td><td><?php echo $namaAyah; ?></td></tr>
	    <tr><td>PendidikanAyah</td><td><?php echo $pendidikanAyah; ?></td></tr>
	    <tr><td>PekerjaanAyah</td><td><?php echo $pekerjaanAyah; ?></td></tr>
	    <tr><td>Catatan</td><td><?php echo $catatan; ?></td></tr>
	    <tr><td>Jurusan</td><td><?php echo $jurusan; ?></td></tr>
	    <tr><td>Sumberinfo</td><td><?php echo $sumberinfo; ?></td></tr>
	    <tr><td>Tgl Daftar</td><td><?php echo $tgl_daftar; ?></td></tr>
	    <tr><td>Prodi 1</td><td><?php echo $prodi_1; ?></td></tr>
	    <tr><td>Prodi 2</td><td><?php echo $prodi_2; ?></td></tr>
	    <tr><td>Prodi 3</td><td><?php echo $prodi_3; ?></td></tr>
	    <tr><td>Pembayaran</td><td><?php echo $pembayaran; ?></td></tr>
	    <tr><td>Lulus</td><td><?php echo $lulus; ?></td></tr>
	    <tr><td>Program Pen</td><td><?php echo $program_pen; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('pmb') ?>" class="btn btn-default"><i class='fa fa-home'></i>Back To Home</a></td></tr>
	</table>
</div>
</div>
</div>
</div>