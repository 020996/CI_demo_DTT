    <h3>Kết quả tìm kiếm   </h3>
<div class="sanpham">
    <ul>
        <?php
        if (count($product) > 0) {
        ?>
            <?php foreach ($product as $key) { ?>
                <li>
                    <a href="index.php/fontend/detail/<?php echo $key['product_cate'] ?>/<?php echo $key['product_id'] ?>"><img src="<?php echo base_url() ?>/upload/<?php echo $key['product_image'] ?>" width="100" height="100">
                        <p><?php echo $key['product_name'] ?></p>
                        <p style="color: red"><?php echo number_format("$key[product_price]", 0, ",", ".") ?> VNĐ</p>
                        <p> Chi tiết sản phẩm </p>
                    </a>
                </li>
            <?php } ?>
        <?php } else { ?>
            <p style="text-align: center"> Không tìm thấy sản phẩm bạn cần tìm.</p>
        <?php } ?>
    </ul>
</div>