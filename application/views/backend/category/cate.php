<table class="table table-hover">
    <thead>
        <tr>
            <td>Stt</td>
            <td>Danh mục sản phẩm</td>
            <td colspan="3" style="padding-left: 50px">Thêm danh mục sản phẩm</td>
        </tr>
    </thead>
    <tbody>
        <?php $stt = 1?>
        <?php foreach ($cate as $key) { ?>
            <tr>
                <td><?php echo $stt; ?></td>
                <td><?php echo $key['cate_name'] ?></td>
                <td><a href="#">Thêm</a></td>
                <td><a href="#">Sửa</a></td>
                <td><a href="#">Xóa</a></td>
            </tr>
            <?php $stt++ ?>
        <?php } ?>
    </tbody>
    </tr>
</table>
