<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_Model
{
    private $_table = "barang";

    public $kdbarang;
    public $nama;
    public $deskripsi;
    public $stokbarang;
    public $hargabarang;
    

    public function rules()
    {
        return [
            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'deskripsi',
            'label' => 'Deskripsi',
            'rules' => 'required'],
            
            ['field' => 'stokbarang',
            'label' => 'Stokbarang',
            'rules' => 'required']

            ['field' => 'hargabarang',
            'label' => 'Hargabarang',
            'rules' => 'numeric']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["kdbarang" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->kdbarang = uniqid();
        $this->nama = $post["nama"];
        $this->deskripsi = $post["deskripsi"];
        $this->stokbarang = $post["stokbarang"];
        $this->hargabarang = $post["hargabarang"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->kdbarang = $post["id"];
        $this->nama = $post["nama"];
        $this->deskripsi = $post["deskripsi"];
        $this->stokbarang = $post["stokbarang"];
        $this->hargabarang = $post["hargabarang"];
        $this->db->update($this->_table, $this, array('kdbarang' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("kdbarang" => $id));
    }
}
