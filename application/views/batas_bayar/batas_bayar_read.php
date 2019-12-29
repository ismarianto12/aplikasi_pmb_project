 
<div class='row'>
    <div class='col-sm-12'>
      <?= $this->session->userdata('message') ?>
      <div class='white-box'>
         <h3 class='box-title m-b-0'><?= ucfirst($judul) ?></h3> 
   <div class='table-responsive'>  
        
        <table class="table">
	    <tr><td>Id Periode</td><td><?php echo $id_periode; ?></td></tr>
	    <tr><td>Program</td><td><?php echo $program; ?></td></tr>
	    <tr><td>Tahun Mulai</td><td><?php echo $tahun_mulai; ?></td></tr>
	    <tr><td>Batas </td><td><?php echo $batas_; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('batas_bayar') ?>" class="btn btn-default"><i class='fa fa-home'></i>Back To Home</a></td></tr>
	</table>
</div>
</div>
</div>
</div>