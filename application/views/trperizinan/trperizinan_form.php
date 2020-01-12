
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
                    <label for="varchar" class='control-label col-md-3'><b>N Perizinan<?php echo form_error('n_perizinan') ?></b></label>
                    <div class='col-md-9'>
                        <input type="text" class="form-control" name="n_perizinan" id="n_perizinan" placeholder="N Perizinan" value="<?php echo $n_perizinan; ?>" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="varchar" class='control-label col-md-3'><b>Initial<?php echo form_error('initial') ?></b></label>
                    <div class='col-md-9'>
                        <input type="text" class="form-control" name="initial" id="initial" placeholder="Initial" value="<?php echo $initial; ?>" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="smallint" class='control-label col-md-3'><b>C Tarif<?php echo form_error('c_tarif') ?></b></label>
                    <div class='col-md-9'>
                        <input type="text" class="form-control" name="c_tarif" id="c_tarif" placeholder="C Tarif" value="<?php echo $c_tarif; ?>" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="tinyint" class='control-label col-md-3'><b>Is Open<?php echo form_error('is_open') ?></b></label>
                    <div class='col-md-9'>
                        <input type="text" class="form-control" name="is_open" id="is_open" placeholder="Is Open" value="<?php echo $is_open; ?>" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="int" class='control-label col-md-3'><b>V Hari<?php echo form_error('v_hari') ?></b></label>
                    <div class='col-md-9'>
                        <input type="text" class="form-control" name="v_hari" id="v_hari" placeholder="V Hari" value="<?php echo $v_hari; ?>" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="int" class='control-label col-md-3'><b>V Berlaku Tahun<?php echo form_error('v_berlaku_tahun') ?></b></label>
                    <div class='col-md-9'>
                        <input type="text" class="form-control" name="v_berlaku_tahun" id="v_berlaku_tahun" placeholder="V Berlaku Tahun" value="<?php echo $v_berlaku_tahun; ?>" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="int" class='control-label col-md-3'><b>V Perizinan<?php echo form_error('v_perizinan') ?></b></label>
                    <div class='col-md-9'>
                        <input type="text" class="form-control" name="v_perizinan" id="v_perizinan" placeholder="V Perizinan" value="<?php echo $v_perizinan; ?>" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="smallint" class='control-label col-md-3'><b>C Foto<?php echo form_error('c_foto') ?></b></label>
                    <div class='col-md-9'>
                        <input type="text" class="form-control" name="c_foto" id="c_foto" placeholder="C Foto" value="<?php echo $c_foto; ?>" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="smallint" class='control-label col-md-3'><b>C Keputusan<?php echo form_error('c_keputusan') ?></b></label>
                    <div class='col-md-9'>
                        <input type="text" class="form-control" name="c_keputusan" id="c_keputusan" placeholder="C Keputusan" value="<?php echo $c_keputusan; ?>" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="varchar" class='control-label col-md-3'><b>Kode Ijin<?php echo form_error('kode_ijin') ?></b></label>
                    <div class='col-md-9'>
                        <input type="text" class="form-control" name="kode_ijin" id="kode_ijin" placeholder="Kode Ijin" value="<?php echo $kode_ijin; ?>" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="int" class='control-label col-md-3'><b>Id Bidang<?php echo form_error('id_bidang') ?></b></label>
                    <div class='col-md-9'>
                        <input type="text" class="form-control" name="id_bidang" id="id_bidang" placeholder="Id Bidang" value="<?php echo $id_bidang; ?>" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="varchar" class='control-label col-md-3'><b>No Rek<?php echo form_error('no_rek') ?></b></label>
                    <div class='col-md-9'>
                        <input type="text" class="form-control" name="no_rek" id="no_rek" placeholder="No Rek" value="<?php echo $no_rek; ?>" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="varchar" class='control-label col-md-3'><b>No Rek Denda<?php echo form_error('no_rek_denda') ?></b></label>
                    <div class='col-md-9'>
                        <input type="text" class="form-control" name="no_rek_denda" id="no_rek_denda" placeholder="No Rek Denda" value="<?php echo $no_rek_denda; ?>" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="blob" class='control-label col-md-3'><b>Keterangan<?php echo form_error('keterangan') ?></b></label>
                    <div class='col-md-9'>
                        <input type="text" class="form-control" name="keterangan" id="keterangan" placeholder="Keterangan" value="<?php echo $keterangan; ?>" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="tinyint" class='control-label col-md-3'><b>Is Peruntukan<?php echo form_error('is_peruntukan') ?></b></label>
                    <div class='col-md-9'>
                        <input type="text" class="form-control" name="is_peruntukan" id="is_peruntukan" placeholder="Is Peruntukan" value="<?php echo $is_peruntukan; ?>" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="tinyint" class='control-label col-md-3'><b>Id Kelompok Ijin<?php echo form_error('id_kelompok_ijin') ?></b></label>
                    <div class='col-md-9'>
                        <input type="text" class="form-control" name="id_kelompok_ijin" id="id_kelompok_ijin" placeholder="Id Kelompok Ijin" value="<?php echo $id_kelompok_ijin; ?>" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="varchar" class='control-label col-md-3'><b>Draft Sk<?php echo form_error('draft_sk') ?></b></label>
                    <div class='col-md-9'>
                        <input type="text" class="form-control" name="draft_sk" id="draft_sk" placeholder="Draft Sk" value="<?php echo $draft_sk; ?>" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="varchar" class='control-label col-md-3'><b>Draft Sertifikat<?php echo form_error('draft_sertifikat') ?></b></label>
                    <div class='col-md-9'>
                        <input type="text" class="form-control" name="draft_sertifikat" id="draft_sertifikat" placeholder="Draft Sertifikat" value="<?php echo $draft_sertifikat; ?>" />
                    </div>
                </div>
                <input type="hidden" name="id" value="<?php echo $id; ?>" /> 


                <div class='form-actions'>
                    <div class='row'>
                        <div class='col-md-12'>
                            <div class='row'>
                                <div class='col-md-offset-3 col-md-9'>
                                   <button type="submit" class="btn btn-info"><i class='fa fa-check'></i><?php echo $button ?></button> 
                                   <a href="<?php echo site_url('trperizinan') ?>" class="btn btn-default"><i class='fa fa-share'></i>Cancel</a>  
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
