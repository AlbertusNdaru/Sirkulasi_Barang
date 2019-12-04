<?php
class Model_admin extends CI_Model
{

    function get_admin()
    {
        $getAdmin = $this->db->get('tb_user')->result();
        return $getAdmin;
    }

    function get_admin_by_user($username)
    {
        $this->db->where("username", $username);
        $getloginbyuser = $this->db->get('tb_user')->row();
        return $getloginbyuser;
    }

    function get_admin_by_user_password($username, $password)
    {
        $this->db->select('tb_user.*,tb_operator.Status as StatusOperator');
        $this->db->from('tb_user');
        $this->db->join('tb_operator', 'tb_operator.id_operator=tb_user.id_operator');
        $this->db->where("tb_user.username", $username);
        $this->db->where("tb_user.password like BINARY", $password);
        $this->db->where("tb_operator.Status", 'Aktif');
        $getloginbyuserpass = $this->db->get()->row();
        return $getloginbyuserpass;
    }

    function get_admin_by_id($id)
    {
        $this->db->where("id_user", $id);
        $getloginbyId = $this->db->get('tb_user')->row();
        return $getloginbyId;
    }

    function get_admin_by_id_operator($id)
    {
        $this->db->where("id_operator", $id);
        $getdataoprator = $this->db->get('tb_user')->row();
        return $getdataoprator;
    }

    function add_admin($dataAdmin)
    {
        $addAdmin = $this->db->insert("tb_user", $dataAdmin);
        return $addAdmin;
    }

    function update_admin($idAdmin, $dataAdmin)
    {
        $this->db->where('id_user', $idAdmin);
        $updateAdmin = $this->db->update("tb_user", $dataAdmin);
        return $updateAdmin;
    }

    function delete_admin($idAdmin)
    {
        $this->db->where('id_user', $idAdmin);
        $deleteAdmin = $this->db->delete("tb_user");
        return $deleteAdmin;
    }
}
