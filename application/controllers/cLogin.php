<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cLogin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mLogin');
	}

	public function index()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');


		if ($this->form_validation->run() == FALSE) {
			$this->load->view('vLogin');
		} else {
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$cek_login = $this->mLogin->login($username, $password);
			if ($cek_login) {
				$id = $cek_login->id_user;


				$array = array(
					'id' => $id
				);

				$this->session->set_userdata($array);

				$level_user = $cek_login->level_user;
				if ($level_user == '1') {
					redirect('Admin/cDashboardAdmin', 'refresh');
				} else if ($level_user == '2') {
					redirect('WaliKelas/cDasboardWaliKelas', 'refresh');
				} else {
					redirect('KepalaSekolah/cDashboardKepsek ', 'refresh');
				}
			} else {
				$this->session->set_flashdata('error', 'Username dan Password Anda Salah!!');
				redirect('cLogin', 'refresh');
			}
		}
	}
	public function logout()
	{

		$this->session->unset_userdata('id');

		$this->session->set_flashdata('success', 'Anda Berhasil Log Out!!!');
		redirect('cLogin', 'refresh');
	}
}

/* End of file cLogin.php */
