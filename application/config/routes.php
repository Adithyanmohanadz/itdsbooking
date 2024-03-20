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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'main';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['index'] = 'main/index'; 
$route['place1'] = 'main/place1'; 
$route['service'] = 'main/service'; 
$route['contact_us'] = 'main/contact_us'; 
$route['package'] = 'main/package'; 
$route['search'] = 'main/search'; 
$route['all_hotel'] = 'main/all_hotel'; 
$route['all_places'] = 'main/all_places';  
$route['membership'] = 'main/membership';  
$route['room_view'] = 'main/room_view';  
$route['login'] = 'main/login';
$route['hotel_reg'] = 'main/hotel_reg';


// Superadmin
$route['dashboard'] = 'Superadmin/dashboard';
$route['category_creation'] = 'Superadmin/category_creation';
$route['all_category'] = 'Superadmin/all_category';
$route['sub_category_creation'] = 'Superadmin/sub_category_creation';
$route['all_sub_category'] = 'Superadmin/all_sub_category';
$route['room_type_creation'] = 'Superadmin/room_type_creation';
$route['all_room_type'] = 'Superadmin/all_room_type';
$route['facilities_creation'] = 'Superadmin/facilities_creation';
$route['all_facilities'] = 'Superadmin/all_facilities';
$route['facilities_type_creation'] = 'Superadmin/facilities_type_creation';
$route['all_facilities_type'] = 'Superadmin/all_facilities_type';
$route['room_rate_creation'] = 'Superadmin/room_rate_creation';
$route['all_room_rate'] = 'Superadmin/all_room_rate';
$route['tourist_place_creation'] = 'Superadmin/tourist_place_creation';
$route['all_tourist_place'] = 'Superadmin/all_tourist_place';
$route['region_creation'] = 'Superadmin/region_creation';
$route['all_region'] = 'Superadmin/all_region';
$route['location_creation'] = 'Superadmin/location_creation';
$route['all_location'] = 'Superadmin/all_location';
$route['organizational_status_creation'] = 'Superadmin/organizational_status_creation';
$route['all_organizational_status'] = 'Superadmin/all_organizational_status';
$route['category_establishment_creation'] = 'Superadmin/category_establishment_creation';
$route['all_category_establishment'] = 'Superadmin/all_category_establishment';
$route['membership_form_list'] = 'Superadmin/membership_form_list';
$route['membership_form_view'] = 'Superadmin/membership_form_view';
$route['create_membership_plan'] = 'Superadmin/create_membership_plan';
$route['create_membership_id'] = 'Superadmin/create_membership_id';
$route['membership_form_approved_view'] = 'Superadmin/membership_form_approved_view';
// Superadmin

// Admin
$route['admin_dashboard'] = 'admin/admin_dashboard';
$route['admin_reservations'] = 'admin/admin_reservations';
$route['admin_all_reservations'] = 'admin/admin_all_reservations';
$route['admin_room_create'] = 'admin/admin_room_create';
$route['admin_room_list'] = 'admin/admin_room_list';

// add_hotel
$route['hotel_dashboard'] = 'hotel/hotel_dashboard';
$route['hotel_creation'] = 'hotel/hotel_creation';
$route['hotel_creation_details'] = 'hotel/hotel_creation_details';
$route['hotel_add_facility'] = 'hotel/hotel_add_facility';
$route['hotel_facilitys'] = 'hotel/hotel_facilitys';
$route['hotel_edit_facility'] = 'hotel/hotel_edit_facility';
$route['hotel_tourist_place'] = 'hotel/hotel_tourist_place';
$route['hotel_add_tourist_place'] = 'hotel/hotel_add_tourist_place';
$route['hotel_viewpoints'] = 'hotel/hotel_viewpoints';
$route['hotel_add_viewpoints'] = 'hotel/hotel_add_viewpoints';


