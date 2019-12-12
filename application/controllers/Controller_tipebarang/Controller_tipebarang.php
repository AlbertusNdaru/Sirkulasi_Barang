<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Controller_tipebarang extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_tipebarang');
        $this->load->model('Model_barang');
        checksession();
    }

    function get_tipebarang()
    {
        $data['tipebarang'] = $this->Model_tipebarang->get_tipe_barang();
        $data['stoklimit']  = $this->Model_barang->getlimitstokbarang();
        // echo json_encode($data);
        $this->template->load('Template/Template_admin', 'Form_tipe_barang/Form_data_tipe_barang', $data);
    }

    function viewFormEdittipebarang($id_tipebarang)
    {
        $data['edittipebarang'] = $this->Model_tipebarang->get_tipe_barang_by_id($id_tipebarang);
        $data['stoklimit']      = $this->Model_barang->getlimitstokbarang();
        $this->template->load('Template/Template_admin', 'Form_tipe_barang/Form_edit_tipe_barang', $data);
    }

    function viewFormAddTipebarang()
    {
        $data['stoklimit'] = $this->Model_barang->getlimitstokbarang();
        $this->template->load('Template/Template_admin', 'Form_tipe_barang/Form_add_tipe_barang',$data);
    }

    function addtipebarang()
    {
        $data        = $this->Model_tipebarang->get_id_tipe_max();
		$id_barang   = $data->maxKode;
		$noUrut      = (int) substr($id_barang,4,3);
		$noUrut++;
		$char        = "TIPE";
        $newID       = $char. sprintf("%03s",$noUrut);
        
        $id_tipe = $newID;
        $tipebarang = array(
            'id_tipe_barang' => $id_tipe,
            'Name'           => $this->input->post('name'),
            'Creat_at'       => get_current_date()
        );
        $addtipe_barang = $this->Model_tipebarang->add_tipebarang($tipebarang);
        if ($addtipe_barang) {
            $this->session->set_flashdata('Status', 'Input Succes');
            redirect('tipebarang');
        } else {
            $this->session->set_flashdata('Status', 'Input Failed');
            redirect('tipebarang');
        }
    }

    function edittipebarang()
    {
        $id_tipebarang = $this->input->post('submitid');
        $tipebarang = array(
            'Name'      => $this->input->post('name'),
            'update_at' => get_current_date()
        );
        $edittipebarang = $this->Model_tipebarang->update_tipe_barang($id_tipebarang, $tipebarang);
        if ($edittipebarang) {
            $this->session->set_flashdata('Status', 'Input Succes');
            redirect('tipebarang');
        } else {
            $this->session->set_flashdata('Status', 'Input Failed');
            redirect('tipebarang');
        }
    }

    function deletetipebarang($id_tipebarang)
    {
        $deletetipebarang = $this->Model_tipebarang->delete_tipe_barang($id_tipebarang);
        if ($deletetipebarang) {
            $this->session->set_flashdata('Status', 'Delete Succes');
            redirect('tipebarang');
        } else {
            $this->session->set_flashdata('Status', 'Delete Failed');
            redirect('tipebarang');
        }
    }
}
