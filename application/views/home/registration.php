<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
    <title>Đăng ký</title>
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
        <form action="" method="post" enctype='multipart/form-data'>
            <div class="form-group">
                <label>Tên đăng nhập</label>
                <input type="text" class="form-control" required name="name" placeholder="Tên đăng nhập...">
            </div>
            <div class="form-group">
                <label>Mail</label>
                <input type="text" class="form-control" required name="mail" placeholder="Mail...">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="text" class="form-control" required name="password" placeholder="Password...">
            </div>
            <div class="form-group">
                <label>Level</label>
                <select name="level">
                    <option value="1">Admin</option>
                    <option value="2">Người dùng</option>
                </select>
            </div>
            <button type="submit" name="add" class="btn btn-primary">Thêm</button>
            <a href="login" style="width:67px;" class="btn btn-primary">Hủy</a>
        </form>
    </div>
</body>

</html>