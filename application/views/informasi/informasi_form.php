
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
            <label for="int" class='control-label col-md-3'><b>Id Admin<?php echo form_error('id_admin') ?></b></label>
            <div class='col-md-9'>
            <input type="text" class="form-control" name="id_admin" id="id_admin" placeholder="Id Admin" value="<?php echo $id_admin; ?>" />
        </div>
    </div>
	 <div class="form-group">
            <label for="varchar" class='control-label col-md-3'><b>Judul Informasi<?php echo form_error('judul_informasi') ?></b></label>
            <div class='col-md-9'>
            <input type="text" class="form-control" name="judul_informasi" id="judul_informasi" placeholder="Judul Informasi" value="<?php echo $judul_informasi; ?>" />
        </div>
    </div>
	    <div class="form-group">
            <label for="isi" class='control-label col-md-3'><b>Isi<?php echo form_error('isi') ?></b></label>

             <div class='col-md-9'>
            <textarea class="form-control" rows="3" name="isi" id="isi" placeholder="Isi"><?php echo $isi; ?></textarea>
        </div>
    </div>
	 <div class="form-group">
            <label for="varchar" class='control-label col-md-3'><b>Gambar<?php echo form_error('gambar') ?></b></label>
            <div class='col-md-9'>
            <input type="text" class="form-control" name="gambar" id="gambar" placeholder="Gambar" value="<?php echo $gambar; ?>" />
        </div>
    </div>
	 <div class="form-group">
            <label for="date" class='control-label col-md-3'><b>Tanggal<?php echo form_error('tanggal') ?></b></label>
            <div class='col-md-9'>
            <input type="text" class="form-control" name="tanggal" id="tanggal" placeholder="Tanggal" value="<?php echo $tanggal; ?>" />
        </div>
    </div>
	 <div class="form-group">
            <label for="int" class='control-label col-md-3'><b>Hits<?php echo form_error('hits') ?></b></label>
            <div class='col-md-9'>
            <input type="text" class="form-control" name="hits" id="hits" placeholder="Hits" value="<?php echo $hits; ?>" />
        </div>
    </div>
	 <div class="form-group">
            <label for="enum" class='control-label col-md-3'><b>Ket<?php echo form_error('ket') ?></b></label>
            <div class='col-md-9'>
            <input type="text" class="form-control" name="ket" id="ket" placeholder="Ket" value="<?php echo $ket; ?>" />
        </div>
    </div>
	    <input type="hidden" name="id_informasi" value="<?php echo $id_informasi; ?>" /> 
	   

<div class='form-actions'>
    <div class='row'>
        <div class='col-md-12'>
            <div class='row'>
                <div class='col-md-offset-3 col-md-9'>
 <button type="submit" class="btn btn-info"><i class='fa fa-check'></i><?php echo $button ?></button> 
	    <a href="<?php echo site_url('informasi') ?>" class="btn btn-default"><i class='fa fa-share'></i>Cancel</a>
	

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
