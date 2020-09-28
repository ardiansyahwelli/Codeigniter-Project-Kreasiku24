<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Auth_model');
    // load model
    $this->load->model('User_model', 'user');
    $this->load->model('Company_model', 'company');
    
    // load form validation
    $this->load->library('form_validation');
    
    // if user already logged in
    is_logged_in();
  }
  public function index()
  { 
    // get user information
    $data['user'] = $this->Auth_model->getUserByEmail( $this->session->userdata('email') );
    $data['company'] = $this->company->getCompany('id');

    $data['title'] = 'Kreasiku24-Project | User Profile';
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('user/dashboard', $data);
    $this->load->view('templates/footer');
  }
}
