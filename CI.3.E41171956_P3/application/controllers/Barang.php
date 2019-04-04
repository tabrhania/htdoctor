<?php

function index(){
    $this->load->model("m_barang");

    $data['list']= $this->m_barang->list_barang();
    $data['judul']= "ini adalah judul";
    $this->load->vuew{"view_barang"
}