<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Controller_satuanbarang extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_satuanbarang');
        $this->load->model('Model_barang');
        checksession();
    }

    function get_satuanbarang()
    {
        $data['satuanbarang'] = $this->Model_satuanbarang->get_satuan_barang();
        $data['stoklimit']  = $this->Model_barang->getlimitstokbarang();
        // echo json_encode($data);
        $this->template->load('Template/Template_admin', 'Form_satuan_barang/Form_data_satuan_barang', $data);
    }

    function viewFormEditsatuanbarang($id_satuan)
    {
        $data['editsatuanbarang'] = $this->Model_satuanbarang->get_satuan_barang_by_id($id_satuan);
        $data['stoklimit']      = $this->Model_barang->getlimitstokbarang();
        $this->template->load('Template/Template_admin', 'Form_satuan_barang/Form_edit_satuan_barang', $data);
    }

    function viewFormAddsatuanbarang()
    {
        $data['stoklimit'] = $this->Model_barang->getlimitstokbarang();
        $this->template->load('Template/Template_admin', 'Form_satuan_barang/Form_add_satuan_barang',$data);
    }

    function addsatuanbarang()
    {
        $validate = $this->Model_satuanbarang->get_satuan_barang_by_name($this->input->post('name'));
        if($validate)
        {
            $this->session->set_flashdata('Status', 'Input Failed -> Nama Sudah ada');
            redirect('formaddsatuanbarang');
        }
        else
        {
            $satuanbarang = array(
                'Name'           => $this->input->post('name'),
                'Name_satuan'           => $this->input->post('nameSatuan'),
                'nilai_satuan'       => $this->input->post('nilai')
            );
            $addsatuan_barang = $this->Model_satuanbarang->add_satuanbarang($satuanbarang);
            if ($addsatuan_barang) {
                $this->session->set_flashdata('Status', 'Input Succes');
                redirect('satuanbarang');
            } else {
                $this->session->set_flashdata('Status', 'Input Failed');
                redirect('satuanbarang');
            }
        }
    }

    function editsatuanbarang()
    {
        $id_satuan = $this->input->post('submitid');
        $satuanbarang = array(
            'Name'      => $this->input->post('name'),
            'Name_satuan'  => $this->input->post('nameSatuan'),
            'nilai_satuan' => $this->input->post('nilai')
            
        );
        $editsatuanbarang = $this->Model_satuanbarang->update_satuan_barang($id_satuan, $satuanbarang);
        if ($editsatuanbarang) {
            $this->session->set_flashdata('Status', 'Input Succes');
            redirect('satuanbarang');
        } else {
            $this->session->set_flashdata('Status', 'Input Failed');
            redirect('satuanbarang');
        }
    }
}
