<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sigiat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kegiatan_model');
    }

    public function index()
    {
        $data['title'] = 'Sigiat';
        $data['user'] = $this->db->get_Where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['kegiatan'] = $this->Kegiatan_model->getKegiatan();

        $this->load->view('sigiat/header', $data);
        $this->load->view('sigiat/navbar', $data);
        $this->load->view('sigiat/index', $data);
        $this->load->view('sigiat/footer', $data);
        
    }
}