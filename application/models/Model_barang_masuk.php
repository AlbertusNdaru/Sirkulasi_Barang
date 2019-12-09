<?php
class Model_barang_masuk extends CI_Model
{
    function get_barang_masuk()
    {
        $this->db->select('a.*, b.Name as NamaBarang, c.Name as NamaTipe');
        $this->db->from('tb_barang_masuk as a');
        $this->db->join('tb_barang as b', 'b.id_barang=a.id_barang');
        $this->db->join('tb_tipe_barang as c', 'c.id_tipe_barang=b.id_tipe_barang');
        $this->db->where('deleted',0);
        $dataBarang = $this->db->get()->result();
        return $dataBarang;
    }

    function get_barang_by_id($id_barang)
    {
        $this->db->select('a.*, b.Name as NameOperator, c.Name as NamaTipe');
        $this->db->from('tb_barang as a');
        $this->db->join('tb_operator as b', 'b.id_operator=a.id_operator');
        $this->db->join('tb_tipe_barang as c', 'c.id_tipe_barang=b.id_tipe_barang');
        $this->db->where('deleted',0);
        $this->db->where("id_barang", $id_barang);
        $getbarangById = $this->db->get()->row();
        return $getbarangById;
    }

    function get_barang_by_kategori($kategori)
    {
        $this->db->select('a.*, b.Name as NameOperator, c.Name as NamaTipe');
        $this->db->from('tb_barang as a');
        $this->db->join('tb_operator as b', 'b.id_operator=a.id_operator');
        $this->db->join('tb_tipe_barang as c', 'c.id_tipe_barang=b.id_tipe_barang');
        $this->db->where('deleted',0);
        $this->db->where("a.id_tipe_barang", $kategori);
        $getbarangById = $this->db->get()->result();
        return $getbarangById;
    }

    function add_barang_masuk($dataBarang)
    {
        $add_barang = $this->db->insert('tb_barang_masuk', $dataBarang);
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
