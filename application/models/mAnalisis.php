<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mAnalisis extends CI_Model
{
	public function data_siswa()
	{
		return $this->db->query("SELECT SUM(nilai)/4 as nilai, nama_siswa, jk, angkatan, kelas, analisis_siswa.id_siswa FROM `analisis_siswa` JOIN nilai_raport ON analisis_siswa.id_siswa = nilai_raport.id_siswa GROUP BY nilai_raport.id_siswa")->result();
	}
	public function kriteria()
	{
		$data['absensi'] = $this->db->query("SELECT * FROM `kriteria_absensi`")->result();
		$data['keaktifan'] = $this->db->query("SELECT * FROM `kriteria_keaktifan`")->result();
		$data['kejuaraan'] = $this->db->query("SELECT * FROM `kriteria_kejuaraan`")->result();
		$data['kepribadian'] = $this->db->query("SELECT * FROM `kriteria_kepribadian`")->result();

		$data['raport'] = $this->db->query("SELECT * FROM `kriteria_raport`")->result();
		return $data;
	}
	public function insertAnalisis($id, $data)
	{
		$this->db->where('id_siswa', $id);
		$this->db->update('analisis_siswa', $data);
	}

	public function selectAnalisis()
	{
		$this->db->select('*');
		$this->db->from('analisis_siswa');
		$this->db->where('hasil!=', NULL);

		return $this->db->get()->result();
	}
}

/* End of file mAnalisis.php */
