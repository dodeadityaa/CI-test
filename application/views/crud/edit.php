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
                                            <?php foreach ($datakabkot as $row) : ?>
                                                <option value="<?= $koperasii->id_kabkot ?>"><?= $row->nama_kabkot ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Kecamatan</label>
                                        <select name="kecamm2" id="kecamm2" class="form-control input-lg kecamm2" required onkeypress="return ;" data-dependent="kecamm2">
                                            <option value="<?= $koperasii->id_kecamatan ?>"><?= $row->nama_kecamatan ?></option>

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Desa</label>
                                        <select name="desass2" id="desass2" class="form-control input-lg desass2" required onkeypress="return ;" data-dependent="desass2">
                                            <option value="<?php echo $koperasii->id_desa; ?>" selected><?php echo $row->nama_desa; ?></option>
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
                                        <select name="bentuk_koperasi" id="bentuk_koperasi" class="form-control" data-dependent="bentuk_koperasis" required onkeypress="return ;">
                                            <option value="">Masukan Keterangan</option>
                                            <?php
                                            if ($koperasii->bentuk_koperasi == "Primer Kabupaten/Kota") echo "<option value='Primer Kabupaten/Kota' selected>Primer Kabupaten/Kota</option>";
                                            else echo "<option value='Primer Kabupaten/Kota'>Primer Kabupaten/Kota</option>";

                                            if ($koperasii->bentuk_koperasi == "Sekunder Kabupaten/Kota") echo "<option value='Sekunder Kabupaten/Kota' selected>Sekunder Kabupaten/Kota</option>";
                                            else echo "<option value='Sekunder Kabupaten/Kota'>Sekunder Kabupaten/Kota</option>";
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Jenis Koperasi</label>
                                        <select name="jenis_koperasi" id="jenis_koperasi" class="form-control input-lg dynamic" required onkeypress="return ;" data-dependent="jenis_koperasis">
                                            <option value="">Masukan Keterangan</option>
                                            <?php
                                            if ($koperasii->jenis_koperasi == "Simpan Pinjam") echo "<option value='Simpan Pinjam' selected>Simpan Pinjam</option>";
                                            else echo "<option value='Simpan Pinjam'>Simpan Pinjam</option>";

                                            if ($koperasii->jenis_koperasi == "Konsumen") echo "<option value='Konsumen' selected>Konsumen</option>";
                                            else echo "<option value='Konsumen'>Konsumen</option>";

                                            if ($koperasii->jenis_koperasi == "produsen") echo "<option value='produsen' selected>produsen</option>";
                                            else echo "<option value='produsen'>produsen</option>";

                                            if ($koperasii->jenis_koperasi == "pemasaran") echo "<option value='pemasaran' selected>pemasaran</option>";
                                            else echo "<option value='pemasaran'>pemasaran</option>";

                                            if ($koperasii->jenis_koperasi == "jasa") echo "<option value='jasa' selected>jasa</option>";
                                            else echo "<option value='jasa'>jasa</option>";
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Kelompok Koperasi</label>
                                        <select name="kelompok_koperasi" id="kelompok_koperasi" class="form-control input-lg dynamic" required onkeypress="return ;" data-dependent="kelompok_koperasis">
                                            <option value="">Masukan Keterangan</option>
                                            <?php
                                            if ($koperasii->kelompok_koperasi == "Kop. Simpan Pinjam") echo "<option value='Kop. Simpan Pinjam' selected>Kop. Simpan Pinjam</option>";
                                            else echo "<option value='Kop. Simpan Pinjam'>Kop. Simpan Pinjam</option>";

                                            if ($koperasii->kelompok_koperasi == "Kop. Konsumen") echo "<option value='Kop. Konsumen' selected>Kop. Konsumen</option>";
                                            else echo "<option value='Kop. Konsumen'>Kop. Konsumen</option>";

                                            if ($koperasii->kelompok_koperasi == "Kop. produsen") echo "<option value='Kop. produsen' selected>Kop. produsen</option>";
                                            else echo "<option value='Kop. produsen'>Kop. produsen</option>";

                                            if ($koperasii->kelompok_koperasi == "Kop. pemasaran") echo "<option value='Kop. pemasaran' selected>Kop. pemasaran</option>";
                                            else echo "<option value='Kop. pemasaran'>Kop. pemasaran</option>";

                                            if ($koperasii->kelompok_koperasi == "Kop. jasa") echo "<option value='Kop. jasa' selected>Kop. jasa</option>";
                                            else echo "<option value='Kop. jasa'>Kop. jasa</option>";
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Sektor Usaha</label>
                                        <select name="sektor_usaha" id="sektor_usaha" class="form-control input-lg dynamic" required onkeypress="return ;" data-dependent="sektor_usahas">
                                            <option value="">Masukan Keterangan</option>
                                            <?php
                                            if ($koperasii->sektor_usaha == "Jasa Angkutan") echo "<option value='Jasa Angkutan' selected>Jasa Angkutan</option>";
                                            else echo "<option value='Jasa Angkutan'>Jasa Angkutan</option>";

                                            if ($koperasii->sektor_usaha == "Jasa Perlayaran") echo "<option value='Jasa Perlayaran' selected>Jasa Perlayaran</option>";
                                            else echo "<option value='Jasa Perlayaran'>Jasa Perlayaran</option>";

                                            if ($koperasii->sektor_usaha == "Jasa Fotokopi") echo "<option value='Jasa Fotokopi' selected>Jasa Fotokopi</option>";
                                            else echo "<option value='Jasa Fotokopi'>Jasa Fotokopi</option>";

                                            if ($koperasii->sektor_usaha == "Jasa Perparkiran") echo "<option value='Jasa Perparkiran' selected>Jasa Perparkiran</option>";
                                            else echo "<option value='Jasa Perparkiran'>Jasa Perparkiran</option>";

                                            if ($koperasii->sektor_usaha == "Jasa Asuransi") echo "<option value='Jasa Asuransi' selected>Jasa Asuransi</option>";
                                            else echo "<option value='Jasa Asuransi'>Jasa Asuransi</option>";
                                            ?>
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
                                            <option value="">Masukan Keterangan</option>
                                            <?php
                                            if ($koperasii->status_nik == "Sertifikat - Aktif") echo "<option value='Sertifikat - Aktif' selected>Sertifikat - Aktif</option>";
                                            else echo "<option value='Sertifikat - Aktif'>Sertifikat - Aktif</option>";

                                            if ($koperasii->status_nik == "Sertifikat - Expired") echo "<option value='Sertifikat - Expired' selected>Sertifikat - Expired</option>";
                                            else echo "<option value='Sertifikat - Expired'>Sertifikat - Expired</option>";
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="tanggal_sertifikat">Tanggal Berlaku Sertifikat</label>
                                        <input type="date" class="form-control" id="tanggal_sertifikat" name="tanggal_sertifikat" value="<?php echo $koperasii->tanggal_sertifikat; ?>" placeholder="Masukan Nama Kepala Rumah Tangga">
                                    </div>
                                    <div class="form-group">
                                        <label>Status Grade</label>
                                        <select name="status_grade" id="status_grade" class="form-control input-lg dynamic" required onkeypress="return ;" data-dependent="status_grades">
                                            <option value="">Masukan Keterangan</option>
                                            <?php
                                            if ($koperasii->status_grade == "A") echo "<option value='A' selected>A</option>";
                                            else echo "<option value='A'>A</option>";

                                            if ($koperasii->status_grade == "B") echo "<option value='B' selected>B</option>";
                                            else echo "<option value='B'>B</option>";

                                            if ($koperasii->status_grade == "C") echo "<option value='C' selected>C</option>";
                                            else echo "<option value='C'>C</option>";

                                            if ($koperasii->status_grade == "D") echo "<option value='D' selected>D</option>";
                                            else echo "<option value='D'>D</option>";
                                            ?>
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
    <script type="text/javascript">
        $(document).ready(function() {

            $('#kabkotss2').change(function() {
                var id = $(this).val();
                $.ajax({
                    url: "<?php echo site_url('Select/getdatakecamatan'); ?>",
                    method: "POST",
                    data: {
                        id: id
                    },
                    async: true,
                    dataType: 'json',
                    success: function(data) {

                        var html = '';
                        var i;
                        for (i = 0; i < data.length; i++) {
                            html += '<option value=' + data[i].id + '>' + data[i].nama_kecamatan + '</option>';
                        }
                        $('#kecamm2').html(html);

                    }
                });
                return false;
            });
            $('#kecamm2').change(function() {
                var id = $(this).val();
                $.ajax({
                    url: "<?php echo site_url('Select/getdatadesa'); ?>",
                    method: "POST",
                    data: {
                        id: id
                    },
                    async: true,
                    dataType: 'json',
                    success: function(data) {

                        var html = '';
                        var i;
                        for (i = 0; i < data.length; i++) {
                            html += '<option value=' + data[i].id + '>' + data[i].nama_desa + '</option>';
                        }
                        $('#desass2').html(html);

                    }
                });
                return false;
            });

        });
    </script>

    </section>
    </div>
</body>

</html>