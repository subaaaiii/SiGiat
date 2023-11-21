<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Role_model extends CI_Model
{
    
    public function roleDelete($id)
    {
        $this->db->delete('user_role', array('id' => $id));
    }
    function get_id_role($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('user_role')->result();
    }
    function update_role($data)
    {
        $data_update = array(
            'id' => $data['id'],
            'role' => $data['role']
        );

        $this->db->where('id', $data['id']);
        $this->db->update('user_role', $data_update);

    }
}