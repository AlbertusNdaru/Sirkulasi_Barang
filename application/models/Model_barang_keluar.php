<?php
class Model_barang_keluar extends CI_Model
{
    function get_barang_keluar()
    {
        $this->db->select('a.*, b.Name as NamaBarang, c.Name as NamaBagian, d.Name_satuan as NamaSatuan');
        $this->db->from('tb_barang_keluar as a');
        $this->db->order_by('a.Create_at', 'DESC');
        $this->db->join('tb_barang as b', 'b.id_barang=a.id_barang');
        $this->db->join('tb_bagian as c', 'c.id_bagian=a.id_bagian');
        $this->db->join('tb_satuan as d', 'd.id_satuan=a.id_satuan');
        $this->db->where('deleted', 0);
        $dataBarang = $this->db->get()->result();
        return $dataBarang;
    }

    function totalBarangKeluar()
    {
        $this->db->select('count(a.id_barang_keluar) as BK');
        $this->db->from('tb_barang_keluar as a');
        return $this->db->get()->row();
    }

    function get_barang_by_id($id_barang)
    {
        $this->db->select('a.*, b.Name as NameOperator, c.Name as NamaTipe, d.Name as NamaSatuan');
        $this->db->from('tb_barang as a');
        $this->db->join('tb_operator as b', 'b.id_operator=a.id_operator');
        $this->db->join('tb_tipe_barang as c', 'c.id_tipe_barang=a.id_tipe_barang');
        $this->db->join('tb_satuan as d', 'd.id_satuan=a.id_satuan');
        $this->db->where('deleted', 0);
        $this->db->where("id_barang", $id_barang);
        $getbarangById = $this->db->get()->row();
        return $getbarangById;
    }

    function get_barang_by_kategori($kategori)
    {
        $this->db->select('a.*, b.Name as NameOperator, c.Name as NamaTipe, d.Name as NamaSatuan');
        $this->db->from('tb_barang as a');
        $this->db->join('tb_operator as b', 'b.id_operator=a.id_operator');
        $this->db->join('tb_tipe_barang as c', 'c.id_tipe_barang=b.id_tipe_barang');
        $this->db->join('tb_satuan as d', 'd.id_satuan=a.id_satuan');
        $this->db->where('deleted', 0);
        $this->db->where("a.id_tipe_barang", $kategori);
        $getbarangById = $this->db->get()->result();
        return $getbarangById;
    }

    function get_satuan($id_konversi){
        $this->db->select('a.*');
        $this->db->from('tb_satuan as a');
        $this->db->join('tb_konversi as b','b.id_satuan=a.id_satuan');
        $this->db->where('b.id_konversi',$id_konversi);
        $dataSatuan = $this->db->get()->row();
        return $dataSatuan;  
    }
    
    function add_barang_keluar($dataBarang)
    {
        $add_barang = $this->db->insert('tb_barang_keluar', $dataBarang);
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
