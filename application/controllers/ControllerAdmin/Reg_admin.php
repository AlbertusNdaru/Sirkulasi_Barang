<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Reg_admin extends CI_Controller
{

    function __construct(){
            parent::__construct();
            $this->load->model('Model_admin');
            $this->load->model('Model_operator');
            $this->load->model('Model_usergroup');
        }

    function index()
    {
        $dataRegistrasi['usergroup']= $this->Model_usergroup->get_user_group();
        $this->load->view('Form_admin/register_admin',$dataRegistrasi);
    }

    function add_admin()
    {
        $username  = $this->input->post('Username');
        $password     = $this->input->post('Password');
        $id_level     = $this->input->post('level');
        $Email        = $this->input->post('email');
        $dataoperator = $this->Model_operator->get_operator_by_email($Email);
        if ($dataoperator) {
            if ($this->Model_admin->get_admin_by_id_operator($dataoperator->id_operator)) {
                $this->session->set_flashdata('Error', 'Email Sudah Terdaftar Jadi Admin');
                redirect('regadmin');
            } else {
                $dataAdmin = array(
                    'username' => $username,
                    'password' => $password,
                    'id_level' => $id_level,
                    'id_operator' => $dataoperator->id_operator
                );
                $reg_admin = $this->Model_admin->add_admin($dataAdmin);
                if ($reg_admin) {
                    $this->load->view('Form_admin/login');
                }
            }
        } else {
            $this->session->set_flashdata('Error', 'Email Operator Salah');
            redirect('regadmin/');
        }
    }
}
