<?php

class Model_report extends CI_Model
{

    function get_barang_all($tanggal1,$tanggal2)
    {
        $this->db->select('a.*, b.Name as NameOperator, c.Name as NamaTipe');
        $this->db->from('tb_barang as a');
        $this->db->join('tb_operator as b', 'b.id_operator=a.id_operator');
        $this->db->join('tb_tipe_barang as c', 'c.id_tipe_barang=a.id_tipe_barang');
        $this->db->where('date(a.Create_at) >=',$tanggal1);
        $this->db->where('date(a.Create_at) <=',$tanggal2);
        $this->db->where('deleted',0);
        $dataBarang = $this->db->get()->result();
        return $dataBarang;
    }

    function get_barang_masuk($tanggal1,$tanggal2)
    {
        $this->db->select('a.*, b.Name as NamaBarang, c.Name as NamaTipe, b.Satuan, b.id_tipe_barang');
        $this->db->from('tb_barang_masuk as a');
        $this->db->join('tb_barang as b', 'b.id_barang=a.id_barang');
        $this->db->join('tb_tipe_barang as c', 'c.id_tipe_barang=b.id_tipe_barang');
        $this->db->where('date(a.Create_at) >=',$tanggal1);
        $this->db->where('date(a.Create_at) <=',$tanggal2);
        $this->db->where('deleted',0);
        $dataBarang = $this->db->get()->result();
        return $dataBarang;
    }

    function get_barang_keluar($tanggal1,$tanggal2)
    {
        $this->db->select('a.*, b.Name as NamaBarang, c.Name as NamaBagian, b.id_tipe_barang, b.Satuan');
        $this->db->from('tb_barang_keluar as a');
        $this->db->join('tb_barang as b', 'b.id_barang=a.id_barang');
        $this->db->join('tb_bagian as c', 'c.id_bagian=a.id_bagian');
        $this->db->where('date(a.Create_at) >=',$tanggal1);
        $this->db->where('date(a.Create_at) <=',$tanggal2);
        $this->db->where('deleted',0);
        $dataBarang = $this->db->get()->result();
        return $dataBarang;
    }

    function get_barang_rusak($tanggal1,$tanggal2)
    {
        $this->db->select('a.*, b.Name as NamaBarang, b.id_tipe_barang, b.Satuan');
        $this->db->from('tb_barang_rusak as a');
        $this->db->join('tb_barang as b', 'b.id_barang=a.id_barang');
        $this->db->where('date(a.Create_at) >=',$tanggal1);
        $this->db->where('date(a.Create_at) <=',$tanggal2);
        $this->db->where('deleted',0);
        $dataBarang = $this->db->get()->result();
        return $dataBarang;
    }



}
