<div class='row'>
<div class='col-md-12'>
<div class='panel panel-info'>
<div class='panel-heading'><small>Silakan isi terlebih dahulu bagian form yang kosong guna mencetak jadwal ujian</small> </div>
<div class='panel-wrapper collapse in' aria-expanded='true'>
   <br />
   <center> 
    <img src=" 
    <?php if(file_exists('assets/img/'.$foto)){
        echo base_url('assets/img/'.$foto);   
        }else{
            echo base_url('assets/img/no_image.jpg'); 
        }  ?>" class="img-responsive" style="width: 120px;height: 120px" onError="this.onerror=null;this.src='<?= base_url('assets/img/no_image.jpg') ?>';"> 
        </center>
        <hr /> 
        <div class='panel-body'>
            <form action="<?php echo $action; ?>" method="post" class='form-horizontal form-bordered'>
                <div class='form-body'>  
                  <br /><br /><br /><br /> 
                  <div class="col-md-6">
                      <div class="form-group"> 
                        <label for="int" class='control-label col-md-3'><b>Periode<?php echo form_error('id_periode') ?></b></label>
                        <div class='col-md-9'>
                            <input type="hidden"  name="id_periode" value="<?php echo $id_periode; ?>" />
                            <input type="text" readonly="true" class="form-control" value="<?= $nama_periode ?>">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="varchar" class='control-label col-md-3'><b>No Pendaftaran<?php echo form_error('no_pendaftaran') ?></b></label>
                        <div class='col-md-9'>
                            <input type="text" class="form-control" name="no_pendaftaran" id="no_pendaftaran" placeholder="No Pendaftaran" value="<?php echo $no_pendaftaran; ?>" disabled="true"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="varchar" class='control-label col-md-3'><b>Nama<?php echo form_error('nama') ?></b></label>
                    <div class='col-md-9'>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="<?php echo $nama; ?>" />
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="enum" class='control-label col-md-3'><b>Kelamin<?php echo form_error('kelamin') ?></b></label>
                    <div class='col-md-9'>
                       <select class="form-control" nama="kelamin">
                        <?php $jk = array ("L"=>'Laki-Laki',
                         "P"=>"Perempuan"
                     );
                     foreach($jk as $kel =>$val): ?>
                       <option value="<?= $kel ?>" <?= ($kel == $kelamin) ?  "selected" :'' ; ?>><?= $val ?></option>
                   <?php endforeach ?>
               </select>
           </div>
       </div>
   </div>
   <div class="col-md-6">
    <div class="form-group">
        <label for="varchar" class='control-label col-md-3'><b>Tempat lahir<?php echo form_error('tempatlahir') ?></b></label>
        <div class='col-md-9'>
            <input type="text" class="form-control" name="tempatlahir" id="tempatlahir" placeholder="Tempatlahir" value="<?php echo $tempatlahir; ?>" />
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <label for="varchar" class='control-label col-md-3'><b>Alamat<?php echo form_error('alamat') ?></b></label>
        <div class='col-md-9'>
            <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" value="<?php echo $alamat; ?>" />
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <label for="varchar" class='control-label col-md-3'><b>Kota<?php echo form_error('kota') ?></b></label>
        <div class='col-md-9'>
            <input type="text" class="form-control" name="kota" id="kota" placeholder="Kota" value="<?php echo $kota; ?>" />
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <label for="varchar" class='control-label col-md-3'><b>Propinsi<?php echo form_error('propinsi') ?></b></label>
        <div class='col-md-9'>
            <input type="text" class="form-control" name="propinsi" id="propinsi" placeholder="Propinsi" value="<?php echo $propinsi; ?>" />
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <label for="varchar" class='control-label col-md-3'><b>KodePos<?php echo form_error('kodePos') ?></b></label>
        <div class='col-md-9'>
            <input type="text" class="form-control" name="kodePos" id="kodePos" placeholder="KodePos" value="<?php echo $kodePos; ?>" />
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <label for="varchar" class='control-label col-md-3'><b>Rt<?php echo form_error('rt') ?></b></label>
        <div class='col-md-9'>
            <input type="text" class="form-control" name="rt" id="rt" placeholder="Rt" value="<?php echo $rt; ?>" />
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <label for="varchar" class='control-label col-md-3'><b>RW<?php echo form_error('rW') ?></b></label>
        <div class='col-md-9'>
            <input type="text" class="form-control" name="rW" id="rW" placeholder="RW" value="<?php echo $rW; ?>" />
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <label for="varchar" class='control-label col-md-3'><b>Telepon<?php echo form_error('telepon') ?></b></label>
        <div class='col-md-9'>
            <input type="text" class="form-control" name="telepon" id="telepon" placeholder="Telepon" value="<?php echo $telepon; ?>" />
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <label for="varchar" class='control-label col-md-3'><b>Handphone<?php echo form_error('handphone') ?></b></label>
        <div class='col-md-9'>
            <input type="text" class="form-control" name="handphone" id="handphone" placeholder="Handphone" value="<?php echo $handphone; ?>" />
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <label for="varchar" class='control-label col-md-3'><b>Email<?php echo form_error('email') ?></b></label>
        <div class='col-md-9'>
            <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>" />
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <label for="varchar" class='control-label col-md-3'><b>No Hp<?php echo form_error('no_hp') ?></b></label>
        <div class='col-md-9'>
            <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="No Hp" value="<?php echo $no_hp; ?>" />
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <label for="enum" class='control-label col-md-3'><b>Jenis Sekolah<?php echo form_error('jenisSekolah') ?></b></label>
        <div class='col-md-9'>
            <input type="text" class="form-control" name="jenisSekolah" id="jenisSekolah" placeholder="JenisSekolah" value="<?php echo $jenisSekolah; ?>" />
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <label for="varchar" class='control-label col-md-3'><b>Nama Sekolah<?php echo form_error('namaSekolah') ?></b></label>
        <div class='col-md-9'>
            <input type="text" class="form-control" name="namaSekolah" id="namaSekolah" placeholder="NamaSekolah" value="<?php echo $namaSekolah; ?>" />
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <label for="varchar" class='control-label col-md-3'><b>Jurusan Sekolah<?php echo form_error('jurusanSekolah') ?></b></label>
        <div class='col-md-9'>
            <input type="text" class="form-control" name="jurusanSekolah" id="jurusanSekolah" placeholder="JurusanSekolah" value="<?php echo $jurusanSekolah; ?>" />
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <label for="varchar" class='control-label col-md-3'><b>Tahun Lulus<?php echo form_error('tahunLulus') ?></b></label>
        <div class='col-md-9'>
            <input type="text" class="form-control" name="tahunLulus" id="tahunLulus" placeholder="TahunLulus" value="<?php echo $tahunLulus; ?>" />
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <label for="varchar" class='control-label col-md-3'><b>Nilai Sekolah<?php echo form_error('nilaiSekolah') ?></b></label>
        <div class='col-md-9'>
            <input type="text" class="form-control" name="nilaiSekolah" id="nilaiSekolah" placeholder="NilaiSekolah" value="<?php echo $nilaiSekolah; ?>" />
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <label for="varchar" class='control-label col-md-3'><b>No Ijazah<?php echo form_error('no_ijazah') ?></b></label>
        <div class='col-md-9'>
            <input type="text" class="form-control" name="no_ijazah" id="no_ijazah" placeholder="No Ijazah" value="<?php echo $no_ijazah; ?>" />
        </div>
    </div>
</div> 
<div class="col-md-6">
    <div class="form-group">
        <label for="varchar" class='control-label col-md-3'><b>Nama Ayah<?php echo form_error('namaAyah') ?></b></label>
        <div class='col-md-9'>
            <input type="text" class="form-control" name="namaAyah" id="namaAyah" placeholder="NamaAyah" value="<?php echo $namaAyah; ?>" />
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <label for="varchar" class='control-label col-md-3'><b>Pendidikan Ayah<?php echo form_error('pendidikanAyah') ?></b></label>
        <div class='col-md-9'>
            <input type="text" class="form-control" name="pendidikanAyah" id="pendidikanAyah" placeholder="PendidikanAyah" value="<?php echo $pendidikanAyah; ?>" />
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <label for="varchar" class='control-label col-md-3'><b>Pekerjaan Ayah<?php echo form_error('pekerjaanAyah') ?></b></label>
        <div class='col-md-9'>
            <input type="text" class="form-control" name="pekerjaanAyah" id="pekerjaanAyah" placeholder="PekerjaanAyah" value="<?php echo $pekerjaanAyah; ?>" />
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <label for="catatan" class='control-label col-md-3'><b>Catatan<?php echo form_error('catatan') ?></b></label>

        <div class='col-md-9'>
            <textarea class="form-control" rows="3" name="catatan" id="catatan" placeholder="Catatan"><?php echo $catatan; ?></textarea>
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <label for="varchar" class='control-label col-md-3'><b>Jurusan<?php echo form_error('jurusan') ?></b></label>
        <div class='col-md-9'>
            <input type="text" class="form-control" name="jurusan" id="jurusan" placeholder="Jurusan" value="<?php echo $jurusan; ?>" />
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <label for="varchar" class='control-label col-md-3'><b>Sumberinfo<?php echo form_error('sumberinfo') ?></b></label>
        <div class='col-md-9'>
            <input type="text" class="form-control" name="sumberinfo" id="sumberinfo" placeholder="Sumberinfo" value="<?php echo $sumberinfo; ?>" />
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <label for="date" class='control-label col-md-3'><b>Tgl Daftar<?php echo form_error('tgl_daftar') ?></b></label>
        <div class='col-md-9'>
            <input type="text" class="form-control" name="tgl_daftar" id="tgl_daftar" placeholder="Tgl Daftar" value="<?php echo $tgl_daftar; ?>" />
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <label for="int" class='control-label col-md-3'><b>Prodi 1<?php echo form_error('prodi_1') ?></b></label>
        <div class='col-md-9'>
            <input type="text" class="form-control" name="prodi_1" id="prodi_1" placeholder="Prodi 1" value="<?php echo $prodi_1; ?>" readonly="true"/>
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <label for="int" class='control-label col-md-3'><b>Prodi 2<?php echo form_error('prodi_2') ?></b></label>
        <div class='col-md-9'>
            <input type="text" class="form-control" name="prodi_2" id="prodi_2" placeholder="Prodi 2" value="<?php echo $prodi_2; ?>"  readonly="true"/>
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <label for="int" class='control-label col-md-3'><b>Prodi 3<?php echo form_error('prodi_3') ?></b></label>
        <div class='col-md-9'>
            <input type="text" class="form-control" name="prodi_3" id="prodi_3" placeholder="Prodi 3" value="<?php echo $prodi_3; ?>" readonly="true"/>
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <label for="enum" class='control-label col-md-3'><b>Pembayaran<?php echo form_error('pembayaran') ?></b></label>
        <div class='col-md-9'>
            <?= ($pembayaran == 'Y') ?  "<div class='alert alert-danger'>Lunas</div>" : "";  ?>
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <label for="enum" class='control-label col-md-3'><b>Lulus<?php echo form_error('lulus') ?></b></label>
        <div class='col-md-9'>
            <input type="text" class="form-control" name="lulus" id="lulus" placeholder="Lulus" value="<?php echo $lulus; ?>" />
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <label for="varchar" class='control-label col-md-3'><b>Program Pen<?php echo form_error('program_pen') ?></b></label>
        <div class='col-md-9'>
            <input type="text" class="form-control" name="program_pen" id="program_pen" placeholder="Program Pen" value="<?php echo $program_pen; ?>" />
        </div>
    </div>
</div>
<input type="hidden" name="id_pendaftar" value="<?php echo $id_pendaftar; ?>" />   
<div class='form-actions'>
    <div class='row'>
        <div class='col-md-12'>
            <div class='row'>
                <div class='col-md-offset-3 col-md-9'>
                   <button type="submit" class="btn btn-info"><i class='fa fa-check'></i><?php echo $button ?></button> 
                   <a href="<?php echo site_url('pendaftar/cetak/data') ?>" class="btn btn-warning"><i class='fa fa-print'></i>Print Data</a>
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
