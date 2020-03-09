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
    <style>
        .search a:hover {
            background-color: greenyellow;
        }

        .locsp {
            margin: 20px 0px 0px 20px;
        }

        .locsp select {
            height: 38px;
            background-size: 8px 10px;
            border: 1px solid #ced4da;
            border-radius: .25rem;
        }

        ul.pagination.phantrang {
            clear: both;
            padding-left: 380px;
            padding-top: 10px
        }

        ul.pagination.phantrang li {
            border: 1px solid;
            padding: 3px 8px;
            border-radius: 5px;
            margin: 3px;
            height: 30px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="search">
            <?php $this->load->view('layout/search'); ?>
        </div>
        <div class="wapper">
            <div class="header">
                <?php $this->load->view('layout/header'); ?>
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