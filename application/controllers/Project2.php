<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Project2 extends CI_Controller
{
  public function index()
  {
    $this->load->view('layout/header');
    $this->load->view('projek2');
  }
}
