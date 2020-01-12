 
           <div class='row'>
                    <div class='col-sm-12'>
                      <?= $this->session->userdata('message') ?>
                        <div class='white-box'>
                            <h3 class='box-title m-b-0'><?= $judul ?></h3>
                            <p class='text-muted m-b-30'>Tabel Data <?= $judul ?></p>
                            <div class='table-responsive'>  
                <?php echo anchor(site_url('trperizinan/tambah'), 'Tambah Data', 'class="btn btn-primary"'); ?>
	    
  <br /><br />
        <table class="table" id="datatables">
            <thead>
                <tr>
                    <th width="80px">No</th>
		    <th>N Perizinan</th>
		    <th>Initial</th>
		    <th>C Tarif</th>
		    <th>Is Open</th>
		    <th>V Hari</th>
		    <th>V Berlaku Tahun</th>
		    <th>V Perizinan</th>
		    <th>C Foto</th>
		    <th>C Keputusan</th>
		    <th>Kode Ijin</th>
		    <th>Id Bidang</th>
		    <th>No Rek</th>
		    <th>No Rek Denda</th>
		    <th>Keterangan</th>
		    <th>Is Peruntukan</th>
		    <th>Id Kelompok Ijin</th>
		    <th>Draft Sk</th>
		    <th>Draft Sertifikat</th>
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
                    ajax: {"url": "trperizinan/json", "type": "POST"},
                    columns: [
                        {
                            "data": "id",
                            "orderable": false
                        },{"data": "n_perizinan"},{"data": "initial"},{"data": "c_tarif"},{"data": "is_open"},{"data": "v_hari"},{"data": "v_berlaku_tahun"},{"data": "v_perizinan"},{"data": "c_foto"},{"data": "c_keputusan"},{"data": "kode_ijin"},{"data": "id_bidang"},{"data": "no_rek"},{"data": "no_rek_denda"},{"data": "keterangan"},{"data": "is_peruntukan"},{"data": "id_kelompok_ijin"},{"data": "draft_sk"},{"data": "draft_sertifikat"},
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
           window.location.href='<?= base_url('trperizinan/hapus/') ?>'+n;
         });
    }
 </script>
      </div>
     </div>
   </div>
 </div>