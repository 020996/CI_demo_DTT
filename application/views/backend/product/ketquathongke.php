<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
    <title>Sản Phẩm</title>
    <style>
        .container {
            margin: 100px auto
        }
        .seach{
            width: 200px;
            margin: 50px auto
        }
    </style>
</head>

<body>
    <div class="container">
        <table class="table table-hover">
            <thead>
                <tr>
                    <td>Stt</td>
                    <td>Email</td>
                    <td>Tên sản phẩm</td>
                    <td>Danh mục sản phẩm</td>
                    <td>Ảnh sản phẩm</td>
                    <td>Thời gian thêm </td>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($data as $key) { ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $key['product_email'] ?></td>
                        <td><?php echo $key['product_name'] ?></td>
                        <td><?php echo $key['cate_name'] ?></td>
                        <td><img style="width:100px" src="<?php echo base_url() ?>/upload/<?php echo $key['product_image'] ?>"></td>
                        <td><?php echo $key['updated_at'] ?></td>
                    </tr>
                <?php $i++;
                } ?>
            </tbody>
            </tr>
        </table>
        <a href="<?php echo base_url() ?>index.php/product_controller/product" style="margin-left: 30px">Quay lại trang sản phẩm</a>
    </div> 