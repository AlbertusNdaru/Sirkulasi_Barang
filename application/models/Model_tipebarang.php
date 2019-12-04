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

    function delete_tipe_barang($id_tipebarang)
    {
        $this->db->where('id_tipe_barang', $id_tipebarang);
        $deletetipe_barang = $this->db->delete('tb_tipe_barang');
        return $deletetipe_barang;
    }
}
