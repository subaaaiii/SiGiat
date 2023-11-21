<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        if($this->session->userdata('email')){
            redirect('user');
        }

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['title'] = "Login Page";
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        //usernya ada
        if ($user) {
            //jika usernya active
            if ($user['is_active'] == 1) {
                //cek passwordnya
                if (password_verify($password, $user['password'])) {
                    //berhasil login
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 1) {

                        redirect('admin');
                    } else {
                        redirect('user');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Wrong password!</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            This Email has not been activated!</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Email is not registered, register first!</div>');
            redirect('auth');
        }
    }
    public function registration()
    {
        if($this->session->userdata('email')){
            redirect('user');
        } //jika sedang login tidak bisa masuk ke registration, harus logout dulu
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[user.email]',
            ['is_unique' => 'This email has already registered!']
        );
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]',
        [
            'matches' => "password dont match!",//form error nya
            'min_length' =>"password too short!"
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');


        if ($this->form_validation->run() === false) {
            $data['title'] = 'Registration Page';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/registration');
            $this->load->view('templates/auth_footer');
        } else {
            // Validation passed; you can proceed with your registration logic here
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)), 
                //htmlspecialchars akan mengonversi karakter-karakter seperti < dan > menjadi entitas HTML yang aman, sehingga teks tidak akan dieksekusi sebagai kode JavaScript oleh browser.
                //Argumen true akan mengaktifkan fitur "XSS Clean" pada CodeIgniter yang bisa membuatkode kita aman
                'lingkup' => null,
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];

            $this->db->insert('user', $data); //insert(tabel yang mana, data nya apa)
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Congratulation! your account has been created. Please Login</div>');
            redirect('auth');
        }
    }
    public function registration_org()
    {
        if($this->session->userdata('email')){
            redirect('user');
        } //jika sedang login tidak bisa masuk ke registration, harus logout dulu
        $this->form_validation->set_rules('name', 'Name Organization', 'required|trim');
        $this->form_validation->set_rules('lingkup', 'Lingkup', 'required');
        $this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[organization.email]',
            ['is_unique' => 'This email has already registered!']
        );
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]',
        [
            'matches' => "password dont match!",//form error nya
            'min_length' =>"password too short!"
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');


        if ($this->form_validation->run() === false) {
            $data['title'] = 'Registration Page';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/registration_org');
            $this->load->view('templates/auth_footer');
        } else {
            // Validation passed; you can proceed with your registration logic here
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)), 
                //htmlspecialchars akan mengonversi karakter-karakter seperti < dan > menjadi entitas HTML yang aman, sehingga teks tidak akan dieksekusi sebagai kode JavaScript oleh browser.
                //Argumen true akan mengaktifkan fitur "XSS Clean" pada CodeIgniter yang bisa membuatkode kita aman
                'lingkup' => htmlspecialchars($this->input->post('lingkup', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 3,
                'is_active' => 0,
                'date_created' => time()
            ];

            $this->db->insert('user', $data); //insert(tabel yang mana, data nya apa)
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Congratulation! your Organization account has been created. Please Login</div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            You have been logged out!</div>');
        redirect('auth');
    }

    public function blocked(){
        $data['title'] = "Access Blocked";
        $data['user'] = $this->db->get_Where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('auth/blocked', $data);
        $this->load->view('templates/footer');
    }
}