<?php
 
class Barang extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model("Barang_model");

    }

    public function index(){
        $data['list']=$this->Barang_model->getAll()
        $this->load->view("admin/Barang/daftar_barang", $data);
    }
}