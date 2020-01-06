
<div class='row'>
<div class='col-md-12'>
<div class='panel panel-info'>
<div class='panel-heading'><?= ucfirst($judul) ?></div>
<div class='panel-wrapper collapse in' aria-expanded='true'>

<div class="alert alert-danger">Hanya ada satu tahun akademik yang aktif</div>

<div class='panel-body'>
    <form action="<?php echo $action; ?>" method="post" class='form-horizontal form-bordered'>
        <div class='form-body'> 
         ** ) Harap Isikan data yang di butuhkan pada form.
         <br /><br /><br /><br /> 
         <div class="form-group">
            <label for="varchar" class='control-label col-md-3'><b>Tahun Akademik<?php echo form_error('tahun_akademik') ?></b></label>
            <div class='col-md-9'>
                <input type="text" class="form-control" name="tahun_akademik" id="tahun_akademik" placeholder="Tahun Akademik" value="<?php echo $tahun_akademik; ?>" />
            </div>
        </div>
        <div class="form-group">
            <label for="int" class='control-label col-md-3'><b>Tahun<?php echo form_error('tahun') ?></b></label>
            <div class='col-md-9'>
                <input type="text" class="form-control" name="tahun" id="tahun" placeholder="Tahun" value="<?php echo $tahun; ?>" />
            </div>
        </div>
        <div class="form-group">
            <label for="enum" class='control-label col-md-3'><b>Semester<?php echo form_error('semester') ?></b></label>
            <div class='col-md-9'>
                <input type="text" class="form-control" name="semester" id="semester" placeholder="Semester" value="<?php echo $semester; ?>" />
            </div>
        </div>
 
      <div class="form-group">
        <label for="date" class='control-label col-md-3'><b>Mulai<?php echo form_error('mulai') ?></b></label>
        <div class='col-md-9'>
            <input type="text" class="form-control" name="mulai" id="mulai" placeholder="Mulai" value="<?php echo $mulai; ?>" />
        </div>
    </div>
    <div class="form-group">
        <label for="date" class='control-label col-md-3'><b>Selesai<?php echo form_error('selesai') ?></b></label>
        <div class='col-md-9'>
            <input type="text" class="form-control" name="selesai" id="selesai" placeholder="Selesai" value="<?php echo $selesai; ?>" />
        </div>
    </div>
    <input type="hidden" name="id_periode" value="<?php echo $id_periode; ?>" /> 


    <div class='form-actions'>
        <div class='row'>
            <div class='col-md-12'>
                <div class='row'>
                    <div class='col-md-offset-3 col-md-9'>
                     <button type="submit" class="btn btn-info"><i class='fa fa-check'></i><?php echo $button ?></button> 
                     <a href="<?php echo site_url('periode') ?>" class="btn btn-default"><i class='fa fa-share'></i>Cancel</a>


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
