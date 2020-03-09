<table class="table table-hover">
    <thead>
        <tr>
            <td>Stt</td>
            <td>Tên sản phẩm</td>
            <td>Danh mục sản phẩm</td>
            <td>Giá sản phẩm</td>
            <td>Ảnh sản phẩm</td>
            <td>Chi tiết sản phẩm</td>
            <td>Thời gian thêm </td>
            <td colspan="3" style="padding-left: 50px">Thêm sản phẩm</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($info as $key) {
            $stt = $stt + 1; ?>

            <tr>
                <td><?php echo $stt; ?></td>
                <td><?php echo $key['product_name'] ?></td>
                <td><?php echo $key['cate_name'] ?></td>
                <td><?php echo number_format("$key[product_price]", 0, ",", ".") ?> VNĐ</td>
                <td><img style="width:100px" src="<?php echo base_url() ?>/upload/<?php echo $key['product_image'] ?>"></td>
                <td><?php echo $key['product_des'] ?></td>
                <td><?php echo $key['created_at'] ?></td>
                <td><a href="<?php echo base_url() ?>product_controller/addproduct">Thêm</a></td>
                <td><a href="<?php echo base_url() ?>product_controller/edit_product/<?php echo $key['product_id'] ?>">Sửa</a></td>
                <td><a href="<?php echo base_url() ?>product_controller/delete_product/<?php echo $key['product_id'] ?>">Xóa</a></td>
            </tr>
        <?php
        } ?>
    </tbody>
    </tr>
</table>
<?php print_r($pagination) ?>