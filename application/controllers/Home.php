<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Customer');
	  }
   
	public function index()
	{
		$this->load->view('header');
		$data['customers'] = $this->Customer->getUsers();
		$this->load->view('customer/customers', $data);
		$this->load->view('footer');
	}

	public function createUser(){
		$data = $this->input->post();
		$this->Customer->createUser($data);
		redirect('Home');
	}

	public function deleteUser(){
		$idUsuario = $this->uri->segment(3);
		$this->Customer->deleteUser($idUsuario);
		redirect('Home');
	}

	public function getUser(){
		$idUsuario = $this->uri->segment(3);
		$datos = $this->Customer->getUser($idUsuario);
		echo json_encode($datos);
	}

	public function updateUser(){
		$data = $this->input->post();
		$idUsuario = $this->uri->segment(3);
		$datos = $this->Customer->updateUser($idUsuario, $data);
		redirect('Home');
	}
}