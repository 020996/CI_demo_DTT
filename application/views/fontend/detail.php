<h3>Chi tiết sản phẩm</h3>
<div class="sanpham">
    <div class="row">
        <div class="col-md-4">
            <?php foreach ($detail as $key) { ?>
                <h4 style="text-align: center"><?php echo $key['product_name'] ?></h4>

                <img src="<?php echo base_url() ?>/upload/<?php echo $key['product_image'] ?>" width="200" height="200" style="margin: 20px 0px 0px 35px;">
                <form action="index.php/shoppingcart/shopping" method="post">
                <input type="hidden" name="id" value="<?php echo $key['product_id'] ?>">
                <button style="margin: 40px 0px 0px 66px;" type="submit" class="btn btn-danger" value="submit">Đặt hàng online</button>
                </form>

                <!-- <a href="shoppingcart/shopping/<?php echo $key['product_id'] ?>" type="submit" class="btn btn-danger" value="submit">Đặt hàng online</a> -->

        </div>
        <div class="col-md-4" style="padding-top: 70px">
            <p style="color: red">Giá sản phẩm : <?php echo number_format("$key[product_price]", 0, ",", ".") ?> VNĐ</p>
            <p>Chi tiết sản phẩm : <?php echo $key['product_des'] ?></p>
            <p>Bảo hành : Có bảo hành</p>
            <p>Sản phẩm : Còn hàng</p>
        </div>
    <?php } ?>
    <div class="col-md-4">
        <div class="top" style="height:205px">
            <h4 style="text-align: center">Sản phẩm liên quan</h4>
            <ul>
                <?php foreach ($product as $key) { ?>
                    <li>
                        <a href="index.php/fontend/detail/<?php echo $key['product_cate'] ?>/<?php echo $key['product_id'] ?>">
                            <img src="<?php echo base_url() ?>/upload/<?php echo $key['product_image'] ?>" width="50" height="50">
                            <?php echo $key['product_name'] ?>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </div>
        <div class="buttom" style="height:205px">
            <h4 style="text-align: center">Sản phẩm khác</h4>
            <ul>
                <?php foreach ($khac as $key) { ?>
                    <li>
                        <a href="index.php/fontend/detail/<?php echo $key['product_cate'] ?>/<?php echo $key['product_id'] ?>">
                            <img src="<?php echo base_url() ?>/upload/<?php echo $key['product_image'] ?>" width="50" height="50">
                            <?php echo $key['product_name'] ?>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
    </div>
</div>
</div>