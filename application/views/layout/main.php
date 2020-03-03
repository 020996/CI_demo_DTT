<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
     
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
    <base href="<?php echo base_url() ?>">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Web bán hàng</title>
</head>

<body>
    <div class="container">
        <div class="wapper">
            <div class="header">
                <?php $this->load->view('layout/header'); ?>
            </div>
            <div class="menu">
                <?php $this->load->view('layout/menu'); ?>
            </div>
            <div class="content">
                <div class="left">
                    <?php $this->load->view('layout/left'); ?>
                </div>
                <div class="right">
                    <?php $this->load->view($temp); ?>
                </div>
            </div>
            <div class="footer">
                <?php $this->load->view('layout/footer'); ?>
            </div>
        </div>
    </div>
</body>

</html>