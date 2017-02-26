<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
$route['default_controller'] = 'GMSController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/* normal routes */
$route['admin'] = 'GMSController';
$route['admin/home'] = 'GMSController/admin_main';
$route['admin/addItemUsers'] = 'GMSController/addItemUsers';
$route['admin/addEquipments'] = 'GMSController/addEquipments';
$route['admin/addEquipmentType'] = 'GMSController/addEquipmentType';
$route['admin/about_us'] = 'GMSController/about_us';
$route['admin/account'] = 'GMSController/account';
$route['admin/viewItemUserInfo'] = 'GMSController/viewItemUserInfo';
$route['admin/facultyChargesHistory'] = 'GMSController/facultyChargesHistory';
$route['admin/upload_profile'] = 'GMSController/upload_profile';
$route['admin/signout'] = 'GMSController/signout';

$route['admin/borrowing_system'] = 'GMSController/borrowing_system';
$route['admin/borrowing_history'] = 'GMSController/borrowing_history';
$route['admin/recreation'] = 'GMSController/recreation';
$route['admin/fitness_system'] = 'GMSController/addFitnessUser';
$route['admin/searchFitnessHistory'] = 'GMSController/searchFitnessHistory';
$route['admin/inventory_system'] = 'GMSController/inventory_system';

/* routes called by js */
$route['admin/addNew'] = 'GMSController/addNew';
$route['admin/addNewNonStudFitnessUser'] = 'GMSController/addNewNonStudFitnessUser';
$route['admin/addNewPlayer'] = 'GMSController/addNewPlayer';
$route['admin/addNewActiveFitnessUser'] = 'GMSController/addNewActiveFitnessUser';
$route['admin/addNewActiveNonStudFitnessUser'] = 'GMSController/addNewActiveNonStudFitnessUser';
$route['admin/addNewActiveEquipment'] = 'GMSController/addNewActiveEquipment';
$route['admin/addNewEquipments'] = 'GMSController/addNewEquipments';
$route['admin/addNewEquipmentType'] = 'GMSController/addNewEquipmentType';
$route['admin/addNewSignUp'] = 'GMSController/addNewSignUp';
$route['admin/searchItemUser'] = 'GMSController/searchItemUser';
$route['admin/searchEquipments'] = 'GMSController/searchEquipments';
$route['admin/searchEquipmentType'] = 'GMSController/searchEquipmentType';
$route['admin/searchActiveEquipments'] = 'GMSController/searchActiveEquipments';
$route['admin/searchUserAccount'] = 'GMSController/searchUserAccount';
$route['admin/searchInventory'] = 'GMSController/searchInventory';
$route['admin/searchFitnessUser'] = 'GMSController/searchFitnessUser';
$route['admin/searchNonStudFitnessUser'] = 'GMSController/searchNonStudFitnessUser';
$route['admin/searchActiveStudentFitnessUser'] = 'GMSController/searchActiveStudentFitnessUser';
$route['admin/searchBorrowingHistory'] = 'GMSController/searchBorrowingHistory';
$route['admin/saveUser'] = 'GMSController/saveUser';
$route['admin/displayItemUserInfo'] = 'GMSController/displayItemUserInfo';
$route['admin/displayETYPEUserInfo'] = 'GMSController/displayETYPEUserInfo';
$route['admin/updateItemUser'] = 'GMSController/updateItemUser';
$route['admin/updateEType'] = 'GMSController/updateEType';
$route['admin/checkpass'] = 'GMSController/checkpass';
$route['admin/changepassword'] = 'GMSController/changepassword';
$route['admin/deleteItemUser'] = 'GMSController/deleteItemUser';
$route['admin/deleteUser'] = 'GMSController/deleteUser';
$route['admin/deleteactiveequipment'] = 'GMSController/deleteactiveequipment';
$route['admin/deleteEquipments'] = 'GMSController/deleteEquipments';
$route['admin/deleteEType'] = 'GMSController/deleteEType';
$route['admin/deleteBH'] = 'GMSController/deleteBH';
$route['admin/deleteGameList'] = 'GMSController/deleteGameList';
$route['admin/deleteGameListVB'] = 'GMSController/deleteGameListVB';
$route['admin/check_username'] = 'GMSController/check_username';
$route['admin/searchStudentFitnessUser'] = 'GMSController/searchStudentFitnessUser';
$route['admin/deleteActiveFitnessStudent'] = 'GMSController/deleteActiveFitnessStudent';
$route['admin/displayactivefitnessuser'] = 'GMSController/displayactivefitnessuser';
$route['admin/searchStudentFitnessHistory'] = 'GMSController/searchStudentFitnessHistory';
$route['admin/searchNonStudFitnessHistory'] = 'GMSController/searchNonStudFitnessHistory';
$route['admin/changeSearchFilter'] = 'GMSController/changeSearchFilter';
$route['admin/searchStudentFitnessHistoryLname'] = 'GMSController/searchStudentFitnessHistoryLname';
$route['admin/searchStudentFitnessHistoryDate'] = 'GMSController/searchStudentFitnessHistoryDate';
$route['admin/changeNonStudSearchFilter'] = 'GMSController/changeNonStudSearchFilter';
$route['admin/searchNonStudFitnessHistoryDate'] = 'GMSController/searchNonStudFitnessHistoryDate';
$route['admin/changeBorrowSearchFilter'] = 'GMSController/changeBorrowSearchFilter';
$route['admin/searchBorrowingHistoryLname'] = 'GMSController/searchBorrowingHistoryLname';
$route['admin/searchBorrowingHistoryDate'] = 'GMSController/searchBorrowingHistoryDate';