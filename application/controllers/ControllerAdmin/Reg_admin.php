<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Reg_admin extends CI_Controller
{

    function __construct(){
            parent::__construct();
            $this->load->model('Model_admin');
            $this->load->model('Model_operator');
            $this->load->model('Model_usergroup');
            $this->load->model('Model_user');
        }

    function index()
    {
        $dataRegistrasi['usergroup']= $this->Model_usergroup->get_user_group();
        $this->load->view('Form_admin/register_admin',$dataRegistrasi);
    }

    function add_admin()
    {
        $username = $this->input->post('Username');
        $password = $this->input->post('Password');
        $id_level = $this->input->post('level');
        $Email    = $this->input->post('email');
        $Name     = $this->input->post('Name');
        $Gender   = $this->input->post('Gender');
        $Alamat   = $this->input->post('Alamat');
        $dataoperator = $this->Model_operator->get_operator_by_email($Email);
        if($dataoperator)
        {
            $this->session->set_flashdata('Error', 'Email Sudah Terdaftar Jadi Admin');
            redirect('regadmin');
        }
        else
        {
            $operatorarray =array(
                'Name'           => $Name,
                'Gender'         => $Gender,
                'Address'        => $Alamat,
                'email_operator' => $Email,
                'Create_at'      => get_current_date()
                );
                $addoperator = $this->Model_operator->add_operator($operatorarray);
                if ($addoperator)
                {
                    $operator = $this->Model_operator->get_operator_by_email($Email);
                    if ($operator)
                    {
                        $userarray= array (
                                        'id_operator' => $operator->id_operator,
                                        'id_level' => $id_level,
                                        'username' => $username,
                                        'password' => $password
                        );
                        $adduser = $this->Model_user->add_user($userarray);
                        if ($adduser)
                        {
                            redirect('Admin');
                        }
                    }
                }
                    
        }
    }
        
}
