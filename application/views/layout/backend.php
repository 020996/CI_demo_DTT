<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/style1.css">
    <base href="http://localhost/demo_code/index.php/product_controller/">
    <title>Trang quản trị</title>
    <style>
        .menu ul li.anty {
            background-color: #008cba;
        }
        .menu ul li.anty a{
            color: white;
        }
    </style>

</head>
<?php
$s1 = '';
$s2 = '';
$s3 = '';
$s4 = '';
$s5 = '';
switch ($class) {
    case 'one':
        $s1 = 'anty';
        break;
    case 'two':
        $s2 = 'anty';
        break;
    case 'three':
        $s3 = 'anty';
        break;
    case 'four':
        $s4 = 'anty';
        break;
    case 'five':
        $s5 = 'anty';
        break;
}
?>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-left:-15px">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
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
                        <form action="search" method="post" class="form-inline my-2 my-lg-0" style="margin-left:80px">
                            <input class="form-control mr-sm-2" name="search" type="search" required placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
                        </form>
                        <ul class="nav navbar-nav navbar-right" style="margin-left: 40px;">
                            <li><a style="text-decoration: none;" href="<?php echo base_url() ?>index.php/home/logout"><i class="fa fa-sign-out"></i> Đăng xuất</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="col-md-2 menudrop">
                <div class="menu">
                    <ul>
                        <li class="<?php echo $s1 ?>"><a href="product"><i class="fa fa-tachometer"></i> Sản phẩm </a></li>
                        <li class="<?php echo $s2 ?>"><a href="getcate"><i class="fa fa-folder-o"></i> Danh Mục </a></li>
                        <li class="<?php echo $s3 ?>"><a href="comment"><i class="fa fa-comments"></i> Bình luận </a></li>
                        <li class="<?php echo $s4 ?>"><a href="<?php echo base_url() ?>product_controller/getuser"><i class="fa fa-user"></i> Người Dùng </a></li>
                        <li class="<?php echo $s5 ?>"><a href="<?php echo base_url() ?>index.php/product_controller/thongke"><i class="fa fa-calendar-o"></i> Thống kê </a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-10">
                <?php $this->load->view($temp) ?>
            </div>
        </div>
    </div>
    </div>
</body>

</html>