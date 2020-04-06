    <div class="container">
        <?php foreach ($product as $key) { ?>
            <form action="index.php/product_controller/update_product" method="post" enctype='multipart/form-data'>
                <input type="hidden" name="product_id" value="<?php echo $key['product_id'] ?>">
                <div class="form-group">
                    <label>Tên sản phẩm</label>
                    <input type="text" required class="form-control" value="<?php echo $key['product_name'] ?>" name="product_name" placeholder="Tên sản phẩm...">
                </div>
                <div class="form-group">
                    <label>Gía sản phẩm</label>
                    <input type="text" required class="form-control" value="<?php echo $key['product_price'] ?>" name="product_price" placeholder="Gía sản phẩm...">
                </div>
                <div class="form-group">
                    <label>Ảnh sản phẩm</label>
                    <input type="file" required class="form-control" value="" name="product_image" placeholder="Tên sản phẩm...">
                </div>
                <div class="form-group">
                    <label>Chi tiết sản phẩm</label>
                    <input type="text" required class="form-control" value="<?php echo $key['product_des'] ?>" name="product_des" placeholder="Tên sản phẩm...">
                </div>
                <div class="form-group">
                    <label>Danh mục</label>
                    <select name="product_cate">
                        <?php foreach ($cate as $key) { ?>
                            <option value="<?php echo $key['cate_id'] ?>"><?php echo $key['cate_name']  ?></option>
                        <?php } ?>
                    </select>
                </div>
                <input type="submit" name="edit" value="Sửa" class="btn btn-primary">
                <a href="index.php/product_controller/product" style="color: black;" class="btn btn-primary">Hủy</a>
            <?php } ?>
            </form>
    </div>