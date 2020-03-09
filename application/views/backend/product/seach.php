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
        <?php $i = 1; ?>
        <?php foreach ($search as $key) { ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $key['product_name'] ?></td>
                <td><?php echo $key['cate_name'] ?></td>
                <td><?php echo number_format("$key[product_price]", 0, ",", ".") ?> VNĐ</td>
                <td><img style="width:100px" src="<?php echo base_url() ?>/upload/<?php echo $key['product_image'] ?>"></td>
                <td><?php echo $key['product_des'] ?></td>
                <td><?php echo $key['updated_at'] ?></td>
                <td><a href="addproduct">Thêm</a></td>
                <td><a href="edit_product/<?php echo $key['product_id'] ?>">Sửa</a></td>
                <td><a href="delete_product/<?php echo $key['product_id'] ?>">Xóa</a></td>
            </tr>
        <?php $i++;
        } ?>
    </tbody>
    </tr>
</table>