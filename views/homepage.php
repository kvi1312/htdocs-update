<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="/htdocs-update/css/general.css">
    <link rel="stylesheet" href="/htdocs-update/css/Homepage.css">
    
</head>
<body>

    
    <?php include(dirname(__DIR__).'/views/common/header.php'); ?>

    <!-- Content--> 

    <main class="container-fluid bg">
    
    <?php if (isset($user)) echo"<p> WELCOME  $user->fullname!</p>"; ?>
        <div class="row">
            <div class="col-md-2 left mt-4 " >
                <h3>Loại Mặt Hàng:</h3>
                <ul class="list-group mb-2 ml-2 brand-list" >

                     <li class="list-group-item check-cl" >
                        <input type="checkbox" name="a" id="">
                        Cà Phê Âu-Mỹ
                    </li>
                    <li class="list-group-item check-cl">
                        <input type="checkbox" name="a" id="">
                        Trà Sữa
                    </li>
                </ul>

                <h3>Sắp Xếp Theo:</h3>
                <ul class="list-group mb-2 ml-2 ">
                    <li class="list-group-item check-cl">
                        <input type="radio" name="a" id="">
                        Giá Thành
                    </li>
                    <li class="list-group-item check-cl">
                        <input type="radio" name="a" id="">
                        Bán Chạy
                    </li>
                
                </ul>

            </div>

            <div class="col-md-10 right container pt-4">
                <div id="product-grid" class="row">

                    <?php

                        foreach ($list_product as $product) {
                            echo "<div class='col-lg-4 col-sm-6 item-item mb-3 product-item '>
                                <div class='card'>
                                    <img class='card-img-top pic' src='https://capherangxay.vn/wp-content/uploads/2018/03/cong-thuc-pha-che-ca-phe-phin-ngon-tuyet-hao-2.jpg' alt='Card image cap'>
                                    <div class='card-body'>
                                    <h5 class='card-title'>$product->name</h5>
                                    <p class='card-text'>$product->description</p>
                                    <p class='card-text'>$product->price</p>
                                    <button class='btn btn-primary'>Thêm vào giỏ</button>
                                    </div>
                                </div>
                            </div>";
                        }

                    ?>

                
                </div>   
            </div>

    </main>
    <!-- End Content -->

    
    <?php include(dirname(__DIR__).'/views/common/footer.php'); ?>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="/htdocs-update/script/common.js"></script>
    <script src="/htdocs-update/script/product-list.js"></script>
</body>
</html>