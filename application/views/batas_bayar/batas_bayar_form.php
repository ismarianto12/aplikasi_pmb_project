
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
                            <label for="int" class='control-label col-md-3'><b>Periode / Tahun Akademik</b></label>
                            <div class='col-md-9'>
                                <select class="form-control" id="id_periode"> 
                                    <?php foreach($tahun_akademik->result_array() as $data): ?>    <option value="<?= $data['id_periode'] ?>"><?= $data['tahun_akademik'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="varchar" class='control-label col-md-3'><b>Program<?php echo form_error('program') ?></b></label>
                        <div class='col-md-9'>
                            <input type="text" class="form-control" name="program" id="program" placeholder="Program" value="<?php echo $program; ?>" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="date" class='control-label col-md-3'><b>Tahun Mulai<?php echo form_error('tahun_mulai') ?></b></label>
                        <div class='col-md-9'>
                            <input type="date" class="form-control" name="tahun_mulai" id="tahun_mulai" placeholder="Tahun Mulai" value="<?php echo $tahun_mulai; ?>" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="date" class='control-label col-md-3'><b>Batas <?php echo form_error('batas_') ?></b></label>
                        <div class='col-md-9'>
                            <input type="date" class="form-control" name="batas_" id="batas_" placeholder="Batas " value="<?php echo $batas_; ?>" />
                        </div>
                    </div>
                    <input type="hidden" name="id_batas" value="<?php echo $id_batas; ?>" /> 


                    <div class='form-actions'>
                        <div class='row'>
                            <div class='col-md-12'>
                                <div class='row'>
                                    <div class='col-md-offset-3 col-md-9'>
                                     <button type="submit" class="btn btn-info"><i class='fa fa-check'></i><?php echo $button ?></button> 
                                     <a href="<?php echo site_url('batas_bayar') ?>" class="btn btn-default"><i class='fa fa-share'></i>Cancel</a>


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
