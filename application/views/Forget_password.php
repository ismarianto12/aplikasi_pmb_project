<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8" />
  <title><?=  $judul ?></title>

  <meta name="description" content="login page" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="shortcut icon" href="<?= base_url() ?>assets/img/favicon.png" type="image/x-icon">

  <!--Basic Styles-->
  <link href="<?= base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" />
  <link id="<?= base_url() ?>bootstrap-rtl-link" href="#" rel="stylesheet" />
  <link href="<?= base_url() ?>assets/css/font-awesome.min.css" rel="stylesheet" />

  <!--Fonts-->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300" rel="stylesheet" type="text/css">

  <!--Beyond styles-->
  <link id="beyond-link" href="<?= base_url() ?>assets/css/beyond.min.css" rel="stylesheet" />
  <link href="<?= base_url() ?>assets/css/demo.min.css" rel="stylesheet" />
  <link href="<?= base_url() ?>assets/css/animate.min.css" rel="stylesheet" />
  <link id="skin-link" href="#" rel="stylesheet" type="text/css" />
  <!--Skin Script: Place this script in head to load scripts for skins and rtl  support-->
  <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
  <script type="text/javascript">
   function base_url(){ 
     return '<?= base_url() ?>';
   }
 </script>
 <script src="<?= base_url() ?>assets/js/login.js"></script>

<style type="text/css">
    @media (min-width:768px){
     #logo{
        width: 100px;height: 100px;
     }
    } 
    #logo{
    width: 120px;
    height: 120px;
    margin-left: 80px;
    }
</style>



</head>
<!--Head Ends-->
<!--Body-->
<body style="background: url('<?= base_url('assets/img/gambar_gw.png') ?>');">
  <div class="login-container animated fadeInDown">
   <img src="<?= base_url() ?>assets/img/<?= logo() ?>" alt="" class="img-responsive" id="logo"/>
   <br />
   <div class="loginbox bg-white">
    <div class="loginbox-title">E - Arsip</div>
    <div class="loginbox-social">
      <div class="social-title ">Login to access sistem</div>

    </div>
    <form id="cek_password" class="form-horizontal"> 
      <div class="loginbox-textbox">
        <input type="text" id="email" name="username" class="form-control" placeholder="Masukan Email " />
      </div>  
      <div class="loginbox-forgot">
        <a href="<?= base_url() ?>">Kembali </a>
      </div>
      <div class="loginbox-submit">
        <input type="submit" class="btn btn-primary btn-block" value="Login">
      </div> 
    </form>
  </div>
  <div class="logobox">
   <div id="notifikasi"></div>
 </div>
</div> 

<script type="text/javascript">
  $(function(){ 
   $('#cek_password').submit(function(e){
    e.preventDefault();
    var email = $('#email').val();
    if (email == '') {
     $('#notifikasi').html('<div class="alert alert-danger">Password Tidak Boleh Kosong</div>');
   }else{
    $.ajax({
      url  : '<?= base_url('Lupa_password/cek_email') ?>',
      data : 'email='+email,
      type : 'POST',
      chace: false,
      success:function(data){
       if (data != 'n') {
         $('#notifikasi').html('<div class="alert alert-success">Informasi Reset password berhasil di kirim ke email : '+email+'</div>'); 
       }else{
        $('#notifikasi').html('<div class="alert alert-warning">Gagal mengirim email, email yang anda di entrikan tidak cocok dengan yang ada di database.</div>');
      }
    },error:function(data){
      $('#notifikasi').html('<div class="alert alert-danger">Maaf saat ini jaringan terganggu.</div>');
    }
  })

  }
});
 });  

</script>
<script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>assets/js/slimscroll/jquery.slimscroll.min.js"></script>


</body>

</html>
