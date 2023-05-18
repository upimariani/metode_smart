<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mSiswa extends CI_Model
{
	public function insert($data)
	{
		$this->db->insert('analisis_siswa', $data);
	}
	public function selectSiswa()
	{
		$this->db->select('*');
		$this->db->from('analisis_siswa');
		$this->db->where('id_user', $this->session->userdata('id'));
		return $this->db->get()->result();
	}
	public function update($id, $data)
	{
		$this->db->where('id_siswa', $id);
		$this->db->update('analisis_siswa', $data);
	}
	public function delete($id)
	{
		$this->db->where('id_siswa', $id);
		$this->db->delete('analisis_siswa');
	}
}

/* End of file mSiswa.php */
