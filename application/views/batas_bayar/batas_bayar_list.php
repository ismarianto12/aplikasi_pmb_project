 <script type="text/javascript">
  $(function(){ 
    $('#datatables').on( 'click', ' .edit_data', function () {  
      $('#tampil_data').load($(this).attr('to'));
      $('#tampil_data').slideDown('fast'); 
    }); 
   $('.tambah').click(function(){
      var url = $(this).attr('to');
      var data = 'load';
      $('#tampil_data').load(url).slideDown('fast');
    }); 
    /*end script fucntion to access here*/
  });
</script>
 <div class='row'>
  <div class='col-sm-12'>
    <?= $this->session->userdata('message') ?>
    <div class='white-box'>
      <h3 class='box-title m-b-0'><?= $judul ?></h3>
      <p class='text-muted m-b-30'>Tabel Data <?= $judul ?></p>
      <div class='table-responsive'>  
         <div id="tampil_data"></div> 
        <button class="tambah btn btn-success" to="<?= base_url('batas_bayar/tambah') ?>"><i class="fa fa-add"></i>Tambah data</button>
        <br /><br />  
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

       <table class="table" id="datatables">
        <thead>
          <tr>
            <th width="80px">No</th>
            <th>Id Periode</th>
            <th>Program</th>
            <th>Tahun Mulai</th>
            <th>Batas </th>
            <th width="200px">Action</th>
          </tr>
        </thead> 
      </table>
      
      <script type="text/javascript">
        $(document).ready(function() {
          var datatable;
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
              sProcessing:  '<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span>'
            },
            processing: true,
            serverSide: true,
            ajax: {"url": "batas_bayar/json", "type": "POST","data":function(data){
             var periode = $('#periode').val();
             data.periode = periode; 

           },
         },
         columns: [
         {
          "data": "id_batas",
          "orderable": false
        },{"data": "tahun_akademik"},{"data": "program"},{"data": "tahun_mulai"},{"data": "batas_"},
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
            $.ajax({
                 url : '<?= base_url('batas_bayar/hapus') ?>',
                 type :'post',
                 data :'id_batas='+n,
                 //dataType: 'json',
                 chace:false,
                success:function(data){
                 swal('keteragan','data berhasil di hapus','success'); 
                 $('#datatables').DataTable().ajax.reload();
                 },error:function(data){
                   swal('keteragan','gagal tidak dapaat menghapus data.','error');  
              }  
            }); 
         });
        }
      </script>
    </div>
  </div>
</div>
</div>
