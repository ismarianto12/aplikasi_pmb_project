
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
            <label for="int" class='control-label col-md-3'><b>Id Periode<?php echo form_error('id_periode') ?></b></label>
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
	    <input type="hidden" name="id_aplikan" value="<?php echo $id_aplikan; ?>" /> 
	   

<div class='form-actions'>
    <div class='row'>
        <div class='col-md-12'>
            <div class='row'>
                <div class='col-md-offset-3 col-md-9'>
 <button type="submit" class="btn btn-info"><i class='fa fa-check'></i><?php echo $button ?></button> 
	    <a href="<?php echo site_url('aplikan') ?>" class="btn btn-default"><i class='fa fa-share'></i>Cancel</a>
	

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
