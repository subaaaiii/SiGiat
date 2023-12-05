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
