<?php define('BASEPATH') OR exit('No direct script acces allowed');

class toko_buah_model extends CI_Model
{
    private $_table = "products";

    public $product_id;
    public $name;
    public $price;
    public $image; = "default.jpg";
    public $description;

    public function rules()
    {
        return [
            ['field' => 'name',
            'label' => 'Name',
            'rules' => 'required'],

            ['field' => 'price',
            'label' => 'Price',
            'rules' => 'numeric'],

            ['field' => 'description',
            'label' => 'Description',
            'rules' => 'required']
        ];
    }

    //menampilkan DB

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    //READ - menampilkan data berdasarkan ID
    public function getById($Id)
    {
        return $this->db->get_where($this->_table, ["product_id" => $id])->row();
        // SELECT * FROM products WHERE product_id=$id;
    }

    //CREATE = mengisikan data 
    public function save()

    {
        $post = $this->input->post();
        $this->product_id = uniqid();
        $this->name = $post["name"];
        $this->price = $post["price"];
        $this->description = $post["description"];

        $this->db->insert($this->_table, $this);
    }

    //UPDATE = edit data 
    public function update()

    {
        $post = $this->input->post();
        $this->product_id = $post["id"];
        $this->price = $post["price"];
        $this->description = $post["description"];
        $this->db->update($this->_table, $this, array('product_id' => $post['id']));
    }

    //DELETE = menghapus data
    public function delete($id)
    {
        return $this->db->delete($this->_table, array("product_id" => $id));

    }
}