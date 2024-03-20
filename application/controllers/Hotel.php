<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hotel extends CI_Controller {

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


	public function hotel_dashboard()
	{
        $data['menu']='hotel_dashboard';
        $data['pagetitle']='DashBoard';

		$this->load->view('webapp/hotels/include/header',$data);
		$this->load->view('webapp/hotels/dashboard/hotel_dashboard');
		$this->load->view('webapp/hotels/include/footer');
	}  


	public function  hotel_creation()
	{
        $data['menu']='hotel_creation';
        $data['pagetitle']='DashBoard';

		$this->load->view('webapp/hotels/include/header',$data);
		$this->load->view('webapp/hotels/hotel_creation');
		$this->load->view('webapp/hotels/include/footer');
	}  

	public function  hotel_creation_details()
	{
        $data['menu']='hotel_creation_details';
        $data['pagetitle']='DashBoard';

		$this->load->view('webapp/hotels/include/header',$data);
		$this->load->view('webapp/hotels/hotel_creation_details');
		$this->load->view('webapp/hotels/include/footer');
	}  

	public function  hotel_add_facility()
	{
        $data['menu']='hotel_facilitys';
        $data['pagetitle']='DashBoard';

		$this->load->view('webapp/hotels/include/header',$data);
		$this->load->view('webapp/hotels/facility/hotel_add_facility');
		$this->load->view('webapp/hotels/include/footer');
	}  

	public function  hotel_edit_facility()
	{
        $data['menu']='hotel_facilitys';
        $data['pagetitle']='DashBoard';

		$this->load->view('webapp/hotels/include/header',$data);
		$this->load->view('webapp/hotels/facility/hotel_edit_facility');
		$this->load->view('webapp/hotels/include/footer');
	}  

	public function  hotel_facilitys()
	{
        $data['menu']='hotel_facilitys';
        $data['pagetitle']='DashBoard';

		$this->load->view('webapp/hotels/include/header',$data);
		$this->load->view('webapp/hotels/facility/hotel_facilitys');
		$this->load->view('webapp/hotels/include/footer');
	}  

	public function  hotel_tourist_place()
	{
        $data['menu']='hotel_tourist_place';
        $data['pagetitle']='DashBoard';

		$this->load->view('webapp/hotels/include/header',$data);
		$this->load->view('webapp/hotels/tourist_place/hotel_tourist_place');
		$this->load->view('webapp/hotels/include/footer');
	}  

	public function  hotel_add_tourist_place()
	{
        $data['menu']='hotel_tourist_place';
        $data['pagetitle']='DashBoard';

		$this->load->view('webapp/hotels/include/header',$data);
		$this->load->view('webapp/hotels/tourist_place/hotel_add_tourist_place');
		$this->load->view('webapp/hotels/include/footer');
	}  

	public function  hotel_viewpoints()
	{
        $data['menu']='hotel_viewpoints';
        $data['pagetitle']='DashBoard';

		$this->load->view('webapp/hotels/include/header',$data);
		$this->load->view('webapp/hotels/viewpoints/hotel_viewpoints');
		$this->load->view('webapp/hotels/include/footer');
	}  

	public function  hotel_add_viewpoints()
	{
        $data['menu']='hotel_viewpoints';
        $data['pagetitle']='DashBoard';

		$this->load->view('webapp/hotels/include/header',$data);
		$this->load->view('webapp/hotels/viewpoints/hotel_add_viewpoints');
		$this->load->view('webapp/hotels/include/footer');
	}  

}
