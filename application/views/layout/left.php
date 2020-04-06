<h3>Danh mục </h3>
<ul>
    <?php foreach ($cate as $key) { ?>
        <li><a href="index.php/fontend/productbycate/<?php echo $key['cate_id'] ?>"><?php echo $key['cate_name'] ?></a></li>
    <?php } ?>

</ul>