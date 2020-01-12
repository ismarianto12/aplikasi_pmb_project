 
<div class='row'>
    <div class='col-sm-12'>
      <?= $this->session->userdata('message') ?>
      <div class='white-box'>
        <h3 class='box-title m-b-0'><?= $judul ?></h3>
        <p class='text-muted m-b-30'>Tabel Data <?= $judul ?></p>
        <div class='table-responsive'>  
            <?php echo anchor(site_url('identitas/tambah'), 'Tambah Data', 'class="btn btn-primary"'); ?>
            
            <br /><br />
            <table class="table" id="datatables">
                <thead>
                    <tr>
                        <th width="80px">No</th>
                        <th>KodeHukum</th>
                        <th>KodeInstitusi</th>
                        <th>Nama</th>
                        <th>TglMulai</th>
                        <th>Alamat1</th>
                        <th>Alamat2</th>
                        <th>Kota</th>
                        <th>KodePos</th>
                        <th>Telepon</th>
                        <th>Fax</th>
                        <th>Email</th>
                        <th>Website</th>
                        <th>NoAkta</th>
                        <th>TglAkta</th>
                        <th>NoSah</th>
                        <th>TglSah</th>
                        <th>Logo</th>
                        <th>StartNoIdentitas</th>
                        <th>NoIdentitas</th>
                        <th>CatatanDPNA</th>
                        <th>CatatanKursiUAS</th>
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

                    var t = $("#datatables").dataTable({
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
                        ajax: {"url": "identitas/json", "type": "POST"},
                        columns: [
                        {
                            "data": "Kode",
                            "orderable": false
                        },{"data": "KodeHukum"},{"data": "KodeInstitusi"},{"data": "Nama"},{"data": "TglMulai"},{"data": "Alamat1"},{"data": "Alamat2"},{"data": "Kota"},{"data": "KodePos"},{"data": "Telepon"},{"data": "Fax"},{"data": "Email"},{"data": "Website"},{"data": "NoAkta"},{"data": "TglAkta"},{"data": "NoSah"},{"data": "TglSah"},{"data": "Logo"},{"data": "StartNoIdentitas"},{"data": "NoIdentitas"},{"data": "CatatanDPNA"},{"data": "CatatanKursiUAS"},
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
                     window.location.href='<?= base_url('identitas/hapus/') ?>'+n;
                 });
                }
            </script>
        </div>
    </div>
</div>
</div>