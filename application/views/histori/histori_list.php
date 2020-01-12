<div class='row'>
    <div class='col-sm-12'>
        <?= $this->session->userdata('message') ?>
        <div class='white-box'>
            <h3 class='box-title m-b-0'><?= $judul ?></h3>
            <p class='text-muted m-b-30'>Tabel Data <?= $judul ?></p> 
            <table class="table">
                <tr><td>Berdasarkan user login</td><td><select class="form-control" id="hak_akses">
                  <?php foreach($this->db->get('login')->result_array() as $data): ?>
                  <option value="<?= $data['id_user'] ?>"><?= $data['username'] ?></option>
              <?php endforeach ?>
          </select></td>
      </tr> 
      <tr><td>Tanggal Mulai</td><td><input type="date" name="dari" id="dari" class="form-control"></td></tr>
      <tr><td>Tanggal Berakhir</td><td><input type="date" name="sampai" id="sampai" class="form-control"></td></tr>
      <tr><td><button class="btn btn-primary" id="cari_">Cari </button></td></tr> 
  </table>
  <div class='table-responsive'>    
    <table class="table" id="datatables">
        <thead>
            <tr>
                <th width="80px">No</th> 
                <th>User</th>
                <th>Url</th>
                <th>Aktivitasi</th> 
                <th>Tanggal</th>
                <th>Ip Address</th>
                <th>Browser</th>
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

            var t = $("#datatables").DataTable({
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
                  sProcessing: '<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span>'
              },
              processing: true,
              serverSide: true,
              ajax: {"url": "histori/json", "type": "POST","data":function(data){
                  var hak_akses = $("#hak_akses").val();
                  var dari  = $("#dari").val();
                  var sampai = $("#sampai").val();

                  data.hak_akses = hak_akses;   
                  data.dari = dari;
                  data.sampai = sampai; 
              },
          },
          columns: [
          {
            "data": "",
            "orderable": false
        },{"data": "nama",
            "orderable": false,"orderable": false},{"data": "url",
            "orderable": false},{"data": "aktivitasi",
            "orderable": false},{"data": "tanggal"},{"data": "ip_address"},{"data": "browser"},
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
            $('#cari_').click(function(){
             t.ajax.reload();
             t.ajax.draw(); 
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
               window.location.href='<?= base_url('histori/hapus/') ?>'+n;
           });
        }
    </script>
</div>
</div>
</div>
</div>