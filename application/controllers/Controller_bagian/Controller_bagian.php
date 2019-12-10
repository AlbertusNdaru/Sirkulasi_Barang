<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Controller_bagian extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_bagian');
        $this->load->model('Model_barang');
    }

    function get_Bagian()
    {
        $data['bagian'] = $this->Model_bagian->get_bagian();
        $data['stoklimit'] = $this->Model_barang->getlimitstokbarang();
        // echo json_encode($data);
        $this->template->load('Template/Template_admin', 'Form_bagian/Form_data_bagian', $data);
    }

    function viewFormEditbagian($id_bagian)
    {
        $data['editbagian'] = $this->Model_bagian->get_bagian_by_id($id_bagian);
        $data['stoklimit'] = $this->Model_barang->getlimitstokbarang();
        $this->template->load('Template/Template_admin', 'Form_bagian/Form_edit_bagian', $data);
    }

    function viewFormAddBagian()
    {
        $data['stoklimit'] = $this->Model_barang->getlimitstokbarang();
        $this->template->load('Template/Template_admin', 'Form_bagian/Form_add_bagian',$data);
    }

    function addbagian()
    {
        $data       = $this->Model_bagian->get_id_bagian_max();
		$id_bagian  = $data->maxKode;
		$noUrut     = (int) substr($id_bagian,3,3);
		$noUrut++;
		$char        = "BGN";
        $newID = $char. sprintf("%03s",$noUrut);
        
        $bagian = array(
            'id_bagian' => $newID,
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
