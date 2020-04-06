<?php
defined('BASEPATH') or exit('No direct script access allowed');

class shoppingcart extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Product_model');
		$this->load->model('Detail_model');
		$this->load->helper('url');
		$this->load->library('session');
	}
	public function giohang()
	{
		$data['temp'] = 'fontend/shopping';
		$data['cate'] = $this->Product_model->getCate();
		$this->load->view('layout/main', $data);
	}
	public function shopping()
	{  
	   $id = $this->input->post('id');
		$data = $this->Product_model->getProductbyid($id);
		$product_name = $data[0]['product_name'];
		$product_price = $data[0]['product_price'];
		$product_image = $data[0]['product_image'];
		$cart[$id] = array(
			'name' => $product_name,
			'price' => $product_price,
			'image' => $product_image,
			'id' => $id,
			"soluong" => 1
		);

		// $this->session->unset_userdata('cart');
		if ($this->session->userdata('cart')) {
			$isKey = array_key_exists($id, $_SESSION['cart']);
			if ($isKey >= 1) {
				$_SESSION['cart'][$id]['soluong'] = $_SESSION['cart'][$id]['soluong'] + 1;
			} else {
				$_SESSION['cart'][$id] = $cart[$id];
			}
		} else {
			$this->session->set_userdata('cart', $cart);
		}
		$tongtatca = 0;
		foreach ($_SESSION['cart'] as $key) {
			$tong = $key['price'] * $key['soluong'];
			$tongtatca += $tong;
		}
		$data['sobital'] = $tongtatca;
		$data['cart'] = $_SESSION['cart'];
		$data['temp'] = 'fontend/shopping';
		$data['cate'] = $this->Product_model->getCate();
		$this->load->view('layout/main', $data);
	}
	public function remove($id)
	{
		if ($_SESSION['cart'][$id]) {
			unset($_SESSION['cart'][$id]);
		}
		redirect('index.php/shoppingcart/giohangremove');
	}
	public function giohangremove()
	{
		$data['temp'] = 'fontend/shopping';
		$data['cart'] = $_SESSION['cart'];
		$tongtatca = 0;
		foreach ($_SESSION['cart'] as $key) {
			$tong = $key['price'] * $key['soluong'];
			$tongtatca += $tong;
		}
		$data['sobital'] = $tongtatca;
		$data['cate'] = $this->Product_model->getCate();
		$this->load->view('layout/main', $data);
	}
	public function deletecart()
	{
		if ($this->session->userdata('cart')) {
			$this->session->unset_userdata('cart'); //hủy secsition,
			redirect('index.php/shoppingcart/giohang');
		}
	}
	public function ajax(){
		// // $id=json_decode($this->input->post('id'),true);
		// $id = $this->input->post('id');
		// $soluong = $this->input->post('soluong');
		// print_r($id);
		// die;
		// $data = $_SESSION['cart'][$id];
		// $this->load->view('fontend/ajax');
		// if (!$this->input->is_ajax_request()) {
		// 	echo 'hihi';
		//  }
		$id =$this->input->get('id');
		$soluong =$this->input->get('soluong');
		$_SESSION['cart'][$id]['soluong'] = $soluong;
		$tong_id=$_SESSION['cart'][$id]['price'] * $soluong;
		$tongtatca= 0;
		foreach ($_SESSION['cart'] as $key) {
			$tong = $key['price'] * $key['soluong'];
			$tongtatca += $tong;
		}
		$data['sobital'] = $tongtatca;
		$data = array(
			'id'=>$id,
			'tong'=>$tong_id,
			'tongtatca'=>$tongtatca,
		);
		
        echo json_encode($data);
	}
	public function checkout(){
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');
		$dress = $this->input->post('dress');
		$cart = $this->session->userdata('cart');
		$day = date('Y-m-d', time());
		$detail_id = $this->Detail_model->checkout($name,$email,$phone,$dress);
		foreach ($cart as $key) {
			$product_id = $key['id'];
			$qty = $key['soluong'];
			$price = $key['price'];
			$tong = $qty*$price;
			$level = 1;
			$this->Detail_model->thanhtoan($detail_id,$product_id,$qty,$price,$tong,$day,$level);
		}
		if ($this->session->userdata('cart')) {
			$this->session->unset_userdata('cart'); //hủy secsition,
			redirect('index.php/shoppingcart/giohang');
			$this->session->set_flashdata('msg', 'Bạn đã đặt sản phẩm thành công');
		}
	}

}