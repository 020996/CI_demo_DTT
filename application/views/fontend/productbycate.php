<?php foreach ($catebyid as $key) { ?>
<h3>Sản phẩm của : <?php echo $key['cate_name'] ?></h3>
<?php } ?>
<div class="sanpham">
    <ul>
        <?php foreach ($product as $key) { ?>
            <li>
                <a href="fontend/detail/<?php echo $key['product_cate'] ?>/<?php echo $key['product_id'] ?>"><img src="<?php echo base_url() ?>/upload/<?php echo $key['product_image'] ?>" width="100" height="100">
                    <p><?php echo $key['product_name'] ?></p>
                    <p style="color: red"><?php echo number_format("$key[product_price]", 0, ",", ".") ?> VNĐ</p>
                    <p> Chi tiết sản phẩm </p>
                </a>
            </li>
        <?php } ?>
    </ul>
</div>