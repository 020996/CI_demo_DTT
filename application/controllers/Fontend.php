<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fontend extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Product_model');
		$this->load->helper('url');
    }
    public function index(){
        $data['product'] = $this->Product_model->getProduct();
        $data['cate'] = $this->Product_model->getCate();
        $data['temp'] ='fontend/index';
        $this->load->view('layout/main',$data);
    }
    public function detail($cate_id,$id){
        $data['temp'] = 'fontend/detail';
        $data['cate'] = $this->Product_model->getCate();
        $data ['product'] = $this->Product_model->getdetailProduct($cate_id,$id);
        $data['detail'] = $this->Product_model->getProductbyid($id);
        $data['khac'] = $this->Product_model->getKhac($cate_id);
        $this->load->view('layout/main',$data);
    }
    public function productbycate($id){
        $data['temp'] = 'fontend/productbycate';
        $data['cate'] = $this->Product_model->getCate();
        $data['catebyid'] = $this->Product_model->catebyid($id);
        $data['product'] = $this->Product_model->getCatebyid($id);
        $this->load->view('layout/main',$data);
    }
}