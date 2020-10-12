<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("Upload_model");
        $this->load->library('form_validation');
    }
	
	public function index()
	{		
		$this->load->view('CV');
	}

	public function add()
    {
        $cv = $this->Upload_model;                
        $validation = $this->form_validation;
        $validation->set_rules($cv->rules());      
        $cv->save();
        $this->session->set_flashdata('success', 'Berhasil disimpan');           		
 		
         if ($validation->run()) 
         	{         
         		$cv->save();
        		$this->session->set_flashdata('success', 'Berhasil disimpan');            
         	}

        $this->load->view("CV");
    }

    public function formModel()
	{
		 $test = $this->Upload_model;
		 $top = $test->_uploadFile();
		 //$test->formPost();
		//$test->_uploadFile();
		print_r($this->input->$top('berkas'));
		exit;
	}
}
