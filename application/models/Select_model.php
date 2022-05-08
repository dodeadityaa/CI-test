<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Select_model extends CI_Model
{
    //show data koperasi
    function get_koperasi()
    {
        $this->db->select(
            'koperasi.id                     ,
        nama_kabkot            ,
        nama_kecamatan            ,
        nama_desa            ,
        nama_koperasi           ,
        alamat                  ,
        no_badan_hukum          ,
        tanggal_badan_hukum     ,
        bentuk_koperasi         ,
        jenis_koperasi          ,
        kelompok_koperasi       ,
        sektor_usaha            ,
        nama_ketua              ,
        nama_sekertaris         ,
        nama_bendahara          ,
        nama_pengawas           ,
        nama_manager            ,
        jumlah_anggota_pria     ,
        jumlah_anggota_wanita   ,
        no_koperasi             ,
        status_nik              ,
        tanggal_sertifikat      ,
        status_grade            '
        );
        $this->db->from('koperasi');
        $this->db->join('kabkot', 'kabkot.id = id_kabkot', 'inner');
        $this->db->join('kecamatan', 'kecamatan.id = id_kecamatan', 'inner');
        $this->db->join('desa', 'desa.id = id_desa', 'inner');
        $query = $this->db->get();
        return $query;
    }
    //show data koperasi
    //edit dan show detail data koperasi
    private $table = "koperasi";
    public function getById($koperasi_id)
    {
        return $this->db->get_where($this->table, ["id" => $koperasi_id])->row();
    }

    function get_koperasi_id($koperasi_id)
    {
        $this->db->select(
            'koperasi.id                     ,
                nama_kabkot            ,
                nama_kecamatan            ,
            nama_desa'
        );
        $this->db->from('koperasi');
        $this->db->join('kabkot', 'kabkot.id = id_kabkot', 'inner');
        $this->db->join('kecamatan', 'kecamatan.id = id_kecamatan', 'inner');
        $this->db->join('desa', 'desa.id = id_desa', 'inner');
        $this->db->where('koperasi.id', $koperasi_id);
        $query = $this->db->get();
        return $query;
    }

    function get_koperasi_by_id($koperasi_id)
    {
        $query = $this->db->get_where('koperasi', array('id' =>  $koperasi_id));
        return $query;
    }
    //edit dan show detail data koperasi
    //update data koperasi
    public function update_koperasi(
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
        $noindukkoperasi,
        $statusnik,
        $tanggalsertifikat,
        $statusgrade
    ) {
        $this->db->set('id_kabkot', $kabupatens);
        $this->db->set('id_kecamatan', $kecamatans);
        $this->db->set('id_desa', $desas);
        $this->db->set('nama_koperasi', $namakoperasi);
        $this->db->set('alamat', $alamat);
        $this->db->set('no_badan_hukum', $nobadanhukum);
        $this->db->set('tanggal_badan_hukum', $tanggalbadanhukum);
        $this->db->set('bentuk_koperasi', $bentukkoperasi);
        $this->db->set('jenis_koperasi', $jeniskoperasi);
        $this->db->set('kelompok_koperasi', $kelompokkoperasi);
        $this->db->set('sektor_usaha', $sektorusaha);
        $this->db->set('nama_ketua', $namaketua);
        $this->db->set('nama_sekertaris', $namasekertaris);
        $this->db->set('nama_bendahara', $namabendahara);
        $this->db->set('nama_pengawas', $namapengawas);
        $this->db->set('nama_manager', $namamanager);
        $this->db->set('jumlah_anggota_pria', $jumlahpria);
        $this->db->set('jumlah_anggota_wanita', $jumlahwanita);
        $this->db->set('no_koperasi', $noindukkoperasi);
        $this->db->set('status_nik', $statusnik);
        $this->db->set('tanggal_sertifikat', $tanggalsertifikat);
        $this->db->set('status_grade', $statusgrade);
        $this->db->where('id', $koperasi_id);
        $this->db->update('koperasi');
    }
    //update koperasi
    //show kabkot
    function getdatakabkot()
    {
        $query = $this->db->query("SELECT * FROM kabkot");
        return $query->result();
    }
    //show kabkot
    //show kecamatan
    function getkecam($kecamatans)
    {
        $query = $this->db->get_where('kecamatan', array('id_kabkot' => $kecamatans));
        return $query;
    }
    //show kecamatan
    //show desa
    function getdesa($desas)
    {
        $query = $this->db->get_where('desa', array('id_kecamatan' => $desas));
        return $query;
    }
    //show desa
    function save_koperasi(
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
        $noindukkoperasi,
        $statusnik,
        $tanggalsertifikat,
        $statusgrade
    ) {
        $data = array(
            'id_kabkot'                 => $kabupatens,
            'id_kecamatan'              => $kecamatans,
            'id_desa'                   => $desas,
            'nama_koperasi'             => $namakoperasi,
            'alamat'                    => $alamat,
            'no_badan_hukum'            => $nobadanhukum,
            'tanggal_badan_hukum'       => $tanggalbadanhukum,
            'bentuk_koperasi'           => $bentukkoperasi,
            'jenis_koperasi'            => $jeniskoperasi,
            'kelompok_koperasi'         => $kelompokkoperasi,
            'sektor_usaha'              => $sektorusaha,
            'nama_ketua'                => $namaketua,
            'nama_sekertaris'           => $namasekertaris,
            'nama_bendahara'            => $namabendahara,
            'nama_pengawas'             => $namapengawas,
            'nama_manager'              => $namamanager,
            'jumlah_anggota_pria'       => $jumlahpria,
            'jumlah_anggota_wanita'     => $jumlahwanita,
            'no_koperasi'               => $noindukkoperasi,
            'status_nik'                => $statusnik,
            'tanggal_sertifikat'        => $tanggalsertifikat,
            'status_grade'              => $statusgrade
        );
        $this->db->insert('koperasi', $data);
    }
    //Delete koperasi
    function delete_koperasi($koperasi_id)
    {
        $this->db->delete('koperasi', array('id' => $koperasi_id));
    }


    //Delete koperasi
}
