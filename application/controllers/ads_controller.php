<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ads_controller extends CI_Controller {

	function __construct()
	{
		parent::__construct();	
		#$this->load->helper('url');
		$this->load->model('ads_model');
	}

	public function index()
	{
		$data['ads'] = $this->ads_model->findAlladss();
		#print_r($data);
		$this->load->view('adss/list', $data);				
	}

	public function newform()
	{
		$this->load->view('adss/create');
	}

	public function editform($id)
	{
		$data['ads'] = $this->ads_model->findads($id)->row();
		$this->load->view('adss/update',$data);
	}

	public function create()
	{
		$data['company_name'] = $this->input->post('company_name');
		$data['owner_name'] = $this->input->post('owner_name');
		$data['phone'] = $this->input->post('phone');
		$data['email'] = $this->input->post('email');
		$data['logo'] = $this->input->post('logo');
		$data['phone'] = $this->input->post('phone');
		$data['created_by'] = $this->input->post('created_by');
		$data['created_at'] =  time();
		$result = $this->ads_model->insert($data);
		$this->load->view('adss/show',$result);
	}

	public function remove($id){
			$this->ads_model->delete($id);
			$this->index();								
	}

	public function show($id){
			$data['ads'] = $this->ads_model->findads($id)->row();
			$this->load->view('adss/show',$data);
	}

	public function edit($id){

		$data['company_name'] = $this->input->post('company_name');
		$data['owner_name'] = $this->input->post('owner_name');
		$data['phone'] = $this->input->post('phone');
		$data['email'] = $this->input->post('email');
		$data['logo'] = $this->input->post('logo');
		$data['phone'] = $this->input->post('phone');
		$data['created_by'] = $this->input->post('created_by');
		$data['created_at'] =  time();
		$result = $this->ads_model->insert($data);
		$this->load->view('adss/show',$result);
	}



}
