<nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a href="index.php/fontend/index" class="navbar-brand" style="border-radius: 10px;">Trang chủ</a>
                <form action="index.php/fontend/search" method="post">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <div class="locsp">
                            <li class="nav-item">
                                <div class="form-group">
                                    <label>Sản phẩm :</label>
                                    <select name="product_cate">
                                        <?php foreach ($cate as $key) { ?>
                                            <option value="<?php echo $key['cate_id'] ?>"><?php echo $key['cate_name']  ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </li>
                        </div>
                        <div class="locsp">
                            <li class="nav-item">
                                <div class="form-group">
                                    <label>Giá sản phẩm :</label>
                                    <select class="browser-default custom-select" name="product_price">
                                        <option value="1">Trên 10 triệu</option>
                                        <option value="2">Từ 10 - 6 triệu </option>
                                        <option value="3">Từ 6 - 4 triệu </option>
                                        <option value="4">Dưới 4 triệu</option>
                                    </select>
                                </div>
                            </li>
                        </div>
                        <div class="locsp">
                            <li class="nav-item">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
                            </li>
                        </div>
                    </ul>
                </form>
                <form action="index.php/fontend/searchall" method="post" class="form-inline my-2 my-lg-0" style="margin-left: 170px">
                    <input class="form-control mr-sm-2" name="search" type="search" required placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </nav>