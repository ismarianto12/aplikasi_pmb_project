
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
            <label for="varchar" class='control-label col-md-3'><b>Username<?php echo form_error('username') ?></b></label>
            <div class='col-md-9'>
            <input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?php echo $username; ?>" />
        </div>
    </div>
	 <div class="form-group">
            <label for="varchar" class='control-label col-md-3'><b>Password<?php echo form_error('password') ?></b></label>
            <div class='col-md-9'>
            <input type="text" class="form-control" name="password" id="password" placeholder="Password" value="<?php echo $password; ?>" />
        </div>
    </div>
	 <div class="form-group">
            <label for="varchar" class='control-label col-md-3'><b>Nama<?php echo form_error('nama') ?></b></label>
            <div class='col-md-9'>
            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="<?php echo $nama; ?>" />
        </div>
    </div>
	 <div class="form-group">
            <label for="varchar" class='control-label col-md-3'><b>Email<?php echo form_error('email') ?></b></label>
            <div class='col-md-9'>
            <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>" />
        </div>
    </div>
	 <div class="form-group">
            <label for="varchar" class='control-label col-md-3'><b>Foto<?php echo form_error('foto') ?></b></label>
            <div class='col-md-9'>
            <input type="text" class="form-control" name="foto" id="foto" placeholder="Foto" value="<?php echo $foto; ?>" />
        </div>
    </div>
	 <div class="form-group">
            <label for="enum" class='control-label col-md-3'><b>Level<?php echo form_error('level') ?></b></label>
            <div class='col-md-9'>
            <input type="text" class="form-control" name="level" id="level" placeholder="Level" value="<?php echo $level; ?>" />
        </div>
    </div>
	 <div class="form-group">
            <label for="enum" class='control-label col-md-3'><b>Active<?php echo form_error('active') ?></b></label>
            <div class='col-md-9'>
            <input type="text" class="form-control" name="active" id="active" placeholder="Active" value="<?php echo $active; ?>" />
        </div>
    </div>
	 <div class="form-group">
            <label for="date" class='control-label col-md-3'><b>Date Create<?php echo form_error('date_create') ?></b></label>
            <div class='col-md-9'>
            <input type="text" class="form-control" name="date_create" id="date_create" placeholder="Date Create" value="<?php echo $date_create; ?>" />
        </div>
    </div>
	 <div class="form-group">
            <label for="datetime" class='control-label col-md-3'><b>Log<?php echo form_error('log') ?></b></label>
            <div class='col-md-9'>
            <input type="text" class="form-control" name="log" id="log" placeholder="Log" value="<?php echo $log; ?>" />
        </div>
    </div>
	    <input type="hidden" name="id_user" value="<?php echo $id_user; ?>" /> 
	   

<div class='form-actions'>
    <div class='row'>
        <div class='col-md-12'>
            <div class='row'>
                <div class='col-md-offset-3 col-md-9'>
 <button type="submit" class="btn btn-info"><i class='fa fa-check'></i><?php echo $button ?></button> 
	    <a href="<?php echo site_url('login') ?>" class="btn btn-default"><i class='fa fa-share'></i>Cancel</a>
	

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
