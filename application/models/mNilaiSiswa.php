<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mNilaiSiswa extends CI_Model
{
	public function insert($data)
	{
		$this->db->insert('nilai_raport', $data);
	}
	public function select()
	{
		$this->db->select('*');
		$this->db->from('nilai_raport');
		$this->db->join('analisis_siswa', 'nilai_raport.id_siswa = analisis_siswa.id_siswa', 'left');
		$this->db->group_by('nilai_raport.id_siswa');
		return $this->db->get()->result();
	}
	public function detailNilai($id_siswa)
	{
		$this->db->select('*');
		$this->db->from('nilai_raport');
		$this->db->where('id_siswa', $id_siswa);
		return $this->db->get()->result();
	}
}

/* End of file mNilaiSiswa.php */
