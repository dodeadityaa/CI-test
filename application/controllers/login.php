<?php
defined('BASEPATH') or exit('No direct script access allowed');

class login extends CI_Controller
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
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('registeran');
	}
	public function index()
	{
		$this->form_validation->set_rules('email', 'Email', 'valid_email');
		if ($this->form_validation->run() == false) {
			$this->load->view('login');
		} else {
			$this->loginin();
		}
	}

	public function loginin()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password2');

		$user = $this->db->get_where('user', ['email' => $email])->row_array();

		if ($user) {
			if (password_verify($password, $user['password'])) {
				$data = [
					'email' => $user['email']
				];
				$this->session->set_userdata($data);
				redirect('dashboard');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password salah !!!</div>');
				redirect('login');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email salah !!!</div>');
			redirect('login');
		}
	}
}
