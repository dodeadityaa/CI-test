<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Select extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Select_model', 'mselect');
    }

    //tampilan input data dan show kabupaten kota
    public function index()
    {
        $getdata = $this->mselect->getdatakabkot();
        $data['datakabkot'] = $getdata;
        $this->load->view('crud/input', $data);
    }
    //tampilan input data dan show kabupaten kota
    //tampilan input data dan show kecamatan
    function getdatakecamatan()
    {
        $kecamatans = $this->input->post('id', TRUE);
        $data = $this->mselect->getkecam($kecamatans)->result();
        echo json_encode($data);
    }
    //tampilan input data dan show kecamatan
    //tampilan input data dan show desa
    function getdatadesa()
    {
        $desas = $this->input->post('id', TRUE);
        $data = $this->mselect->getdesa($desas)->result();
        echo json_encode($data);
    }
    //tampilan input data dan show desa
    //save koperasi ke database
    function save_koperasi()
    {
        $kabupatens             = $this->input->post('kabkotss2', TRUE);
        $kecamatans             = $this->input->post('kecamm2', TRUE);
        $desas                  = $this->input->post('desass2', TRUE);
        $namakoperasi           = $this->input->post('nama_koperasi', TRUE);
        $alamat                 = $this->input->post('alamat', TRUE);
        $nobadanhukum           = $this->input->post('no_badan_hukum', TRUE);
        $tanggalbadanhukum      = $this->input->post('tanggal_badan_hukum', TRUE);
        $bentukkoperasi         = $this->input->post('bentuk_koperasi', TRUE);
        $jeniskoperasi          = $this->input->post('jenis_koperasi', TRUE);
        $kelompokkoperasi       = $this->input->post('kelompok_koperasi', TRUE);
        $sektorusaha            = $this->input->post('sektor_usaha', TRUE);
        $namaketua              = $this->input->post('nama_ketua', TRUE);
        $namasekertaris         = $this->input->post('nama_sekertaris', TRUE);
        $namabendahara          = $this->input->post('nama_bendahara', TRUE);
        $namapengawas           = $this->input->post('nama_pengawas', TRUE);
        $namamanager            = $this->input->post('nama_manager', TRUE);
        $jumlahpria             = $this->input->post('jumlah_anggota_pria', TRUE);
        $jumlahwanita           = $this->input->post('jumlah_anggota_wanita', TRUE);
        $totall                 = $this->input->post('total_anggota', TRUE);
        $noindukkoperasi        = $this->input->post('no_koperasi', TRUE);
        $statusnik              = $this->input->post('status_nik', TRUE);
        $tanggalsertifikat      = $this->input->post('tanggal_sertifikat', TRUE);
        $statusgrade            = $this->input->post('status_grade', TRUE);
        $this->mselect->save_koperasi(
            $kabupatens,
            $kecamatans,
            $desas,
            $namakoperasi,
            $alamat,
            $nobadanhukum,
            $tanggalbadanhukum,
            $bentukkoperasi,
            $jeniskoperasi,
            $kelompokkoperasi,
            $sektorusaha,
            $namaketua,
            $namasekertaris,
            $namabendahara,
            $namapengawas,
            $namamanager,
            $jumlahpria,
            $jumlahwanita,
            $totall,
            $noindukkoperasi,
            $statusnik,
            $tanggalsertifikat,
            $statusgrade
        );
        $this->session->set_flashdata('msg', '<div class="alert alert-success">Koperasi Berhasil di inputkan</div>');
        redirect('dashboard');
    }
    //save koperasi ke database
    //edit koperasi
    //update product to database
    function update_koperasi()
    {
        $koperasi_id             = $this->input->post('koperasi_id', TRUE);
        $kabupatens             = $this->input->post('kabkotss2', TRUE);
        $kecamatans             = $this->input->post('kecamm2', TRUE);
        $desas                  = $this->input->post('desass2', TRUE);
        $namakoperasi           = $this->input->post('nama_koperasi', TRUE);
        $alamat                 = $this->input->post('alamat', TRUE);
        $nobadanhukum           = $this->input->post('no_badan_hukum', TRUE);
        $tanggalbadanhukum      = $this->input->post('tanggal_badan_hukum', TRUE);
        $bentukkoperasi         = $this->input->post('bentuk_koperasi', TRUE);
        $jeniskoperasi          = $this->input->post('jenis_koperasi', TRUE);
        $kelompokkoperasi       = $this->input->post('kelompok_koperasi', TRUE);
        $sektorusaha            = $this->input->post('sektor_usaha', TRUE);
        $namaketua              = $this->input->post('nama_ketua', TRUE);
        $namasekertaris         = $this->input->post('nama_sekertaris', TRUE);
        $namabendahara          = $this->input->post('nama_bendahara', TRUE);
        $namapengawas           = $this->input->post('nama_pengawas', TRUE);
        $namamanager            = $this->input->post('nama_manager', TRUE);
        $jumlahpria             = $this->input->post('jumlah_anggota_pria', TRUE);
        $jumlahwanita           = $this->input->post('jumlah_anggota_wanita', TRUE);
        $totall                 = $this->input->post('total_anggota', TRUE);
        $noindukkoperasi        = $this->input->post('no_koperasi', TRUE);
        $statusnik              = $this->input->post('status_nik', TRUE);
        $tanggalsertifikat      = $this->input->post('tanggal_sertifikat', TRUE);
        $statusgrade            = $this->input->post('status_grade', TRUE);
        $this->mselect->update_koperasi(
            $koperasi_id,
            $kabupatens,
            $kecamatans,
            $desas,
            $namakoperasi,
            $alamat,
            $nobadanhukum,
            $tanggalbadanhukum,
            $bentukkoperasi,
            $jeniskoperasi,
            $kelompokkoperasi,
            $sektorusaha,
            $namaketua,
            $namasekertaris,
            $namabendahara,
            $namapengawas,
            $namamanager,
            $jumlahpria,
            $jumlahwanita,
            $totall,
            $noindukkoperasi,
            $statusnik,
            $tanggalsertifikat,
            $statusgrade
        );
        $this->session->set_flashdata('msg', '<div class="alert alert-success">Data Koperasi Updated</div>');
        redirect('dashboard');
    }
    //edit koperasi

}
