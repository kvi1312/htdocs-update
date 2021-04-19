<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../css/general.css">
    <link rel="stylesheet" href="../css/login.css">
    
</head>
<body>

    <?php include './common/header.php'; ?>
    
    
    <main>
        <div class="container d-flex justify-content-center align-items-center pt-5 pb-5"> 
        <?php if (isset($error_message)) echo"<p> ERROR:  $error_message </p>"; ?>  
            <div id="loginbox" <?php if(isset($get_register)) echo "style='display:none;'"?>>                    
                <div class="card card-bg">
                    <h5 class="card-header">Đăng Nhập</h5>
                    <div class="card-body">
                        <form id="loginform" action="" method="POST" class="form-horizontal" role="form">
                            <input type="hidden" name="action"   value="login"> 
                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="Tên đăng nhập">                                        
                            </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input id="login-password" type="password" class="form-control" name="password" placeholder="Mật khẩu">
                            </div>
                                
                            <div class="input-group">
                                    <div class="checkbox">
                                        <label>
                                            <input id="login-remember" type="checkbox" name="remember" value="1"> Lưu Mật Khẩu
                                        </label>
                                    </div>
                            </div>
    
                            <div style="margin-top:10px" class="form-group">
                                <!-- Button -->
                                <div class="col-sm-12 controls">
                                    <a id="btn-login" href="#" class="btn btn-success">Đăng Nhập  </a>
                                </div>
                            </div>
    
    
                            <div class="form-group">
                                <div class="col-md-12 control">
                                    <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                        Chưa Có Tài Khoản?! 
                                        <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                        Đăng Ký Ngay
                                        </a>
                                    </div>
                                </div>
                            </div>   
    
                        </form>    
                    </div> <!--End Card Body-->
                </div> <!--End Card-->
            </div>
            <div id="signupbox" <?php if(!isset($get_register)) echo "style='display:none;'"?>>
                <div class="card card-bg">
                    <h5 class="card-header">
                            Đăng Ký 
                    </h5>
                    <div class="card-body">
                        <form id="signupform" action="" method="POST" class="form-horizontal" role="form">
                            <input type="hidden" name="action"   value="register">     
                            <div class="form-group">
                                <label for="email" class="control-label">Email</label>
                                <input id="email" type="text" class="form-control" name="email" placeholder="Email Address">
                            </div>

                            <div class="form-group">
                                <label for="password" class="control-label">Mật Khẩu</label>
                                <input id="password" type="password" class="form-control" name="password" >
                            </div>
                                
                            <div class="form-group">
                                <label for="name" class="control-label">Họ và Tên</label>
                                <input id="name" type="text" class="form-control" name="name" >
                            </div>
                            
                                
                            <div class="form-group">
                                <label for="address" class="control-label">Địa Chỉ</label>
                                <input id="address" type="text" class="form-control" name="address" >
                            </div>
                            
                            <div class="form-group">
                                <label for="phone" class="control-label">Số Điện Thoại </label>
                                <input id="phone" type="text" class="form-control" name="phone" >
                            </div>
    
                            

                            <div class="form-group">
                                <!-- Button -->                                        
                                <div class="col-md-offset-3">
                                    <button id="btn-signup" type="button" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Đăng Ký</button>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="col-md-12 control">
                                    <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                        Đã Có Tài Khoản?! 
                                        <a href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">
                                        Đăng Nhập
                                        </a>
                                    </div>
                                </div>
                            </div>   
                            
                            <!-- <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Đăng Nhập</a></div> -->
                            
                        </form>  
                    </div> <!--End Card Body-->
                </div> <!--End Card-->
            </div> 
        </div> <!--End Container-->
    </main>
    

    <?php include './common/footer.php'; ?>

    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
</body>
</html>