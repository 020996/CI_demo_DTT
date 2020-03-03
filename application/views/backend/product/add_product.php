<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
    <base href="http://localhost/demo_code/index.php/product_controller/">
    <title>Thêm sản phẩm</title>
    <style>
        .container {
            width: 400px;
            margin: 50px auto;
        }
    </style>
</head>

<body>
    <div class="container">
    <?php
       if (isset($_SESSION['msg'])) { ?>
            <div class="alert alert-success" style="margin-bottom: 15px" role="alert">
                <?php echo $_SESSION['msg'] ?>
            </div>
        <?php
        }
        ?>
        <form action="isertaddproduct" method="post" enctype='multipart/form-data'>
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
            <a href="product" style="width: 70px;" class="btn btn-primary">Hủy</a>
        </form>
    </div>
</body>
</html>