<?php 
defined("BASEPATH") OR exit("No direct script access allowed");

class Login extends CI_Controller {	
	
	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$data = array(
			"title" => "Halaman Login",
			"page" => "login",
			"menu" => "Login"
		);
		$this->load->view("login", $data);
	}

	public function cek() {
		$username = $this->input->post("username");
		$password = $this->input->post("password");

		$cek = $this->db->get_where("tb_users", array("username" => $username, "password" => $password))->row();
		if (!empty($cek)) {
			$ses = array(
				"username" => $cek->username,
				"level" => $cek->level,
				"status" => $cek->status
			);
			$this->session->set_userdata($ses);

			if ($this->session->userdata('level') == "admin") {
				$this->session->set_flashdata("message", "swal.fire({title: 'BERHASIL',text: 'Login berhasil',icon:'success'});");
				redirect("dashboard");
			} elseif ($this->session->userdata('level') == "owner") {
				$this->session->set_flashdata("message", "swal.fire({title: 'BERHASIL',text: 'Login berhasil',icon:'success'});");
				redirect("dashboard");
			} elseif ($this->session->userdata('level') == "karyawan") {
				$this->session->set_flashdata("message", "swal.fire({title: 'BERHASIL',text: 'Login berhasil',icon:'success'});");
				redirect("dashboard");
			} else {
				$this->session->set_flashdata("message", "swal.fire({title: 'BERHASIL',text: 'Login berhasil',icon:'success'});");
				redirect("public/home");
			}
		} else {
			$this->session->set_flashdata("message", "swal.fire({title: 'GAGAL',text: 'Email / Password Salah!!',icon:'error'});");
			redirect("login");
		}
	}

	public function logout() {
		$this->session->sess_destroy();
		redirect("public/home");
	}
}
