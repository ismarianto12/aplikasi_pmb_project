<div class='row'>
	<div class='col-md-12'>
		<div class='panel panel-info'>
			<div class='panel-heading'><?= ucfirst($judul) ?></div>
			<div class='panel-wrapper collapse in' aria-expanded='true'>
				<div class='panel-body'>  
					<h3 class="box-title m-t-40">Konfirmasi Pembayaran Formulir</h3>
					<hr />
					<form method="POST" class='form-horizontal form-bordered'>
						<div class='form-body'> 
							<div class="col-md-9">
								<div class="form-group">
									<label for="varchar" class='control-label col-md-3'><b>Entrikan Nomor pembayaran formulir.</b></label>
									<div class='col-md-9'>
										<input type="text" class="form-control" name="nomor_pendaftaran" id="nomor_pendaftaran" placeholder="Nomor Pembayaran" value="" />
									</div>
								</div>
							</div>
						</div>
						<div class='form-actions'>
							<div class='row'>
								<div class='col-md-12'>
									<div class='row'>
										<div class='col-md-offset-3 col-md-9'>
											<button id="check_pendaftaran" class="btn btn-info"><i class='fa fa-check'></i>Konfirmasi.</button> 
											<a href="<?= base_url() ?>" class="btn btn-default"><i class='fa fa-share'></i>Cancel</a>  
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

<script type="text/javascript">
  $(function(){ 
    var nomor_pendaftaran = $('#nomor_pendaftaran').val();
    $('#check_pendaftaran').click(function(e){
      e.preventDefault();
      if (nomor_pendaftaran == '') {
       swal('keterangan','form isian tidak boleh kosong','error');
      }else{ 
      $.ajax({
         url:'<?= base_url('cek_login_action.aspx') ?>',
         type :'post',
         data:'id_pendaftaran='+id_pendaftaran,
         chace :false,
         dataType:'html',
         beforeSend:function(){
          $('#panel-body').css('opacity',0.6);
         },success:function(data){  
           $('#tampil_detail_pendaftar').html(data);
         },error:function(data){
           swal('error','server tidak dapat response harap coba lagi','error');
         } 
      });
     }
    });
  });	 

</script>