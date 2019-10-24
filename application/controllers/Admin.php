<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function keLogin()
	{	
		$data['title'] = "iKereta - Login";

		$this->load->view('admin/login_page', $data);
	}

	public function login()
	{
		$data = array(
			'email' => $this->input->post('email'),
			'password' => sha1($this->input->post('password'))
		);

		$cek = $this->AdminModel->cekLogin($data);

		if($cek > 0){
			$sess = array(
				'status' => TRUE,
				'level' => "admin"
			);

			//SET USERDATA / SESSION
			$this->session->set_userdata($sess);

			redirect(base_url('admin/dashboard'));
		}else{
			redirect(base_url('login'));
		}

	}

	public function logout()
	{
		session_destroy();

		redirect(base_url());
	}

	public function dashboard()
	{
		if($this->session->status === TRUE){
			$data['title'] = "iKereta - Dashboard";

			$this->load->view('admin/dashboard', $data);
		}else{
			redirect(base_url('login'));
		}
	}
}
