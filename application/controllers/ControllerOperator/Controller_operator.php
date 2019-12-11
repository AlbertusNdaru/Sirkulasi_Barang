<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Controller_operator extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_operator');
        $this->load->model('Model_barang');
    }

    function get_operator()
    {
        $data['operator']  = $this->Model_operator->get_operator();
        $data['stoklimit'] = $this->Model_barang->getlimitstokbarang();
        $this->template->load('Template/Template_admin','Form_operator/Form_data_operator', $data);
    }

    function viewFormEditOperator($id_operator)
    {
        $data['editoperator'] = $this->Model_operator->get_operator_by_id($id_operator);
        $data['stoklimit']    = $this->Model_barang->getlimitstokbarang();
        $this->template->load('Template/Template_admin','Form_operator/Form_edit_operator', $data);
    }

    function viewFormAddOperator()
    {
        $data['stoklimit'] = $this->Model_barang->getlimitstokbarang();
        $this->template->load('Template/Template_admin','Form_operator/Form_add_operator',$data);
    }

    function addoperator()
    {
        $operator =array(
        'Name'           => $this->input->post('name'),
        'Gender'         => $this->input->post('gender'),
        'Address'        => $this->input->post('address'),
        'email_operator' => $this->input->post('email_operator'),
        'Create_at'      => get_current_date()
        );
        $addoperator = $this->Model_operator->add_operator($operator);
        if ($addoperator){
            $this->session->set_flashdata('Status','Input Success');
            redirect('operator');
        }else{
            $this->session->set_flashdata('Status','Input Failed');
            redirect('operator');
        }
    }

    function editoperator()
    {
        $id_operator = $this->input->post('idoperator');
        $operator = array(
        'Name'           => $this->input->post('name'),
        'Gender'         => $this->input->post('gender'),
        'Address'        => $this->input->post('address'),
        'email_operator' => $this->input->post('email_operator'),
        'Update_at'      => get_current_date()
        );
        // echo json_encode($id_operator);
        $editoperator = $this->Model_operator->update_operator($id_operator,$operator);
        if ($editoperator){
            $this->session->set_flashdata('Status','Update Success');
            redirect('operator');
        }else{
            $this->session->set_flashdata('Status','Update Failed');
            redirect('operator');
        }
    }

    function editStatusoperator($id_operator,$status)
    {
        $operator = array('Status' => $status );
        $editoperator= $this->Model_operator->update_operator($id_operator,$operator);
        if ($editoperator) {
            $this->session->set_flashdata('Status', 'Update Success');
            redirect('operator');
        }else{
            $this->session->set_flashdata('Status', 'Update Failed');
            redirect('operator');
        }
    }

    function deleteOperator($id_operator)
    {
        $deleteOperator = $this->Model_operator->delete_operator($id_operator);
        if ($deleteOperator) {
            $this->session->set_flashdata('Status','Delete Success');
            redirect('operator');
        }else{
            $this->session->set_flashdata('Status','Delete Failed');
            redirect('operator');
        }
    }


}
?>
