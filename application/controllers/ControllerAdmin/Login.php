<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Login extends CI_Controller
{

    /**
     * Class constructor.
     */
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_admin');
    }

    function index()
    {
        if (isset($_SESSION['Admin'])) {
            redirect('ControllerAdmin/Dashboard');
        } else {
            $this->load->view('Form_admin/login');
        }
    }

    function login()
    {
        $username = $_POST['Username'];
        $password = $_POST['Password'];
        $getAdmin = $this->Model_admin->get_admin_by_user_password($username, $password);
        //echo json_encode($getAdmin);
        if ($getAdmin && $getAdmin->Status == "Aprove") {
            $this->session->set_userdata('Admin', $getAdmin);
            redirect('dashboard');
        } else {
            $this->session->set_flashdata('Error', 'Username and Password Incorect');
            redirect('admin');
        }
    }


    function logout()
    {
        session_destroy();
        redirect('Welcome');
    }
}
