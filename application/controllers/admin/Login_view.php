<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_view extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/login_view');
	}
}
