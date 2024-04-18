<?php 
class M_event extends CI_Model 
{

    public function get_data($table)
    {
        return $this->db->get($table);
    }
    function tambah_aksi($data,$table)
    { 
        $this->db->insert($table, $data);
        
    }

    public function update_data($data, $table)
    {
    $this->db->where('event_id', $data['event_id']);
    $this->db->update($table, $data);
    }

    function hapus($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }
}