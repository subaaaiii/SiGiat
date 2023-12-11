<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kegiatan_model extends CI_Model
{
    public function getKegiatan()
    {
        $this->db->select('user.name, kegiatan.*');
        $this->db->from('user');
        $this->db->join('kegiatan', 'user.id = kegiatan.penyelenggara', 'right');
        return $this->db->get()->result();       
    }

    public function getKegiatanByUserId($user_id)
    {
        $this->db->select('user.name, kegiatan.*');
        $this->db->from('user');
        $this->db->join('kegiatan', 'user.id = kegiatan.penyelenggara', 'inner');
        $this->db->where('kegiatan.penyelenggara',$user_id );
        return $this->db->get()->result();
    }

    function insertKegiatan($data, $data_foto)
    {
        // $sql = "INSERT INTO subairi_pasien VALUES(?,?,?,?,?,?,?)";
        // $this->db->query($sql, array($data['no'], $data['nama'], $data['jenis_kelamin'], $data['umur'], $data['tekanan_darah'], $data['efek_samping'], time()));
        $data_insert = array(
            'judul' => $data['judul'],
            'deskripsi' => $data['deskripsi'],
            'tanggal_kegiatan' => $data['tanggal_kegiatan'],
            'tanggal_daftar' => $data['tanggal_daftar'],
            'tanggal_berakhir' => $data['tanggal_berakhir'],
            'penyelenggara' => $data['penyelenggara'],
            'foto' => $data_foto
        );
        $this->db->insert('kegiatan', $data_insert);
        return $this->db->affected_rows();
    }

    function get_id_kegiatan($id)
    {
        $this->db->select('user.name, kegiatan.*');
        $this->db->from('user');
        $this->db->join('kegiatan', 'user.id = kegiatan.penyelenggara', 'inner');
        $this->db->where('kegiatan.id',$id );
        return $this->db->get()->row();
    }

    // function insertFavorite($id_kegiatan,$id_user)
    // {
    //     $data_insert = array(
    //         'id_user' => $id_user,
    //         'id_kegiatan' => $id_kegiatan
    //     );
    //     $this->db->insert('favorite', $data_insert);
    //     return $this->db->affected_rows();
    // }
    public function getFavorite($id)
    {
    $this->db->select('user.id, user.name, kegiatan.*, favorite.id');
    $this->db->from('user');
    $this->db->join('kegiatan', 'user.id = kegiatan.penyelenggara','inner');
    $this->db->join('favorite', 'kegiatan.id = favorite.id_kegiatan');
    $this->db->where('favorite.id_user', $id);
    return $this->db->get()->result();       
       
    }
    public function removeFavorite($id)
    {
        $this->db->delete('favorite', array('id' => $id));
    }
    public function isFavorite($kegiatanId,$user_id) {
        // Adjust 'kegiatan' and 'id_kegiatan' based on your actual table and column names
        $query = $this->db->get_where('favorite', array('id_kegiatan' => $kegiatanId, 'id_user' => $user_id));
        return $query->num_rows() > 0;
    }
    public function toggleFavorite($kegiatanId, $userId)
{
    // Check if the entry exists in the favorites table
    $isFavorite = $this->db->get_where('favorite', array('id_kegiatan' => $kegiatanId, 'id_user' => $userId))->row();

    if ($isFavorite) {
        // If it exists, remove it
        $this->db->delete('favorite', array('id_kegiatan' => $kegiatanId, 'id_user' => $userId));
        return 'remove';
    } else {
        // If it doesn't exist, add it
        $this->db->insert('favorite', array('id_kegiatan' => $kegiatanId, 'id_user' => $userId));
        return 'add';
    }
}



    // function update_kegiatan($data)
    // {

    //     $data_update = array(
    //         'judul' => $data['judul'],
    //         'deskripsi' => $data['deskripsi'],
    //         'tanggal_kegiatan' => $data['tanggal_kegiatan'],
    //         'tanggal_daftar' => $data['tanggal_daftar'], 
    //         'tanggal_berakhir' => $data['tanggal_berakhir'],
    //     );

    //     $this->db->where('id', $data['id']);
    //     $this->db->update('kegiatan', $data_update);

    // }
}
