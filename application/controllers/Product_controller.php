<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Product_model');
        $this->load->model('Uers_model');
        $this->load->model('Detail_model');
        $this->load->helper('url');
        $this->load->library('session');
        if (empty($_SESSION['admin'])) {
            redirect('index.php/home/login', 'refresh');
        }
    }
    public function index()
    { 
        $data['admin'] = $this->session->userdata('admin');
        $data['temp'] = 'backend/index';
        $data['class'] = 'zero';
        $data['span'] = $this->Detail_model->getlevel();
        $data['cate'] = $this->Product_model->getCate();
        $this->load->view('layout/backend', $data);
    }
    public function getuser()

    {
        $data['class'] = 'four';
        $data['admin'] = $this->session->userdata('admin');
        $data['temp'] = 'backend/home/user';
        $data['span'] = $this->Detail_model->getlevel();
        $data['info'] = $this->Uers_model->getUesrs();
        $data['cate'] = $this->Product_model->getCate();
        $this->load->view('layout/backend', $data);
    }
    public function getCate()
    {
        $data['class'] = 'one';
        $data['admin'] = $this->session->userdata('admin');
        $data['span'] = $this->Detail_model->getlevel();
        $data['temp'] = 'backend/category/cate';
        $data['cate'] = $this->Product_model->getCate();
        $this->load->view('layout/backend', $data);
    }
    public function bill()
    {
        $data['class'] = 'three';
        $data['admin'] = $this->session->userdata('admin');
        $data['span'] = $this->Detail_model->getlevel();
        $data['temp'] = 'backend/bill/bill';
        $data['cate'] = $this->Product_model->getCate();
        $data['bill'] = $this->Detail_model->getbill();
        $this->load->view('layout/backend', $data);
    }
    public function product()
    {
        $data['class'] = 'two';
        $data['admin'] = $this->session->userdata('admin');
        $data['span'] = $this->Detail_model->getlevel();
        $data['temp'] = 'backend/product/product_view';
        $data['cate'] = $this->Product_model->getCate();
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'index.php/product_controller/product';
        $config['total_rows'] = $this->Product_model->countProduct();
        $config['per_page'] = 5;
        $config['num_links'] = 3;
        $config["uri_segment"] = 3;
        $config['use_page_numbers'] = TRUE;
        $config['reuse_query_string'] = TRUE;
        $config['full_tag_open'] = "<ul class='pagination phantrang' >";
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="index.php/product_controller/product">';
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
        if ($this->uri->segment(3) > 0 && $this->uri->segment(3) < $config['total_rows'] && ($this->uri->segment(3) * $config['per_page'] - $config['per_page']) < $config['total_rows']) {
            $offset = $this->uri->segment(3) * $config['per_page'] - $config['per_page'];
        } else {
            $offset = 0;
        }
        $data['stt'] = $offset;
        $data['pagination'] = $this->pagination->create_links();
        $data['info'] = $this->Product_model->getProduct($config['per_page'], $offset);
        $this->load->view('layout/backend', $data);
    }
    public function addproduct()
    {
        $data['class'] = 'two';
        $data['admin'] = $this->session->userdata('admin');
        $data['span'] = $this->Detail_model->getlevel();
        $data['temp'] = 'backend/product/add_product';
        $data['cate'] = $this->Product_model->getCate();
        $data['bill'] = $this->Detail_model->getbill();
        $this->load->view('layout/backend', $data);
    }
    public function isertaddproduct()
    {
        if ($this->input->post('add')) {
            $product_email = $_SESSION['admin'];
            $product_name = $this->input->post('product_name');
            $product_price = $this->input->post('product_price');
            $product_des = $this->input->post('product_des');
            $product_cate = $this->input->post('product_cate');
            if (!empty($_FILES['product_image']['name'])) {
                $config['upload_path'] = './upload/';
                $config['allowed_types'] = 'gif|jpg|png';
                $this->load->library('upload', $config);
                $this->upload->do_upload('product_image');
            }
            $product_image = $this->upload->data('file_name');
            $this->Product_model->addProduct($product_name, $product_price, $product_image, $product_des, $product_cate, $product_email);
            $this->session->set_flashdata('msg', 'Bạn đã thêm sản phẩm thành công');
            redirect('index.php/product_controller/product');
        }
    }
    public function delete_product($id)
    {
        $this->Product_model->delete_product($id);
        $this->session->set_flashdata('msg', 'Bạn đã xóa sản phẩm thành công');
        redirect('index.php/product_controller/product');
    }
    public function edit_product($id)
    {
        $data['class'] = 'two';
        $data['admin'] = $this->session->userdata('admin');
        $data['span'] = $this->Detail_model->getlevel();
        $data['temp'] = 'backend/product/edit_product';
        $data['cate'] = $this->Product_model->getCate();
        $data['bill'] = $this->Detail_model->getbill();
        $data['product'] = $this->Product_model->getProductbyid($id);
        $this->load->view('layout/backend', $data);
    }
    public function update_product()
    {
        $product_name = $this->input->post('product_name');
        $product_price = $this->input->post('product_price');
        $product_des = $this->input->post('product_des');
        $product_cate = $this->input->post('product_cate');
        if (!empty($_FILES['product_image']['name'])) {
            $config['upload_path'] = './upload/';
            $config['allowed_types'] = 'gif|jpg|png';
            $this->load->library('upload', $config);
            $this->upload->do_upload('product_image');
        }
        $product_image = $this->upload->data('file_name');
        $product_id = $this->input->post('product_id');
        $this->Product_model->update_productbyid($product_name, $product_price, $product_image, $product_des, $product_cate, $product_id);
        $this->session->set_flashdata('msg', 'Bạn đã sửa sản phẩm thành công');
        redirect('index.php/product_controller/product');
    }
    public function search()
    {
        $search = $this->input->post('search');
        $data['class'] = '0';
        $data['admin'] = $this->session->userdata('admin');
        $data['span'] = $this->Detail_model->getlevel();
        $data['search'] = $this->Product_model->Search($search);
        $data['temp'] = 'backend/product/seach';
        $data['cate'] = $this->Product_model->getCate();
        $this->load->view('layout/backend', $data);
    }
    public function thongke()
    {
        $data['class'] = 'five';
        $data['admin'] = $this->session->userdata('admin');
        $data['span'] = $this->Detail_model->getlevel();
        $data['temp'] = 'backend/product/thongke';
        $data['cate'] = $this->Product_model->getCate();
        $this->load->view('layout/backend', $data);
    }
    public function seachthongke()
    {
        $batdau = $this->input->post('batdau');
        $ketthuc = $this->input->post('ketthuc');
        $data['class'] = '0';
        $data['admin'] = $this->session->userdata('admin');
        $data['span'] = $this->Detail_model->getlevel();
        $data['data'] = $this->Product_model->seachthongke($batdau, $ketthuc);
        $data['temp'] = 'backend/product/ketquathongke';
        $data['cate'] = $this->Product_model->getCate();
        $this->load->view('layout/backend', $data);
    }
    public function getCatebyid($id)
    {
        $cate['product'] = $this->Product_model->getCatebyid($id);
        $this->load->view('backend/product/product_cate', $cate);
    }
    public function Filterproduct()
    {
        $id = $this->input->post('product_cate');
        $price = $this->input->post('product_price');
        $data['class'] = '0';
        $data['admin'] = $this->session->userdata('admin');
        $data['span'] = $this->Detail_model->getlevel();
        $data['product'] = $this->Product_model->Filterproduct($id, $price);
        $data['temp'] = 'backend/product/Filterproduct';
        $data['cate'] = $this->Product_model->getCate();
        $this->load->view('layout/backend', $data);
    }
    public function deletebill($id)
    {
        $this->Detail_model->deletebill($id);
        redirect('index.php/product_controller/bill');
    }
    public function updatelevel()
    {
        $this->Detail_model->updatelevel();
    }
    public function delete_bill(){
        $id = $this->input->post('chon');
        // $sql="SELECT * FROM savsoft_news WHERE id in ($list_id)";
        $list_id = implode(', ', (array)$id);
        $true =  $this->Detail_model->delete_bill($list_id);
       echo $true;
    }
}
