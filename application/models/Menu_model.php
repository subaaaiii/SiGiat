<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_model extends CI_Model
{
    public function getSubMenu(){
        $query =" SELECT `user_sub_menu`.*, `user_menu`.`menu`
                FROM `user_sub_menu` JOIN `user_menu`
                ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                ";
        return $this->db->query($query)->result_array();
    }
    
    public function submenuDelete($id)
    {
        $this->db->delete('user_sub_menu', array('id' => $id));
    }
    
    public function menuDelete($id)
    {
        $this->db->delete('user_menu', array('id' => $id));
    }

    function get_id_menu($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('user_menu')->result();
    }

    function update_menu($data)
    {
        // $sql = "UPDATE  subairi_pasien SET nama=?, jenis_kelamin=?, umur=?, tekanan_darah=?, efek_Samping=? WHERE no_antrian=? ";
        // $this->db->query($sql, array($data['nama'], $data['jenis_kelamin'], $data['umur'], $data['tekanan_darah'], $data['efek_samping'], $data['no_antrian']));
    
        $data_update = array(
            'id' => $data['id'],
            'menu' => $data['menu'],
        );

        $this->db->where('id', $data['id']);
        $this->db->update('user_menu', $data_update);

    }
    function get_id_submenu($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('user_sub_menu')->result();
    }

    function update_submenu($data)
    {
        // $sql = "UPDATE  subairi_pasien SET nama=?, jenis_kelamin=?, umur=?, tekanan_darah=?, efek_Samping=? WHERE no_antrian=? ";
        // $this->db->query($sql, array($data['nama'], $data['jenis_kelamin'], $data['umur'], $data['tekanan_darah'], $data['efek_samping'], $data['no_antrian']));
    
        $data_update = array(
            'id' => $data['id'],
            'menu_id' => $data['menu_id'],
            'title' => $data['title'],
            'icon' => $data['icon'],
            'url' => $data['url'],
            'is_active' => $data['is_active'],
        );

        $this->db->where('id', $data['id']);
        $this->db->update('user_sub_menu', $data_update);

    }
}