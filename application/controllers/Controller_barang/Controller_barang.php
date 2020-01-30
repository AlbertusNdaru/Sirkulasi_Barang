<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Controller_barang extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_barang');
        $this->load->model('Model_tipebarang');
        $this->load->model('Model_satuanbarang');
        checksession();
    }

    
    function get_Barang()
    {
        $data['barang'] = $this->Model_barang->get_barang();
        $data['stoklimit'] = $this->Model_barang->getlimitstokbarang(); // in yg panggil data stok kurang dari 10 trs di lempar di view
        $data['barang']    = $this->Model_barang->get_barang();
        $data['stoklimit'] = $this->Model_barang->getlimitstokbarang();
        $data['tipebarang']= $this->Model_tipebarang->get_tipe_barang();

        $data['satuanbarang']= $this->Model_satuanbarang->get_satuan_barang();

        // echo json_encode($data);
        $this->template->load('Template/Template_admin', 'Form_barang/Form_data_barang', $data);
    }


    function get_Barang_by_kategori()
    {
        $kategori = $this->input->post('id');
        $barang   = $this->Model_barang->get_barang_by_kategori($kategori);
        echo json_encode($barang);
        //$this->template->load('Template/Template_admin', 'Form_barang/Form_data_barang', $data);
    }
    function get_konveksi_by_barang(){
        $barang = $this->input->post('id_barang');
        $konveksi = $this->Model_barang->get_konversi($barang);
        echo json_encode($konveksi);
    }

    function get_Barang_by_id()
    {
        $id     = $this->input->post('id');
        $barang = $this->Model_barang->get_barang_by_id($id);
        echo json_encode($barang);
        //$this->template->load('Template/Template_admin', 'Form_barang/Form_data_barang', $data);
    }

    function get_Barang_by_id_konversi()
    {
        $id     = $this->input->post('id');
        $barang = $this->Model_barang->get_barang_by_idkonversi($id);
        echo json_encode($barang);
        //$this->template->load('Template/Template_admin', 'Form_barang/Form_data_barang', $data);
    }

    function viewFormEditbarang($id_barang)
    {
        $data['barang']     = $this->Model_barang->get_barang_by_id($id_barang);
        $data['tipebarang'] = $this->Model_tipebarang->get_tipe_barang();
        $data['satuanbarang']= $this->Model_satuanbarang->get_satuan_barang();
        $data['konversi']     = $this->Model_barang->get_konversi_by_id($id_barang);
        $data['konversi_satuan']= $this->Model_barang->get_konversi_edit($id_barang);
        $data['stoklimit']  = $this->Model_barang->getlimitstokbarang();
        // echo json_encode($data['konversi_satuan']);
        $this->template->load('Template/Template_admin', 'Form_barang/Form_edit_barang', $data);
    }

    function viewFormAddBarang()
    {
        $data['tipebarang'] = $this->Model_tipebarang->get_tipe_barang();
        $data['satuanbarang']= $this->Model_satuanbarang->get_satuan_barang();
        $data['satuanbarang2']= $this->Model_satuanbarang->get_satuan_barang2();
        $data['stoklimit']  = $this->Model_barang->getlimitstokbarang();
        $this->template->load('Template/Template_admin', 'Form_barang/Form_add_barang', $data);
    }

    function addbarangg()
    {
        $validate = $this->Model_barang->get_barang_by_name($this->input->post('namabarang'));
        if($validate)
        {
            $this->session->set_flashdata('Status','Input Failed -> Nama sudah Ada');
            redirect('formaddbarang');
        }
        else
            {
                $data = $this->Model_barang->get_id_barang_max();
                $id_barang = $data->maxKode;

                $noUrut = (int) substr($id_barang, 3, 3);
                $kategori = $this->input->post('tipe');
                
                $noUrut ++;             
                $char = 'BRG';
                $newID = $char . sprintf("%03s", $noUrut);
               
                //var inputan
                $id_barang = $newID;
                $id_satuan=$this->input->post('satuan');
                $id_satuan1=$this->input->post('satuan1');
                $id_satuan2=$this->input->post('satuan2');
                $barang = array(
                    'id_barang'      => $id_barang,
                    'Name'           => $this->input->post('namabarang'),
                    'id_operator'    => $_SESSION['Admin']->id_operator,
                    'id_tipe_barang' => $this->input->post('tipe'),
                    'id_satuan'         => $id_satuan,
                    'Create_at'      => get_current_date(),
                    'Update_at'      => get_current_date()
                );
                $add_barang = $this->Model_barang->add_barang($barang);
                $id_barang_konversi = $this->db->insert_id();
                echo $id_satuan;
                $konversi = array(
                    'id_barang'=>$id_barang,
                    'id_satuan'=>$id_satuan                
                );
                if ($id_satuan1!=null)
                {
                    $konversi1 = array(
                        'id_barang'=>$id_barang,
                        'id_satuan'=>$id_satuan1                
                    );
                    $add_konversi = $this->Model_satuanbarang->add_konversi($konversi1);
                }
                if ($id_satuan2!=null)
                {
                    $konversi2 = array(
                        'id_barang'=>$id_barang,
                        'id_satuan'=>$id_satuan2                
                    );
                    $add_konversi = $this->Model_satuanbarang->add_konversi($konversi2);
                }
                $add_konversi = $this->Model_satuanbarang->add_konversi($konversi);
              
                if ($add_barang) {
                    $this->session->set_flashdata('Status', 'Input Success');
                    redirect('barang');
                } else {
                    $this->session->set_flashdata('Status', 'Input Failed');
                    redirect('barang');
                }
        }
    }

    function editbarang()
    {
        $varName = $this->input->post('namabarang');
        // $id_satuan=$this->input->post('satuan');
        // $id_satuan1=$this->input->post('satuan1');
        // $id_satuan2=$this->input->post('satuan2');
        $id_barang = $this->input->post('submitid');
        $barang = array(
            'Name'           => $this->input->post('namabarang'),
            'id_tipe_barang' => $this->input->post('tipe'),
            // 'Jumlah'         => $this->input->post('jumlah'),
            // 'id_satuan'         => $id_satuan,
            // 'Harga'          => $this->input->post('harga'),
            'Update_at'      => get_current_date()
        );
        $add_barang = $this->Model_barang->add_barang($barang);
                $id_barang_konversi = $this->db->insert_id(); 
                // $konversi = array(
                //     'id_barang'=>$id_barang,
                //     'id_satuan'=>$id_satuan                
                // );
                // $konversi1 = array(
                //     'id_barang'=>$id_barang,
                //     'id_satuan'=>$id_satuan1                
                // );
                // $konversi2 = array(
                //     'id_barang'=>$id_barang,
                //     'id_satuan'=>$id_satuan2                
                // );
                // $add_konversi = $this->Model_satuanbarang->add_konversi($konversi);
                // $add_konversi = $this->Model_satuanbarang->add_konversi($konversi1);
                // $add_konversi = $this->Model_satuanbarang->add_konversi($konversi2);

        $editbarang = $this->Model_barang->update_barang($id_barang, $barang);
        if ($editbarang) {
            $this->session->set_flashdata('Status', 'Edit Success');
            redirect('barang');
        } else {
            $this->session->set_flashdata('Status', 'Edit Failed');
            redirect('barang');
        }
    }
    
    function deleteBarang($id_barang)
    {
        $barang = array(
            'deleted' => 1
        );
        $editbarang = $this->Model_barang->update_barang($id_barang, $barang);
        if ($editbarang) {
            $this->session->set_flashdata('Status', 'Delete Success');
            redirect('barang');
        } else {
            $this->session->set_flashdata('Status', 'Delete Failed');
            redirect('barang');
        }
    }
}
