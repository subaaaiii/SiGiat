<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kegiatan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }
    public function index()
    {
        $data['title'] = 'Management Kegiatan';
        $data['user'] = $this->db->get_Where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kegiatan/management_kegiatan', $data);
        $this->load->view('templates/footer');
    }
    public function tambahKegiatan()
    {
        $data['title'] = 'Form Kegiatan';
        $data['user'] = $this->db->get_Where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kegiatan/form_kegiatan', $data);
        $this->load->view('templates/footer');
    }
}