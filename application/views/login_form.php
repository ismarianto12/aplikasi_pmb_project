<section id="wrapper" class="login-register">
    <div class="login-box">
       <?php
       $stat= isset($_GET['stat']) ? $_GET['stat'] : '';
       if ($stat == 1) {
         echo "<div class='alert alert-info'>Anda Berhasil Keluar Silahkan Login Untuk Melanjut kan kembali</div>"; 
     }else{

     }
 
     ?>
     <div class="white-box">
        <form id="clogin" class="form-horizontal form-material">
            <h3 class="box-title m-b-20">Aplikasi Notulen</h3>
            <b><small>Pencatatan data elektronik</small></b>
            <br /><br />
            <div class="form-group ">
                <div class="col-xs-12">
                    <input name="username" class="form-control" type="text" required="" placeholder="Username">
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12">
                    <input name="password" class="form-control" type="password" required="" placeholder="Password">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                         <!--    <div class="checkbox checkbox-primary pull-left p-t-0">
                                <input id="checkbox-signup" type="checkbox">
                                <label for="checkbox-signup"> Remember me </label>
                            </div> -->
                            <!--  <a href="javascript:void(0)" id="to-recover" class="text-dark pull-right"><i class="fa fa-lock m-r-5"></i> Forgot pwd?</a>  --></div>
                        </div>
                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Log In</button>

                            </div>

                        </div>
                        <center> <font color="black">&copy; 2019 By Design 
                      <!--   <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
                                <div class="social">
                                    <a href="javascript:void(0)" class="btn  btn-facebook" data-toggle="tooltip" title="Login with Facebook"> <i aria-hidden="true" class="fa fa-facebook"></i> </a>
                                    <a href="javascript:void(0)" class="btn btn-googleplus" data-toggle="tooltip" title="Login with Google"> <i aria-hidden="true" class="fa fa-google-plus"></i> </a>
                                </div>
                            </div>
                        </div> -->

                    </form>
                    <div id="notifikasi"></div>
                    <form class="form-horizontal" id="recoverform" action="http://jthemes.org/demo-admin/cubic/cubic-html/index.html">
     
                       <!--  <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" required="" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>
                            </div> -->
                        </div>
                    </form>
                </div>
            </div>
        </section>