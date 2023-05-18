<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cUser extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mUser');
	}

	public function index()
	{
		$data = array(
			'user' => $this->mUser->select()
		);
		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/Layouts/header');
		$this->load->view('Admin/User/vUser', $data);
		$this->load->view('Admin/Layouts/footer');
	}
	public function create()
	{
		$data = array(
			'nama_user' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'no_hp' => $this->input->post('no_hp'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'level_user' => $this->input->post('level_user')
		);
		$this->mUser->insert($data);
		$this->session->set_flashdata('success', 'Data User Berhasil Disimpan!!!');
		redirect('Admin/cUser', 'refresh');
	}
	public function update($id)
	{
		$data = array(
			'nama_user' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'no_hp' => $this->input->post('no_hp'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'level_user' => $this->input->post('level_user')
		);
		$this->mUser->update($id, $data);
		$this->session->set_flashdata('success', 'Data User Berhasil Diperbaharui!!!');
		redirect('Admin/cUser', 'refresh');
	}
	public function delete($id)
	{
		$this->mUser->delete($id);
		$this->session->set_flashdata('success', 'Data User Berhasil Dihapus!!!');
		redirect('Admin/cUser', 'refresh');
	}
}

/* End of file cUser.php */
