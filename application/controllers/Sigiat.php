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
    // public function insertToFavorite($id,$id_user)
    // {
    //     $this->Kegiatan_model->insertFavorite($id,$id_user);
    //     redirect($this->agent->referrer());
    // }
    public function removeFromFavorite($id)
    {
        $this->Kegiatan_model->removeFavorite($id);
        redirect($this->agent->referrer());
    }
    public function viewFavorite()
    {
        $data['title'] = 'Favorite';
        $data['user'] = $this->db->get_Where('user', ['email' => $this->session->userdata('email')])->row_array();
        $user_id = $data['user']['id'];
        $data['favorite'] = $this->Kegiatan_model->getFavorite($user_id);
        $this->load->view('sigiat/header', $data);
        $this->load->view('sigiat/navbar', $data);
        $this->load->view('sigiat/favorite', $data);
        $this->load->view('sigiat/footer', $data);
        
    }
    public function toggleFavorite()
{
    $kegiatanId = $this->input->post('kegiatanId');
    $userId = $this->input->post('userId');

    // Load the model and toggle the favorite status
    $this->load->model('Kegiatan_model');
    $status = $this->Kegiatan_model->toggleFavorite($kegiatanId, $userId);

    echo $status; // 'add' if added to favorites, 'remove' if removed
}


}