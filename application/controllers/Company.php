<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Auth_model');
    // load model
    $this->load->model('Company_model', 'user');
    
    // load form validation
    $this->load->library('form_validation');
    
    // if user already logged in
    is_logged_in();
  }
  public function index()
  { 
    // get user information
    $data['user'] = $this->Auth_model->getUserByEmail( $this->session->userdata('email') );

    $data['title'] = 'Kreasiku24-Project | Company Setup';
    $this->load->view('templates/header', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('company', $data);
    $this->load->view('templates/footer');
  }

  public function edit()
  {
    // get user information
    //$data['user'] = $this->Auth_model->getUserByEmail( $this->session->userdata('email') );
    $data['title'] = 'Kreasiku24-Project | Updated Profile';

    // set rules
    $this->form_validation->set_rules('username', 'Username', 'required|trim|min_length[4]|max_length[20]', ['min_length' => 'Username is too short!']);

    $this->form_validation->set_rules('name', 'Fullname', 'required|trim|min_length[4]|max_length[20]', ['min_length' => 'Fullname is too short!']);

    $this->form_validation->set_rules('address', 'Address', 'required|trim|min_length[10]|max_length[30]', ['min_length' => 'Address is too short!']);

    $this->form_validation->set_rules('phone', 'Phone Number', 'required|trim|min_length[11]|max_length[13]', ['min_length' => 'Address is too short!']);
    

    if ($this->form_validation->run() == false){
      $this->load->view('templates/header', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('admin/company', $data);
      $this->load->view('templates/footer');
    }else{ 
      $data = [
        //'email' => $this->input->post('email'),
        'username' => $this->input->post('username'),
        'name' => $this->input->post('name'),
        'address' => $this->input->post('address'),
        'phone' => $this->input->post('phone'),
        'image' => $_FILES['image']['name']
      ];
      
      // send it to model
      $this->user->editUser($data);
    }

  }
}
