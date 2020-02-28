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
    <title>Thống kê thêm sản phẩm</title>
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
        <form action="seachthongke" method="post" enctype='multipart/form-data'>
            <div class="form-group">
                <label>Ngày bắt đầu</label>
                <input type="date" class="form-control" required name="batdau" placeholder="Ngày bắt đầu...">
            </div>
            <div class="form-group">
                <label>Ngày kết thúc</label>
                <input type="date" class="form-control" required name="ketthuc" placeholder="Ngày kết thúc...">
            </div>
            <input type="submit" name="add" value="Thống kê" class="btn btn-primary">
            <a href="product" style="width: 100px;" class="btn btn-primary">Hủy</a>
        </form>
    </div>
</body>
</html>