 
<div class='row'>
    <div class='col-sm-12'>
      <?= $this->session->userdata('message') ?>
      <div class='white-box'>
         <h3 class='box-title m-b-0'><?= ucfirst($judul) ?></h3> 
   <div class='table-responsive'>  
        
        <table class="table">
	    <tr><td>N Perizinan</td><td><?php echo $n_perizinan; ?></td></tr>
	    <tr><td>Initial</td><td><?php echo $initial; ?></td></tr>
	    <tr><td>C Tarif</td><td><?php echo $c_tarif; ?></td></tr>
	    <tr><td>Is Open</td><td><?php echo $is_open; ?></td></tr>
	    <tr><td>V Hari</td><td><?php echo $v_hari; ?></td></tr>
	    <tr><td>V Berlaku Tahun</td><td><?php echo $v_berlaku_tahun; ?></td></tr>
	    <tr><td>V Perizinan</td><td><?php echo $v_perizinan; ?></td></tr>
	    <tr><td>C Foto</td><td><?php echo $c_foto; ?></td></tr>
	    <tr><td>C Keputusan</td><td><?php echo $c_keputusan; ?></td></tr>
	    <tr><td>Kode Ijin</td><td><?php echo $kode_ijin; ?></td></tr>
	    <tr><td>Id Bidang</td><td><?php echo $id_bidang; ?></td></tr>
	    <tr><td>No Rek</td><td><?php echo $no_rek; ?></td></tr>
	    <tr><td>No Rek Denda</td><td><?php echo $no_rek_denda; ?></td></tr>
	    <tr><td>Keterangan</td><td><?php echo $keterangan; ?></td></tr>
	    <tr><td>Is Peruntukan</td><td><?php echo $is_peruntukan; ?></td></tr>
	    <tr><td>Id Kelompok Ijin</td><td><?php echo $id_kelompok_ijin; ?></td></tr>
	    <tr><td>Draft Sk</td><td><?php echo $draft_sk; ?></td></tr>
	    <tr><td>Draft Sertifikat</td><td><?php echo $draft_sertifikat; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('trperizinan') ?>" class="btn btn-default"><i class='fa fa-home'></i>Back To Home</a></td></tr>
	</table>
</div>
</div>
</div>
</div>