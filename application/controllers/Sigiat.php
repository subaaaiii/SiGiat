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
    public function kegiatan()
    {
        $data['title'] = 'Sigiat';
        $data['user'] = $this->db->get_Where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kegiatan'] = $this->Kegiatan_model->getKegiatan();
        $this->load->view('sigiat/header', $data);
        $this->load->view('sigiat/navbar', $data);
        $this->load->view('sigiat/kegiatan', $data);
        $this->load->view('sigiat/footer', $data);
        
    }
    public function viewMore($id)
    {
        $data['title'] = 'Detail Kegiatan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kegiatan'] = $this->Kegiatan_model->get_id_kegiatan($id);

        $this->load->view('sigiat/header', $data);
        $this->load->view('sigiat/navbar', $data);
        $this->load->view('sigiat/detail_kegiatan', $data);
        $this->load->view('sigiat/footer');
    }

    public function viewMore2($id)
    {
        $data['title'] = 'Detail Kegiatan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kegiatan'] = $this->Kegiatan_model->get_id_kegiatan($id);

        $this->load->view('sigiat/header', $data);
        $this->load->view('sigiat/navbar', $data);
        $this->load->view('sigiat/detail_kegiatan2', $data);
        $this->load->view('sigiat/footer');
    }
    public function viewAll()
    {
        $data['title'] = 'Semua Kegiatan';
        $data['user'] = $this->db->get_Where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kegiatan'] = $this->Kegiatan_model->getKegiatan();
        $this->load->view('sigiat/header', $data);
        $this->load->view('sigiat/navbar', $data);
        $this->load->view('sigiat/semua_kegiatan', $data);
        $this->load->view('sigiat/footer', $data);
        
    }

}