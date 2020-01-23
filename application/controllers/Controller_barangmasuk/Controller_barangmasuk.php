<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Controller_barangmasuk extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_barang');
        $this->load->model('Model_tipebarang');
        $this->load->model('Model_barang_masuk');
        $this->load->model('Model_satuanbarang');
        checksession();
    }

    function get_Barang_masuk()
    {
        $data['kategori']  = $this->Model_tipebarang->get_tipe_barang();
        $data['stoklimit'] = $this->Model_barang->getlimitstokbarang();
        $data['satuanbarang']= $this->Model_satuanbarang->get_satuan_barang();
        // echo json_encode($data);
        $this->template->load('Template/Template_admin', 'Form_barang_masuk/Form_add_barang_masuk', $data);
    }

    function data_barang_masuk()
    {
        $data['barang']    = $this->Model_barang_masuk->get_barang_masuk();
        $data['stoklimit'] = $this->Model_barang->getlimitstokbarang();
        $data['satuanbarang']= $this->Model_satuanbarang->get_satuan_barang();
        // echo json_encode($data);
        $this->template->load('Template/Template_admin', 'Form_barang_masuk/Form_data_barangmasuk', $data);
    }

    
    function get_Barang_by_id()
    {
        $kategori       = $this->input->post('id');
        $data['barang'] = $this->Model_barang->get_barang_by_kategori($kategori);
       // $data['satuanbarang']= $this->Model_satuanbarang->get_satuan_barang();
        echo json_encode($data);
        //$this->template->load('Template/Template_admin', 'Form_barang/Form_data_barang', $data);
    }

    function viewFormEditbarang($id_barang)
    {
        $data['barang']     = $this->Model_barang->get_barang_by_id($id_barang);
        $data['tipebarang'] = $this->Model_tipebarang->get_tipe_barang();
        $data['stoklimit']  = $this->Model_barang->getlimitstokbarang();
        $data['satuanbarang']= $this->Model_satuanbarang->get_satuan_barang();
        $this->template->load('Template/Template_admin', 'Form_barang/Form_edit_barang', $data);
    }

    function viewFormAddBarang()
    {
        $data['tipebarang'] = $this->Model_tipebarang->get_tipe_barang();
        $data['satuanbarang']= $this->Model_satuanbarang->get_satuan_barang();
        $this->template->load('Template/Template_admin', 'Form_barang/Form_add_barang',$data);
    }

    function addbarangMasuk()
    {
        $barang = array(
            'id_barang' => $this->input->post('barang'),
            'Jumlah'    => $this->input->post('jumlah'),
            'id_satuan'     => $this->input->post('satuan'),
            'Harga'     => $this->input->post('harga'),
            'Create_at' => get_current_date()
        );
        $databarang = $this->Model_barang->get_barang_by_id($this->input->post('barang'));
        $datasatuan = $this->Model_barang_masuk->get_satuan($this->input->post('satuan'));

        $nilai_satuan = $datasatuan->nilai_satuan;
        $jumlah_barang_masuk = $this->input->post('jumlah')*$nilai_satuan;

        $barangedit = array(
                'Jumlah' => $databarang->Jumlah + $jumlah_barang_masuk,
                'Harga'  => $this->input->post('harga')/ $jumlah_barang_masuk,
                'Update_at'=> get_current_date()

        );
        $this->Model_barang->update_barang($this->input->post('barang'), $barangedit);
        $add_barang = $this->Model_barang_masuk->add_barang_masuk($barang);
        if ($add_barang) {
            $this->session->set_flashdata('Status', 'Input Success');
            redirect('barangmasuk');
        } else {
            $this->session->set_flashdata('Status', 'Input Failed');
            redirect('barangmasuk');
        }
    }

    function editbarang()
    {
        $id_barang = $this->input->post('submitid');
        $barang = array(
            'Name'      => $this->input->post('namabarang'),
            'Jumlah'    => $this->input->post('jumlah'),
            'Satuan'    => $this->input->post('satuan'),
            'Harga'     => $this->input->post('harga'),
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
