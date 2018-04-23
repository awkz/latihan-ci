<?php
/**
* 
*/
class Stok_model extends CI_Model
{
	
	function get_all(){
		$query = "SELECT * FROM stok INNER JOIN barang ON barang.kode = stok.kode";
		return $this->db->query($query)->result_array();
	}
	function simpan($data)
	{
		$this->db->insert('stok',$data);
	}
	function delete($tanggal)
		{
			$this->db->where('tanggal',$tanggal);
			$this->db->delete('stok');
		}	
	function get_stok($tanggal)
	{
		$this->db->where('tanggal',$tanggal);
		$query = $this->db->get('stok');
		return $query->row_array();
	}
	function update($tanggal,$data)
	{
		$this->db->where('tanggal',$tanggal);
		$this->db->update('stok',$data);
	}
}