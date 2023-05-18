<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mKriteria extends CI_Model
{

	//absensi
	public function insertAbsensi($data)
	{
		$this->db->insert('kriteria_absensi', $data);
	}
	public function selectAbsensi()
	{
		$this->db->select('*');
		$this->db->from('kriteria_absensi');
		return $this->db->get()->result();
	}
	public function updateAbsensi($id, $data)
	{
		$this->db->where('id_absensi', $id);
		$this->db->update('kriteria_absensi', $data);
	}
	public function deleteAbsensi($id)
	{
		$this->db->where('id_absensi', $id);
		$this->db->delete('kriteria_absensi');
	}

	//keaktifan
	public function insertKeaktifan($data)
	{
		$this->db->insert('kriteria_keaktifan', $data);
	}
	public function selectKeaktifan()
	{
		$this->db->select('*');
		$this->db->from('kriteria_keaktifan');
		return $this->db->get()->result();
	}
	public function updateKeaktifan($id, $data)
	{
		$this->db->where('id_keaktifan', $id);
		$this->db->update('kriteria_keaktifan', $data);
	}
	public function deleteKeaktifan($id)
	{
		$this->db->where('id_keaktifan', $id);
		$this->db->delete('kriteria_keaktifan');
	}

	//kejuaraan
	public function insertKejuaraan($data)
	{
		$this->db->insert('kriteria_kejuaraan', $data);
	}
	public function selectkejuaraan()
	{
		$this->db->select('*');
		$this->db->from('kriteria_kejuaraan');
		return $this->db->get()->result();
	}
	public function updateKejuaraan($id, $data)
	{
		$this->db->where('id_kejuaraan', $id);
		$this->db->update('kriteria_kejuaraan', $data);
	}
	public function deleteKejuaraan($id)
	{
		$this->db->where('id_kejuaraan', $id);
		$this->db->delete('kriteria_kejuaraan');
	}

	//kepribadian
	public function insertKepribadian($data)
	{
		$this->db->insert('kriteria_kepribadian', $data);
	}
	public function selectkepribadian()
	{
		$this->db->select('*');
		$this->db->from('kriteria_kepribadian');
		return $this->db->get()->result();
	}
	public function updateKepribadian($id, $data)
	{
		$this->db->where('id_kepribadian', $id);
		$this->db->update('kriteria_kepribadian', $data);
	}
	public function deleteKepribadian($id)
	{
		$this->db->where('id_kepribadian', $id);
		$this->db->delete('kriteria_kepribadian');
	}

	//raport
	public function insertRaport($data)
	{
		$this->db->insert('kriteria_raport', $data);
	}
	public function selectraport()
	{
		$this->db->select('*');
		$this->db->from('kriteria_raport');
		return $this->db->get()->result();
	}
	public function updateRaport($id, $data)
	{
		$this->db->where('id_raport', $id);
		$this->db->update('kriteria_raport', $data);
	}
	public function deleteRaport($id)
	{
		$this->db->where('id_raport', $id);
		$this->db->delete('kriteria_raport');
	}
}


/* End of file mKriteria.php */
