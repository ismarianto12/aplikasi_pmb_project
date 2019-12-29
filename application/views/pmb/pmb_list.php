 
           <div class='row'>
                    <div class='col-sm-12'>
                      <?= $this->session->userdata('message') ?>
                        <div class='white-box'>
                            <h3 class='box-title m-b-0'><?= $judul ?></h3>
                            <p class='text-muted m-b-30'>Tabel Data <?= $judul ?></p>
                            <div class='table-responsive'>  
                <?php echo anchor(site_url('pmb/tambah'), 'Tambah Data', 'class="btn btn-primary"'); ?>
	    
  <br /><br />
        <table class="table" id="datatables">
            <thead>
                <tr>
                    <th width="80px">No</th>
		    <th>Id Periode</th>
		    <th>No Pendaftaran</th>
		    <th>Nomor Pmb</th>
		    <th>Password</th>
		    <th>Nama</th>
		    <th>Kelamin</th>
		    <th>Tempatlahir</th>
		    <th>Alamat</th>
		    <th>Kota</th>
		    <th>Propinsi</th>
		    <th>KodePos</th>
		    <th>Rt</th>
		    <th>RW</th>
		    <th>Telepon</th>
		    <th>Handphone</th>
		    <th>Email</th>
		    <th>No Hp</th>
		    <th>JenisSekolah</th>
		    <th>NamaSekolah</th>
		    <th>JurusanSekolah</th>
		    <th>TahunLulus</th>
		    <th>NilaiSekolah</th>
		    <th>No Ijazah</th>
		    <th>Prog Pendidikan</th>
		    <th>NamaAyah</th>
		    <th>PendidikanAyah</th>
		    <th>PekerjaanAyah</th>
		    <th>Catatan</th>
		    <th>Jurusan</th>
		    <th>Sumberinfo</th>
		    <th>Tgl Daftar</th>
		    <th>Prodi 1</th>
		    <th>Prodi 2</th>
		    <th>Prodi 3</th>
		    <th>Pembayaran</th>
		    <th>Lulus</th>
		    <th>Program Pen</th>
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
                    ajax: {"url": "pmb/json", "type": "POST"},
                    columns: [
                        {
                            "data": "id_pendaftar",
                            "orderable": false
                        },{"data": "id_periode"},{"data": "no_pendaftaran"},{"data": "nomor_pmb"},{"data": "password"},{"data": "nama"},{"data": "kelamin"},{"data": "tempatlahir"},{"data": "alamat"},{"data": "kota"},{"data": "propinsi"},{"data": "kodePos"},{"data": "rt"},{"data": "rW"},{"data": "telepon"},{"data": "handphone"},{"data": "email"},{"data": "no_hp"},{"data": "jenisSekolah"},{"data": "namaSekolah"},{"data": "jurusanSekolah"},{"data": "tahunLulus"},{"data": "nilaiSekolah"},{"data": "no_ijazah"},{"data": "prog_pendidikan"},{"data": "namaAyah"},{"data": "pendidikanAyah"},{"data": "pekerjaanAyah"},{"data": "catatan"},{"data": "jurusan"},{"data": "sumberinfo"},{"data": "tgl_daftar"},{"data": "prodi_1"},{"data": "prodi_2"},{"data": "prodi_3"},{"data": "pembayaran"},{"data": "lulus"},{"data": "program_pen"},
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
           window.location.href='<?= base_url('pmb/hapus/') ?>'+n;
         });
    }
 </script>
      </div>
     </div>
   </div>
 </div>