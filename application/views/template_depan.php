<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('/assets/img/').identitas('favicon') ?>">
  <title><?= $judul ?></title>
  <!-- ===== Bootstrap CSS ===== -->
  <link href="<?= base_url() ?>assets/template/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/template/plugins/components/morrisjs/morris.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/template/plugins/components/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />

  <link href="<?= base_url() ?>assets/template/css/animate.css" rel="stylesheet">
  <!-- ===== Custom CSS ===== -->
  <link href="<?= base_url() ?>assets/template/css/style.css" rel="stylesheet">
  <!-- ===== Color CSS ===== -->
  <link href="<?= base_url() ?>assets/template/css/colors/default.css" id="theme" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/template/css/sweet-alert.css">
  <script src="<?= base_url() ?>assets/template/plugins/components/jquery/dist/jquery.min.js"></script>

  <link rel="stylesheet" href="<?= base_url() ?>assets/template/css/bootstrap-timepicker.min.css"> 
  <script src="<?= base_url() ?>/assets/template/js/bootstrap-timepicker.min.js"></script>  
  <link href="<?= base_url() ?>/assets/template/plugins/components/morrisjs/morris.css" rel="stylesheet"> 
    <!--[if lt IE 9]>
    <script src="<?= base_url() ?>assets/template/https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="<?= base_url() ?>assets/template/https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->  
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/template/css/sweet-alert.css">
  <script src="<?= base_url() ?>assets/template/js/sweet-alert.js"></script>

  <link href="<?= base_url() ?>/assets/template/plugins/components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" rel="stylesheet" /> 
</head>

<style type="text/css">
  #goog-gt-tt {display:none !important;}
  .goog-te-banner-frame {display:none !important;}
  .goog-te-menu-value:hover {text-decoration:none !important;}
  .goog-text-highlight {background-color:transparent !important;box-shadow:none !important;}
  body {top:0 !important;}
  #google_translate_element2 {display:none!important;}
</style>

<div id="google_translate_element2"></div>
<script type="text/javascript">
  function googleTranslateElementInit2() {new google.translate.TranslateElement({pageLanguage: 'id',autoDisplay: false}, 'google_translate_element2');}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>


<script type="text/javascript">
  function GTranslateGetCurrentLang() {var keyValue = document['cookie'].match('(^|;) ?googtrans=([^;]*)(;|$)');return keyValue ? keyValue[2].split('/')[2] : null;}
  function GTranslateFireEvent(element,event){try{if(document.createEventObject){var evt=document.createEventObject();element.fireEvent('on'+event,evt)}else{var evt=document.createEvent('HTMLEvents');evt.initEvent(event,true,true);element.dispatchEvent(evt)}}catch(e){}}
  function doGTranslate(lang_pair){if(lang_pair.value)lang_pair=lang_pair.value;if(lang_pair=='')return;var lang=lang_pair.split('|')[1];if(GTranslateGetCurrentLang() == null && lang == lang_pair.split('|')[0])return;var teCombo;var sel=document.getElementsByTagName('select');for(var i=0;i<sel.length;i++)if(/goog-te-combo/.test(sel[i].className)){teCombo=sel[i];break;}if(document.getElementById('google_translate_element2')==null||document.getElementById('google_translate_element2').innerHTML.length==0||teCombo.length==0||teCombo.innerHTML.length==0){setTimeout(function(){doGTranslate(lang_pair)},500)}else{teCombo.value=lang;GTranslateFireEvent(teCombo,'change');GTranslateFireEvent(teCombo,'change')}}
</script>

<style type="text/css">
  #pesan_awal{
    
    width: 100%;
    color: #fff;
  }
  #pesan_awal , a{
   padding: 10px;
 }

</style>

<body class="mini-sidebar">
  <!-- ===== Main-Wrapper ===== -->
  <div id="wrapper">
      <!--   <div class="preloader">
            <div class="cssload-speeding-wheel"></div>
          </div> -->
          <!-- ===== Top-Navigation ===== -->
          <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
              <a class="navbar-toggle font-20 hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse">
                <i class="fa fa-bars"></i>
              </a>
              
              <div class="top-left-part">

              </div>
              <ul class="nav navbar-top-links navbar-left hidden-xs">
                <li>
                  <a href="javascript:void(0)" class="sidebartoggler font-20 waves-effect waves-light"><i class="icon-arrow-left-circle"></i></a>
                </li>
                <li><div id="pesan_awal"><marquee><?= $this->config->item('pesan_awal'); ?></marquee></div>
                </li>
              </ul>

              <ul class="nav navbar-top-links navbar-right pull-right"> 

                <li class="dropdown"> 
                  <a href="javascript:void(0);" onclick="doGTranslate('id|id');return false;" title="Indonesian" class="gflag nturl dropdown-toggle waves-effect waves-light font-20" data-toggle="dropdown" href="javascript:void(0);">
                   <img src="<?= base_url('assets/template/plugins/images/id.png') ?>">
                 </a> 
               </li>
               <li class="dropdown"> 
                 <a href="javascript:void(0);" onclick="doGTranslate('id|en');return false;" title="English" class="gflag nturl dropdown-toggle waves-effect waves-light font-20" data-toggle="dropdown" href="javascript:void(0);">
                   <img src="<?= base_url('assets/template/plugins/images/en.png') ?>">
                 </a>
               </li>

               <li class="right-side-toggle">
                <a class="right-side-toggler waves-effect waves-light b-r-0 font-20" href="javascript:void(0)">
                  <i class="icon-settings"></i>
                </a>
              </li>

            </ul>
          </div>
        </nav> 
        <aside class="sidebar">
          <div class="scroll-sidebar">
            <div class="user-profile">
              <div class="dropdown user-pro-body">
                <div class="profile-image">
                  <img src="" alt="user-img" class="img-circle" id="image_2" onerror="this.onerror=null;this.src='<?= base_url('assets/img/no_image.jpg') ?>';">
                  <a href="javascript:void(0);" class="dropdown-toggle u-dropdown text-blue" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <span class="badge badge-danger">
                      <i class="fa fa-angle-down"></i>
                    </span>
                  </a>

                </div>
                <p class="profile-text m-t-15 font-16"><a href="javascript:void(0);">SPMB</a></p>
              </div>
            </div>
            <nav class="sidebar-nav">  
             <?php require_once 'depan/menu_depan.php';  ?> 
           </nav>

         </div>
       </aside>
       


       <!-- ===== Right-Sidebar ===== -->
       <div class="right-sidebar">
        <div class="slimscrollright">
          <div class="rpanel-title"> Service Panel <span><i class="icon-close right-side-toggler"></i></span> </div>
          <div class="r-panel-body">
            <ul class="hidden-xs">
              <li><b>Layout Options</b></li>
              <li>
                <div class="checkbox checkbox-danger">
                  <input id="headcheck" type="checkbox" class="fxhdr">
                  <label for="headcheck"> Fix Header </label>
                </div>
              </li>
              <li>
                <div class="checkbox checkbox-warning">
                  <input id="sidecheck" type="checkbox" class="fxsdr">
                  <label for="sidecheck"> Fix Sidebar </label>
                </div>
              </li>
            </ul>
            <ul id="themecolors" class="m-t-20">
              <li><b>With Light sidebar</b></li>
              <li><a href="javascript:void(0)" data-theme="default" class="default-theme working">1</a></li>
              <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
              <li><a href="javascript:void(0)" data-theme="yellow" class="yellow-theme">3</a></li>
              <li><a href="javascript:void(0)" data-theme="red" class="red-theme">4</a></li>
              <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
              <li><a href="javascript:void(0)" data-theme="black" class="black-theme">6</a></li>
              <li class="db"><b>With Dark sidebar</b></li>
              <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>
              <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
              <li><a href="javascript:void(0)" data-theme="yellow-dark" class="yellow-dark-theme">9</a></li>
              <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">10</a></li>
              <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
              <li><a href="javascript:void(0)" data-theme="black-dark" class="black-dark-theme">12</a></li>
            </ul>
            <ul class="m-t-20 chatonline">
              <li><b>Chat option</b></li>
              <li>
                <a href="javascript:void(0)"><img src="../plugins/images/users/1.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
              </li>
              <li>
                <a href="javascript:void(0)"><img src="../plugins/images/users/2.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
              </li>
              <li>
                <a href="javascript:void(0)"><img src="../plugins/images/users/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
              </li>
              <li>
                <a href="javascript:void(0)"><img src="../plugins/images/users/4.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
              </li>
              <li>
                <a href="javascript:void(0)"><img src="../plugins/images/users/5.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
              </li>
              <li>
                <a href="javascript:void(0)"><img src="../plugins/images/users/6.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- ===== Right-Sidebar-End ===== -->


      <div class="page-wrapper">

        <!-- ===== Page-Container ===== -->
        <div class="container-fluid" style="background: #fff"><?= $contents ?>
      </div>
      <!-- ===== Page-Container-End ===== -->
      
    </div>
    <!-- ===== Page-Content-End ===== -->
  </div>

  <script src="<?= base_url() ?>assets/template/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="<?= base_url() ?>/assets/template/plugins/components/raphael/raphael-min.js"></script>
  <script src="<?= base_url() ?>/assets/template/plugins/components/morrisjs/morris.js"></script>
  <!-- ===== Slimscroll JavaScript ===== -->
  <script src="<?= base_url() ?>assets/template/js/jquery.slimscroll.js"></script>
  <!-- ===== Wave Effects JavaScript ===== -->
  <script src="<?= base_url() ?>assets/template/js/waves.js"></script>
  <!-- ===== Menu Plugin JavaScript ===== -->
  <script src="<?= base_url() ?>assets/template/js/sidebarmenu.js"></script>
  <!-- ===== Custom JavaScript ===== -->
  <script src="<?= base_url() ?>assets/template/js/custom.js"></script>
  <!-- ===== Plugin JS ===== -->
  <script src="<?= base_url() ?>assets/template/js/sweet-alert.js"></script>
  <!-- ===== Style Switcher JS ===== --> 
  <script src="<?= base_url() ?>/assets/template/plugins/components/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>

  <script src="<?= base_url() ?>assets/template/plugins/components/styleswitcher/jQuery.style.switcher.js"></script>  
  <!-- datatable -->
  <script src="<?= base_url() ?>assets/template/plugins/components/datatables/jquery.dataTables.min.js"></script>

  <script src="https://cdn.datatables.net/buttons/1.6.0/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.flash.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.print.min.js"></script> 
  <script src="<?= base_url('assets/template') ?>/plugins/components/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>

</body>


</html>
