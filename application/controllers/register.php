<?php
defined('BASEPATH') or exit('No direct script access allowed');

class register extends CI_Controller
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
        $this->form_validation->set_rules('password2', 'Password', 'matchess[password4]', [
            'matchess' => 'password tidak sama!!!'
        ]);
        $this->form_validation->set_rules('password4', 'Password', 'matchess[password2]');
        $this->form_validation->set_rules('email', 'Email', 'is_unique[user.email]', [
            'is_unique' => 'Email Sudah Terdaftar'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('register');
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Registrasi Failed</div>');
        } else {
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
                'data_created' => time()
            ];
            $this->registeran->input_data($data, 'user');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Registrasi Berhasil</div>');
            redirect('login');
        }
    }
}
