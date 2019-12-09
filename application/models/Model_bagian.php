<?php
class Model_bagian extends CI_Model
{
    function get_bagian()
    {
        $data_bagian = $this->db->get("tb_bagian")->result();
        return $data_bagian;
    }

    function get_bagian_by_id($id_bagian)
    {
        $this->db->where("id_bagian", $id_bagian);
        $get_bagianById = $this->db->get('tb_bagian')->row();
        return $get_bagianById;
    }
    function get_id_bagian_max()
    {
        $this->db->select("max(id_bagian) as maxKode");
        $this->db->from("tb_bagian");
        return $this->db->get()->row();
    }

    function add_bagian($data_bagian)
    {
        $add_bagian = $this->db->insert('tb_bagian', $data_bagian);
        return $add_bagian;
    }

    function update_bagian($id_bagian, $data_bagian)
    {
        $this->db->where('id_bagian', $id_bagian);
        $update_bagian = $this->db->update('tb_bagian', $data_bagian);
        return $update_bagian;
    }

    function delete_bagian($id_bagian)
    {
        $this->db->where('id_bagian', $id_bagian);
        $delete_bagian = $this->db->delete('tb_bagian');
        return $delete_bagian;
    }
}
