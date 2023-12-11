<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kegiatan_model extends CI_Model
{
    public function getKegiatan(){
        return $this->db->get('kegiatan')->result();
    }
    
    function insertKegiatan($data,$data_foto)
    {
        // $sql = "INSERT INTO subairi_pasien VALUES(?,?,?,?,?,?,?)";
        // $this->db->query($sql, array($data['no'], $data['nama'], $data['jenis_kelamin'], $data['umur'], $data['tekanan_darah'], $data['efek_samping'], time()));
        $data_insert = array(
            'judul' => $data['judul'],
            'deskripsi' => $data['deskripsi'],
            'tanggal_kegiatan' => $data['tanggal_kegiatan'],
            'tanggal_daftar' => $data['tanggal_daftar'], 
            'tanggal_berakhir' => $data['tanggal_berakhir'],
            'foto' => $data_foto,
            'link_pendaftaran' => $data['link_pendaftaran'],
        );
        $this->db->insert('kegiatan', $data_insert);
        return $this->db->affected_rows();
    }

    function get_id_kegiatan($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('kegiatan')->row();
    }

    function update_kegiatan($data)
    {
        
        $data_update = array(
            'judul' => $data['judul'],
            'deskripsi' => $data['deskripsi'],
            'tanggal_kegiatan' => $data['tanggal_kegiatan'],
            'tanggal_daftar' => $data['tanggal_daftar'], 
            'tanggal_berakhir' => $data['tanggal_berakhir'],
            'link_pendaftaran' => $data['link_pendaftaran'],
        );

        $this->db->where('id', $data['id']);
        $this->db->update('kegiatan', $data_update);
    }
}