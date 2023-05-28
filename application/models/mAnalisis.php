<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mAnalisis extends CI_Model
{
	public function data_siswa()
	{
		return $this->db->query("SELECT SUM(nilai)/4 as nilai, nama_siswa, jk, angkatan, kelas, analisis_siswa.id_siswa FROM `analisis_siswa` JOIN nilai_raport ON analisis_siswa.id_siswa = nilai_raport.id_siswa WHERE id_user=" . $this->session->userdata('id') . " AND hasil='0' GROUP BY nilai_raport.id_siswa")->result();
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
		$this->db->where('hasil!=0');
		$this->db->order_by('hasil', 'desc');
		return $this->db->get()->result();
	}


	//kepsek
	//list per kelas dan angkatan
	public function periode()
	{
		return $this->db->query("SELECT * FROM `analisis_siswa` GROUP BY kelas, angkatan")->result();
	}
	public function view($kelas, $angkatan)
	{
		return $this->db->query("SELECT * FROM `analisis_siswa` JOIN kriteria_raport ON analisis_siswa.id_raport=kriteria_raport.id_raport JOIN kriteria_keaktifan ON analisis_siswa.id_keaktifan=kriteria_keaktifan.id_keaktifan JOIN kriteria_absensi ON analisis_siswa.id_absensi=kriteria_absensi.id_absensi JOIN kriteria_kepribadian on analisis_siswa.id_kepribadian=kriteria_kepribadian.id_kepribadian JOIN kriteria_kejuaraan ON analisis_siswa.id_kejuaraan=kriteria_kejuaraan.id_kejuaraan WHERE kelas='" . $kelas . "' AND angkatan='" . $angkatan . "' ORDER BY hasil DESC")->result();
	}
}

/* End of file mAnalisis.php */
