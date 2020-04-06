<?php
if (isset($_SESSION['msg'])) { ?>
    <div class="alert alert-success" style="margin-bottom: 15px" role="alert">
        <?php echo $_SESSION['msg'] ?>
    </div>
<?php
}
?>
<form action="index.php/product_controller/seachthongke" method="post" enctype='multipart/form-data' style="width:200px; margin:40px auto">
    <div class="form-group">
        <label>Ngày bắt đầu</label>
        <input type="date" class="form-control" required name="batdau" placeholder="Ngày bắt đầu...">
    </div>
    <div class="form-group">
        <label>Ngày kết thúc</label>
        <input type="date" class="form-control" required name="ketthuc" placeholder="Ngày kết thúc...">
    </div>
    <input type="submit" name="add" value="Thống kê" class="btn btn-primary">
    <a href="index.php/product_controller/index" style="padding: 7px 38px 7px 8px; color:black" class="btn btn-primary">Hủy</a>
</form>