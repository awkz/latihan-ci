<?php
/**
* 
*/
class Barang extends CI_Controller
{

	function index(){
		$this->load->model('Barang_model');
		$data = $this->Barang_model->get_all();
		$this->load->view('header');
		$this->load->view('barang/index',[
			'data' => $data
		]);
		$this->load->view('footer');
	}
	function form(){
		$this->load->view('header');
		$this->load->view('barang/form');
		$this->load->view('footer');
	}
	function simpan()
	{
		$this->load->model('Barang_model');
		$data = array(
			'kode' => $this->input->post('kode'), 
			'nama' => $this->input->post('nama') 
		);
		$this->Barang_model->simpan($data);
		echo json_encode(array("status" => TRUE));

	}
	function delete($kode)
	{
		$this->load->model('Barang_model');
		$this->Barang_model->delete($kode);
		redirect('Barang/index');
	}
	function edit($kode)
	{
		$this->load->model('Barang_model');
		$data = $this->Barang_model->get_barang($kode);
		$this->load->view('header');
		$this->load->view('barang/edit',[
			'data' => $data
		]);
		$this->load->view('footer');

	}
	function update($kode)
	{
		$this->load->model('Barang_model');
		$kode = $this->input->post('kode');
		$data = array(
			'kode' => $this->input->post('kode'), 
			'nama' => $this->input->post('nama')
		);
		$this->Barang_model->update($kode,$data);
		echo json_encode(array("status" => TRUE));
	}
}