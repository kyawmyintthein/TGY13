<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class car_controller extends CI_Controller {

	function __construct()
	{
		parent::__construct();	
		#$this->load->helper('url');
		$this->load->model('car_model');
	}

	public function index()
	{
		$data['cars'] = $this->car_model->findAllCars();
		#print_r($data);
		$this->load->view('cars/list', $data);				
	}

	public function newform()
	{
		$this->load->view('cars/create');
	}

	public function editform($id)
	{
		$data['car'] = $this->car_model->findCar($id)->row();
		$this->load->view('cars/update',$data);
	}

	public function create()
	{
		$data['type'] = $this->input->post('type');
		$data['min_price'] = $this->input->post('min_price');
		$data['max_price'] = $this->input->post('max_price');
		$data['owner_name'] = $this->input->post('owner_name');
		$data['description'] = $this->input->post('description');
		$data['phone'] = $this->input->post('phone');
		$data['email'] = $this->input->post('email');
		$data['created_by'] = $this->input->post('created_by');
		$data['created_at'] =  time();
		$result = $this->car_model->insert($data);
		$this->load->view('cars/show',$result);
	}

	public function remove($id){
			$this->car_model->delete($id);
			$this->index();								
	}

	public function show($id){
			$data['car'] = $this->car_model->findCar($id)->row();
			$this->load->view('cars/show',$data);
	}

	public function edit($id){

		$data['type'] = $_POST['type'];
		$data['min_price'] = $_POST['min_price'];;
		$data['max_price'] = $_POST['max_price'];;
		$data['owner_name'] = $_POST['owner_name'];;
		$data['description'] = $_POST['description'];;
		$data['phone'] = $_POST['phone'];;
		$data['email'] = $_POST['email'];;
		$data['created_by'] = $_POST['created_by'];;
		$data['created_at'] =$_POST['created_at'];;
		$result=$this->car_model->update($data, $_POST['car_id']);
		$this->load->view('cars/show',$result);
	}



}
