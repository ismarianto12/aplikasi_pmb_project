<?php if($sql->num_rows() > 0): 
      $data = $sql->row();

	?> 
	<!DOCTYPE html>
	<html>
	<head>
		<title>Detail Data Pendaftaran Peserta</title>
	</head>
	<link href="<?= base_url() ?>assets/template/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/template/css/style.css" rel="stylesheet">
	<body>  
		<div class='row'>
			<div class='col-md-12'>
				<div class='panel panel-info'>
					<div class='panel-heading'><?= ucfirst($judul) ?></div>
					<div class='panel-wrapper collapse in' aria-expanded='true'>
						<div class='panel-body'> 
							<h3 class="box-title m-t-40">Data Pribadi</h3>
							<hr />
						 		<div class='form-body'> 
									<div class="col-md-6">
										<div class="form-group">
											<label for="varchar" class='control-label col-md-3'><b>Nama</b></label>
											<div class='col-md-9'>
												<?= $data->nama ?>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="enum" class='control-label col-md-3'><b>Kelamin</b></label>
											<div class='col-md-9'>
												<?= ($data->kelamin =='L') ? 'Laki - Laki' : 'Perempuan'; ?>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="varchar" class='control-label col-md-3'><b>Tempat lahir</b></label>
											<div class='col-md-9'> 
												<?= $data->tempatlahir ?>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="varchar" class='control-label col-md-3'><b>Alamat</b></label>
											<div class='col-md-9'> 
												<?= $data->alamat ?>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="varchar" class='control-label col-md-3'><b>Kota</b></label>
											<div class='col-md-9'> 
												<?= $data->kota ?>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="varchar" class='control-label col-md-3'><b>Propinsi</b></label>
											<div class='col-md-9'>
												<?= $data->propinsi ?>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="varchar" class='control-label col-md-3'><b>Kode Pos</b></label>
											<div class='col-md-9'>
												<?= $data->kodePos ?>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="varchar" class='control-label col-md-3'><b>Rt</b></label>
											<div class='col-md-9'>
												<?= $data->rt ?>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="varchar" class='control-label col-md-3'><b>RW</b></label>
											<div class='col-md-9'>
												<?= $data->rW ?>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="varchar" class='control-label col-md-3'><b>Telepon</b></label>
											<div class='col-md-9'> 
												<?= $data->telepon ?>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="varchar" class='control-label col-md-3'><b>Handphone</label>
												<div class='col-md-9'>
													<?= $data->no_hp ?>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="varchar" class='control-label col-md-3'><b>Email</b></label>
												<?= $data->email ?>
											</div>
										</div>
										<h3 class="box-title m-t-40">Data Sekolah</h3>
										<hr />
										<div class="clearfix"></div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="enum" class='control-label col-md-3'><b>Jenis Sekolah</b></label>
												<div class='col-md-9'> 
													<?= $data->jenisSekolah ?>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="varchar" class='control-label col-md-3'><b>Nama Sekolah</b></label>
												<div class='col-md-9'> 
													<?= $data->namaSekolah ?>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="varchar" class='control-label col-md-3'><b>Jurusan Sekolah</b></label>
												<div class='col-md-9'>
													<?= $data->jurusanSekolah ?>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="varchar" class='control-label col-md-3'><b>Tahun Lulus</b></label>
												<div class='col-md-9'> 
													<?= $data->tahunLulus ?>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="varchar" class='control-label col-md-3'><b>Nilai Sekolah * ) <small>Rata-Rata Nilai Raport</small></b></label>
												<div class='col-md-9'>
													<?= $data->nilaiSekolah ?>
												</div>
											</div>
										</div> 
										<div class="clearfix"></div>
										<!-- pilihan prodi -->
										<h3 class="box-title m-t-40">Pilihan Prodi</h3>
										<hr />
										<!-- end pilihan prodi -->
										<div class="form-group">
											<label for="int" class='control-label col-md-3'><b>Pilihan 1 </b></label>
											<div class='col-md-9'> 
												<?= $data->nama_prodi ?>
											</div>
										</div>

										<div class="form-group">
											<label for="int" class='control-label col-md-3'><b>Pilihan 2 </b></label>
											<div class='col-md-9'> 
												<?= $data->nama_prodi ?>
											</div>
										</div>

										<div class="form-group">
											<label for="int" class='control-label col-md-3'><b>Pilihan 3 </b></label>
											<div class='col-md-9'> 
												<?= $data->nama_prodi ?>
											</div>
										</div>

										<div class='form-actions'>
											<div class='row'>
												<div class='col-md-12'>
													<div class='row'>
														<div class='col-md-offset-3 col-md-9'>
															<button type="submit" class="btn btn-info"><i class='fa fa-check'></i>Cetak</button> 
															<a href="<?php echo site_url('aplikan') ?>" class="btn btn-default"><i class='fa fa-share'></i>Cancel</a>  
														</div>
													</div>
												</div>
											</div>
										</div>
										<?php if($data->pembayaran == 'y'): ?>
											<h3>Pembayaran Formuli Ini Belum Lunas.</h3>
											<?php elseif($data->pembayaran == 'y'): ?>
												<h3>Pembayaran Formuli Ini Belum Lunas.</h3>
											<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
				</div>

		 
				</body>
				</html> 
			<?php else: 
				redirect(base_url());
				endif; ?>