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
    public function kegiatan($filter = NULL)
    {
        $data['title'] = 'Sigiat';
        $data['organisasi'] = $this->Kegiatan_model->getOrganisasi();
        $data['user'] = $this->db->get_Where('user', ['email' => $this->session->userdata('email')])->row_array();
        if ($filter) {
            $data['kegiatan'] = $this->Kegiatan_model->filterKegiatan($filter);
            $data['isFilter'] = true;
            $data['titleFilter'] = $filter;
        } else {
            $data['kegiatan'] = $this->Kegiatan_model->getKegiatan();
            $data['isFilter'] = false;
            $data['titleFilter'] = 'Semua Kegiatan';
        }
        $data['filter'] = $this->Kegiatan_model->filter();
        $this->load->view('sigiat/header', $data);
        $this->load->view('sigiat/navbar', $data);
        $this->load->view('sigiat/kegiatan', $data);
        $this->load->view('sigiat/footer', $data);
    }
    public function filterBulanTahun($nilai, $bulan, $tahun)
    {
        $data['title'] = 'Sigiat';
        $data['user'] = $this->db->get_Where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kegiatan'] = $this->Kegiatan_model->filterByBulan($nilai, $tahun);
        $data['filter'] = $this->Kegiatan_model->filter();
        $data['titleFilter'] = $bulan . ' ' . $tahun;
        $data['isFilter'] = TRUE;
        $this->load->view('sigiat/header', $data);
        $this->load->view('sigiat/navbar', $data);
        $this->load->view('sigiat/kegiatan', $data);
        $this->load->view('sigiat/footer', $data);
    }
    public function filterOrganisasi()
    {
        $data['title'] = 'Sigiat';
        $data['user'] = $this->db->get_Where('user', ['email' => $this->session->userdata('email')])->row_array();
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
    public function profile($user_id)
    {
        $data['title'] = 'Semua Kegiatan';
        $data['user'] = $this->db->get_Where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['organisasi'] = $this->db->get_Where('user', ['id' => $user_id])->row_array();
        $data['kegiatan'] = $this->Kegiatan_model->getKegiatanByUserId($user_id);
        $data['jumlahkegiatan'] = $this->Kegiatan_model->countgetKegiatanByUserId($user_id);
        $data['follower'] = $this->Kegiatan_model->getFollower($user_id);
        $this->load->view('sigiat/header', $data);
        $this->load->view('sigiat/navbar', $data);
        $this->load->view('sigiat/profile_organisasi', $data);
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
    public function removeFromKegiatanku($id)
    {
        $this->Kegiatan_model->removeKegiatanku($id);
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
    public function viewKegiatanku()
    {
        $data['title'] = 'Kegiatanku';
        $data['user'] = $this->db->get_Where('user', ['email' => $this->session->userdata('email')])->row_array();
        $user_id = $data['user']['id'];
        $data['kegiatan'] = $this->Kegiatan_model->getKegiatanku($user_id);
        $this->load->view('sigiat/header', $data);
        $this->load->view('sigiat/navbar', $data);
        $this->load->view('sigiat/kegiatanku', $data);
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

    public function toggleDaftar()
    {
        $kegiatanId = $this->input->post('kegiatanId');
        $userId = $this->input->post('userId');

        // Load the model and toggle the favorite status
        $this->load->model('Kegiatan_model');
        $status = $this->Kegiatan_model->toggleDaftar($kegiatanId, $userId);

        echo $status; // 'add' if added to favorites, 'remove' if removed
    }
    public function toggleFollow()
    {
        $organisasiId = $this->input->post('organisasiId');
        $userId = $this->input->post('userId');

        // Load the model and toggle the favorite status
        $this->load->model('Kegiatan_model');
        $status = $this->Kegiatan_model->toggleFollow($organisasiId, $userId);

        echo $status; // 'add' if added to favorites, 'remove' if removed
    }

    public function tentangKami()
    {
        $data['title'] = 'Tentang Kami';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('sigiat/header', $data);
        $this->load->view('sigiat/navbar', $data);
        $this->load->view('sigiat/tentang_kami', $data);
        $this->load->view('sigiat/footer', $data);
    }
}
