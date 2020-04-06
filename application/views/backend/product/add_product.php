
    <div class="container">
    <?php
       if (isset($_SESSION['msg'])) { ?>
            <div class="alert alert-success" style="margin-bottom: 15px" role="alert">
                <?php echo $_SESSION['msg'] ?>
            </div>
        <?php
        }
        ?>
        <form action="index.php/product_controller/isertaddproduct" method="post" enctype='multipart/form-data'>
            <div class="form-group">
                <label>Tên sản phẩm</label>
                <input type="text" class="form-control" required name="product_name" placeholder="Tên sản phẩm...">
            </div>
            <div class="form-group">
                <label>Giá sản phẩm</label>
                <input type="text" class="form-control" required name="product_price" placeholder="Giá sản phẩm...">
            </div>
            <div class="form-group">
                <label>Ảnh sản phẩm</label>
                <input type="file" class="form-control" required name="product_image" placeholder="Ảnh sản phẩm...">
              
            </div>
            <div class="form-group">
                <label>Chi tiết sản phẩm</label>
                <input type="text" class="form-control" required name="product_des" placeholder="Tên sản phẩm...">
            </div>
            <div class="form-group">
                <label>Danh mục</label>
                <select name="product_cate">
                <?php  foreach ($cate as $key ) { ?>
                    <option value="<?php echo $key['cate_id'] ?>"><?php echo $key['cate_name']  ?></option>
                <?php } ?>
                </select>
            </div>
            <input type="submit" name="add" value="Thêm" class="btn btn-primary">
            <a href="index.php/product_controller/product" style="width: 70px; color: black" class="btn btn-primary">Hủy</a>
        </form>
    </div>