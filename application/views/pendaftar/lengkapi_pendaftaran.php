
<div class='row'>
<div class='col-md-12'>
<div class='panel panel-info'>
<div class='panel-heading'><?= ucfirst($judul) ?></div>
<div class='panel-wrapper collapse in' aria-expanded='true'>
<div class='panel-body'>
<form action="<?php echo $action; ?>" method="post" class='form-horizontal form-bordered'>
    <div class='form-body'> 
       ** ) Harap Isikan data yang di butuhkan pada form.
       <br /><br /><br /><br /> 
       <div class="form-group">
        <label for="int" class='control-label col-md-3'><b>Periode<?php echo form_error('id_periode') ?></b></label>
        <div class='col-md-9'>
            <input type="text" class="form-control" name="id_periode" id="id_periode" placeholder="Id Periode" value="<?php echo $id_periode; ?>" />
        </div>
    </div>
    <div class="form-group">
        <label for="varchar" class='control-label col-md-3'><b>No Pendaftaran<?php echo form_error('no_pendaftaran') ?></b></label>
        <div class='col-md-9'>
            <input type="text" class="form-control" name="no_pendaftaran" id="no_pendaftaran" placeholder="No Pendaftaran" value="<?php echo $no_pendaftaran; ?>" />
        </div>
    </div>
    <div class="form-group">
        <label for="varchar" class='control-label col-md-3'><b>Nomor Pmb<?php echo form_error('nomor_pmb') ?></b></label>
        <div class='col-md-9'>
            <input type="text" class="form-control" name="nomor_pmb" id="nomor_pmb" placeholder="Nomor Pmb" value="<?php echo $nomor_pmb; ?>" />
        </div>
    </div>
    <div class="form-group">
        <label for="varchar" class='control-label col-md-3'><b>Password<?php echo form_error('password') ?></b></label>
        <div class='col-md-9'>
            <input type="text" class="form-control" name="password" id="password" placeholder="Password" value="<?php echo $password; ?>" />
        </div>
    </div>
    <div class="form-group">
        <label for="varchar" class='control-label col-md-3'><b>Nama<?php echo form_error('nama') ?></b></label>
        <div class='col-md-9'>
            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="<?php echo $nama; ?>" />
        </div>
    </div>
    <div class="form-group">
        <label for="enum" class='control-label col-md-3'><b>Kelamin<?php echo form_error('kelamin') ?></b></label>
        <div class='col-md-9'>
            <input type="text" class="form-control" name="kelamin" id="kelamin" placeholder="Kelamin" value="<?php echo $kelamin; ?>" />
        </div>
    </div>
    <div class="form-group">
        <label for="varchar" class='control-label col-md-3'><b>Tempatlahir<?php echo form_error('tempatlahir') ?></b></label>
        <div class='col-md-9'>
            <input type="text" class="form-control" name="tempatlahir" id="tempatlahir" placeholder="Tempatlahir" value="<?php echo $tempatlahir; ?>" />
        </div>
    </div>
    <div class="form-group">
        <label for="varchar" class='control-label col-md-3'><b>Alamat<?php echo form_error('alamat') ?></b></label>
        <div class='col-md-9'>
            <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" value="<?php echo $alamat; ?>" />
        </div>
    </div>
    <div class="form-group">
        <label for="varchar" class='control-label col-md-3'><b>Kota<?php echo form_error('kota') ?></b></label>
        <div class='col-md-9'>
            <input type="text" class="form-control" name="kota" id="kota" placeholder="Kota" value="<?php echo $kota; ?>" />
        </div>
    </div>
    <div class="form-group">
        <label for="varchar" class='control-label col-md-3'><b>Propinsi<?php echo form_error('propinsi') ?></b></label>
        <div class='col-md-9'>
            <input type="text" class="form-control" name="propinsi" id="propinsi" placeholder="Propinsi" value="<?php echo $propinsi; ?>" />
        </div>
    </div>
    <div class="form-group">
        <label for="varchar" class='control-label col-md-3'><b>KodePos<?php echo form_error('kodePos') ?></b></label>
        <div class='col-md-9'>
            <input type="text" class="form-control" name="kodePos" id="kodePos" placeholder="KodePos" value="<?php echo $kodePos; ?>" />
        </div>
    </div>
    <div class="form-group">
        <label for="varchar" class='control-label col-md-3'><b>Rt<?php echo form_error('rt') ?></b></label>
        <div class='col-md-9'>
            <input type="text" class="form-control" name="rt" id="rt" placeholder="Rt" value="<?php echo $rt; ?>" />
        </div>
    </div>
    <div class="form-group">
        <label for="varchar" class='control-label col-md-3'><b>RW<?php echo form_error('rW') ?></b></label>
        <div class='col-md-9'>
            <input type="text" class="form-control" name="rW" id="rW" placeholder="RW" value="<?php echo $rW; ?>" />
        </div>
    </div>
    <div class="form-group">
        <label for="varchar" class='control-label col-md-3'><b>Telepon<?php echo form_error('telepon') ?></b></label>
        <div class='col-md-9'>
            <input type="text" class="form-control" name="telepon" id="telepon" placeholder="Telepon" value="<?php echo $telepon; ?>" />
        </div>
    </div>
    <div class="form-group">
        <label for="varchar" class='control-label col-md-3'><b>Handphone<?php echo form_error('handphone') ?></b></label>
        <div class='col-md-9'>
            <input type="text" class="form-control" name="handphone" id="handphone" placeholder="Handphone" value="<?php echo $handphone; ?>" />
        </div>
    </div>
    <div class="form-group">
        <label for="varchar" class='control-label col-md-3'><b>Email<?php echo form_error('email') ?></b></label>
        <div class='col-md-9'>
            <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>" />
        </div>
    </div>
    <div class="form-group">
        <label for="varchar" class='control-label col-md-3'><b>No Hp<?php echo form_error('no_hp') ?></b></label>
        <div class='col-md-9'>
            <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="No Hp" value="<?php echo $no_hp; ?>" />
        </div>
    </div>
    <div class="form-group">
        <label for="enum" class='control-label col-md-3'><b>JenisSekolah<?php echo form_error('jenisSekolah') ?></b></label>
        <div class='col-md-9'>
            <input type="text" class="form-control" name="jenisSekolah" id="jenisSekolah" placeholder="JenisSekolah" value="<?php echo $jenisSekolah; ?>" />
        </div>
    </div>
    <div class="form-group">
        <label for="varchar" class='control-label col-md-3'><b>NamaSekolah<?php echo form_error('namaSekolah') ?></b></label>
        <div class='col-md-9'>
            <input type="text" class="form-control" name="namaSekolah" id="namaSekolah" placeholder="NamaSekolah" value="<?php echo $namaSekolah; ?>" />
        </div>
    </div>
    <div class="form-group">
        <label for="varchar" class='control-label col-md-3'><b>JurusanSekolah<?php echo form_error('jurusanSekolah') ?></b></label>
        <div class='col-md-9'>
            <input type="text" class="form-control" name="jurusanSekolah" id="jurusanSekolah" placeholder="JurusanSekolah" value="<?php echo $jurusanSekolah; ?>" />
        </div>
    </div>
    <div class="form-group">
        <label for="varchar" class='control-label col-md-3'><b>TahunLulus<?php echo form_error('tahunLulus') ?></b></label>
        <div class='col-md-9'>
            <input type="text" class="form-control" name="tahunLulus" id="tahunLulus" placeholder="TahunLulus" value="<?php echo $tahunLulus; ?>" />
        </div>
    </div>
    <div class="form-group">
        <label for="varchar" class='control-label col-md-3'><b>NilaiSekolah<?php echo form_error('nilaiSekolah') ?></b></label>
        <div class='col-md-9'>
            <input type="text" class="form-control" name="nilaiSekolah" id="nilaiSekolah" placeholder="NilaiSekolah" value="<?php echo $nilaiSekolah; ?>" />
        </div>
    </div>
    <div class="form-group">
        <label for="varchar" class='control-label col-md-3'><b>No Ijazah<?php echo form_error('no_ijazah') ?></b></label>
        <div class='col-md-9'>
            <input type="text" class="form-control" name="no_ijazah" id="no_ijazah" placeholder="No Ijazah" value="<?php echo $no_ijazah; ?>" />
        </div>
    </div>
    <div class="form-group">
        <label for="enum" class='control-label col-md-3'><b>Prog Pendidikan<?php echo form_error('prog_pendidikan') ?></b></label>
        <div class='col-md-9'>
            <input type="text" class="form-control" name="prog_pendidikan" id="prog_pendidikan" placeholder="Prog Pendidikan" value="<?php echo $prog_pendidikan; ?>" />
        </div>
    </div>
    <div class="form-group">
        <label for="varchar" class='control-label col-md-3'><b>NamaAyah<?php echo form_error('namaAyah') ?></b></label>
        <div class='col-md-9'>
            <input type="text" class="form-control" name="namaAyah" id="namaAyah" placeholder="NamaAyah" value="<?php echo $namaAyah; ?>" />
        </div>
    </div>
    <div class="form-group">
        <label for="varchar" class='control-label col-md-3'><b>PendidikanAyah<?php echo form_error('pendidikanAyah') ?></b></label>
        <div class='col-md-9'>
            <input type="text" class="form-control" name="pendidikanAyah" id="pendidikanAyah" placeholder="PendidikanAyah" value="<?php echo $pendidikanAyah; ?>" />
        </div>
    </div>
    <div class="form-group">
        <label for="varchar" class='control-label col-md-3'><b>PekerjaanAyah<?php echo form_error('pekerjaanAyah') ?></b></label>
        <div class='col-md-9'>
            <input type="text" class="form-control" name="pekerjaanAyah" id="pekerjaanAyah" placeholder="PekerjaanAyah" value="<?php echo $pekerjaanAyah; ?>" />
        </div>
    </div>
    <div class="form-group">
        <label for="catatan" class='control-label col-md-3'><b>Catatan<?php echo form_error('catatan') ?></b></label>

        <div class='col-md-9'>
            <textarea class="form-control" rows="3" name="catatan" id="catatan" placeholder="Catatan"><?php echo $catatan; ?></textarea>
        </div>
    </div>
    <div class="form-group">
        <label for="varchar" class='control-label col-md-3'><b>Jurusan<?php echo form_error('jurusan') ?></b></label>
        <div class='col-md-9'>
            <input type="text" class="form-control" name="jurusan" id="jurusan" placeholder="Jurusan" value="<?php echo $jurusan; ?>" />
        </div>
    </div>
    <div class="form-group">
        <label for="varchar" class='control-label col-md-3'><b>Sumberinfo<?php echo form_error('sumberinfo') ?></b></label>
        <div class='col-md-9'>
            <input type="text" class="form-control" name="sumberinfo" id="sumberinfo" placeholder="Sumberinfo" value="<?php echo $sumberinfo; ?>" />
        </div>
    </div>
    <div class="form-group">
        <label for="date" class='control-label col-md-3'><b>Tgl Daftar<?php echo form_error('tgl_daftar') ?></b></label>
        <div class='col-md-9'>
            <input type="text" class="form-control" name="tgl_daftar" id="tgl_daftar" placeholder="Tgl Daftar" value="<?php echo $tgl_daftar; ?>" />
        </div>
    </div>
    <div class="form-group">
        <label for="int" class='control-label col-md-3'><b>Prodi 1<?php echo form_error('prodi_1') ?></b></label>
        <div class='col-md-9'>
            <input type="text" class="form-control" name="prodi_1" id="prodi_1" placeholder="Prodi 1" value="<?php echo $prodi_1; ?>" />
        </div>
    </div>
    <div class="form-group">
        <label for="int" class='control-label col-md-3'><b>Prodi 2<?php echo form_error('prodi_2') ?></b></label>
        <div class='col-md-9'>
            <input type="text" class="form-control" name="prodi_2" id="prodi_2" placeholder="Prodi 2" value="<?php echo $prodi_2; ?>" />
        </div>
    </div>
    <div class="form-group">
        <label for="int" class='control-label col-md-3'><b>Prodi 3<?php echo form_error('prodi_3') ?></b></label>
        <div class='col-md-9'>
            <input type="text" class="form-control" name="prodi_3" id="prodi_3" placeholder="Prodi 3" value="<?php echo $prodi_3; ?>" />
        </div>
    </div>
    <div class="form-group">
        <label for="enum" class='control-label col-md-3'><b>Pembayaran<?php echo form_error('pembayaran') ?></b></label>
        <div class='col-md-9'>
            <input type="text" class="form-control" name="pembayaran" id="pembayaran" placeholder="Pembayaran" value="<?php echo $pembayaran; ?>" />
        </div>
    </div>
    <div class="form-group">
        <label for="enum" class='control-label col-md-3'><b>Lulus<?php echo form_error('lulus') ?></b></label>
        <div class='col-md-9'>
            <input type="text" class="form-control" name="lulus" id="lulus" placeholder="Lulus" value="<?php echo $lulus; ?>" />
        </div>
    </div>
    <div class="form-group">
        <label for="varchar" class='control-label col-md-3'><b>Program Pen<?php echo form_error('program_pen') ?></b></label>
        <div class='col-md-9'>
            <input type="text" class="form-control" name="program_pen" id="program_pen" placeholder="Program Pen" value="<?php echo $program_pen; ?>" />
        </div>
    </div>
    <input type="hidden" name="id_pendaftar" value="<?php echo $id_pendaftar; ?>" /> 


    <div class='form-actions'>
        <div class='row'>
            <div class='col-md-12'>
                <div class='row'>
                    <div class='col-md-offset-3 col-md-9'>
                       <button type="submit" class="btn btn-info"><i class='fa fa-check'></i><?php echo $button ?></button> 
                       <a href="<?php echo site_url('pmb') ?>" class="btn btn-default"><i class='fa fa-share'></i>Cancel</a>


                   </div>
               </div>
           </div>
       </div>
   </div>
</form>
</div>
</div>
</div>
</div>
</div>
