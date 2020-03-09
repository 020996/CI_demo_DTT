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