<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Superadmin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */


	public function dashboard()
	{
        $data['menu']='dashboard';
        $data['pagetitle']='DashBoard';

		$this->load->view('webapp/superadmin/include/header',$data);
		$this->load->view('webapp/superadmin/dashboard/dashboard');
		$this->load->view('webapp/superadmin/include/footer');
	} 

	public function category_creation()
	{
        $data['menu']='category_creation';
        $data['pagetitle']='DashBoard';

		$this->load->view('webapp/superadmin/include/header',$data);
		$this->load->view('webapp/superadmin/category/category_creation');
		$this->load->view('webapp/superadmin/include/footer');
	} 

	public function all_category()
	{
        $data['menu']='all_category';
        $data['pagetitle']='DashBoard';

		$this->load->view('webapp/superadmin/include/header',$data);
		$this->load->view('webapp/superadmin/category/all_category');
		$this->load->view('webapp/superadmin/include/footer');
	} 

	public function sub_category_creation()
	{
        $data['menu']='sub_category_creation';
        $data['pagetitle']='DashBoard';

		$this->load->view('webapp/superadmin/include/header',$data);
		$this->load->view('webapp/superadmin/subcategory/sub_category_creation');
		$this->load->view('webapp/superadmin/include/footer');
	} 

	public function all_sub_category()
	{
        $data['menu']='all_sub_category';
        $data['pagetitle']='DashBoard';

		$this->load->view('webapp/superadmin/include/header',$data);
		$this->load->view('webapp/superadmin/subcategory/all_sub_category');
		$this->load->view('webapp/superadmin/include/footer');
	} 

	public function room_type_creation()
	{
        $data['menu']='room_type_creation';
        $data['pagetitle']='DashBoard';

		$this->load->view('webapp/superadmin/include/header',$data);
		$this->load->view('webapp/superadmin/roomtype/room_type_creation');
		$this->load->view('webapp/superadmin/include/footer');
	} 

	public function all_room_type()
	{
        $data['menu']='all_room_type';
        $data['pagetitle']='DashBoard';

		$this->load->view('webapp/superadmin/include/header',$data);
		$this->load->view('webapp/superadmin/roomtype/all_room_type');
		$this->load->view('webapp/superadmin/include/footer');
	} 

	public function facilities_creation()
	{
        $data['menu']='facilities_creation';
        $data['pagetitle']='DashBoard';

		$this->load->view('webapp/superadmin/include/header',$data);
		$this->load->view('webapp/superadmin/facilities/facilities_creation');
		$this->load->view('webapp/superadmin/include/footer');
	} 

	public function all_facilities()
	{
        $data['menu']='all_facilities';
        $data['pagetitle']='DashBoard';

		$this->load->view('webapp/superadmin/include/header',$data);
		$this->load->view('webapp/superadmin/facilities/all_facilities');
		$this->load->view('webapp/superadmin/include/footer');
	} 

	public function facilities_type_creation()
	{
        $data['menu']='facilities_creation';
        $data['pagetitle']='DashBoard';

		$this->load->view('webapp/superadmin/include/header',$data);
		$this->load->view('webapp/superadmin/facilities/facilities_type_creation');
		$this->load->view('webapp/superadmin/include/footer');
	} 

	public function all_facilities_type()
	{
        $data['menu']='facilities_creation';
        $data['pagetitle']='DashBoard';

		$this->load->view('webapp/superadmin/include/header',$data);
		$this->load->view('webapp/superadmin/facilities/all_facilities_type');
		$this->load->view('webapp/superadmin/include/footer');
	} 

	public function room_rate_creation()
	{
        $data['menu']='room_rate_creation';
        $data['pagetitle']='DashBoard';

		$this->load->view('webapp/superadmin/include/header',$data);
		$this->load->view('webapp/superadmin/room_rate/room_rate_creation');
		$this->load->view('webapp/superadmin/include/footer');
	} 

	public function all_room_rate()
	{
        $data['menu']='all_room_rate';
        $data['pagetitle']='DashBoard';

		$this->load->view('webapp/superadmin/include/header',$data);
		$this->load->view('webapp/superadmin/room_rate/all_room_rate');
		$this->load->view('webapp/superadmin/include/footer');
	} 

	public function tourist_place_creation()
	{
        $data['menu']='tourist_place_creation';
        $data['pagetitle']='DashBoard';

		$this->load->view('webapp/superadmin/include/header',$data);
		$this->load->view('webapp/superadmin/tourist_place/tourist_place_creation');
		$this->load->view('webapp/superadmin/include/footer');
	} 

	public function all_tourist_place()
	{
        $data['menu']='all_tourist_place';
        $data['pagetitle']='DashBoard';

		$this->load->view('webapp/superadmin/include/header',$data);
		$this->load->view('webapp/superadmin/tourist_place/all_tourist_place');
		$this->load->view('webapp/superadmin/include/footer');
	} 

	public function region_creation()
	{
        $data['menu']='region_creation';
        $data['pagetitle']='DashBoard';

		$this->load->view('webapp/superadmin/include/header',$data);
		$this->load->view('webapp/superadmin/region/region_creation');
		$this->load->view('webapp/superadmin/include/footer');
	} 

	public function all_region()
	{
        $data['menu']='all_region';
        $data['pagetitle']='DashBoard';

		$this->load->view('webapp/superadmin/include/header',$data);
		$this->load->view('webapp/superadmin/region/all_region');
		$this->load->view('webapp/superadmin/include/footer');
	} 

	public function location_creation()
	{
        $data['menu']='location_creation';
        $data['pagetitle']='DashBoard';

		$this->load->view('webapp/superadmin/include/header',$data);
		$this->load->view('webapp/superadmin/location/location_creation');
		$this->load->view('webapp/superadmin/include/footer');
	} 

	public function all_location()
	{
        $data['menu']='all_location';
        $data['pagetitle']='DashBoard';

		$this->load->view('webapp/superadmin/include/header',$data);
		$this->load->view('webapp/superadmin/location/all_location');
		$this->load->view('webapp/superadmin/include/footer');
	} 

	public function organizational_status_creation()
	{
        $data['menu']='organizational_status_creation';
        $data['pagetitle']='DashBoard';

		$this->load->view('webapp/superadmin/include/header',$data);
		$this->load->view('webapp/superadmin/organizational_status/organizational_status_creation');
		$this->load->view('webapp/superadmin/include/footer');
	} 

	public function all_organizational_status()
	{
        $data['menu']='all_organizational_status';
        $data['pagetitle']='DashBoard';

		$this->load->view('webapp/superadmin/include/header',$data);
		$this->load->view('webapp/superadmin/organizational_status/all_organizational_status');
		$this->load->view('webapp/superadmin/include/footer');
	} 

	public function category_establishment_creation()
	{
        $data['menu']='category_establishment_creation';
        $data['pagetitle']='DashBoard';

		$this->load->view('webapp/superadmin/include/header',$data);
		$this->load->view('webapp/superadmin/category_establishment/category_establishment_creation');
		$this->load->view('webapp/superadmin/include/footer');
	} 

	public function all_category_establishment()
	{
        $data['menu']='all_category_establishment';
        $data['pagetitle']='DashBoard';

		$this->load->view('webapp/superadmin/include/header',$data);
		$this->load->view('webapp/superadmin/category_establishment/all_category_establishment');
		$this->load->view('webapp/superadmin/include/footer');
	} 

	public function membership_form_list()
	{
        $data['menu']='membership_form_list';
        $data['pagetitle']='DashBoard';

		$this->load->view('webapp/superadmin/include/header',$data);
		$this->load->view('webapp/superadmin/membership_form/membership_form_list');
		$this->load->view('webapp/superadmin/include/footer');
	} 

	public function membership_form_view()
	{
        $data['menu']='membership_form_list';
        $data['pagetitle']='DashBoard';

		$this->load->view('webapp/superadmin/include/header',$data);
		$this->load->view('webapp/superadmin/membership_form/membership_form_view');
		$this->load->view('webapp/superadmin/include/footer');
	} 

	public function create_membership_plan()
	{
        $data['menu']='membership_form_list';
        $data['pagetitle']='DashBoard';

		$this->load->view('webapp/superadmin/include/header',$data);
		$this->load->view('webapp/superadmin/membership_form/create_membership_plan');
		$this->load->view('webapp/superadmin/include/footer');
	} 

	public function create_membership_id()
	{
        $data['menu']='membership_form_list';
        $data['pagetitle']='DashBoard';

		$this->load->view('webapp/superadmin/include/header',$data);
		$this->load->view('webapp/superadmin/membership_form/create_membership_id');
		$this->load->view('webapp/superadmin/include/footer');
	} 

	public function membership_form_approved_view()
	{
        $data['menu']='membership_form_list';
        $data['pagetitle']='DashBoard';

		$this->load->view('webapp/superadmin/include/header',$data);
		$this->load->view('webapp/superadmin/membership_form/membership_form_approved_view');
		$this->load->view('webapp/superadmin/include/footer');
	} 

}
