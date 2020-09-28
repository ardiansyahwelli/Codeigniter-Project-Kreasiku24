<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
		//$this->load->view('user/home', $data);
		$this->load->view('user/dashboard', $data);
		$this->load->view('templates/footer');
	}

	public function edit()
	{
		// get user information
		$data['user'] = $this->Auth_model->getUserByEmail( $this->session->userdata('email') );
		$data['company'] = $this->company->getCompany('id');
		$data['title'] = 'Kreasiku24-Project | Updated Profile';

		// set rules
		$this->form_validation->set_rules('username', 'Username', 'required|trim|min_length[4]|max_length[20]', ['min_length' => 'Username is too short!']);

		$this->form_validation->set_rules('name', 'Fullname', 'required|trim|min_length[4]|max_length[20]', ['min_length' => 'Fullname is too short!']);

		$this->form_validation->set_rules('address', 'Address', 'required|trim|min_length[10]|max_length[30]', ['min_length' => 'Address is too short!']);

		$this->form_validation->set_rules('phone', 'Phone Number', 'required|trim|min_length[11]|max_length[13]', ['min_length' => 'Address is too short!']);
		

		if ($this->form_validation->run() == false){
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('user/edit-profile', $data);
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

	public function changepassword()
	{
		// get user information
		$data['user'] = $this->Auth_model->getUserByEmail($this->session->userdata('email'));
		$data['company'] = $this->company->getCompany('id');
		$data['title'] = 'Kreasiku24-Project | Updated Password';

		// set rules
		$this->form_validation->set_rules('current_password', 'Current password', 'required|trim');
		
		$this->form_validation->set_rules('new_password', 'New password', 'required|trim|min_length[7]', [
			'min_length' => 'Password is too short!'
		]);

		$this->form_validation->set_rules('confirm_password', 'Confirm password', 'required|trim|matches[new_password]', [
			'matches' => "Password didn't match!"
		]);

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header', $data);
			//$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('user/change-password', $data);
			$this->load->view('templates/footer');
		} else {
			// do something
			$this->user->changePassword($this->input->post());
		}
	}
}
