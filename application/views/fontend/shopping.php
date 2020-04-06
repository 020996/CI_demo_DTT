<h3>Giỏ hàng của bạn</h3>
<script type="text/javascript">
    function updateCart(quantity, id) {
        //    $.ajax({
        // 	   type: "post",
        // 	   url: "<?php echo base_url() ?>" + "shoppingcart/ajax",
        //        data : {"id" : id, "soluong" : quantity},
        // 	   dataType: "json",
        // 	   success: function (response) {
        // 		   location.reload;
        // 	   }
        //    });
        $.get(
            '<?php echo base_url() ?>index.php/shoppingcart/ajax', {
                id: id,
                soluong: quantity
            },
            function(response) {
                // var tong = Intl.NumberFormat(response);
                var obj = JSON.parse(response);
                var sobital = obj['tongtatca'];
                var sobit = obj['tong'];
                var id = obj['id'];
               
                var n = (new Intl.NumberFormat('de-DE', {
                    style: 'currency',
                    currency: 'VND'
                }).format(sobital));
                var x = (new Intl.NumberFormat('de-DE', {
                    style: 'currency',
                    currency: 'VND'
                }).format(sobit));
                $('.tonghoadon').html(n);
                $('#thanhtien'+id).html(x);
            }
        )
    }
</script>
<?php
       if (isset($_SESSION['msg'])) { ?>
            <div class="alert alert-success" style="margin-bottom: -40px" role="alert">
                <?php echo $_SESSION['msg'] ?>
            </div>
        <?php
        }
        ?>
<?php
if (empty($_SESSION['cart'])) { ?>
    <p>Giỏ hàng của bạn rỗng</p>
<?php } else { ?>
    <table class="table table-hover">
        <thead>
            <tr>
                <td>Stt</td>
                <td>Ảnh sản phẩm</td>
                <td>Tên sản phẩm</td>
                <td>Số lượng</td>
                <td>Đơn giá</td>
                <td>Thành tiền</td>
                <td style="padding-left: 50px">Xóa</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cart as $key) {
            ?>
                <tr>
                    <td>1</td>
                    <td><img style="width:100px" src="<?php echo base_url() ?>/upload/<?php echo $key['image'] ?>"></td>
                    <td><?php echo $key['name'] ?></td>
                    <td>
                        <input type="number" class="form-control form-control-sm" value="<?php echo $key['soluong'] ?>" onchange="updateCart(this.value,<?php echo $key['id'] ?>)">
                    </td>
                    <td><?php echo number_format("$key[price]", 0, ",", ".") ?> VNĐ</td>
                    <!-- <td id="thanhtien<?php echo $key['id'] ?> "><?php echo $key['soluong'] * $key['price'] ?> VNĐ</td> -->
                    <td><div id="thanhtien<?php echo $key['id'] ?>"><?php echo $key['soluong'] * $key['price'] ?> đ</div></td>
                    <td><a href="<?php echo base_url() ?>index.php/shoppingcart/remove/<?php echo $key['id'] ?>">Xóa</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <a href="<?php echo base_url() ?>index.php/shoppingcart/deletecart" class="btn btn-danger" style="margin: 0px 0px -38px 710px;">Xóa giỏ hàng</a>
    <div style="padding-left: 20px"><b>Tổng hóa đơn : <p class="tonghoadon"><?php echo number_format("$sobital", 0, ",", ".") ?>đ</p></b></div>
    <div id="xac-nhan" style="margin: 0px auto; width:600px">
        <h3>Xác nhận mua hàng</h3>
        <form method="POST" action="index.php/shoppingcart/checkout">
            <div class="form-group">
                <label for="email">Email address:</label>
                <input required type="email" class="form-control" name="email">
            </div>
            <div class="form-group">
                <label for="name">Họ và tên:</label>
                <input required type="text" class="form-control"  name="name">
            </div>
            <div class="form-group">
                <label for="phone">Số điện thoại:</label>
                <input required type="number" class="form-control"  name="phone">
            </div>
            <div class="form-group">
                <label for="dress">Địa chỉ:</label>
                <input required type="text" class="form-control" name="dress">
            </div>
            <div class="form-group text-right">
                <button type="submit" class="btn btn-default">Thực hiện đơn hàng</button>
            </div>
        </form>
    </div>
<?php } ?>