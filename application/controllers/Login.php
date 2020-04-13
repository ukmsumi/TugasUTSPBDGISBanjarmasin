<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 

class Login extends CI_Controller {
 
	public function __construct(){
		parent::__construct();		
		$this->load->model('m_login','Model');

	}
 
	public function index(){
		$datacontent['url']='login';
		$datacontent['title']='Halaman login';
		$datacontent['datatable']=$this->Model->get();
		$data['content']=$this->load->view('login/tableView',$datacontent,TRUE);
		$data['title']=$datacontent['title'];
		$this->load->view('v_login');
	}
 
	public function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->m_login->cek_login("admin",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("admin"));
 
		}else{
			echo "Username dan password salah !";
		}
	}
 
	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}