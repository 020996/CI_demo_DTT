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
            margin :-90px 0px -46px 895px
        }
        .menu ul{
            margin:0x;
            padding: 0px;
            list-style: none;
        }
        .menu ul li{
            list-style: none;
            float: left;
            margin: 0px 25px 20px 15px
        }
        .menu ul li a{
            text-decoration: none;
            color: blueviolet;
        }
        .menu ul li a:hover{
            color: red;
        }
    </style>
</head>
 
<body>
    <div class="container">
    <div class="alert">
        <?php
        if (isset($_SESSION['msg'])) { ?>
            <div class="alert alert-success" style="margin-top: -112px" role="alert">
                <?php echo $_SESSION['msg'] ?>
            </div>
        <?php
        }
        ?>
        </div>
        <div class="seach">
        <form class="navbar-form navbar-left" action="search" method="post">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search" name="search">
                <div class="input-group-btn">
                    <button class="btn btn-default" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
        <div class="menu">
        <ul>
        <?php foreach ($cate as $key) { ?>
            <li><a href="getCatebyid/<?php echo $key['cate_id'] ?>"><?php echo $key['cate_name'] ?><a></li>
        <?php } ?>
        </ul>
        </div>
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
                <?php $i = 1; ?>
                <?php foreach ($info as $key) { ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $key['product_name'] ?></td>
                        <td><?php echo $key['cate_name'] ?></td>
                        <td><?php echo $key['product_price']  ?>đ</td>
                        
                        <td><img style="width:100px" src="<?php echo base_url() ?>/upload/<?php echo $key['product_image'] ?>"></td>
                        <td><?php echo $key['product_des'] ?></td>
                        <td><?php echo $key['created_at'] ?></td>
                        <td><a href="addproduct">Thêm</a></td>
                        <td><a href="edit_product/<?php echo $key['product_id'] ?>">Sửa</a></td>
                        <td><a href="delete_product/<?php echo $key['product_id'] ?>">Xóa</a></td>
                    </tr>
                <?php $i++;
                } ?>
            </tbody>
            </tr>
        </table>
        <a href="<?php echo base_url() ?>index.php/home/logout" style="margin-left: 15px">Logout</a>
        <a href="<?php echo base_url() ?>index.php/product_controller/thongke" style="margin-left: 30px">Thống kê</a>
    </div> 