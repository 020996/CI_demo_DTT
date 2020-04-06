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
     <?php $i = 1; ?>
        <?php
        foreach ($info as $key => $val) { ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $val['name'] ?></td>
                <td><?php echo $val['email'] ?></td>
                <td><?php echo $val['password'] ?></td>
                <td><?php if ($val['level'] = 1) {
                        echo 'Admin';
                    } else {
                        echo 'Người dùng';
                    } ?></td>
                <td><a href="<?php echo base_url() ?>index.php/home/delete_user/<?php echo $val['id'] ?>">Xóa</td>
            </tr>
            <?php $i++ ?>
        <?php  } ?>
    </tbody>
</table>