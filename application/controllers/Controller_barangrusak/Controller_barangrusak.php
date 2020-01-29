<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Controller_barangrusak extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_barang');
        $this->load->model('Model_tipebarang');
        $this->load->model('Model_barang_rusak');

        $this->load->model('Model_satuanbarang');
        checksession();
    }

    function get_Barang_rusak()
    {
        $data['kategori']  = $this->Model_tipebarang->get_tipe_barang();
        $data['satuanbarang']= $this->Model_satuanbarang->get_satuan_barang();


        $data['stoklimit'] = $this->Model_barang->getlimitstokbarang();
        // echo json_encode($data);
        $this->template->load('Template/Template_admin', 'Form_barang_rusak/Form_add_barang_rusak', $data);
    }

    function data_barang_rusak()
    {
        $data['barang']    = $this->Model_barang_rusak->get_barang_rusak();
        $data['stoklimit'] = $this->Model_barang->getlimitstokbarang();
        // echo json_encode($data);
        $this->template->load('Template/Template_admin', 'Form_barang_rusak/Form_data_barangrusak', $data);
    }


    function get_Barang_by_id()
    {
        $kategori       = $this->input->post('id');
        $data['barang'] = $this->Model_barang->get_barang_by_kategori($kategori);
        echo json_encode($data);
        //$this->template->load('Template/Template_admin', 'Form_barang/Form_data_barang', $data);
    }

    function viewFormEditbarang($id_barang)
    {
        $data['barang']     = $this->Model_barang->get_barang_by_id($id_barang);
        $data['tipebarang'] = $this->Model_tipebarang->get_tipe_barang();
        $data['satuanbarang']= $this->Model_satuanbarang->get_satuan_barang();

        $data['stoklimit']  = $this->Model_barang->getlimitstokbarang();
        $this->template->load('Template/Template_admin', 'Form_barang/Form_edit_barang', $data);
    }

    function viewFormAddBarang()
    {
        $data['tipebarang'] = $this->Model_tipebarang->get_tipe_barang();

        $data['satuanbarang']= $this->Model_satuanbarang->get_satuan_barang();


        $this->template->load('Template/Template_admin', 'Form_barang/Form_add_barang', $data);
    }

    function addbarangRusak()
    {
        $datasatuan = $this->Model_barang_keluar->get_satuan($this->input->post('satuan'));
        $barang = array(
            'id_barang' => $this->input->post('barang'),
            'Jumlah'    => $this->input->post('jumlah'),
            'id_satuan'    => $datasatuan->id_satuan,
            'Harga'     => $this->input->post('harga'),
            'Create_at' => get_current_date()
        );

        $databarang = $this->Model_barang->get_barang_by_id($this->input->post('barang'));
        

        $nilai_satuan = $datasatuan->nilai_satuan;
        $jumlah_barang_keluar = $this->input->post('jumlah')*$nilai_satuan;
        $barangedit = array(

            'Jumlah' =>  $databarang->Jumlah - $jumlah_barang_keluar,
            'Harga' => $this->input->post('harga'),
            'Update_at' => get_current_date()

        );
        $add_barang = $this->Model_barang_keluar->add_barang_keluar($barang);
        $this->Model_barang->update_barang($this->input->post('barang'), $barangedit);
        if ($add_barang) {
            $this->session->set_flashdata('Status', 'Input Success');
            redirect('barangkeluar');
        } else {
            $this->session->set_flashdata('Status', 'Input Failed');
            redirect('barangkeluar');
        }
    }

    function editbarang()
    {
        $id_barang = $this->input->post('submitid');
        $barang = array(
            'Name'           => $this->input->post('namabarang'),
            'id_tipe_barang' => $this->input->post('tipe'),
            'Jumlah'         => $this->input->post('jumlah'),
            'Satuan'         => $this->input->post('satuan'),
            'Harga'          => $this->input->post('harga'),
            'Update_at'      => get_current_date()
        );
        $editbarang = $this->Model_barang->update_barang($id_barang, $barang);
        if ($editbarang) {
            $this->session->set_flashdata('Status', 'Edit Success');
            redirect('barang');
        } else {
            $this->session->set_flashdata('Status', 'Edit Failed');
            redirect('barang');
        }
    }
    function deleteBarang($id_barang)
    {
        $barang = array(
            'deleted' => 1
        );
        $editbarang = $this->Model_barang->update_barang($id_barang, $barang);
        if ($editbarang) {
            $this->session->set_flashdata('Status', 'Delete Success');
            redirect('barang');
        } else {
            $this->session->set_flashdata('Status', 'Delete Failed');
            redirect('barang');
        }
    }
}
