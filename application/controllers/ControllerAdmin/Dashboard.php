<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Dashboard extends CI_Controller
{

    /**
     * Class constructor.
     */
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_admin');
        $this->load->model('Model_barang');
        $this->load->model('Model_barang_masuk');
        $this->load->model('Model_barang_keluar');
        $this->load->model('Model_barang_rusak');
        checksession();
    }

    function index()
    {
        $data['stoklimit'] = $this->Model_barang->getlimitstokbarang();
        $data['barang'] = $this->Model_barang->totalBarang();
        $data['barangmasuk'] = $this->Model_barang_masuk->totalBarangMasuk();
        $data['barangkeluar'] = $this->Model_barang_keluar->totalBarangKeluar();
        $data['barangrusak'] = $this->Model_barang_rusak->totalBarangRusak();
        $this->template->load('Template/Template_admin.php', 'Form_admin/dashboard', $data);
    }
}
