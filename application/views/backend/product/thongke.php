<?php
if (isset($_SESSION['msg'])) { ?>
    <div class="alert alert-success" style="margin-bottom: 15px" role="alert">
        <?php echo $_SESSION['msg'] ?>
    </div>
<?php
}
?>
<form action="seachthongke" method="post" enctype='multipart/form-data' style="width:200px; margin:40px auto">
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