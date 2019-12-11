<?php
class Model_usergroup extends CI_Model
{
    function get_user_group()
    {
        $datauser_group = $this->db->get("tb_hak_akses")->result();
        return $datauser_group;
    }

    function get_user_group_by_id($id_level)
    {
        $this->db->where("id_level", $id_level);
        $getuser_groupById = $this->db->get('tb_hak_akses')->row();
        return $getuser_groupById;
    }

    function add_usergroup($datauser_group)
    {
        $adduser_group = $this->db->insert('tb_hak_akses', $datauser_group);
        return $adduser_group;
    }

    function update_user_group($id_level, $datauser_group)
    {
        $this->db->where('id_level', $id_level);
        $updateuser_group = $this->db->update('tb_hak_akses', $datauser_group);
        return $updateuser_group;
    }

    function delete_user_group($id_level)
    {
        $this->db->where('id_level', $id_level);
        $deleteuser_group = $this->db->delete('tb_hak_akses');
        return $deleteuser_group;
    }
}
