<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_barang extends CI_Model {
    public function list_barang() {
        $barang = array ("ASUS","LENOVO","SAMSUNG","OPPO");
        return $barang;
    }
}
