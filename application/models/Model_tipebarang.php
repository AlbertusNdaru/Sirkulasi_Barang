<?php
class Model_tipebarang extends CI_Model
{
    function get_tipe_barang()
    {
        $datatipe_barang = $this->db->get("tb_tipe_barang")->result();
        return $datatipe_barang;
    }

    function get_tipe_barang_by_id($id_tipebarang)
    {
        $this->db->where("id_tipe_barang", $id_tipebarang);
        $gettipe_barangById = $this->db->get('tb_tipe_barang')->row();
        return $gettipe_barangById;
    }

    function get_tipe_barang_by_name($name)
    {
        $this->db->where("Name", $name);
        $gettipe_barangById = $this->db->get('tb_tipe_barang')->row();
        return $gettipe_barangById;
    }

    function get_id_tipe_max()
    {
        $this->db->select("max(id_tipe_barang) as maxKode");
        $this->db->from("tb_tipe_barang");
        return $this->db->get()->row();
    }

    function add_tipebarang($datatipe_barang)
    {
        $addtipe_barang = $this->db->insert('tb_tipe_barang', $datatipe_barang);
        return $addtipe_barang;
    }

    function update_tipe_barang($id_tipebarang, $datatipe_barang)
    {
        $this->db->where('id_tipe_barang', $id_tipebarang);
        $updatetipe_barang = $this->db->update('tb_tipe_barang', $datatipe_barang);
        return $updatetipe_barang;
    }

}
