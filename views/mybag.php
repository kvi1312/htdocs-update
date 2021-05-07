<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="/htdocs-update/css/general.css">
    <link rel="stylesheet" href="/htdocs-update/css/login.css">
</head>
<body>

    <?php include dirname(__DIR__).'/views/common/header.php'; ?>

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
        <?php
            if (isset($details)) {
                foreach ($details as $index => $detail) {
                    $product = $products[$index];
                    $subtotal = $detail->amount * $detail->price;
                    echo " <tr> 
                        <td data-th='Product'>
                            <div class='row'> 
                                <div class='col-sm-2 hidden-xs'>
                                    <img src='$product->thumbnail' alt='Sản phẩm 1' class='img-responsive' width='100'></div> 
                                <div class='col-sm-10'>
                                    <h4 class='nomargin'>$product->name</h4> 
                                        <p>$product->description</p> 
                                </div> 
                            </div> 
                        </td> 
                        <td data-th='Price'>$detail->price đ</td> 
                        <td data-th='Quantity'><input productId='$detail->productId' class='form-control text-center amount-input' value='$detail->amount' type='number' min=1></td> 
                        <td data-th='Subtotal' class='text-center'>$subtotal đ</td> 
                        <td class='actions' data-th=''>
                            <button productId='$detail->productId' class='btn btn-danger btn-sm btn-delete'><i class='fa fa-trash'></i></button>
                        </td> 
                    </tr> ";
                }
            } else {
                echo "<tr>
                    <td>Giỏ hàng rỗng</td>
                </tr>";
            }
        ?>
             

            <!-- <tr class="visible-xs"> 
                <td class="text-center"><strong>Tổng 200.000 đ</strong></td> 
            </tr> 

            <tr> 
                <td><a href="/htdocs-update/index.php" class="btn btn-warning"><i class="fa fa-angle-left"></i> Tiếp tục mua hàng</a>
                    </td> 
                <td colspan="2" class="hidden-xs"></td> 
                <td class="hidden-xs text-center"><strong>Tổng tiền 500.000 đ</strong></td> 
                <td><a href="http://hocwebgiare.com/" class="btn btn-success btn-block">Thanh toán <i class="fa fa-angle-right"></i></a>
                    </td> 
            </tr> -->
        </tfoot> 
    </table>
</div>

<?php include dirname(__DIR__).'/views/common/footer.php'; ?>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="/htdocs-update/script/common.js"></script>
<script src="/htdocs-update/script/product-list.js"></script>
</body>
</html>