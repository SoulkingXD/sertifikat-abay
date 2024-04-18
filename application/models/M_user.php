<?php 

class M_user extends CI_Model {

    public function get_data($table)
    {
        return $this->db->get($table);
    }

    public function tambah_aksi($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function update_data($data, $table)
    {
        $this->db->where('user_id', $data['user_id']);
        $this->db->update($table, $data);
    }

    public function hapus($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

}