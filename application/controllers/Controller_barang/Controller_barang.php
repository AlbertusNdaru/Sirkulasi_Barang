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

    function viewFormEditbarang($id_barang)
    {
        $data['editbarang'] = $this->Model_barang->get_barang_by_id($id_barang);
        $this->template->load('Template/Template_admin', 'Form_tipe_barang/Form_edit_tipe_barang', $data);
    }

    function viewFormAddBarang()
    {
        $data['tipebarang'] = $this->Model_tipebarang->get_tipe_barang();
        $this->template->load('Template/Template_admin', 'Form_barang/Form_add_barang',$data);
    }

    function addbarang()
    {
        $barang = array(
            'Name' => $this->input->post('name'),
            'Creat_at' => get_current_date()
        );
        $add_barang = $this->Model_tipebarang->add_tipebarang($barang);
        if ($add_barang) {
            $this->session->set_flashdata('Status', 'Input Succes');
            redirect('barang');
        } else {
            $this->session->set_flashdata('Status', 'Input Failed');
            redirect('barang');
        }
    }
    function addbarangg()
    {
        $barang = array(
            'Name' => $this->input->post('namabarang'),
            'id_tipe_barang' => $this->input->post('tipe'),
            'Jumlah' => $this->input->post('jumlah'),
            'Satuan' => $this->input->post('satuan'),
            'Harga' => $this->input->post('namabarang'),
            'Creat_at' => get_current_date()
        );
        $add_barang = $this->Model_barang->add_barang($barang);
        if ($add_barang) {
            $this->session->set_flashdata('Status', 'Input Succes');
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
            'Name' => $this->input->post('name'),
            'update_at' => get_current_date()
        );
        $editbarang = $this->Model_barang->update_barang($id_barang, $barang);
        if ($editbarang) {
            $this->session->set_flashdata('Status', 'Input Succes');
            redirect('barang');
        } else {
            $this->session->set_flashdata('Status', 'Input Failed');
            redirect('barang');
        }
    }

    function deletebarang($id_barang)
    {
        $deletebarang = $this->Model_barang->delete_barang($id_barang);
        if ($deletebarang) {
            $this->session->set_flashdata('Status', 'Delete Succes');
            redirect('barang');
        } else {
            $this->session->set_flashdata('Status', 'Delete Failed');
            redirect('barang');
        }
    }
}
