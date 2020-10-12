<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Berkas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Upload_model");
        $this->load->library('form_validation');
        $this->load->helper(array('url','download')); 
    }


    public function index()
    {
        $data["berkas"] = $this->Upload_model->getAll();
        $this->load->view("admin/dashboard/dashboard", $data);
    }
    
    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->produk_model->delete($id)) {
            redirect(site_url('admin/produk'));
        }
    }
    
    function download($id)
    {
        $data = $this->db->get_where('berkas',['id_berkas'=>$id])->row();
        force_download('upload/cv/'.$data->file,NULL);
    }

}