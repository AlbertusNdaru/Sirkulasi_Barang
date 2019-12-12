<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Controller_user extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_user');
        $this->load->model('Model_operator');
        $this->load->model('Model_usergroup');
        $this->load->model('Model_barang');
        checksession();
    }

    function get_user()
    {
        $data['user']      = $this->Model_user->get_user();
        $data['stoklimit'] = $this->Model_barang->getlimitstokbarang();
        $this->template->load('Template/Template_admin','Form_user/Form_data_user',$data);
    }

    function viewFormEdituser($id_user)
    {
        $data['edituser']  = $this->Model_user->get_user_by_id($id_user);
        $data['usergroup'] = $this->Model_usergroup->get_user_group();
        $data['stoklimit'] = $this->Model_barang->getlimitstokbarang();
        $this->template->load('Template/Template_admin','Form_user/Form_edit_user', $data);
    }

    function edituser()
    {
        $id_user = $this->input->post('submitid');
        $user = array('id_user' =>$this->input->post('hak_akses') ,'update_at'=>get_current_date() );
        $edituser = $this->Model_user->update_user($id_user,$user);
        if ($edituser) {
            $this->session->set_flashdata('Status','Update Sucess');
            redirect('user');
        }else{
            $this->session->set_flashdata('Status','Update Failed');
            redirect('user');
        }
    }

    function editStatusUser($id_user,$status)
    {
        $user = array('Status' =>$status);
        $edituser = $this->Model_user->update_user($id_user,$user);
        if ($edituser) {
            $this->session->set_flashdata('Status','Update Success');
            redirect('user');
        }else{
            $this->session->set_flashdata('Status','Update Failed');
            redirect('user');
        }
    }

    function deleteuser()
    {
        $id_user=$this->input->get('id');
        $deleteuser = $this->Model_user->delete_user($id_user);
        if($deleteuser)
        {
            $this->session->set_flashdata('Status','Delete Success');
            redirect('user');
        }
        else
        {
            $this->session->set_flashdata('Status','Delete Failed');
            redirect('user');
        }
    }

}

?>