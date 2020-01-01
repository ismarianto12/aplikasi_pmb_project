 
<div class='row'>
  <div class='col-sm-12'>
    <?= $this->session->userdata('message') ?>
    <div class='white-box'>
      <h3 class='box-title m-b-0'><?= $judul ?></h3>
      <p class='text-muted m-b-30'>Tabel Data <?= $judul ?></p>
      <div class='table-responsive'>  
        <?php echo anchor(site_url('batas_bayar/tambah'), 'Tambah Data', 'class="btn btn-primary"'); ?>
        
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
            ajax: {"url": "batas_bayar/json", "type": "POST","data":function(data){
             var periode = $('#periode').val();
             data.periode = periode; 

           },
         },
         columns: [
         {
          "data": "id_batas",
          "orderable": false
        },{"data": "periode"},{"data": "program"},{"data": "tahun_mulai"},{"data": "batas_"},
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
           window.location.href='<?= base_url('batas_bayar/hapus/') ?>'+n;
         });
        }
      </script>
    </div>
  </div>
</div>
</div>
