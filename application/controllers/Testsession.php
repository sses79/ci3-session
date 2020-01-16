<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testsession extends CI_Controller {

	public function index()
	{
		$this->load->library('session');

		$newdata = array(
			'username'  => 'johndoe',
			'email'     => 'johndoe@some-site.com',
			'logged_in' => TRUE
		);

		$this->session->set_userdata($newdata);

		$this->load->view('welcome_message');
	}

	public function remove()
	{

		$this->load->library('session');
		$this->session->sess_destroy();

		$this->load->view('welcome_message');
	}
}
