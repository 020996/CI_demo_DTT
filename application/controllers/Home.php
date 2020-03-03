<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Uers_model');
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->library('bcrypt');
	}

	public function login()
	{
		$this->load->view('backend/home/login');
	}
	public function check(){
		// lấy giữ liệu từ form;
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$level = 1; // admin =1, uesr =2;
		//lấy dữ liệu từ model qua.
		 $data = $this->Uers_model->Check_login($email, $password, $level);// so sánh bên model trả về số lượng trùng.
	}
	public function registration()
	{

		$this->load->view('backend/home/registration');
		$name = $this->input->post('name');
		$email = $this->input->post('mail');
		$level = $this->input->post('level');
		$password = $this->bcrypt->hash_password($this->input->post('password'));

		//gửi dữ liệu sang model,
		if ($name && $email && $level && $password) {
			$this->Uers_model->addUers($name, $email, $level, $password);
			$this->session->set_flashdata('msg', 'Bạn đã đăng ký thành công');
			redirect('index.php/home/login');
		}
	}
	public function user(){
		if($this->session->userdata('admin')){
			$data['info'] = $this->Uers_model->getUesrs();
			$this->load->view('backend/home/user',$data);
		   }else{
			   redirect('index.php/home/login');
		   }
	}
	public function logout(){
		if($this->session->userdata('admin')){
		 $this->session->unset_userdata('admin'); //hủy secsition,
		 redirect('index.php/home/login');
		}
	}
	public function delete_user($id){
		$this->Uers_model->delete_user($id);
	}
}