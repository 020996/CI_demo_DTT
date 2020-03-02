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

        .menu ul {
            margin: 0x;
            padding: 0px;
            list-style: none;
        }

        .menu ul li {
            list-style: none;
            float: left;
            margin: 0px 25px 20px 15px
        }

        .menu ul li a {
            text-decoration: none;
            color: blueviolet;
        }

        .menu ul li a:hover {
            color: red;
        }

        .locsp {
            margin: 20px 0px 0px 20px;
        }

        .locsp select {
            height: 38px;
        }
    </style>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-top: -40px">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand"> Duyệt sản phẩm </a>
                <form action="Filterproduct" method="post">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <div class="locsp">
                            <li class="nav-item">
                                <div class="form-group">
                                    <label>Sản phẩm :</label>
                                    <select name="product_cate">
                                        <?php foreach ($cate as $key) { ?>
                                            <option value="<?php echo $key['cate_id'] ?>"><?php echo $key['cate_name']  ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </li>
                        </div>
                        <div class="locsp">
                            <li class="nav-item">
                                <div class="form-group">
                                    <label>Giá sản phẩm :</label>
                                    <select class="browser-default custom-select" name="product_price">
                                        <option value="1">Trên 10 triệu</option>
                                        <option value="2">Từ 10 - 6 triệu </option>
                                        <option value="3">Từ 6 - 4 triệu </option>
                                        <option value="4">Dưới 4 triệu</option>
                                    </select>
                                </div>
                            </li>
                        </div>
                        <div class="locsp">
                            <li class="nav-item">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
                            </li>
                        </div>
                    </ul>
                </form>
                <form action="search" method="post" class="form-inline my-2 my-lg-0" style="margin-left: 120px">
                    <input class="form-control mr-sm-2" name="search" type="search" required placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </nav>
        <div class="alert">
            <?php
            if (isset($_SESSION['msg'])) { ?>
                <div class="alert alert-success" style="margin-top: -160px" role="alert">
                    <?php echo $_SESSION['msg'] ?>
                </div>
            <?php
            }
            ?>
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
                        <td><?php echo $key['product_price'] ?>đ</td>
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