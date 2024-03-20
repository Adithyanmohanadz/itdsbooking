<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

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
	
	public function index()
	{
		$this->load->view('website/include/header');
		$this->load->view('website/index');
		$this->load->view('website/include/footer');
	}

	public function package()
	{
		$this->load->view('website/include/header');
		$this->load->view('website/package/package');
		$this->load->view('website/include/footer');
	}
	 
	public function search()
	{
		$this->load->view('website/include/header');
		$this->load->view('website/booking/search');
		$this->load->view('website/include/footer');
	} 
	 
	public function all_hotel()
	{
		$this->load->view('website/include/header');
		$this->load->view('website/booking/all_hotel');
		$this->load->view('website/include/footer');
	} 
	 
	public function contact_us()
	{
		$this->load->view('website/include/header');
		$this->load->view('website/contact_us');
		$this->load->view('website/include/footer');
	} 
	 
	public function place1()
	{
		$this->load->view('website/include/header');
		$this->load->view('website/place/place1');
		$this->load->view('website/include/footer');
	} 
	 
	public function service()
	{
		$this->load->view('website/include/header');
		$this->load->view('website/service');
		$this->load->view('website/include/footer');
	} 
	 
	public function all_places()
	{
		$this->load->view('website/include/header');
		$this->load->view('website/place/all_places');
		$this->load->view('website/include/footer');
	} 
	 
	public function membership()
	{
		$this->load->view('website/include/header');
		$this->load->view('website/membership');
		$this->load->view('website/include/footer');
	} 
	 
	public function room_view()
	{
		$this->load->view('website/include/header');
		$this->load->view('website/booking/room_view');
		$this->load->view('website/include/footer');
	} 

	public function login()
	{  
		$this->load->view('webapp/login'); 
	} 

	public function hotel_reg()
	{  
		$this->load->view('webapp/hotel_reg'); 
	} 
	
}
