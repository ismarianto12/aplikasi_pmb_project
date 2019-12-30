 
<div class='row'>
	<div class='col-sm-12'>
		<?= $this->session->userdata('message') ?>
		<div class='white-box'>
			<h3 class='box-title m-b-0'><?= ucfirst($judul) ?></h3> 
			<div class='table-responsive'>  
				
				<table class="table">
					<tr><td>Nama Prodi</td><td><?php echo $nama_prodi; ?></td></tr>
					<tr><td>Kode Prodi</td><td><?php echo $kode_prodi; ?></td></tr>
					<tr><td>Akreditasi</td><td><?php echo $akreditasi; ?></td></tr>
					<tr><td>Jenjang</td><td><?php echo $jenjang; ?></td></tr>
					<tr><td></td><td><a href="<?php echo site_url('prodi') ?>" class="btn btn-default"><i class='fa fa-home'></i>Back To Home</a></td></tr>
				</table>
			</div>
		</div>
	</div>
</div>