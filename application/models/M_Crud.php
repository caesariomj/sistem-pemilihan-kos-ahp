<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Crud extends CI_Model
{

    public function get_all_data($tabel)
    {
        $q = $this->db->get($tabel);
        return $q;
    }

    public function insert($tabel, $data)
    {
        $this->db->insert($tabel, $data);
    }

    public function insert_batch($tabel, $data)
    {
        $this->db->insert_batch($tabel, $data);
    }

    public function get_by_id($tabel, $pk, $id)
    {
        $this->db->where($pk, $id);
        $query = $this->db->get($tabel);
        return $query->result();
    }

    public function update($tabel, $data, $pk, $id)
    {
        $this->db->where($pk, $id);
        $this->db->update($tabel, $data);
    }

    public function delete($tabel, $data)
    {
        $this->db->delete($tabel, $data);
    }
}
