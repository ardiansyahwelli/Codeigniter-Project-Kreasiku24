<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Auth_model');
		$this->load->model('Admin_model', 'admin');
		$this->load->model('Company_model', 'company');
		$this->load->model('Menu_model', 'menu');
		
		// check if user has been logged in
		is_logged_in();
	}

	public function index()
	{
		// get user information
		$data['user'] = $this->Auth_model->getUserByEmail( $this->session->userdata('email') );
		$data['company'] = $this->company->getCompany('id');
		$data['title'] = 'Kreasiku24-Project | Main Master';
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/home', $data);
		$this->load->view('templates/footer');
	}

	public function setting()
	{
		// get user information
		$data['user'] = $this->Auth_model->getUserByEmail( $this->session->userdata('email') );
		$data['company'] = $this->company->getCompany('id');
		$data['title'] = 'Kreasiku24-Project | Main Setting';
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/setting', $data);
		$this->load->view('templates/footer');
	}

	public function imb()
	{
		// get user information
		$data['user'] = $this->Auth_model->getUserByEmail( $this->session->userdata('email') );
		$data['company'] = $this->company->getCompany('id');
		$data['title'] = 'Kreasiku24-Project | Main Master';
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/imb', $data);
		$this->load->view('templates/footer');
	}

	public function arch()
	{
		// get user information
		$data['user'] = $this->Auth_model->getUserByEmail( $this->session->userdata('email') );
		$data['company'] = $this->company->getCompany('id');
		$data['title'] = 'Kreasiku24-Project | Main Master';
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/arch', $data);
		$this->load->view('templates/footer');
	}

	public function company()
	{
		// get user information
		$data['user'] = $this->Auth_model->getUserByEmail( $this->session->userdata('email') );
		$data['company'] = $this->company->getCompany('id');
		$data['title'] = 'Kreasiku24-Project | Company Setup';
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/company', $data);
		$this->load->view('templates/footer');
	}

	public function editCompany()
	{
		// get user information
		$data['user'] = $this->Auth_model->getUserByEmail( $this->session->userdata('email') );
		$data['company'] = $this->company->getCompany('id');
		$data['title'] = 'Kreasiku24-Project | Company Setup';

		$this->form_validation->set_rules('name','Company Name','required|trim');
		$this->form_validation->set_rules('address','Company Address','required|trim');
		$this->form_validation->set_rules('phone','Company Phone','required|trim');
		$this->form_validation->set_rules('email','Email Address','required|trim');
		$this->form_validation->set_rules('term','Company Terms','required|trim');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('templates/header', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('admin/company', $data);
			$this->load->view('templates/footer');
		} else {
			$data = [
				       'id' => $this->input->post('id'),
							 'name' => $this->input->post('name'),
							 'address' => $this->input->post('address'),
							 'phone' => $this->input->post('phone'),
							 'fax' => $this->input->post('fax'),
							 'email' => $this->input->post('email'),
							 'term' => $this->input->post('term'),
							 'image' => $_FILES['image']['name'],
							 'favicon' => $_FILES['favicon']['name']
							];
			$this->company->editCompany($data);
		}
	}

	public function role()
	{
		// get user information
		$data['user'] = $this->Auth_model->getUserByEmail( $this->session->userdata('email') );
		$data['company'] = $this->company->getCompany('id');
		$data['title'] = 'Kreasiku24-Project | User Account Setup';
		$data['role'] = $this->admin->getRole(); 

		// set rules
		$this->form_validation->set_rules('role','User Account','required|trim');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('admin/role', $data);
			$this->load->view('templates/footer');
		}else{
			$this->admin->addRole($this->input->post());
		}
	}
	public function roleAccess($role_id)
	{
		// get user information
		$data['user'] = $this->Auth_model->getUserByEmail( $this->session->userdata('email') );
		$data['company'] = $this->company->getCompany('id');
		$data['title'] = 'Kreasiku24-Project | User Access';
		$data['role'] = $this->admin->getRoleById($role_id); 
		$data['menu'] = $this->menu->getMenu();

		// if it is admin
		if ($role_id == 1) $data['menu'] = $this->menu->getMenuExceptAdmin();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/role-access', $data);
		$this->load->view('templates/footer');
	}

	public function getRoleEdit()
	{
		echo json_encode($this->admin->getRoleById($this->input->post('id')));
	}

	public function delete($id = null)
	{
		if (is_null($id)) redirect('admin/role');

		$this->admin->deleteRole($id);
	}

	public function edit()
	{
		// get user information
		$data['user'] = $this->Auth_model->getUserByEmail( $this->session->userdata('email') );
		$data['company'] = $this->company->getCompany('id');
		$data['title'] = 'Kreasiku24-Project | Edit User Account';
		$data['role'] = $this->admin->getRole(); 

		// set rules
		$this->form_validation->set_rules('role','User Account','required|trim');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('admin/role', $data);
			$this->load->view('templates/footer');
		}else{
			$this->admin->editRole($this->input->post());
		}
	}

	public function changeaccess()
	{
		$data = [
			'role_id' => $this->input->post('role_id'),
			'menu_id' => $this->input->post('menu_id')
		];
		$result = $this->admin->getUserAccessById($data['role_id'], $data['menu_id']);

		// jika datanya tidak ada berarti user menyentang checkbox
		if ($result < 1)
		{
			// maka tambahkan akses baru
			$this->admin->addUserAccess($data);
		}
		// jika ada
		else
		{
			// maka hapus akses
			$this->admin->deleteUserAccess($data);
		}
	}
}