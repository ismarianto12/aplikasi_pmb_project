
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
                    <label for="varchar" class='control-label col-md-3'><b>Nama Prodi<?php echo form_error('nama_prodi') ?></b></label>
                    <div class='col-md-9'>
                        <input type="text" class="form-control" name="nama_prodi" id="nama_prodi" placeholder="Nama Prodi" value="<?php echo $nama_prodi; ?>" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="varchar" class='control-label col-md-3'><b>Kode Prodi<?php echo form_error('kode_prodi') ?></b></label>
                    <div class='col-md-9'>
                        <input type="text" class="form-control" name="kode_prodi" id="kode_prodi" placeholder="Kode Prodi" value="<?php echo $kode_prodi; ?>" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="varchar" class='control-label col-md-3'><b>Akreditasi<?php echo form_error('akreditasi') ?></b></label>
                    <div class='col-md-9'>
                        <input type="text" class="form-control" name="akreditasi" id="akreditasi" placeholder="Akreditasi" value="<?php echo $akreditasi; ?>" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="varchar" class='control-label col-md-3'><b>Jenjang<?php echo form_error('jenjang') ?></b></label>
                    <div class='col-md-9'>
                        <input type="text" class="form-control" name="jenjang" id="jenjang" placeholder="Jenjang" value="<?php echo $jenjang; ?>" />
                    </div>
                </div>
                <input type="hidden" name="id_prodi" value="<?php echo $id_prodi; ?>" /> 
                

                <div class='form-actions'>
                    <div class='row'>
                        <div class='col-md-12'>
                            <div class='row'>
                                <div class='col-md-offset-3 col-md-9'>
                                   <button type="submit" class="btn btn-info"><i class='fa fa-check'></i><?php echo $button ?></button> 
                                   <a href="<?php echo site_url('prodi') ?>" class="btn btn-default"><i class='fa fa-share'></i>Cancel</a>
                                   

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
