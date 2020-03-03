<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
    <title>Sửa sản phẩm</title>
    <base href="http://localhost/demo_code/index.php/product_controller/">
    <style>
        .container {
            width: 400px;
            margin: 50px auto;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php foreach ($product as $key) { ?>
            <form action="update_product" method="post" enctype='multipart/form-data'>
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
                <input type="submit" name="edit" value="Sửa"  class="btn btn-primary">
                <a href="product" class="btn btn-primary">Hủy</a>
            <?php } ?>
            </form>
    </div>
</body>

</html>