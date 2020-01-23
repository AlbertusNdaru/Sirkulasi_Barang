<?php
class Model_barang extends CI_Model
{
    function get_barang()
    {
        $this->db->select('a.*, b.Name as NameOperator, c.Name as NamaTipe, d.Name as NamaSatuan');
        $this->db->from('tb_barang as a');
        $this->db->order_by('a.Create_at', 'DESC');
        $this->db->join('tb_operator as b', 'b.id_operator=a.id_operator');
        $this->db->join('tb_tipe_barang as c', 'c.id_tipe_barang=a.id_tipe_barang');
        $this->db->join('tb_satuan as d', 'd.id_satuan=a.id_satuan');
        $this->db->where('deleted',0);
        $dataBarang = $this->db->get()->result();
        return $dataBarang;
    }

    function kategori($kategori)
    {
        return $this->db->get_where('tb_tipe_barang', ['id_tipe_barang' => $kategori]);
    }

    function totalBarang()
    {
        $this->db->select('count(a.id_barang) as B');
        $this->db->from('tb_barang as a');
        $this->db->where('deleted',0);
        return $this->db->get()->row();
    }

    function getlimitstokbarang()
    {
        $this->db->select('a.*, b.Name as NameOperator, c.Name as NamaTipe, d.Name as NameSatuan');
        $this->db->from('tb_barang as a');
        $this->db->join('tb_operator as b', 'b.id_operator=a.id_operator');
        $this->db->join('tb_tipe_barang as c', 'c.id_tipe_barang=a.id_tipe_barang');
        $this->db->join('tb_satuan as d', 'd.id_satuan=a.id_satuan');
        $this->db->where('deleted',0);
        $this->db->where('Jumlah <',1);
        $dataBarang = $this->db->get()->result();
        return $dataBarang;
    }

    function get_id_barang_max()
    {
        $this->db->select("max(id_barang) as maxKode");
        $this->db->from("tb_barang");
        return $this->db->get()->row();
    }

    function get_barang_by_id($id_barang)
    {
        $this->db->select('a.*, b.Name as NameOperator, c.Name as NamaTipe, d.Name as NameSatuan');
        $this->db->from('tb_barang as a');
        $this->db->join('tb_operator as b', 'b.id_operator=a.id_operator');
        $this->db->join('tb_tipe_barang as c', 'c.id_tipe_barang=a.id_tipe_barang');
        $this->db->join('tb_satuan as d', 'd.id_satuan=a.id_satuan');
        $this->db->where('deleted',0);
        $this->db->where("id_barang", $id_barang);
        $getbarangById = $this->db->get()->row();
        return $getbarangById;
    }

    function get_barang_by_kategori($kategori)
    {
        $this->db->select('a.*, b.Name as NameOperator, c.Name as NamaTipe, d.Name as NameSatuan');
        $this->db->from('tb_barang as a');
        $this->db->join('tb_operator as b', 'b.id_operator=a.id_operator');
        $this->db->join('tb_tipe_barang as c', 'c.id_tipe_barang=a.id_tipe_barang');
        $this->db->join('tb_satuan as d', 'd.id_satuan=a.id_satuan');
        $this->db->where('deleted',0);
        $this->db->where("a.id_tipe_barang", $kategori);
        $getbarangById = $this->db->get()->result();
        return $getbarangById;
    }

    function get_barang_by_name($name)
    {
        $this->db->where("Name", $name);
        $this->db->where("deleted", 0);
        $get_barangById = $this->db->get('tb_barang')->row();
        return $get_barangById;
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
