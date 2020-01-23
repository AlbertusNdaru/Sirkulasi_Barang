<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';

//Admin
$route['Admin'] = 'ControllerAdmin/Login';
$route['admin'] = 'ControllerAdmin/Login';
$route['dashboard'] = 'ControllerAdmin/Dashboard';
$route['regadmin'] = 'ControllerAdmin/Reg_admin';


//Route Operator
$route['operator'] = 'ControllerOperator/Controller_operator/get_operator';
$route['formaddoperator'] = 'ControllerOperator/Controller_operator/viewFormAddOperator';
$route['editstatusoperator/(:any)/(:any)'] = 'ControllerOperator/Controller_operator/editStatusoperator/$1/$2';
$route['formeditoperator/(:any)'] = 'ControllerOperator/Controller_operator/viewFormEditOperator/$1';
$route['deleteoperator/(:any)'] = 'ControllerOperator/Controller_operator/deleteOperator/$1';

//Route Usergroup
$route['usergroup'] = 'Controller_usergroup/Controller_usergroup/get_usergroup';
$route['formaddusergroup'] = 'Controller_usergroup/Controller_usergroup/viewFormAddUsergroup';
$route['formeditusergroup/(:any)'] = 'Controller_usergroup/Controller_usergroup/viewFormEditusergroup/$1';
$route['deleteusergroup/(:any)'] = 'Controller_usergroup/Controller_usergroup/deleteusergroup/$1';

//Route User
$route['user'] = 'Controller_user/Controller_user/get_user';
$route['editstatususer/(:any)/(:any)'] = 'Controller_user/Controller_user/editStatusUser/$1/$2';
$route['formedituser/(:any)'] = 'Controller_user/Controller_user/viewFormEdituser/$1';
$route['deleteuser/(:any)'] = 'Controller_user/Controller_user/deleteuser/$1';

//Route TipeBarang
$route['tipebarang'] = 'Controller_tipebarang/Controller_tipebarang/get_tipebarang';
$route['formaddtipebarang'] = 'Controller_tipebarang/Controller_tipebarang/viewFormAddTipebarang';
$route['formedittipebarang/(:any)'] = 'Controller_tipebarang/Controller_tipebarang/viewFormEdittipebarang/$1';
$route['deleteTipebarang/(:any)'] = 'Controller_tipebarang/Controller_tipebarang/deletetipebarang/$1';

//Route SatuanBarang
$route['satuanbarang'] = 'Controller_satuanbarang/Controller_satuanbarang/get_satuanbarang';
$route['formaddsatuanbarang'] = 'Controller_satuanbarang/Controller_satuanbarang/viewFormAddSatuanbarang';
$route['formeditsatuanbarang/(:any)'] = 'Controller_satuanbarang/Controller_satuanbarang/viewFormEditsatuanbarang/$1';


//Route Barang
$route['barang'] = 'Controller_barang/Controller_barang/get_Barang';
$route['barangkategori'] = 'Controller_barang/Controller_barang/get_Barang_by_kategori';
$route['konveksibarang'] = 'Controller_barang/Controller_barang/get_konveksi_by_barang';
$route['barangid'] = 'Controller_barang/Controller_barang/get_Barang_by_id';
$route['formaddbarang'] = 'Controller_barang/Controller_barang/viewFormAddBarang';
$route['formeditbarang/(:any)'] = 'Controller_barang/Controller_barang/viewFormEditbarang/$1';
$route['deleteBarang/(:any)'] = 'Controller_barang/Controller_barang/deleteBarang/$1';
$route['AddBarang'] = 'Controller_barang/Controller_barang/addbarangg';
$route['EditBarang'] = 'Controller_barang/Controller_barang/editbarang';

//Route Bagian
$route['bagian'] = 'Controller_bagian/Controller_bagian/get_Bagian';
$route['formaddbagian'] = 'Controller_bagian/Controller_bagian/viewFormAddBagian';
$route['formeditbagian/(:any)'] = 'Controller_bagian/Controller_bagian/viewFormEditbagian/$1';
$route['deletebagian/(:any)'] = 'Controller_bagian/Controller_bagian/deleteBagian/$1';

//Route Report
$route['reportBarang'] = 'Controller_report/Controller_report/cetakBarangAll';
$route['reportBarangMasuk'] = 'Controller_report/Controller_report/cetakBarangmasukAll';
$route['reportBarangKeluar'] = 'Controller_report/Controller_report/cetakBarangKeluarAll';
$route['reportBarangRusak'] = 'Controller_report/Controller_report/cetakBarangRusakAll';

//Route Barang Masuk
$route['barangmasuk'] = 'Controller_barangmasuk/Controller_barangmasuk/data_barang_masuk';
$route['viewaddbarangmasuk'] = 'Controller_barangmasuk/Controller_barangmasuk/get_Barang_masuk';
$route['addbarangmasuk'] = 'Controller_barangmasuk/Controller_barangmasuk/addbarangMasuk';

//Route Barang Keluar
$route['barangkeluar'] = 'Controller_barangkeluar/Controller_barangkeluar/data_barang_keluar';
$route['viewaddbarangkeluar'] = 'Controller_barangkeluar/Controller_barangkeluar/get_Barang_keluar';
$route['addbarangkeluar'] = 'Controller_barangkeluar/Controller_barangkeluar/addbarangKeluar';

//Route Barang Rusak
$route['barangrusak'] = 'Controller_barangrusak/Controller_barangrusak/data_barang_rusak';
$route['viewaddbarangrusak'] = 'Controller_barangrusak/Controller_barangrusak/get_Barang_rusak';
$route['addbarangrusak'] = 'Controller_barangrusak/Controller_barangrusak/addbarangRusak';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
