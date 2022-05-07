<?php
defined('BASEPATH') or exit('No direct script access allowed');

class dashboard extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    function __construct()
    {
        parent::__construct();
        $this->load->model('Select_model', 'mselect');
        $this->load->library('session');
    }
    public function index()
    {
        $data['koperasi'] = $this->mselect->get_koperasi();
        $this->load->view('dashboard', $data);
    }
    //edit koperasi
    function edit($koperasi_id)
    {
        $data['koperasii'] = $this->mselect->getById($koperasi_id);
        $this->load->view('crud/edit', $data);
    }
    //edit koperasi
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
    //Delete Product from Database
    function delete()
    {
        $koperasi_id = $this->uri->segment(3);
        $this->mselect->delete_koperasi($koperasi_id);
        $this->session->set_flashdata('msg', '<div class="alert alert-success">Data Koperasi Deleted</div>');
        redirect('dashboard');
        //Delete Product from Database
    }
}
