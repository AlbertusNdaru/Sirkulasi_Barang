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
    }

    function cetakBarangAll()
    {
        $tanggal1           = $this->input->post('tanggal1');
        $tanggal2           = $this->input->post('tanggal2');
        $data['record']     = $this->Model_report->get_barang_all($tanggal1,$tanggal2);
        $data['tipebarang'] = $this->Model_tipebarang->get_tipe_barang();
        $data['tanggal1']   = $tanggal1;
        $data['tanggal2']   = $tanggal2;
        $config             = array('format' => 'Folio');
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
        $config             = array('format' => 'Folio');
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
        $config           = array('format' => 'Folio');
        $mpdf             = new \Mpdf\Mpdf($config);
        $html             = $this->load->view('Form_report/Form_report_barangkeluar',$data,true);
        $mpdf->WriteHTML($html);
        $mpdf->Output();
    }

    function cetakReportPeminjamanbyId()
    {
        $id           = urldecode($_GET['url']);
        $data['data'] = $this->Model_report->getDataPeminjamanbyId($id);
        $config       = array('format' => 'Folio');
        $mpdf         = new \Mpdf\Mpdf($config);
        $html         = $this->load->view('Form_report/Form_report_peminjaman',$data,true);
        $mpdf->WriteHTML($html);
        $mpdf->Output();
    }

    function cetakReportKerusakan()
    {
        $data['record'] = $this->Model_report->getDataKerusakan();
        $config         = array('format' => 'Folio');
        $mpdf           = new \Mpdf\Mpdf($config);
        $html           = $this->load->view('Form_report/Form_report_kerusakan',$data,true);
        $mpdf->WriteHTML($html);
        $mpdf->Output();
    }

}
