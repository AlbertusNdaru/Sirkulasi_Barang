<?php

class Model_report extends CI_Model
{
//cetak barang
    function get_barang_all($tipe_barang)
    {
        $this->db->select('a.*, b.Name as NameOperator, c.Name as NamaTipe, d.Name_satuan as NamaSatuan');
        $this->db->from('tb_barang as a');
        $this->db->join('tb_operator as b', 'b.id_operator=a.id_operator');
        $this->db->join('tb_tipe_barang as c', 'c.id_tipe_barang=a.id_tipe_barang');

        $this->db->join('tb_satuan as d', 'd.id_satuan=a.id_satuan');

        $this->db->where('a.id_tipe_barang',$tipe_barang);
       // $this->db->where('date(a.Update_at) >=',$tanggal1);
        //$this->db->where('date(a.Upadate_at) <=',$tanggal2);
        $this->db->where('deleted',0);
        $dataBarang = $this->db->get()->result();
        return $dataBarang;
    }
//cetak all
    function get_barangall($tanggal1,$tanggal2)
    {
        $this->db->select('a.*, b.Name as NameOperator, c.Name as NamaTipe, d.Name_satuan as NamaSatuan');
        $this->db->from('tb_barang as a');
        $this->db->join('tb_operator as b', 'b.id_operator=a.id_operator');
        $this->db->join('tb_tipe_barang as c', 'c.id_tipe_barang=a.id_tipe_barang');
        $this->db->join('tb_satuan as d', 'd.id_satuan=a.id_satuan');
        $this->db->where('date(a.Update_at) >=',$tanggal1);
        $this->db->where('date(a.Update_at) <=',$tanggal2);
        $this->db->where('deleted',0);
        $dataBarang = $this->db->get()->result();
        return $dataBarang;
    }

    function get_barang_masuk($tanggal1,$tanggal2)
    {
        $this->db->select('a.*, b.Name as NamaBarang,,b.id_barang as Kode, c.Name as NamaTipe, b.id_tipe_barang, d.Name_satuan as NamaSatuan');
        $this->db->from('tb_barang_masuk as a');
        $this->db->join('tb_barang as b', 'b.id_barang=a.id_barang');
        $this->db->join('tb_tipe_barang as c', 'c.id_tipe_barang=b.id_tipe_barang');
        $this->db->join('tb_satuan as d', 'd.id_satuan=a.id_satuan');
        $this->db->where('date(a.Create_at) >=',$tanggal1);
        $this->db->where('date(a.Create_at) <=',$tanggal2);
        $this->db->where('deleted',0);
        $dataBarang = $this->db->get()->result();
        return $dataBarang;
    }

    function get_barang_keluar($tanggal1,$tanggal2)
    {
        $this->db->select('a.*, b.Name as NamaBarang,b.id_barang as Kode, c.Name as NamaBagian, b.id_tipe_barang, d.Name_satuan as NamaSatuan');
        $this->db->from('tb_barang_keluar as a');
        $this->db->join('tb_barang as b', 'b.id_barang=a.id_barang');
        $this->db->join('tb_bagian as c', 'c.id_bagian=a.id_bagian');
        $this->db->join('tb_satuan as d', 'd.id_satuan=a.id_satuan');
        
        $this->db->where('date(a.Create_at) >=',$tanggal1);
        $this->db->where('date(a.Create_at) <=',$tanggal2);
        $this->db->where('deleted',0);
        $dataBarang = $this->db->get()->result();
        return $dataBarang;
    }

    function get_barang_rusak($tanggal1,$tanggal2)
    {
        $this->db->select('a.*, b.Name as NamaBarang,b.id_barang as Kode, b.id_tipe_barang, c.Name_satuan as NameSatuan ');
        $this->db->from('tb_barang_rusak as a');
        $this->db->join('tb_barang as b', 'b.id_barang=a.id_barang');
        $this->db->join('tb_satuan as c', 'c.id_satuan=a.id_satuan');
        $this->db->where('date(a.Create_at) >=',$tanggal1);
        $this->db->where('date(a.Create_at) <=',$tanggal2);
        $this->db->where('deleted',0);
        $dataBarang = $this->db->get()->result();
        return $dataBarang;
    }



}
