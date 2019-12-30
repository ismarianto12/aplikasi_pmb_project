
<div class='row'>
	<div class='col-md-12'>
		<div class='panel panel-info'>
			<div class='panel-heading'><?= ucfirst($judul) ?></div>
			<div class='panel-wrapper collapse in' aria-expanded='true'>
				<div class='panel-body'>  
					<h3 class="box-title m-t-40">Konfirmasi Pembayaran Formulir</h3>
					<hr />
					<div id="formulir">
						<form id="Konfirmasi" method="post" class='form-horizontal form-bordered' enctype="multipart-form/data">
							<div class='form-body'> 
								<div class="col-md-9">
									<div class="form-group">
										<label for="varchar" class='control-label col-md-3'><b>Nomor Pendaftaran.</b></label>
										<div class='col-md-9'>
											<input type="text" class="form-control" name="no_pendaftaran" id="no_pendaftaran" placeholder="Nomor Pendaftaran " value="" />
										</div>
									</div>
								</div>

								<div class="col-md-9">
									<div class="form-group">
										<label for="varchar" class='control-label col-md-3'><b>Upload Bukti Pembayaran.</b></label>
										<div class='col-md-9'>
											<input type="file" class="form-control" name="file_pembayaran" id="file_pembayaran" placeholder="File " value="" />
										</div>
									</div>
								</div>
								<div class="col-md-9">
									<div class="form-group">
										<label for="varchar" class='control-label col-md-3'><b>Masukan Jumlah Nominal.</b></label>
										<div class='col-md-9'>
											<input type="text" class="form-control" name="jumlah" id="jumlah" placeholder="Jumlah Nominal" value="" />
										</div>
									</div>
								</div>
							</div>
							<div class='form-actions'>
								<div class='row'>
									<div class='col-md-12'>
										<div class='row'>
											<div class='col-md-offset-3 col-md-9'>
												<button id="Konfirmasi" type="submit" class="btn btn-info"><i class='fa fa-check'></i>Konfirmasi.</button> 
												<a href="<?= base_url() ?>" class="btn btn-default"><i class='fa fa-share'></i>Cancel</a>  
											</div>
										</div>
									</div>
								</div>
							</div>
						</form>  
						<div id="detail_formulir"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(function(){
		$('#Konfirmasi').submit(function(e){
			e.preventDefault();
			var dataString = new FormData(this);
			$.ajax({
				url :'<?= base_url('upload_action.jsp') ?>',
				type:'post',
				data: dataString,
				contentType: false,
				processData: false,
				cache: false,  
				dataType:'json',
				beforeSend:function(data){
					$('.panel-body').css('opacity','.5');
					swal('please waat...','sedang mambaca data upload harap tunggu sebentar','info');
				},success:function(data){
					if(data.pesan == 'berhasil'){
						swal('keterangan','harap bersabar data pembayaran anda sendang di verifikasi.','success');
						//$('#formulir').hide();
						$('#detail_formulir').html('<div class="alert alert-info">Nomor Pendaftaran anda sedang di verifikasi harap cek kembali pada cek pendaftaran </div>');
					}else{
						swal('keterangan',data.pesan,'error');
						$('.panel-body').css('opacity',0);
					}  
				},error:function(data){

				}
			});
		});  
	}); 
</script>