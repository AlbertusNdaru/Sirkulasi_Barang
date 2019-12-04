<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Controller_usergroup extends CI_Controller
{

    /**
     * Class constructor.
     */
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_usergroup');
    }

    function get_usergroup()
    {
        $data['usergroup'] = $this->Model_usergroup->get_user_group();
        $this->template->load('Template/Template_admin', 'Form_usergroup/Form_data_usergroup', $data);
    }

    function viewFormEditusergroup($id_level)
    {
        $data['editusergroup'] = $this->Model_usergroup->get_user_group_by_id($id_level);
        $this->template->load('Template/Template_admin', 'Form_usergroup/Form_edit_usergroup', $data);
    }

    function viewFormAddUsergroup()
    {
        $this->template->load('Template/Template_admin', 'Form_usergroup/Form_add_usergroup');
    }

    function addusergroup() // ini jangan dirubah 
    {
        $usergroup = array(
            'Description' => $this->input->post('hakakses'),
        );
        $addusergroup = $this->Model_usergroup->add_usergroup($usergroup); // yg ini yg dicek 
        if ($addusergroup) {
            $this->session->set_flashdata('Status', 'Input Succes');
            redirect('usergroup');
        } else {
            $this->session->set_flashdata('Status', 'Input Failed');
            redirect('usergroup');
        }
    }

    function editusergroup()
    {
        $id_level = $this->input->post('submitid');
        $usergroup = array(
            'Description' => $this->input->post('hakakses'),
            'Update_at' => get_current_date()
        );
        $editusergroup = $this->Model_usergroup->update_user_group($id_level, $usergroup);
        if ($editusergroup) {
            $this->session->set_flashdata('Status', 'Edit Success');
            redirect('usergroup');
        } else {
            $this->session->set_flashdata('Status', 'Edit Failed');
            redirect('usergroup');
        }
    }

    function deleteusergroup($id_level)
    {
        $deleteusergroup = $this->Model_usergroup->delete_user_group($id_level);
        if ($deleteusergroup) {
            $this->session->set_flashdata('Status', 'Delete Succes');
            redirect('usergroup');
        } else {
            $this->session->set_flashdata('Status', 'Delete Failed');
            redirect('usergroup');
        }
    }
}
