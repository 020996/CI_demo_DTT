<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
    <title>Người Dùng</title>
</head>

<body>

    <div class="container">
        <table class="table table-hover">
            <thead>
                <tr>
                    <td>Stt</td>
                    <td>Tên đăng nhập</td>
                    <td>Email</td>
                    <td>Password</td>
                    <td>Level</td>
                    <td style="width:100px">Xóa tài khoản</td>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($info as $key => $val) { ?>
                    <tr>
                        <td>1</td>
                        <td><?php echo $val['name'] ?></td>
                        <td><?php echo $val['email'] ?></td>
                        <td><?php echo $val['password'] ?></td>
                        <td><?php if ($val['level'] = 1) {
                                echo 'Admin';
                            } else {
                                echo 'Người dùng';
                            } ?></td>
                        <td><a href="delete_user/<?php echo $val['id'] ?>">Xóa</td>
                    </tr>
                <?php
                }
                ?>
                <a href="logout" tyle="margin-left: 15px">Logout</a>
            </tbody>
        </table>
    </div>
</body>