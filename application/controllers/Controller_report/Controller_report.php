<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Controller_report extends CI_Controller{

    /**
     * Class constructor.
     */
    function __construct() {
        parent::__construct();
        $this->load->model('Model_report');
        $this->load->model('Model_tipebarang');
        $this->load->model('Model_bagian');
        $this->load->model('Model_satuanbarang');
        $this->load->model('Model_barang');
        checksession();
    }

    function cetakBarangAll()
    {
        $tanggal1           = $this->input->post('tanggal1');
        $tanggal2           = $this->input->post('tanggal2');
        $tipe_barang        = $this->input->post('tipe');
        $data['record']     = $this->Model_report->get_barang_all($tipe_barang);
        $data['tipebarang'] = $this->Model_tipebarang->get_tipe_barang();
        $data['tanggal1']   = $tanggal1;
        $data['tanggal2']   = $tanggal2;
        $config             = array('format' => 'Folio', 'orientation' => 'L');
        $mpdf               = new \Mpdf\Mpdf($config);
        $html               = $this->load->view('Form_report/Form_report_barang',$data,true);
        $mpdf->WriteHTML($html);
        $mpdf->Output();
    }

    function cetakBarangmasukAll()
    {
        $tanggal1           = $this->input->post('tanggal1');
        $tanggal2           = $this->input->post('tanggal2');
        $data['record']     = $this->Model_report->get_barang_masuk($tanggal1,$tanggal2);
        $data['tipebarang'] = $this->Model_tipebarang->get_tipe_barang();
        $data['tanggal1']   = $tanggal1;
        $data['tanggal2']   = $tanggal2;
        $config             = array('format' => 'Folio', 'orientation' => 'L');
        $mpdf               = new \Mpdf\Mpdf($config);
        $html               = $this->load->view('Form_report/Form_report_barangmasuk',$data,true);
        $mpdf->WriteHTML($html);
        $mpdf->Output();
    }

    function cetakBarangKeluarAll()
    {
        $tanggal1         = $this->input->post('tanggal1');
        $tanggal2         = $this->input->post('tanggal2');
        $data['record']   = $this->Model_report->get_barang_keluar($tanggal1,$tanggal2);
        $data['bagian']   = $this->Model_bagian->get_bagian();
        $data['tanggal1'] = $tanggal1;
        $data['tanggal2'] = $tanggal2;
        $config           = array('format' => 'Folio', 'orientation' => 'L');
        $mpdf             = new \Mpdf\Mpdf($config);
        $html             = $this->load->view('Form_report/Form_report_barangkeluar',$data,true);
        $mpdf->WriteHTML($html);
        $mpdf->Output();
    }

    function cetakBarangRusakAll()
    {
        $tanggal1         = $this->input->post('tanggal1');
        $tanggal2         = $this->input->post('tanggal2');
        $data['record']   = $this->Model_report->get_barang_rusak($tanggal1,$tanggal2);
        $data['tanggal1'] = $tanggal1;
        $data['tanggal2'] = $tanggal2;
        $config           = array('format' => 'Folio', 'orientation' => 'L');
        $mpdf             = new \Mpdf\Mpdf($config);
        $html             = $this->load->view('Form_report/Form_report_barangrusak',$data,true);
        $mpdf->WriteHTML($html);
        $mpdf->Output();
    }

    function cetakAll()
    {
        $tanggal1           = $this->input->post('tanggal1');
        $tanggal2           = $this->input->post('tanggal2');
        $data['barangmasuk']     = $this->Model_report->get_barang_masuk($tanggal1,$tanggal2);
        $data['barangkeluar']     = $this->Model_report->get_barang_keluar($tanggal1,$tanggal2);
        $data['barangrusak']     = $this->Model_report->get_barang_rusak($tanggal1,$tanggal2);
        $data['semuabarang']     = $this->Model_report->get_barangall($tanggal1,$tanggal2);
        //$data['tipebarang'] = $this->Model_tipebarang->get_tipe_barang();
        $data['tanggal1']   = $tanggal1;
        $data['tanggal2']   = $tanggal2;
        $config             = array('format' => 'Folio', 'orientation' => 'L');
        $mpdf               = new \Mpdf\Mpdf($config);
        $html               = $this->load->view('Form_report/Form_report_all',$data,true);
        $mpdf->WriteHTML($html);
        $mpdf->Output();
    }

    function viewCetakAll()
    {
        $data['stoklimit']  = $this->Model_barang->getlimitstokbarang();
        $this->template->load('Template/Template_admin', 'Form_cetak_barang/Form_cetak_barang',$data);
    }
   
}
