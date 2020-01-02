
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
                            <label for="varchar" class='control-label col-md-3'><b>Kode Hukum<?php echo form_error('KodeHukum') ?></b></label>
                            <div class='col-md-9'>
                                <input type="text" class="form-control" name="KodeHukum" id="KodeHukum" placeholder="KodeHukum" value="<?php echo $KodeHukum; ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="varchar" class='control-label col-md-3'><b>Kode Institusi<?php echo form_error('KodeInstitusi') ?></b></label>
                            <div class='col-md-9'>
                                <input type="text" class="form-control" name="KodeInstitusi" id="KodeInstitusi" placeholder="KodeInstitusi" value="<?php echo $KodeInstitusi; ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="varchar" class='control-label col-md-3'><b>Nama<?php echo form_error('Nama') ?></b></label>
                            <div class='col-md-9'>
                                <input type="text" class="form-control" name="Nama" id="Nama" placeholder="Nama" value="<?php echo $Nama; ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="date" class='control-label col-md-3'><b>Tgl Mulai Yayasan /Institusi<?php echo form_error('TglMulai') ?></b></label>
                            <div class='col-md-9'>
                                <input type="date" class="form-control" name="TglMulai" id="TglMulai" placeholder="TglMulai" value="<?php echo $TglMulai; ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="varchar" class='control-label col-md-3'><b>Alamat 1<?php echo form_error('Alamat1') ?></b></label>
                            <div class='col-md-9'>
                                <input type="text" class="form-control" name="Alamat1" id="Alamat1" placeholder="Alamat1" value="<?php echo $Alamat1; ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="varchar" class='control-label col-md-3'><b>Alamat 2<?php echo form_error('Alamat2') ?></b></label>
                            <div class='col-md-9'>
                                <input type="text" class="form-control" name="Alamat2" id="Alamat2" placeholder="Alamat2" value="<?php echo $Alamat2; ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="varchar" class='control-label col-md-3'><b>Kota<?php echo form_error('Kota') ?></b></label>
                            <div class='col-md-9'>
                                <input type="text" class="form-control" name="Kota" id="Kota" placeholder="Kota" value="<?php echo $Kota; ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="varchar" class='control-label col-md-3'><b>Kode Pos<?php echo form_error('KodePos') ?></b></label>
                            <div class='col-md-9'>
                                <input type="text" class="form-control" name="KodePos" id="KodePos" placeholder="KodePos" value="<?php echo $KodePos; ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="varchar" class='control-label col-md-3'><b>Telepon<?php echo form_error('Telepon') ?></b></label>
                            <div class='col-md-9'>
                                <input type="text" class="form-control" name="Telepon" id="Telepon" placeholder="Telepon" value="<?php echo $Telepon; ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="varchar" class='control-label col-md-3'><b>Fax<?php echo form_error('Fax') ?></b></label>
                            <div class='col-md-9'>
                                <input type="text" class="form-control" name="Fax" id="Fax" placeholder="Fax" value="<?php echo $Fax; ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="varchar" class='control-label col-md-3'><b>Email<?php echo form_error('Email') ?></b></label>
                            <div class='col-md-9'>
                                <input type="text" class="form-control" name="Email" id="Email" placeholder="Email" value="<?php echo $Email; ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="varchar" class='control-label col-md-3'><b>Website<?php echo form_error('Website') ?></b></label>
                            <div class='col-md-9'>
                                <input type="text" class="form-control" name="Website" id="Website" placeholder="Website" value="<?php echo $Website; ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="varchar" class='control-label col-md-3'><b>No Akta<?php echo form_error('NoAkta') ?></b></label>
                            <div class='col-md-9'>
                                <input type="text" class="form-control" name="NoAkta" id="NoAkta" placeholder="NoAkta" value="<?php echo $NoAkta; ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="date" class='control-label col-md-3'><b>Tgl Akta<?php echo form_error('TglAkta') ?></b></label>
                            <div class='col-md-9'>
                                <input type="text" class="form-control" name="TglAkta" id="TglAkta" placeholder="TglAkta" value="<?php echo $TglAkta; ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="varchar" class='control-label col-md-3'><b>No Sah<?php echo form_error('NoSah') ?></b></label>
                            <div class='col-md-9'>
                                <input type="text" class="form-control" name="NoSah" id="NoSah" placeholder="NoSah" value="<?php echo $NoSah; ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="date" class='control-label col-md-3'><b>Tanggal Sah<?php echo form_error('TglSah') ?></b></label>
                            <div class='col-md-9'>
                                <input type="text" class="form-control" name="TglSah" id="TglSah" placeholder="TglSah" value="<?php echo $TglSah; ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="varchar" class='control-label col-md-3'><b>Logo<?php echo form_error('Logo') ?></b></label>
                            <div class='col-md-9'>
                                <input type="text" class="form-control" name="Logo" id="Logo" placeholder="Logo" value="<?php echo $Logo; ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="bigint" class='control-label col-md-3'><b>Start No Identitas<?php echo form_error('StartNoIdentitas') ?></b></label>
                            <div class='col-md-9'>
                                <input type="text" class="form-control" name="StartNoIdentitas" id="StartNoIdentitas" placeholder="StartNoIdentitas" value="<?php echo $StartNoIdentitas; ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="bigint" class='control-label col-md-3'><b>No Identitas<?php echo form_error('NoIdentitas') ?></b></label>
                            <div class='col-md-9'>
                                <input type="text" class="form-control" name="NoIdentitas" id="NoIdentitas" placeholder="NoIdentitas" value="<?php echo $NoIdentitas; ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="CatatanDPNA" class='control-label col-md-3'><b>Catatan DPNA<?php echo form_error('CatatanDPNA') ?></b></label>

                            <div class='col-md-9'>
                                <textarea class="form-control" rows="3" name="CatatanDPNA" id="CatatanDPNA" placeholder="CatatanDPNA"><?php echo $CatatanDPNA; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="CatatanKursiUAS" class='control-label col-md-3'><b>CatatanKursiUAS<?php echo form_error('CatatanKursiUAS') ?></b></label>

                            <div class='col-md-9'>
                                <textarea class="form-control" rows="3" name="CatatanKursiUAS" id="CatatanKursiUAS" placeholder="CatatanKursiUAS"><?php echo $CatatanKursiUAS; ?></textarea>
                            </div>
                        </div>
                        <input type="hidden" name="Kode" value="<?php echo $Kode; ?>" /> 


                        <div class='form-actions'>
                            <div class='row'>
                                <div class='col-md-12'>
                                    <div class='row'>
                                        <div class='col-md-offset-3 col-md-9'>
                                           <button type="submit" class="btn btn-info"><i class='fa fa-check'></i><?php echo $button ?></button> 
                                           <a href="<?php echo site_url('identitas') ?>" class="btn btn-default"><i class='fa fa-share'></i>Cancel</a>


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
