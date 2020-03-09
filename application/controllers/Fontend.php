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
    public function index()

    {   $this->load->library('pagination');
        $config['base_url'] = base_url() . '/fontend/index';
        $config['total_rows'] = $this->Product_model->countProduct();
        $config['per_page'] = 10;
        $config['num_links'] = 3;
        $config["uri_segment"] = 3;
        $config['use_page_numbers'] = TRUE;
        $config['reuse_query_string'] = TRUE;
        $config['full_tag_open'] = "<ul class='pagination phantrang' >";
		$config['full_tag_close'] = '</ul>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="fontend/index/">';
		$config['cur_tag_close'] = '</a></li>';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['prev_link'] = '<i class="fa"></i><<';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';

		$config['next_link'] = '>> <i class="fa"></i>';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
        $this->pagination->initialize($config);
        if ($this->uri->segment(3) > 0 && $this->uri->segment(3) < $config['total_rows'] && ($this->uri->segment(3) * $config['per_page'] - $config['per_page'])< $config['total_rows']) {
            $offset = $this->uri->segment(3) * $config['per_page'] - $config['per_page'];
        } else {
            $offset = 0;
        }
        $data['stt'] = $offset;
        $data['pagination'] = $this->pagination->create_links();
        $data['cate'] = $this->Product_model->getCate();
        $data['product'] = $this->Product_model->getProduct($config['per_page'],$offset);
        $data['temp'] = 'fontend/index';
        $this->load->view('layout/main', $data);
    }
    public function detail($cate_id, $id)
    {
        $data['temp'] = 'fontend/detail';
        $data['cate'] = $this->Product_model->getCate();
        $data['product'] = $this->Product_model->getdetailProduct($cate_id, $id);
        $data['detail'] = $this->Product_model->getProductbyid($id);
        $data['khac'] = $this->Product_model->getKhac($cate_id);
        $this->load->view('layout/main', $data);
    }
    public function productbycate($id)
    {
        $data['temp'] = 'fontend/productbycate';
        $data['cate'] = $this->Product_model->getCate();
        $data['catebyid'] = $this->Product_model->catebyid($id);
        $data['product'] = $this->Product_model->getCatebyid($id);
        $this->load->view('layout/main', $data);
    }
    public function search()
    {
        $id = $this->input->post('product_cate');
        $price = $this->input->post('product_price');
        $data['cate'] = $this->Product_model->getCate();
        $data['product'] = $this->Product_model->Filterproduct($id, $price);
        $data['temp'] = 'fontend/search';
        $this->load->view('layout/main', $data);
    }
    public function searchall(){
        $search = $this->input->post('search');
        $data['cate'] = $this->Product_model->getCate();
        $data['search'] = $this->Product_model->Search($search);
        $data['temp'] = 'fontend/searchall';
        $this->load->view('layout/main', $data);
    }
}
