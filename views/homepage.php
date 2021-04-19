<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../css/general.css">
    <link rel="stylesheet" href="../css/homepage.css">
    
</head>
<body>

    
    <?php include(dirname(__DIR__).'/views/common/header.php'); ?>

    <!-- Content--> 

    <main class="container-fluid">
        <?php if (isset($user)) echo"<p> WELCOME  $user->$name</p>"; ?>
        <div class="row">
            <div class="col-md-2 left mt-4">
                <h3>Loại Mặt Hàng:</h3>
                <ul class="list-group mb-2 ml-2 brand-list">

                    <?php
                        foreach ($ds_thuonghieu as $thuonghieu) {
                            echo "<li class='list-group-item'>
                                <input type='checkbox' name='thuonghieu' value='$thuonghieu->code' id='$thuonghieu->id'>
                                $thuonghieu->name
                            </li>";
                        }
                    ?>
                    <!-- <li class="list-group-item">
                        <input type="checkbox" name="a" id="">
                        Cà Phê Âu-Mỹ
                    </li>
                    <li class="list-group-item">
                        <input type="checkbox" name="a" id="">
                        Trà Sữa
                    </li> -->
                </ul>

                <h3>Sắp Xếp Theo:</h3>
                <ul class="list-group mb-2 ml-2">
                    <li class="list-group-item">
                        <input type="radio" name="a" id="">
                        Giá Thành
                    </li>
                    <li class="list-group-item">
                        <input type="radio" name="a" id="">
                        Bán Chạy
                    </li>
                
                </ul>

            </div>

            <div class="col-md-10 right container pt-4">
                <div class="row">

                    <?php

                        foreach ($ds_sanpham as $sp) {
                            echo "<div class='col-lg-4 col-sm-6 item-item mb-3 product-item'>
                                <div class='card'>
                                    <img class='card-img-top pic' src='https://capherangxay.vn/wp-content/uploads/2018/03/cong-thuc-pha-che-ca-phe-phin-ngon-tuyet-hao-2.jpg' alt='Card image cap'>
                                    <div class='card-body'>
                                    <h5 class='card-title'>$sp->name</h5>
                                    <p class='card-text'>$sp->description</p>
                                    <p class='card-text'>$sp->price</p>
                                    <a href='#' class='btn btn-primary'>Mua Ngay</a>
                                    </div>
                                </div>
                            </div>";
                        }

                    ?>

                    
                    <!-- <div class="col-lg-4 col-sm-6 item-item mb-3 product-item">
                        <div class="card">
                            <img class="card-img-top pic" src="https://doctormuoi.vn/wp-content/uploads/2021/01/cach-pha-cafe-phin-618x550.jpg" alt="Card image cap">
                            <div class="card-body">
                            <h5 class="card-title">CÀ PHÊ PHIN</h5>
                            <p class="card-text">Được trích xuất từ 100% cà phê nguyên chất, với cách chế biến mang đậm bản sắc Việt Nam, khiến cho hương vị đậm đà</p>
                            <a href="#" class="btn btn-primary">Mua Ngay</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 item-item mb-3 product-item">
                        <div class="card">
                            <img class="card-img-top pic" src="https://hpcvietblog.files.wordpress.com/2019/05/bac-xiu-la-gi.jpg" alt="Card image cap">
                            <div class="card-body">
                            <h5 class="card-title">CÀ PHÊ BẠC XỈU</h5>
                            <p class="card-text">Một loại nước uống nâng cấp của cà phê sữa, ngọt hơn và nhiều sữa hơn</p>
                            <a href="#" class="btn btn-primary">MUA NGAY</a>
                            </div>
                        </div>
                    </div> 

                    <div class="col-lg-4 col-sm-6 item-item mb-3 product-item">
                        <div class="card">
                            <img class="card-img-top pic" src="https://icaphe.vn/wp-content/uploads/2019/12/3g1.jpg" alt="Card image cap">
                            <div class="card-body">
                            <h5 class="card-title">AMERICANO</h5>
                            <p class="card-text">Americano là một phong cách cà phê chuẩn bị bằng cách thêm nước nóng vào espresso, điều này làm cà phê có độ đậm tương tự, nhưng hương vị lại khác, giống cà phê phin</p>
                            <a href="#" class="btn btn-primary">Mua Ngay</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 item-item mb-3 product-item">
                        <div class="card">
                            <img class="card-img-top pic" src="https://img.timviecdaubep.com/2020/08/espresso-2.jpg" alt="Card image cap">
                            <div class="card-body">
                            <h5 class="card-title">ESPRESSO</h5>
                            <p class="card-text">Espresso là một phương pháp pha cà phê có nguồn gốc từ Ý, trong đó một lượng nhỏ nước sôi gần như bị đè dưới áp lực qua hạt cà phê nghiền</p>
                            <a href="#" class="btn btn-primary">Mua Ngay</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 item-item mb-3 product-item">
                        <div class="card">
                            <img class="card-img-top pic" src="https://www.hocvienamthuc.com/wp-content/uploads/bfi_thumb/huong-dan-cach-lam-ca-phe-capuchino-ngon-tai-nha-6wvb7zbi12yft7d89c5d8w1r1jfyild78ltkrubw3sg.jpg" alt="Card image cap">
                            <div class="card-body">
                            <h5 class="card-title">CAPUCHINO</h5>
                            <p class="card-text">à phê cappuccino bao gồm ba phần đều nhau: cà phê espresso pha với một lượng nước gấp đôi (espresso lungo), sữa nóng và sữa sủi bọt. Để hoàn thiện khẩu vị, người ta thường rải lên trên tách cà phê cappuccino một ít bột ca cao và/hay bột quế. </p>
                            <a href="#" class="btn btn-primary">MUA NGAY</a>
                            </div>
                        </div>
                    </div> 

                    <div class="col-lg-4 col-sm-6 item-item mb-3 product-item">
                        <div class="card">
                            <img class="card-img-top pic" src="https://www.cet.edu.vn/wp-content/uploads/2020/02/sua-tuoi-tran-chau-duong-den.jpg" alt="Card image cap">
                            <div class="card-body">
                            <h5 class="card-title">TRÀ SỮA CHÂN TRÂU ĐƯỜNG ĐEN</h5>
                            <p class="card-text">Thức uống anh em với họ nhà trà sữa nhưng sữa tươi trân châu đường đen có thành phần mới lạ, khác biệt so với trà sữa truyền thống, đó là sự kết hợp giữa sữa tươi thanh trùng không đường và viên trân châu thơm đậm vị syrup đường đen.</p>
                            <a href="#" class="btn btn-primary">Mua Ngay</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 item-item mb-3 product-item">
                        <div class="card">
                            <img class="card-img-top pic" src="https://file.hstatic.net/1000135323/file/tra-sua-matcha-tran-chau_6d28290729074c45916b985b8f284c13_1024x1024.jpg" alt="Card image cap">
                            <div class="card-body">
                            <h5 class="card-title">TRÀ SỮA MATCHA</h5>
                            <p class="card-text">Trà sữa matcha thích hợp dành cho các bạn muốn một nước ngon lành nhưng không khiến bạn tăng cân và lại tốt cho da.</p>
                            <a href="#" class="btn btn-primary">Mua Ngay</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 item-item mb-3 product-item">
                        <div class="card">
                            <img class="card-img-top pic" src="https://images.foody.vn/res/g106/1051960/prof/s640x400/foody-upload-api-foody-mobile-7-201021093622.jpg" alt="Card image cap">
                            <div class="card-body">
                            <h5 class="card-title">TRÀ SỮA OLONG</h5>
                            <p class="card-text">thức uống này là hương vị đậm đà hơn. Ngay cả vị chát nhẹ ở đầu lưỡi cũng khiến người ta mê mẩn. Vị ngọt hậu phía dưới cuống họng càng lắng đọng dư vị của đồ uống cao cấp.

                            </p>
                            <a href="#" class="btn btn-primary">MUA NGAY</a>
                            </div>
                        </div>
                    </div>  -->
                </div>   
            </div>
    </main>
    <!-- End Content -->

    
    <?php include(dirname(__DIR__).'/views/common/footer.php'); ?>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="../script/common.js"></script>
    <script src="../script/product-list.js"></script>
</body>
</html>