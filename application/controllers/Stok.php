<?php
/**
* 
*/
class Stok extends CI_Controller
{

	function index(){
		$this->load->model('Stok_model');
		$data = $this->Stok_model->get_all();
		$this->load->view('header');
		$this->load->view('stok/index',[
			'data' => $data
		]);
		$this->load->view('footer');
	}
	function form(){
		$this->load->model('Barang_model');
		$data = $this->Barang_model->get_all();
		$this->load->view('header');
		$this->load->view('stok/form',[
			'barang' => $data
		]);
		$this->load->view('footer');
	}
	function simpan()
	{
		$this->load->model('Stok_model');
		$data = array(
			'tanggal' => $this->input->post('tanggal'), 
			'kode' => $this->input->post('kode'),
			'jumlah' => $this->input->post('jumlah')
		);
		$this->Stok_model->simpan($data);
		echo json_encode(array("status" => TRUE));

	}
	function delete($tanggal)
	{
		$this->load->model('Stok_model');
		$this->Stok_model->delete($tanggal);
		redirect('Stok/index');
	}
	function edit($tanggal)
	{
		$this->load->model('Barang_model');
		$barang = $this->Barang_model->get_all();
		$this->load->model('Stok_model');
		$data = $this->Stok_model->get_stok($tanggal);
		$this->load->view('header');
		$this->load->view('stok/edit',[
			'data' => $data,
			'barang' => $barang
		]);
		$this->load->view('footer');

	}
	function update($tanggal)
	{
		$this->load->model('Stok_model');
		$tanggal = $this->input->post('tanggal');
		$data = array(
			'tanggal' => $this->input->post('tanggal'), 
			'kode' => $this->input->post('kode'),
			'jumlah' => $this->input->post('jumlah')
		);
		$this->Stok_model->update($tanggal,$data);
		echo json_encode(array("status" => TRUE));
	}
}