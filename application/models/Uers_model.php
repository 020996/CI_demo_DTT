<?php
class Uers_model extends CI_Model
{
	public	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public	function addUers($name, $email, $level, $password)
	{
		$this->db->where('email', $email);
		$total = $this->db->get('users')->num_rows();
		if ($total > 0) {
			$this->session->set_flashdata('msg', 'Mail đăng nhập đã tồn tại');
			redirect('index.php/home/registration');
		} else {
			$data = array(
				'name' => $name,
				'password' => $password,
				'level' => $level,
				'email' => $email,
			);
			$this->db->insert('users', $data);
		}
	}
	public function Check_login($email, $password, $level)
	{
		$query = $this->db
					->where('email', $email)
					->where('level', $level)
					->get('users');
		$result = $this->check_pass($query, $password);
		if(!empty($result)){
		$this->session->set_userdata('admin', $email);
		    redirect('index.php/product_controller/index');
		}else{
		   $this->session->set_flashdata('msg', 'Bạn đã nhập sai email hoặc mật khẩu');
		   redirect('index.php/home/login');
		}
	}
	function check_pass($query, $password) {
		if ($query->num_rows() > 0) {
	
			$result = $query->row_array();
			if ($this->bcrypt->check_password($password, $result['password'])) {
				return $result;
			} else {
				//Wrong password
				return array();
			}
	
		} else {
			return array();
		}
	}
	public function getUesrs()
	{
		// lấy giữ liệu về dạng mảng.
		$data = $this->db->get('users')->result_array();
		return $data;
	}
	public function delete_user($id){
	  $this->db->where('id',$id);
	  $this->db->delete('users');
	  redirect('index.php/product_controller/getuser');
	}
}
