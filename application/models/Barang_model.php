<?php
/**
* 
*/
class Barang_model extends CI_Model
{
	
	function get_all(){
		$query = "SELECT * FROM barang";
		return $this->db->query($query)->result_array();
	}
	function simpan($data)
	{
		$this->db->insert('barang',$data);
	}
	function delete($kode)
		{
			$this->db->where('kode',$kode);
			$this->db->delete('barang');
		}	
	function get_barang($kode)
	{
		$this->db->where('kode',$kode);
		$query = $this->db->get('barang');
		return $query->row_array();
	}
	function update($kode,$data)
	{
		$this->db->where('kode',$kode);
		$this->db->update('barang',$data);
	}
}