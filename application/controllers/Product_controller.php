<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Product_model');
        $this->load->helper('url');
        $this->load->library('session');
        if(empty($_SESSION['admin'])){
            redirect('home/login', 'refresh');
         }
    }
    public function product()
    {
        $data['info'] = $this->Product_model->getProduct();
        $data['cate'] = $this->Product_model->getCate();
        $this->load->view('product/product_view', $data);
    }
    public function addproduct()
    {
        $cate['cate'] = $this->Product_model->getCate();
        $this->load->view('product/add_product', $cate);
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
        $data['cate'] = $this->Product_model->getCate();
        $data['product'] = $this->Product_model->getProductbyid($id);
        $this->load->view('product/edit_product', $data);
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
        $data['search'] = $this->Product_model->Search($search);
        $this->load->view('product/seach', $data);
    }
    public function thongke()
    {
        $this->load->view('product/thongke');
    }
    public function seachthongke(){
        $batdau = $this->input->post('batdau');
        $ketthuc = $this->input->post('ketthuc');
        $ketqua['data'] = $this->Product_model->seachthongke($batdau,$ketthuc);
        $this->load->view('product/ketquathongke',$ketqua);
    }
    public function getCatebyid($id){
       $cate['product'] = $this->Product_model->getCatebyid($id);
       $this->load->view('product/product_cate',$cate);
    }
    public function Filterproduct(){
      $id = $this->input->post('product_cate');
      $price = $this->input->post('product_price');
      $product['product'] = $this->Product_model->Filterproduct( $id,$price);
      $this->load->view('product/Filterproduct',$product);
    }
}
