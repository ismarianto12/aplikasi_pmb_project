<div class='row'>
  <div class='col-sm-12'>
    <?= $this->session->userdata('message') ?>
    <div class='white-box'>
      <h3 class='box-title m-b-0'><?= $judul ?></h3>
      <p class='text-muted m-b-30'>List Data Aplikan</p>
      <div class='table-responsive'>  

       <div class="form-group">
        <label for="int" class='control-label col-md-3'><b>Periode / Tahun Akademik</b></label>
        <div class='col-md-9'>
          <select class="form-control" id="periode"> 
            <?php foreach($tahun_akademik->result_array() as $data): ?>    
             <option value="<?= $data['id_periode'] ?>"><?= $data['tahun_akademik'] ?></option>
           <?php endforeach ?>
         </select>
       </div>
     </div>
     <hr />

     <table class="table" id="datatables">
      <thead>
        <tr>
          <th width="80px">No</th>
          <th>Periode</th>
          <th>No Pendaftaran</th>
          <th>Nama</th>
          <th>Kelamin</th>
          <th>Tempatlahir</th>
          <th>Alamat</th>
          <th>Kota</th>
          <th>Propinsi</th> 
          <th>Prodi 1</th>
          <th>Prodi 2</th>
          <th>Prodi 3</th>
          <th>Pembayaran</th>
          <th width="200px">Action</th>
        </tr>
      </thead>

    </table>

    <script type="text/javascript">
      $(document).ready(function() {
        $.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings)
        {
          return {
            "iStart": oSettings._iDisplayStart,
            "iEnd": oSettings.fnDisplayEnd(),
            "iLength": oSettings._iDisplayLength,
            "iTotal": oSettings.fnRecordsTotal(),
            "iFilteredTotal": oSettings.fnRecordsDisplay(),
            "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
            "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
          };
        };

        var datatable = $("#datatables").DataTable({
          initComplete: function() {
            var api = this.api();
            $('#datatables input')
            .off('.DT')
            .on('keyup.DT', function(e) {
              if (e.keyCode == 13) {
                api.search(this.value).draw();
              }
            });
          },
          oLanguage: {
            sProcessing: "loading..."
          },
          processing: true,
          serverSide: true,
          ajax: {"url": "aplikan/json", "type": "POST","data":function(data){
            var periode = $('#periode').val();
            data.periode = periode; 
          }
        },
        columns: [
        {
          "data": "id_aplikan",
          "orderable": false
        },{"data": "nama_periode"},{"data": "no_pend"},{"data": "nama"},{"data": "kelamin","render": function (data, type, row) { 
          if (row.kelamin ==  'L'){
            return "Laki - Laki";  
          }else{
            return "Perempuan";  
          } 
        }
      },{"data": "tempatlahir"},{"data": "alamat"},{"data": "propinsi"},{"data": "nama_prodi"},{"data": "nama_prodi"},{"data": "nama_prodi"},{"data": "nama_prodi"},{"data": "pembayaran","render": function (data, type, row) { 
          if (row.pembayaran ==  'Y'){
            return "Bayar";  
          }else{
            return "Belum Bayar";  
          } 
        }
      },
      {
        "data" : "action",
        "orderable": false,
        "className" : "text-center"
      }
      ],
      order: [[0, 'desc']],
      rowCallback: function(row, data, iDisplayIndex) {
        var info = this.fnPagingInfo();
        var page = info.iPage;
        var length = info.iLength;
        var index = page * length + (iDisplayIndex + 1);
        $('td:eq(0)', row).html(index);
      }
    });
        $('#periode').change(function(){
         datatable.draw();
         datatable.ajax.reload();

       });
      });

      function hapus(n){
        swal({
          title: 'Konfirmasi Hapus',
          text: 'Apakah Anda Yakin Untuk Menghapus Data Ini?',
          type: 'warning',
          showCancelButton: true,
          confirmButtonClass: 'btn-danger',
          confirmButtonText: 'Ya',
          closeOnConfirm: false
        },
        function(){
         swal('Hapus Data', 'Data Berhasil Di Hapus', 'success'); 
         window.location.href='<?= base_url('aplikan/hapus/') ?>'+n;
       });
      }
      function _konfirmasi(n)
      {
        $.ajax({
         url :'<?= base_url('aplikan/get_detail_confirm') ?>',
         type:'post',
         data:'no_pendaftaran='+n, 
         dataType:'json',
         chace:false,  
         beforeSend:function(){
           swal('info','sedang memuat data harap bersabar ..','success');
         },success:function(data) 
         {    

          $('#hide_no_pendaftaran').html('<input type="hidden" name="no_pendaftaran" value="'+data.no_pend+'">');
          $('#_pendaftaran').html(data.no_pendaftaran);
          $('#jumlah').html(data.jumlah);
          $('#file_pembayaran').html('<a href="<?= base_url('assets/file_pembayaran') ?>'+data.file_pembayaran+'" class="btn btn-info" target="_blank">Detail File</a>');
          $('#tanggal').html(data.tanggal);
          $('#id_user').html(data.id_user);     
          $('#tampil_pembayaran').modal('show'); 

        },error:function(data)
        { 
         swal('info','error tidak dapat meload data','error');     
       }  
     }); 
      }  
      /*function to confirm data*/
      $(function(){
        var no_pendaftaran = $('#no_pendaftaran').val();   
        $('#konfirmasi').click(function(){
          $.ajax({
           url :'<?= base_url('aplikan/set_konfirmasi') ?>',
           type:'post',
           data:'no_pendaftaran='+no_pendaftaran,
           chace:false,
           dataType:'json',
           beforeSend:function(){
             swal('info','sedang memuat data harap bersabar ..','success');
           },success:function(data){  
            swal('info','sedang memuat data harap bersabar ..','success');
          },error:function(data){ 
          } 
        }); 
        });
      });

    </script>
  </div>
</div>
</div>
</div>

<!-- modal data -->

<div class="modal modal-primary" id="tampil_pembayaran">
  <div class="modal-dialog" style="width: 80%">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Detail Pembayaran user.</h4>
      </div>
      <div class="modal-body"> 
        <div class='panel-body'>
         <form method="POST" class='form-horizontal form-bordered'>
          <div class='form-body'>  
           <br /><br /><br /><br />  
           <div class="form-group">
            <label for="varchar" class='control-label col-md-3'><b>No Pendaftaran</b></label>
            <div class='col-md-9'>
              <div id="no_pendaftaran"></div>
              <div id="_pendaftaran"></div>
            </div>
          </div>
          <div class="form-group">
            <label for="varchar" class='control-label col-md-3'><b>Jumlah</b></label>
            <div class='col-md-9'> 
              <div id="jumlah"></div>
            </div>
          </div>
          <div class="form-group">
            <label for="varchar" class='control-label col-md-3'><b>File Pembayaran</b></label>
            <div class='col-md-9'>
             <div id="file_pembayaran"></div>
           </div>
         </div>
         <div class="form-group">
          <label for="date" class='control-label col-md-3'><b>Tanggal</b></label>
          <div class='col-md-9'>
            <div id="tanggal"></div>
          </div>
        </div>  
        <div class="form-group">
          <label for="date" class='control-label col-md-3'><b>Periksa .</b></label>
          <div class='col-md-9'>
            <select name="periksa" class="form-control">
              <option value="Y">Lunas</option>
              <option value="N">Belum Lunas</option>
            </select>
          </div>
        </div> 

        <div class='form-actions'>
          <div class='row'>
            <div class='col-md-12'>
              <div class='row'>
                <div class='col-md-offset-3 col-md-9'>
                 <button id="konfirmasi" class="btn btn-info"><i class='fa fa-check'></i>Konfirmasi</button> 
                 <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
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

<!-- end data model -->