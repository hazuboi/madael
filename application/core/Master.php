<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Master extends CI_Controller{
    public function __construct(){
        parent::__construct();

        // Cek apakah terdapat session dengan nama authenticated
        if( ! $this->session->userdata('authenticated')) // Jika tidak ada
            redirect('admin/login_view'); // Redirect ke halaman login
    }
}