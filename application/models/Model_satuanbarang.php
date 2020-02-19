<?php
class Model_satuanbarang extends CI_Model
{
    function get_satuan_barang_all()
    {
        $this->db->order_by('nilai_satuan', 'ASC');
        $datasatuan_barang = $this->db->get("tb_satuan")->result();
        return $datasatuan_barang;
    }

    function get_satuan_barang()
    {
        $this->db->where('nilai_satuan', 1);
        $datasatuan_barang = $this->db->get("tb_satuan")->result();
        return $datasatuan_barang;
    }
    function get_satuan_barang2()
    {
        $this->db->where('nilai_satuan >', '1');
        $datasatuan_barang = $this->db->get("tb_satuan")->result();
        return $datasatuan_barang;
    }

    function get_satuan_barang_by_id($id_satuan)
    {
        $this->db->where("id_satuan", $id_satuan);
        $getsatuan_barangById = $this->db->get('tb_satuan')->row();
        return $getsatuan_barangById;
    }

    function get_satuan_barang_by_name($name)
    {
        $this->db->where("Name", $name);
        $getsatuan_barangById = $this->db->get('tb_satuan')->row();
        return $getsatuan_barangById;
    }

    function get_id_satuan_max()
    {
        $this->db->select("max(id_satuan) as maxKode");
        $this->db->from("tb_satuan");
        return $this->db->get()->row();
    }

    function add_satuanbarang($datasatuan_barang)
    {
        $addsatuan_barang = $this->db->insert('tb_satuan', $datasatuan_barang);
        return $addsatuan_barang;
    }

    function update_satuan_barang($id_satuan, $datasatuan_barang)
    {
        $this->db->where('id_satuan', $id_satuan);
        $updatesatuan_barang = $this->db->update('tb_satuan', $datasatuan_barang);
        return $updatesatuan_barang;
    }

    //konversi
    function get_konversi()
    {
        $datakonversi = $this->db->get("tb_konversi")->result();
        return $datakonversi;
    }

    function add_konversi($datakonversi)
    {
        $addkonversi = $this->db->insert('tb_konversi', $datakonversi);
        return $addkonversi;
    }
}
