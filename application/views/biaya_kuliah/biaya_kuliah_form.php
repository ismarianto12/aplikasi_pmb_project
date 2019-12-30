
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
                            <label for="int" class='control-label col-md-3'><b>Prodi<?php echo form_error('id_prodi') ?></b></label>
                            <div class='col-md-9'> 
                                <select name="id_prodi" class="form-control">
                                    <?php foreach($this->db->get('prodi')->result_array() as $sql): 
                                    $selected = ($sql['id_prodi'] == $id_prodi) ? 'selected' : '';
                                    ?>
                                    <option value="<?= $sql['id_prodi'] ?>" <?= $selected ?>><?= $sql['nama_prodi'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="int" class='control-label col-md-3'><b>Jumlah<?php echo form_error('jumlah') ?></b></label>
                        <div class='col-md-9'>
                            <input type="text" class="form-control" name="jumlah" id="jumlah" placeholder="Jumlah" value="<?php echo $jumlah; ?>" />
                        </div>
                    </div>
                    <input type="hidden" name="id_biaya" value="<?php echo $id_biaya; ?>" /> 


                    <div class='form-actions'>
                        <div class='row'>
                            <div class='col-md-12'>
                                <div class='row'>
                                    <div class='col-md-offset-3 col-md-9'>
                                     <button type="submit" class="btn btn-info"><i class='fa fa-check'></i><?php echo $button ?></button> 
                                     <a href="<?php echo site_url('biaya_kuliah') ?>" class="btn btn-default"><i class='fa fa-share'></i>Cancel</a>


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
