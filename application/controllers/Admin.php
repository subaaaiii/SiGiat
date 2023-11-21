<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }
    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['sum_admin_org'] =  $this->db->get_where('user', ['role_id' => 3, 'is_Active' =>1])->num_rows();
        $data['sum_member'] =  $this->db->get_where('user', ['role_id' => 2, 'is_Active' =>1])->num_rows();
        $data['pending_request'] =  $this->db->get_where('user', ['is_active' => 0])->num_rows();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }

    public function role()
    {
        $data['title'] = 'Role';
        $data['user'] = $this->db->get_Where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get('user_role')->result_array();

        $this->form_validation->set_rules('role', 'Role', 'required');

        if ($this->form_validation->run() == false){
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role', $data);
        $this->load->view('templates/footer');
        }else{
            $this->db->insert('user_role', ['role' => $this->input->post('role')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    New Role Added</div>');
            redirect('admin/role');
        }

        
    }

    public function roleAccess($role_id)
    {
        $data['title'] = 'Role Access';
        $data['user'] = $this->db->get_Where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

        $this->db->where('id !=', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/roleAccess', $data);
        $this->load->view('templates/footer');
    }

    public function changeAccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];
        $result = $this->db->get_where('user_access_menu', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Acces Changed! </div>');
    }
    public function request()
    {
        $data['title'] = 'Request Aktivasi';
        $data['user'] = $this->db->get_Where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['request'] = $this->db->get_Where('user', ['is_active' => 0])->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/request', $data);
        $this->load->view('templates/footer');
    }

    public function userActivation($data)
    {
        $data_accept = array(
            'is_active' => 1
        );

        $this->db->where('id', $data);
        $this->db->update('user', $data_accept);
        
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Organisasi Telah Diaktifkan </div>');
        redirect('admin/request');
    }

    public function deleteUser($id)
    {
        $this->load->model('User_model', 'user');
        $this->user->userDelete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Organisasi Telah Dihapus </div>');
        redirect('admin/request');
    }
    public function deleteRole($id)
    {
        $this->load->model('role_model', 'role');
        $this->role->roleDelete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Role Telah Dihapus </div>');
        redirect('admin/role');
    }
    public function updateRole($id=null){
        $this->load->model('role_model', 'role');
        $data['user'] = $this->db->get_Where('user', ['email' => $this->session->userdata('email')])->row_array();
        if($this->input->post()){
            $data_update = $this->input->post();
            $this->role->update_role($data_update);
            redirect('admin/role');
        }else{
            $data['title'] = 'Edit Data role';
            $data['role'] = $this->role->get_id_role($id);          
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/formEditrole',$data);          
            $this->load->view('templates/footer');          
        }
    }

}
