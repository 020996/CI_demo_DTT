
<table class="table table-hover">
    <thead>
        <tr>
            <td>Stt</td>
            <td>Tên người đặt</td>
            <td>Email</td>
            <td>Số điện thoại</td>
            <td>Địa chỉ người đặt</td>
            <td>Tên sản phẩm</td>
            <td>Số lượng</td>
            <td>Giá sản phẩm</td>
            <td>Tổng phải trả</td>
            <td>Ngày đặt</td>
            <td><button class="btn btn-danger delete">xóa</button><div><input onclick="ckeckall()" type="checkbox" style="margin-left: 10px" class="all_ckeckbox"></div></td>
        </tr>
    </thead>
    <tbody>
        <?php $stt = 1 ?>
        <?php foreach ($bill as $key) { ?>
            <tr>
                <td><?php echo $stt; ?></td>
                <td><?php echo $key['name'] ?></td>
                <td><?php echo $key['email'] ?></td>
                <td><?php echo $key['phone'] ?></td>
                <td><?php echo $key['dress'] ?></td>
                <td><?php echo $key['product_name'] ?></td>
                <td><?php echo $key['soluong'] ?></td>
                <td><?php echo number_format("$key[product_price]", 0, ",", ".") ?> VNĐ</td>
                <td><?php echo number_format("$key[tong]", 0, ",", ".") ?> VNĐ</td>
                <td><?php echo $key['dayadd'] ?></td>
                <!-- <td><a href="index.php/product_controller/deletebill/<?php echo $key['detail_bill_id'] ?>">Xóa</a></td> -->
                <td><input style="margin-left: 10px" type="checkbox" id="checkbox_bill" name="checkbox_bill" value="<?php echo $key['detail_bill_id'] ?>"></td>
            </tr>
            <?php $stt++ ?>
        <?php } ?>
    </tbody>
    </tr>
</table>
