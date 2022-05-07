<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Edit Koperasi</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('admincss/') ?>plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="<?= base_url('admincss/') ?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= base_url('admincss/') ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?= base_url('admincss/') ?>plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('admincss/') ?>dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url('admincss/') ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?= base_url('admincss/') ?>plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?= base_url('admincss/') ?>plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <?php $this->load->view('bagian/menuadmin') ?>
        <!-- Navbar -->
        <!-- /.navbar -->
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Edit Koperasi</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- Main content -->
        <section class="content">
            <div class="container">
                <form action="<?php echo site_url('Select/update_koperasi'); ?>" enctype="multipart/form-data" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Data Koperasi</h3>
                                </div>
                                <div class="">
                                    <input type="hidden" name="koperasi_id" id="koperasi_id" value="<?php echo $koperasii->id; ?>" />
                                    <div class="form-group">
                                        <label>Kota/Kabupaten</label>
                                        <select name="kabkotss2" id="kabkotss2" class="form-control input-lg kabkotss2" required onkeypress="return ;" data-dependent="KabupatenKota">
                                            <option value="<?php echo $koperasii->id_kabkot; ?>" selected><?php echo $koperasii->id_kabkot; ?></option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Kecamatan</label>
                                        <select name="kecamm2" id="kecamm2" class="form-control input-lg kecamm2" required onkeypress="return ;" data-dependent="kecamm2">
                                            <option value="<?php echo $koperasii->id_kecamatan; ?>" selected><?php echo $koperasii->id_kecamatan; ?></option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Desa</label>
                                        <select name="desass2" id="desass2" class="form-control input-lg desass2" required onkeypress="return ;" data-dependent="desass2">
                                            <option value="<?php echo $koperasii->id_desa; ?>" selected><?php echo $koperasii->id_desa; ?></option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_koperasi">Nama Koperasi<span class="required">*</span></label>
                                        <input type="text" class="form-control" id="nama_koperasi" name="nama_koperasi" value="<?php echo $koperasii->nama_koperasi; ?>" placeholder="masukan Nama Koperasi" required onkeypress="return;">
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat<span class="required">*</span></label>
                                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="masukan Alamat" value="<?php echo $koperasii->alamat; ?>" required onkeypress="return ;">
                                    </div>
                                    <div class=" form-group">
                                        <label for="no_badan_hukum">Nomor Badan Hukum Pendirian</label>
                                        <input type="text" class="form-control" id="no_badan_hukum" name="no_badan_hukum" value="<?php echo $koperasii->no_badan_hukum; ?>" placeholder="51010100010011xxxx">
                                    </div>
                                    <div class="form-group">
                                        <label for="tanggal_badan_hukum">Tanggal Badan Hukum Pendirian</label>
                                        <input type="date" class="form-control" id="tanggal_badan_hukum" name="tanggal_badan_hukum" value="<?php echo $koperasii->tanggal_badan_hukum; ?>" placeholder="Masukan Nama Kepala Rumah Tangga">
                                    </div>
                                    <div class="form-group">
                                        <label>Bentuk Koperasi</label>
                                        <select name="bentuk_koperasi" id="bentuk_koperasi" class="form-control input-lg dynamic" required onkeypress="return ;" data-dependent="bentuk_koperasis" required onkeypress="return ;">
                                            <option value="">masukan Keterangan</option>
                                            <option value="<?php echo $koperasii->bentuk_koperasi; ?>" selected>Primer Kabupaten/Kota</option>
                                            <option value="<?php echo $koperasii->bentuk_koperasi; ?>" selected>Sekunder Kabupaten/Kota</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Jenis Koperasi</label>
                                        <select name="jenis_koperasi" id="jenis_koperasi" class="form-control input-lg dynamic" required onkeypress="return ;" data-dependent="jenis_koperasis">
                                            <option><?php echo $koperasii->jenis_koperasi; ?></option>
                                            <option>Simpan Pinjam</option>
                                            <option>Konsumen</option>
                                            <option>produsen</option>
                                            <option>pemasaran</option>
                                            <option>jasa</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Kelompok Koperasi</label>
                                        <select name="kelompok_koperasi" id="kelompok_koperasi" class="form-control input-lg dynamic" required onkeypress="return ;" data-dependent="kelompok_koperasis">
                                            <option><?php echo $koperasii->kelompok_koperasi; ?></option>
                                            <option>Kop. Simpan Pinjam</option>
                                            <option>Kop. Konsumen</option>
                                            <option>Kop. produsen</option>
                                            <option>Kop. pemasaran</option>
                                            <option>Kop. jasa</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Sektor Usaha</label>
                                        <select name="sektor_usaha" id="sektor_usaha" class="form-control input-lg dynamic" required onkeypress="return ;" data-dependent="sektor_usahas">
                                            <option><?php echo $koperasii->sektor_usaha; ?></option>
                                            <option>Jasa Angkutan</option>
                                            <option>Jasa Perlayaran</option>
                                            <option>Jasa Fotokopi</option>
                                            <option>Jasa Perparkiran</option>
                                            <option>Jasa Asuransi</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card card-warning">
                                <div class="card-header">
                                    <h3 class="card-title">Data Pengurus, Data Kelembagaan dan Data Lainnya</h3>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="nama_koperasi">Nama Ketua<span class="required">*</span></label>
                                        <input type="text" class="form-control" id="nama_ketua" name="nama_ketua" value="<?php echo $koperasii->nama_ketua; ?>" placeholder=" masukan Nama Ketua" required onkeypress="return;">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_koperasi">Nama Sekertaris<span class="required">*</span></label>
                                        <input type="text" class="form-control" id="nama_sekertaris" name="nama_sekertaris" value="<?php echo $koperasii->nama_sekertaris; ?>" placeholder=" masukan Nama Sekertaris" required onkeypress="return ;">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_koperasi">Nama Bendahara<span class="required">*</span></label>
                                        <input type="text" class="form-control" id="nama_bendahara" name="nama_bendahara" value="<?php echo $koperasii->nama_bendahara; ?>" placeholder=" masukan Nama Bendahara" required onkeypress="return ;">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_koperasi">Nama Pengawas<span class="required">*</span></label>
                                        <input type="text" class="form-control" id="nama_pengawas" name="nama_pengawas" value="<?php echo $koperasii->nama_pengawas; ?>" placeholder=" masukan Nama Pengawas" required onkeypress="return ;">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_koperasi">Nama Manager<span class="required">*</span></label>
                                        <input type="text" class="form-control" id="nama_manager" name="nama_manager" value="<?php echo $koperasii->nama_manager; ?>" placeholder=" masukan Nama Manager" required onkeypress="return ;">
                                    </div>
                                    <div class="form-group">
                                        <label>Jumlah Anggota Pria</label>
                                        <select name="jumlah_anggota_pria" id="jumlah_anggota_pria" class="form-control input-lg dynamic" required onkeypress="return ;" data-dependent="jumlah_anggota_prias">
                                            <option value="<?php echo $koperasii->jumlah_anggota_pria; ?>"><?php echo $koperasii->jumlah_anggota_pria; ?></option>
                                            <?php
                                            for ($x = 1; $x <= 1000; $x++) {
                                                echo "<option value='$x'>$x</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Jumlah Anggota Wanita</label>
                                        <select name="jumlah_anggota_wanita" class="custom-select" id="selectStores">
                                            <option value="<?php echo $koperasii->jumlah_anggota_wanita; ?>"><?php echo $koperasii->jumlah_anggota_wanita; ?></option>
                                            <?php
                                            for ($x = 1; $x <= 1000; $x++) {
                                                echo "<option value='$x'>$x</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class=" form-group">
                                        <label for="no_koperasi">Nomor Induk Koperasi (NIK)</label>
                                        <input type="text" class="form-control" id="no_koperasi" name="no_koperasi" value="<?php echo $koperasii->no_koperasi; ?>" placeholder="51010100010011xxxx">
                                    </div>
                                    <div class="form-group">
                                        <label>Status NIK</label>
                                        <select name="status_nik" id="status_nik" class="form-control input-lg dynamic" required onkeypress="return ;" data-dependent="status_niks">
                                            <option><?php echo $koperasii->status_nik; ?></option>
                                            <option>Sertifikat - Aktif</option>
                                            <option>Sertifikat - Expired</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="tanggal_sertifikat">Tanggal Berlaku Sertifikat</label>
                                        <input type="date" class="form-control" id="tanggal_sertifikat" name="tanggal_sertifikat" value="<?php echo $koperasii->tanggal_sertifikat; ?>" placeholder="Masukan Nama Kepala Rumah Tangga">
                                    </div>
                                    <div class="form-group">
                                        <label>Status Grade</label>
                                        <select name="status_grade" id="status_grade" class="form-control input-lg dynamic" required onkeypress="return ;" data-dependent="status_grades">
                                            <option><?php echo $koperasii->status_grade; ?></option>
                                            <option>A</option>
                                            <option>B</option>
                                            <option>C</option>
                                            <option>D</option>
                                            <option>E</option>
                                            <option>F</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
    </div>
    <aside class="control-sidebar control-sidebar-light">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- End of Modal Maps -->
    <!-- jQuery -->
    <script src="<?= base_url('admincss/') ?>plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('admincss/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="<?= base_url('admincss/') ?>plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="<?= base_url('admincss/') ?>plugins/sparklines/sparkline.js"></script>
    <!-- Summernote -->
    <script src="<?= base_url('admincss/') ?>plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="<?= base_url('admincss/') ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('admincss/') ?>dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url('admincss/') ?>dist/js/demo.js"></script>
    <script src="<?= base_url('admincss/') ?>jsjs/jquery-3.2.1.min.js"></script>
    <!-- <script type="text/javascript">
        $(document).ready(function() {
            //call function get data edit
            get_data_edit();

            $('.kabkotss2').change(function() {
                var id = $(this).val();
                var kecamatans = "<?php echo $kecamatans; ?>";
                $.ajax({
                    url: "<?php echo site_url('dashboard/getdatakecamatan'); ?>",
                    method: "POST",
                    data: {
                        id: id
                    },
                    async: true,
                    dataType: 'json',
                    success: function(data) {

                        $('select[name="kecamm2"]').empty();

                        $.each(data, function(key, value) {
                            if (kecamatans == value.id) {
                                $('select[name="kecamm2"]').append('<option value="' + value.id + '" selected>' + value.nama_kecamatan + '</option>').trigger('change');
                            } else {
                                $('select[name="kecamm2"]').append('<option value="' + value.id + '">' + value.nama_kecamatan + '</option>');
                            }
                        });

                    }
                });
                return false;
            });

            //load data for edit
            function get_data_edit() {
                var id = $('[name="koperasi_id"]').val();
                $.ajax({
                    url: "<?php echo site_url('dashboard/get_data_edit'); ?>",
                    method: "POST",
                    data: {
                        id: id
                    },
                    async: true,
                    dataType: 'json',
                    success: function(data) {
                        $.each(data, function(i, item) {
                            $('[name="product_name"]').val(data[i].product_name);
                            $('[name="category"]').val(data[i].product_category_id).trigger('change');
                            $('[name="sub_category"]').val(data[i].product_subcategory_id).trigger('change');
                            $('[name="product_price"]').val(data[i].product_price);
                        });
                    }

                });
            }

        });
    </script> -->

    </section>
    </div>
</body>

</html>