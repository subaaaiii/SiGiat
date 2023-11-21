<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function userDelete($id)
    {
        $this->db->delete('user', array('id' => $id));
    }
    public function roleDelete($id)
    {
        $this->db->delete('user_role', array('id' => $id));
    }
}