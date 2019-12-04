<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Controller_barang extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_barang');
        $this->load->model('Model_tipebarang');
    }

    function get_Barang()
    {
        $data['barang'] = $this->Model_barang->get_barang();
        // echo json_encode($data);
        $this->template->load('Template/Template_admin', 'Form_barang/Form_data_barang', $data);
    }

    
    function get_Barang_by_id()
    {
        $kategori= $this->input->post('id');
        $barang = $this->Model_barang->get_barang_by_kategori($kategori);
        echo json_encode($barang);
        //$this->template->load('Template/Template_admin', 'Form_barang/Form_data_barang', $data);
    }

    function viewFormEditbarang($id_barang)
    {
        $data['barang'] = $this->Model_barang->get_barang_by_id($id_barang);
        $data['tipebarang'] = $this->Model_tipebarang->get_tipe_barang();
        $this->template->load('Template/Template_admin', 'Form_barang/Form_edit_barang', $data);
    }

    function viewFormAddBarang()
    {
        $data['tipebarang'] = $this->Model_tipebarang->get_tipe_barang();
        $this->template->load('Template/Template_admin', 'Form_barang/Form_add_barang',$data);
    }

    function addbarangg()
    {
        $barang = array(
            'Name' => $this->input->post('namabarang'),
            'id_operator' => $_SESSION['Admin']->id_operator,
            'id_tipe_barang' => $this->input->post('tipe'),
            'Jumlah' => $this->input->post('jumlah'),
            'Satuan' => $this->input->post('satuan'),
            'Harga' => $this->input->post('harga'),
            'Create_at' => get_current_date()
        );
        $add_barang = $this->Model_barang->add_barang($barang);
        if ($add_barang) {
            $this->session->set_flashdata('Status', 'Input Success');
            redirect('barang');
        } else {
            $this->session->set_flashdata('Status', 'Input Failed');
            redirect('barang');
        }
    }

    function editbarang()
    {
        $id_barang = $this->input->post('submitid');
        $barang = array(
            'Name' => $this->input->post('namabarang'),
            'id_tipe_barang' => $this->input->post('tipe'),
            'Jumlah' => $this->input->post('jumlah'),
            'Satuan' => $this->input->post('satuan'),
            'Harga' => $this->input->post('harga'),
            'Update_at' => get_current_date()
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
