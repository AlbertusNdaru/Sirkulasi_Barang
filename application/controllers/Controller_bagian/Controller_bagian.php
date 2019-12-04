<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Controller_bagian extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_bagian');
    }

    function get_Bagian()
    {
        $data['bagian'] = $this->Model_bagian->get_bagian();
        // echo json_encode($data);
        $this->template->load('Template/Template_admin', 'Form_bagian/Form_data_bagian', $data);
    }

    function viewFormEditbagian($id_bagian)
    {
        $data['editbagian'] = $this->Model_bagian->get_bagian_by_id($id_bagian);
        $this->template->load('Template/Template_admin', 'Form_bagian/Form_edit_bagian', $data);
    }

    function viewFormAddBagian()
    {
        $this->template->load('Template/Template_admin', 'Form_bagian/Form_add_bagian');
    }

    function addbagian()
    {
        $bagian = array(
            'Name' => $this->input->post('name')
        );
        $add_bagian = $this->Model_bagian->add_bagian($bagian);
        if ($add_bagian) {
            $this->session->set_flashdata('Status', 'Input Succes');
            redirect('bagian');
        } else {
            $this->session->set_flashdata('Status', 'Input Failed');
            redirect('bagian');
        }
    }

    function editbagian()
    {
        $id_bagian = $this->input->post('submitid');
        $bagian = array(
            'Name' => $this->input->post('name')
        );
        $editbagian = $this->Model_barang->update_barang($id_bagian, $bagian);
        if ($editbagian) {
            $this->session->set_flashdata('Status', 'Input Succes');
            redirect('bagian');
        } else {
            $this->session->set_flashdata('Status', 'Input Failed');
            redirect('bagian');
        }
    }

    function deleteBagian($id_bagian)
    {
        $deletebagian = $this->Model_bagian->delete_bagian($id_bagian);
        if ($deletebagian) {
            $this->session->set_flashdata('Status', 'Delete Succes');
            redirect('bagian');
        } else {
            $this->session->set_flashdata('Status', 'Delete Failed');
            redirect('bagian');
        }
    }
}
