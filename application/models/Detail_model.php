<?php
class Detail_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function checkout($name,$email,$phone,$dress){
        $data = array(
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'dress' => $dress,
        );
        $this->db->insert('detail', $data);
        return $this->db->insert_id();
        
    }
    public function thanhtoan($detail_id,$product_id,$qty,$price,$tong,$day,$level){
        $data = array(
            'detail_id' => $detail_id,
            'product_id' => $product_id,
            'soluong' => $qty,
            'product_price' => $price,
             'tong' => $tong,
             'dayadd'=>$day,
             'level' =>$level,
        );
        $this->db->insert('detail_bill', $data);
    }
    public function getbill(){
       $this->db->join('detail', 'detail.id = detail_bill.detail_id', 'left');
       $this->db->join('product', 'product.product_id = detail_bill.product_id', 'left');
       return $this->db->get('detail_bill')->result_array();
    }
    public function deletebill($id){
        $this->db->where('detail_bill_id',$id);
        $this->db->delete('detail_bill');
    }
    public function updatelevel(){
        $data = array(
          'level' => 2,
        );
        $this->db->update('detail_bill', $data);

    }
    public function getlevel(){
        $level = 1;
        $this->db->where('level',$level);
        $data = $this->db->get('detail_bill')->result_array();
        return count($data);
    }
    public function delete_bill($list_id){
        $sql = "DELETE FROM detail_bill WHERE detail_bill_id IN ($list_id) ";
         $query=$this->db->query($sql);
         return "Xóa thành công";
    }
}
