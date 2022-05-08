<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
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
		$this->load->view('welcome_message', $data);
	}
	function show($koperasi_id)
	{
		$data['koperasii'] = $this->mselect->getById($koperasi_id);
		$data['datakabkot'] = $this->mselect->get_koperasi_id($koperasi_id)->result();
		$this->load->view('crud/show', $data);
	}

	function get_data_show()
	{
		$koperasi_id = $this->input->post('koperasi_id', TRUE);
		$data = $this->mselect->get_koperasi_by_id($koperasi_id)->result();
		echo json_encode($data);
	}
}
