<?php
class Model_operator extends CI_Model
{
    function get_operator()
    {
        $dataOperator = $this->db->get('tb_operator')->result();
        return $dataOperator;
    }

    function get_operator_by_status()
    {
        $this->db->where("Status", 'aktif');
        $getOperatorByStatus = $this->db->get('tb_operator')->result();
        return $getOperatorByStatus;
    }

    function get_operator_by_id($id_operator)
    {
        $this->db->where("id_operator", $id_operator);
        $getOperatorById = $this->db->get('tb_operator')->row();
        return $getOperatorById;
    }

    function get_operator_by_email($email)
    {
        $this->db->where("email_operator", $email);
        $getOperatorByEmail = $this->db->get('tb_operator')->row();
        return $getOperatorByEmail;
    }

    function add_operator($dataOperator)
    {
        $addoperator = $this->db->insert("tb_operator", $dataOperator);
        return $addoperator;
    }

    function update_operator($id_operator, $dataOperator)
    {
        $this->db->where('id_operator', $id_operator);
        $updateoperator = $this->db->update("tb_operator", $dataOperator);
        return $updateoperator;
    }

    function delete_operator($id_operator)
    {
        $this->db->where('id_operator', $id_operator);
        $deleteoperator = $this->db->delete("tb_operator");
        return $deleteoperator;
    }
}
