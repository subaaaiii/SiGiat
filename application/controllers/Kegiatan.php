<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kegiatan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Kegiatan_model');
    }
    public function index()
    {
        $data['title'] = 'Management Kegiatan';
        $data['user'] = $this->db->get_Where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['kegiatan'] = $this->Kegiatan_model->getKegiatan();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kegiatan/management_kegiatan', $data);
        $this->load->view('templates/footer');
    }
    public function insert()
    {
        if ($this->input->post()) {
            $data_insert = $this->input->post();
            $upload_image = $_FILES['foto']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']     = '2048';
                $config['upload_path'] = './assets/img/foto_kegiatan/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('foto')) {

                    $new_image = $this->upload->data('file_name');
                    $data_foto = $new_image;
                }
            }
            $result = $this->Kegiatan_model->insertKegiatan($data_insert, $data_foto);
            if ($result > 0) {
                $this->session->set_flashdata('message', '<div class="col-6 alert alert-success" role="alert">
                 Success!
              </div>');
            } else {
                $this->session->set_flashdata('message', '<div class="col-6 alert alert-danger" role="alert">
                Error
              </div>');
            }
            redirect('kegiatan');
        } else {
            $data['title'] = 'Form Kegiatan';
            $data['user'] = $this->db->get_Where('user', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('kegiatan/form_kegiatan', $data);
            $this->load->view('templates/footer');
        }
    }

    public function updateKegiatan($id = null)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        if ($this->input->post()) {
            $judul = $this->input->post('judul');
            $deskripsi = $this->input->post('deskripsi');
            $tanggal_kegiatan = $this->input->post('tanggal_kegiatan');
            $tanggal_daftar = $this->input->post('tanggal_daftar');
            $tanggal_berakhir = $this->input->post('tanggal_berakhir');
            $id = $this->input->post('id');
            
            
            
            $upload_image = $_FILES['foto']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']     = '2048';
                $config['upload_path'] = './assets/img/foto_kegiatan/';

                $this->load->library('upload', $config);

                if($this->upload->do_upload('foto')){

                    $old_image = $data['kegiatan']['foto'];
                    if($old_image != 'default.png'){
                        unlink(FCPATH. 'assets/img/foto-kegiatan/'. $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('foto', $new_image);
                }else{
                    echo $this->upload->display_errors();
                }
            }
            $this->db->set('judul', $judul);
            $this->db->set('deskripsi', $deskripsi);
            $this->db->set('tanggal_kegiatan', $tanggal_kegiatan);
            $this->db->set('tanggal_daftar', $tanggal_daftar);
            $this->db->set('tanggal_berakhir', $tanggal_berakhir);
            $this->db->where('id', $id);
            $this->db->update('kegiatan');
            redirect('kegiatan');
        } else {
            $data['title'] = 'Edit Data kegiatan';
            $data['k'] = $this->Kegiatan_model->get_id_kegiatan($id);
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('kegiatan/update_kegiatan', $data);
            $this->load->view('templates/footer');
        }
    }
}
