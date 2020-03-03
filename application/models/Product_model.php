<?php
class Product_model extends CI_Model
{
    public    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function getProduct()
    {
        $this->db->join('category', 'category.cate_id = product.product_cate', 'left');
        $data = $this->db->get('product')->result_array();

        return $data;
    }
    public function getCate()
    {
        $data = $this->db->get('category')->result_array();
        return $data;
    }
    public function addProduct($product_name, $product_price, $product_image, $product_des, $product_cate, $product_email)
    {
        $data = array(
            'product_name' => $product_name,
            'product_price' => $product_price,
            'product_image' => $product_image,
            'product_des' => $product_des,
            'product_cate' => $product_cate,
            'product_email' => $product_email,
        );
        $this->db->insert('product', $data);
    }
    public function delete_product($id)
    {
        $this->db->where('product_id', $id);
        $this->db->delete('product');
    }
    public function getProductbyid($id)
    {
        $this->db->where('product_id', $id);
        $data = $this->db->get('product')->result_array();
        return $data;
    }
    public function update_productbyid($product_name, $product_price, $product_image, $product_des, $product_cate, $product_id)
    {
        $this->db->where('product_id', $product_id);
        $data = array(
            'product_name' => $product_name,
            'product_price' => $product_price,
            'product_image' => $product_image,
            'product_des' => $product_des,
            'product_cate' => $product_cate,
        );
        $this->db->update('product', $data);
    }
    public function Search($search)
    {
        $this->db->select('product_id, product_name, product_cate, product_image , cate_name , product_price , product_des,updated_at');
        $this->db->from('product');
        $this->db->join('category', 'cate_id = product_cate', 'inner');
        $this->db->where("product_name LIKE '%$search%' OR cate_name LIKE '%$search%'");
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function seachthongke($batdau, $ketthuc)
    {
        $this->db->where('updated_at >=', $batdau);
        $this->db->where('updated_at <=', $ketthuc);
        $this->db->join('category', 'category.cate_id = product.product_cate', 'left');
        $data = $this->db->get('product')->result_array();
        return $data;
    }
    public function getCatebyid($id)
    {
        $this->db->where('product_cate', $id);
        $cate = $this->db->get('product')->result_array();
        return $cate;
    }
    public function Filterproduct($id, $price)
    {
        switch ($price) {
            case '1':
                $batdau = 10000000;
                $ketthuc = 100000000;
                break;
            case '2':
                $batdau = 6000000;
                $ketthuc = 10000000;
                break;
            case '3':
                $batdau = 4000000;
                $ketthuc = 6000000;
                break;
            case '4':
                $batdau = 0;
                $ketthuc = 4000000;
            default:
                break;
        }
        $this->db->where('product_cate', $id);
        $this->db->where('product_price >=', $batdau);
        $this->db->where('product_price <=', $ketthuc);
        $product = $this->db->get('product')->result_array();
        // $sql ="SELECT * FROM product WHERE product_cate = $id AND product_price >=$batdau AND product_price <= $ketthuc";
        // $query = $this->db->query($sql);
        // if($query->num_rows()>0){
        //     $data = $query->result_array();
        // } else{
        //     $data = '';
        // }
        return $product;
    }
    public function getdetailProduct($cate_id, $id)
    {   
        // $sql ="SELECT * FROM product WHERE  product_cate = $cate_id AND NOT product_id=$id;"
        $this->db->where('product_cate', $cate_id);
        $this->db->where_not_in('product_id', $id);
        $this->db->limit(2);
        $data = $this->db->get('product')->result_array();
        return $data;
    }
    public function getKhac($cate_id){
        $this->db->where_not_in('product_cate', $cate_id);
        $this->db->limit(2);
        $data = $this->db->get('product')->result_array();
        return $data;
    }
    public function catebyid($id){
        $this->db->where('cate_id',$id);
        $data = $this->db->get('category')->result_array();
        return $data;
    }
}
