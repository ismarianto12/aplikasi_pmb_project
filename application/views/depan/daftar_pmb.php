<div class='row'>
    <div class='col-md-12'>
        <div class='panel panel-info'>
            <div class='panel-heading'><?= ucfirst($judul) ?></div>
            <div class='panel-wrapper collapse in' aria-expanded='true'>
                <div class='panel-body'> 
                  <h3 class="box-title m-t-40">Data Pribadi</h3>
                  <hr />
                  <form action="<?php echo $action; ?>" method="post" class='form-horizontal form-bordered'>
                    <div class='form-body'> 
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
                               <select class="form-control" name="kelamin">
                                   <option value="L">Laki laki</option>
                                   <option value="P">Perempuan</option> 
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
                            <label for="varchar" class='control-label col-md-3'><b>Kode Pos<?php echo form_error('kodePos') ?></b></label>
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
                            <label for="varchar" class='control-label col-md-3'><b>Handphone<?php echo form_error('no_hp') ?></b></label>
                            <div class='col-md-9'>
                                <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="Nomor Hand phone" value="<?php echo $no_hp; ?>" /> 
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
                    <h3 class="box-title m-t-40">Data Sekolah</h3>
                    <hr />
                    <div class="clearfix"></div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="enum" class='control-label col-md-3'><b>Jenis Sekolah<?php echo form_error('jenisSekolah') ?></b></label>
                            <div class='col-md-9'>
                                <select class="form-control" name="jenisSekolah">
                                    <option value="Swasta">Swasta</option>
                                    <option value="Negri">Negri</option>
                                    
                                </select>
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
                    <div class="clearfix"></div>
                    <!-- pilihan prodi -->
                    <h3 class="box-title m-t-40">Pilihan Prodi</h3>
                    <hr />
                    <!-- end pilihan prodi -->
                    <div class="form-group">
                        <label for="int" class='control-label col-md-3'><b>Pilihan Program Studi 1<?php echo form_error('prodi_1') ?></b></label>
                        <div class='col-md-9'> 
                            <select class="form-control" name="prodi_1">
                                <?php foreach($data_prodi->result_array() as $data): ?>
                                 <option value="<?= $data['id_prodi'] ?>"><?= $data['nama_prodi'] ?></option>   
                               <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                     
                    <div class="form-group">
                        <label for="int" class='control-label col-md-3'><b>Pilihan Program Studi II <?php echo form_error('prodi_1') ?></b></label>
                        <div class='col-md-9'> 
                            <select class="form-control" name="prodi_2">
                                <?php foreach($data_prodi->result_array() as $data): ?>
                                   <option value="<?= $data['id_prodi'] ?>"><?= $data['nama_prodi'] ?></option>   
                               <?php endforeach; ?>
                           </select>
                       </div>
                   </div>
 
                    
                   <div class="form-group">
                    <label for="int" class='control-label col-md-3'><b>Pilihan Program Studi III <?php echo form_error('prodi_1') ?></b></label>
                    <div class='col-md-9'> 
                        <select class="form-control" name="prodi_3">
                            <?php foreach($data_prodi->result_array() as $data): ?>
                             <option value="<?= $data['id_prodi'] ?>"><?= $data['nama_prodi'] ?></option>   
                         <?php endforeach; ?>
                     </select>
                 </div>
                 </div>

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
