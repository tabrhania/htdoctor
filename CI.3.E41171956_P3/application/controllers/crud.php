<?php 


class Crud extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->helper('url');

	}

	function index(){
		$data['products'] = $this->m_data->tampil_data()->result();
		$this->load->view('v_tampil',$data);
	}

	function tambah(){
		$this->load->view('v_input');
    }
    function tambah_aksi(){
		$name = $this->input->post('name');
		$price = $this->input->post('price');
		$description = $this->input->post('description');
 
		$data = array(
			'name' => $name,
			'price' => $price,
			'description' => $description
			);
		$this->m_data->input_data($data,'products');
		redirect('crud/index');
    }
    
    function hapus($product_id){
		$where = array('product_id' => $product_id);
		$this->m_data->hapus_data($where,'products');
		redirect('crud/index');
    }
    function edit($product_id){
		$where = array('product_id' => $product_id);
		$data['products'] = $this->m_data->edit_data($where,'products')->result();
		$this->load->view('v_edit',$data);
	}
	function update(){
		$product_id = $this->input->post('product_id');
		$name = $this->input->post('name');
		$price = $this->input->post('price');
		$description = $this->input->post('description');
	
		$data = array(
			'name' => $name,
			'price' => $price,
			'description' => $description
		);
	
		$where = array(
			'product_id' => $product_id
		);
	
		$this->m_data->update_data($where,$data,'products');
		redirect('crud/index');
	}
}