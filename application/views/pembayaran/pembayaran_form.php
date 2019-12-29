
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
                            <label for="int" class='control-label col-md-3'><b>Id Bayar<?php echo form_error('id_bayar') ?></b></label>
                            <div class='col-md-9'>
                                <input type="text" class="form-control" name="id_bayar" id="id_bayar" placeholder="Id Bayar" value="<?php echo $id_bayar; ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="varchar" class='control-label col-md-3'><b>No Pendaftaran<?php echo form_error('no_pendaftaran') ?></b></label>
                            <div class='col-md-9'>
                                <input type="text" class="form-control" name="no_pendaftaran" id="no_pendaftaran" placeholder="No Pendaftaran" value="<?php echo $no_pendaftaran; ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="varchar" class='control-label col-md-3'><b>Jumlah<?php echo form_error('jumlah') ?></b></label>
                            <div class='col-md-9'>
                                <input type="text" class="form-control" name="jumlah" id="jumlah" placeholder="Jumlah" value="<?php echo $jumlah; ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="varchar" class='control-label col-md-3'><b>File Pembayaran<?php echo form_error('file_pembayaran') ?></b></label>
                            <div class='col-md-9'>
                                <input type="text" class="form-control" name="file_pembayaran" id="file_pembayaran" placeholder="File Pembayaran" value="<?php echo $file_pembayaran; ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="date" class='control-label col-md-3'><b>Tanggal<?php echo form_error('tanggal') ?></b></label>
                            <div class='col-md-9'>
                                <input type="text" class="form-control" name="tanggal" id="tanggal" placeholder="Tanggal" value="<?php echo $tanggal; ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="int" class='control-label col-md-3'><b>Id User<?php echo form_error('id_user') ?></b></label>
                            <div class='col-md-9'>
                                <input type="text" class="form-control" name="id_user" id="id_user" placeholder="Id User" value="<?php echo $id_user; ?>" />
                            </div>
                        </div>
                        <input type="hidden" name="" value="<?php echo $; ?>" /> 
                        

                        <div class='form-actions'>
                            <div class='row'>
                                <div class='col-md-12'>
                                    <div class='row'>
                                        <div class='col-md-offset-3 col-md-9'>
                                         <button type="submit" class="btn btn-info"><i class='fa fa-check'></i><?php echo $button ?></button> 
                                         <a href="<?php echo site_url('pembayaran') ?>" class="btn btn-default"><i class='fa fa-share'></i>Cancel</a>
                                         

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
