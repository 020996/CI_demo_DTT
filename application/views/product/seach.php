<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
    <title>Tìm kiếm </title>
    <base href="http://localhost/demo_code/index.php/product_controller/">
    <style>
    .container{
        margin: 100px auto
    }
    </style>
</head>
<body>
    <div class="container">
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
        <?php $i=1; ?>
        <?php  foreach ($search as $key ) { ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $key['product_name'] ?></td>
            <td><?php echo $key['cate_name'] ?></td>
            <td><?php echo $key['product_price'] ?>đ</td>
            <td><img style="width:100px" src="<?php echo base_url() ?>/upload/<?php echo $key['product_image'] ?>"></td>
            <td><?php echo $key['product_des'] ?></td>
            <td><?php echo $key['updated_at'] ?></td>
            <td><a href="addproduct">Thêm</a></td>
            <td><a href="edit_product/<?php echo $key['product_id'] ?>">Sửa</a></td>
            <td><a href="delete_product/<?php echo $key['product_id'] ?>">Xóa</a></td>
        </tr>
        <?php $i++; } ?>
    </tbody>
    </tr>
    </table>
    <a href="product">Quay lại trang sản phẩm</a>
    </div>
</body>
</html>