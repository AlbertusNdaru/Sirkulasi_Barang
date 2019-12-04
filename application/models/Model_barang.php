<?php
class Model_barang extends CI_Model
{
    function get_barang()
    {
        //$this->db->select();
        $dataBarang = $this->db->get('tb_barang')->result();
        return $dataBarang;
    }

    function get_barang_by_id($id_barang)
    {
        $this->db->where("id_barang", $id_barang);
        $getbarangById = $this->db->get('tb_barang')->row();
        return $getbarangById;
    }

    function add_barang($dataBarang)
    {
        $add_barang = $this->db->insert('tb_barang', $dataBarang);
        return $add_barang;
    }

    function update_barang($id_barang, $dataBarang)
    {
        $this->db->where('id_barang', $id_barang);
        $update_barang = $this->db->update('tb_barang', $dataBarang);
        return $update_barang;
    }

    function delete_barang($id_barang)
    {
        $this->db->where('id_barang', $id_barang);
        $delete_barang = $this->db->delete('tb_barang');
        return $delete_barang;
    }
}
