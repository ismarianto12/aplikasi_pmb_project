<script type="text/javascript">
     $(function(){
         $('#cancel').click(function(e){
            e.preventDefault();
            $('#tampil_data').hide().slideUp('slow');
         });

      $('#simpan').submit(function(e){
         e.preventDefault();
         var action = $(this).attr('to');
         var data_inputan  = $(this).serialize();
         
        if($('input[name="program"]').val() == ''){
           swal('keterangan','program tidak boleh kosong','error');     
        }else if($('input[name="id_periode"]').val() == ''){
          swal('keterangan','program tidak boleh kosong','error');     
        } 
        $.ajax({
          url : action,
          type :'post',
          data : data_inputan, 
          dataType:'json',
          success:function(data){
            if (data.status == 22) { 
               swal('keterangan','data berhasil ditamahkan','success');
               $(this).find(':input').val('');
             }else{
                swal('keterangan','data tidak dapat di proses karerna tidak konek ke server','error');
             }  
           $('#datatables').DataTable().ajax.reload();
         },error:function(data){
            $('#notifikasi').html('<div class="alert alert-danger">data tidak dapat di simpan</div>');   
         }  
        });    
       });
  
     })   
</script>

<div class='row'>
    <div class='col-md-12'>
        <div class='panel panel-info'>
            <div class='panel-heading'><?= ucfirst($judul) ?></div>
            <div class='panel-wrapper collapse in' aria-expanded='true'>
                <div class='panel-body'>
                    <form to="<?php echo $action; ?>" id="simpan"  method="post" class='form-horizontal form-bordered'>
                        <div class='form-body'> 
                         ** ) Harap Isikan data yang di butuhkan pada form.
                         <br /><br /><br /><br /> 
                         <div class="form-group">
                            <label for="int" class='control-label col-md-3'><b>Periode / Tahun Akademik</b></label>
                            <div class='col-md-9'>
                                <select class="form-control" id="id_periode" name="id_periode"> 
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
                                     <button id="simpan" class="btn btn-info"><i class='fa fa-check'></i><?php echo $button ?></button> 
                                     <button id="cancel" class="btn btn-default"><i class='fa fa-share'></i>Cancel</button> 

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
