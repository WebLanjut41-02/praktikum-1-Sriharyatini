<?php 
 
class login extends CI_Controller{
 
	function __construct(){
		parent::__construct();
	}
 
	function index(){
		$this->load->view('loginn');
	}
 
	function cek_login(){
		$user = $this->session->input->post('username');
		$pass = $this->session->input->post('password');
		$user = array(
			'username' => $username,
			'password' => $password
			);

		$this->session->set_userdata(array('username' =>$username));
		redirect('login/home');
		}

 
function home(){
	$username = $this->session->userdata('username');
	if ($username=="") {
		redirect('login');
	}
}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}
?>