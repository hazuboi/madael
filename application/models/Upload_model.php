<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Upload_model extends CI_Model
{
    private $_table = "berkas"; // nama tabel

    // kolom tabel
    public $id_berkas;
    public $nama;
    public $umur;
    public $hp;
    public $email;
    public $pendidikan;
    public $jabatan;
    public $berkas;    

    public function rules()
    {
        return [
            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'umur',
            'label' => 'Umur',
            'rules' => 'required'],

            ['field' => 'hp',
            'label' => 'Handphone',
            'rules' => 'required'],

            ['field' => 'email',
            'label' => 'Email',
            'rules' => 'required'],

            ['field' => 'pendidikan',
            'label' => 'Pendidikan',
            'rules' => 'required'],

            ['field' => 'jabatan',
            'label' => 'Jabatan',
            'rules' => 'required'],

            ['field' => 'berkas',
            'label' => 'Berkas',
            'rules' => 'required']
           
        ];
    }    

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getRow()
    {
        return $this->db->get_where('berkas',['id_berkas'=>$id])->row();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_berkas" => $id])->row();
    }     

    public function save()
    {
        $post = $this->input->post();
        $this->id_berkas = uniqid();
        $this->nama = $post["nama"];
        $this->umur = $post["umur"];
        $this->hp = $post["handphone"];
        $this->email = $post["email"];
        $this->pendidikan = $post["pendidikan"];
        $this->jabatan = $post["jabatan"];
        $this->berkas = $this->_uploadFile();        
        $this->db->insert($this->_table, $this);
    }

    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("id_produk" => $id));
    }

    private function _uploadFile()
    {
    $config['upload_path']          = './upload/cv/';
    $config['allowed_types']        = 'pdf|rar|zip';
    $config['file_name']            = $this->nama;
    $config['overwrite']            = true;
    $config['max_size']             = 0; // 1MB
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('berkas')) {
        return $this->upload->data("file_name");
        }

    if ( ! $this->upload->do_upload('berkas')) {
        throw new Exception($this->upload->display_errors());
    } else {
        return $this->upload->data();
    }

    return "default.pdf";
    
    }    

    public function download($id){
        $query = $this->db->get_where('berkas',array('id_berkas'=>$id));
        return $query->row_array();
     }

    public function formPost()
    {
        //print_r($this->input->post('name'));
        //print_r($this->input->post('email'));
        $post = $this->input->post();        
        print_r($this->nama = $post["nama"]);
        print_r($this->umur = $post["umur"]);
        print_r($this->hp = $post["handphone"]);
        print_r($this->email = $post["email"]);
        print_r($this->pendidikan = $post["pendidikan"]);
        print_r($this->jabatan = $post["jabatan"]);
        print_r($this->berkas = $this->_uploadFile());
        //print_r($this->input->post());       
    exit;
    }   
}