<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ Hàng</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../css/general.css">
    <link rel="stylesheet" href="../css/mybag.css">
</head>
<body>

    <?php include './common/header.php'; ?>

    <!-- Header -->

    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light d-flex justify-content-center">
        <a class="navbar-brand mg-r" href="#">
            <img src="https://iweb.tatthanh.com.vn/pic/3/service/images/logo-cafe-dep(23).jpg" class="web-logo" alt="web logo">
        </a>
        <div class="d-flex align-items-center"> -->
            <!-- Menu Bar -->
            <!-- <ul class="navbar-nav mr-auto font-size ">
                <li class="nav-item active mg-r">
                    <a class="nav-link" href="#">Trang Chủ <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item mg-r">
                    <a class="nav-link" href="#">Khuyến Mãi</a>
                </li>
                <li class="nav-item mg-r">
                    <a class="nav-link" href="#">Chính Sách</a>
                </li>
                </li>
            </ul> -->

            <!-- End Menu Bar -->
        <!-- </div>
        <div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-none d-lg-block" id="navbarSupportedContent">
                <div class="searchbar mr-3">
                    <input class="search_input" type="text" name="" placeholder="Search...">
                    <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
                </div>
            </div>
        </div>
    </nav> -->

    <!-- End Header -->
<div class="container"> 
    <table id="cart" class="table table-hover table-condensed"> 
        <thead> 
            <tr> 
                <th style="width:50%">Tên sản phẩm</th> 
                <th style="width:10%">Giá</th> 
                <th style="width:8%">Số lượng</th> 
                <th style="width:22%" class="text-center">Thành tiền</th> 
                <th style="width:10%"> </th> 
            </tr> 
        </thead> 

        <tbody>
            <tr> 
                <td data-th="Product">
                    <div class="row"> 
                        <div class="col-sm-2 hidden-xs">
                            <img src="http://hocwebgiare.com/thiet_ke_web_chuan_demo/shopping_cart/images/090.jpg" alt="Sản phẩm 1" class="img-responsive" width="100"></div> 
                        <div class="col-sm-10">
                            <h4 class="nomargin">Sản phẩm 1</h4> 
                                <p>Mô tả của sản phẩm 1</p> 
                        </div> 
                    </div> 
                </td> 
                <td data-th="Price">200.000 đ</td> 
                <td data-th="Quantity"><input class="form-control text-center" value="1" type="number"></td> 
                <td data-th="Subtotal" class="text-center">200.000 đ</td> 
                <td class="actions" data-th="">
                    <button class="btn btn-info btn-sm"><i class="fa fa-edit"></i></button> 
                    <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
                </td> 
            </tr> 

            <tr> 
                <td data-th="Product"> 
                    <div class="row">
                        <div class="col-sm-2 hidden-xs"><img src="http://hocwebgiare.com/thiet_ke_web_chuan_demo/shopping_cart/images/174.jpg" alt="Sản phẩm 1" class="img-responsive" width="100">
                        </div>
                    <div class="col-sm-10"> 
                        <h4 class="nomargin">Sản phẩm 2</h4> 
                        <p>Mô tả của sản phẩm 2</p> 
                    </div> 
                    </div> 
                </td>

                <td data-th="Price">300.000 đ</td> 
                <td data-th="Quantity"><input class="form-control text-center" value="1" type="number"></td> 
                <td data-th="Subtotal" class="text-center">300.000 đ</td> 
                <td class="actions" data-th="">
                    <button class="btn btn-info btn-sm"><i class="fa fa-edit"></i></button> 
                    <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
                </td> 
            </tr> 
        </tbody>
        
        <tfoot> 

            <tr class="visible-xs"> 
                <td class="text-center"><strong>Tổng 200.000 đ</strong></td> 
            </tr> 

            <tr> 
                <td><a href="http://hocwebgiare.com/" class="btn btn-warning"><i class="fa fa-angle-left"></i> Tiếp tục mua hàng</a>
                    </td> 
                <td colspan="2" class="hidden-xs"></td> 
                <td class="hidden-xs text-center"><strong>Tổng tiền 500.000 đ</strong></td> 
                <td><a href="http://hocwebgiare.com/" class="btn btn-success btn-block">Thanh toán <i class="fa fa-angle-right"></i></a>
                    </td> 
            </tr> 
        </tfoot> 
    </table>
</div>

<?php include './common/footer.php'; ?>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="../script/common.js"></script>
<script src="../script/product-list.js"></script>
</body>
</html>