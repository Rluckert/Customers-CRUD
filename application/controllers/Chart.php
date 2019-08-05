<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Chart extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
    $this->load->model('Charts');
  }
  
  public function index()
  {
    $this->load->view('header');
    $this->load->view('chart/charts');
    $this->load->view('footer');
  }

  public function getDatos()
  {
    $datos = $this->Charts->getDatos();
    echo json_encode($datos);
  }

  public function pieDatos()
  {
    $datos = $this->Charts->pieDatos();
    echo json_encode($datos);
  }
}
