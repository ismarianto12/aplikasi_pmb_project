 
<div class='row'>
    <div class='col-sm-12'>
      <?= $this->session->userdata('message') ?>
      <div class='white-box'>
         <h3 class='box-title m-b-0'><?= ucfirst($judul) ?></h3> 
   <div class='table-responsive'>  
        
        <table class="table">
	    <tr><td>Id Histori</td><td><?php echo $id_histori; ?></td></tr>
	    <tr><td>Id User</td><td><?php echo $id_user; ?></td></tr>
	    <tr><td>Url</td><td><?php echo $url; ?></td></tr>
	    <tr><td>Aktivitasi</td><td><?php echo $aktivitasi; ?></td></tr>
	    <tr><td>File Download</td><td><?php echo $file_download; ?></td></tr>
	    <tr><td>Tanggal</td><td><?php echo $tanggal; ?></td></tr>
	    <tr><td>Ip Address</td><td><?php echo $ip_address; ?></td></tr>
	    <tr><td>Browser</td><td><?php echo $browser; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('histori') ?>" class="btn btn-default"><i class='fa fa-home'></i>Back To Home</a></td></tr>
	</table>
</div>
</div>
</div>
</div>