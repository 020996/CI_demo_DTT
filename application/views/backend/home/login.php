<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
    <title>Login</title>
    <style>
        .container {
            margin: 100px auto;
            width: 470px;
            border: 1px solid black;
            height: 280px;
            border-radius: 20px
        }

        .form {
            margin-top: 40px
        }
    </style>
</head>

<body>
    <div class="container">
        <?php
       if (isset($_SESSION['msg'])) { ?>
            <div class="alert alert-success" style="margin-bottom: -40px" role="alert">
                <?php echo $_SESSION['msg'] ?>
            </div>
        <?php
        }
        ?>
        <form action="check" method="post">
            <div class="form">
                <div class="form-group">
                    <label>Tên đăng nhập</label>
                    <input type="email" class="form-control" required name="email" placeholder="email đăng nhập...">
                </div>
                <div class="form-group">
                    <label>Mật khẩu</label>
                    <input type="password" class="form-control" required name="password" placeholder="Nhập mật khẩu...">
                </div>
                <button type="submit" name="login" class="btn btn-primary">Đăng nhập</button>
                <a href="registration" style="width:103px" class="btn btn-primary">Đăng ký</a>
            </div>
        </form>
    </div>
</body>

</html>