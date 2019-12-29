 
<div class='row'>
    <div class='col-sm-12'>
      <?= $this->session->userdata('message') ?>
      <div class='white-box'>
         <h3 class='box-title m-b-0'><?= ucfirst($judul) ?></h3> 
   <div class='table-responsive'>  
        
        <table class="table">
	    <tr><td>KodeHukum</td><td><?php echo $KodeHukum; ?></td></tr>
	    <tr><td>KodeInstitusi</td><td><?php echo $KodeInstitusi; ?></td></tr>
	    <tr><td>Nama</td><td><?php echo $Nama; ?></td></tr>
	    <tr><td>TglMulai</td><td><?php echo $TglMulai; ?></td></tr>
	    <tr><td>Alamat1</td><td><?php echo $Alamat1; ?></td></tr>
	    <tr><td>Alamat2</td><td><?php echo $Alamat2; ?></td></tr>
	    <tr><td>Kota</td><td><?php echo $Kota; ?></td></tr>
	    <tr><td>KodePos</td><td><?php echo $KodePos; ?></td></tr>
	    <tr><td>Telepon</td><td><?php echo $Telepon; ?></td></tr>
	    <tr><td>Fax</td><td><?php echo $Fax; ?></td></tr>
	    <tr><td>Email</td><td><?php echo $Email; ?></td></tr>
	    <tr><td>Website</td><td><?php echo $Website; ?></td></tr>
	    <tr><td>NoAkta</td><td><?php echo $NoAkta; ?></td></tr>
	    <tr><td>TglAkta</td><td><?php echo $TglAkta; ?></td></tr>
	    <tr><td>NoSah</td><td><?php echo $NoSah; ?></td></tr>
	    <tr><td>TglSah</td><td><?php echo $TglSah; ?></td></tr>
	    <tr><td>Logo</td><td><?php echo $Logo; ?></td></tr>
	    <tr><td>StartNoIdentitas</td><td><?php echo $StartNoIdentitas; ?></td></tr>
	    <tr><td>NoIdentitas</td><td><?php echo $NoIdentitas; ?></td></tr>
	    <tr><td>CatatanDPNA</td><td><?php echo $CatatanDPNA; ?></td></tr>
	    <tr><td>CatatanKursiUAS</td><td><?php echo $CatatanKursiUAS; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('identitas') ?>" class="btn btn-default"><i class='fa fa-home'></i>Back To Home</a></td></tr>
	</table>
</div>
</div>
</div>
</div>