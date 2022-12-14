<!DOCTYPE html>
<html lang="vi">
<head> 
    <meta charset="utf-8">    
    <link rel="shortcut icon" href="<?=base_url()?>static/img/favicon.ico">

    <title>Đăng nhập - FlatPC Admin</title>
    
    <link href="<?=base_url()?>static/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>static/admin/css/bootstrap-reset.css" rel="stylesheet">    
    <link href="<?=base_url()?>static/admin/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />    
    <link href="<?=base_url()?>static/admin/css/style.css" rel="stylesheet">
    <link href="<?=base_url()?>static/admin/css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

  <body class="login-body">

    <div class="container">
      <form id="login" method="post" class="form-signin" action="">

        <h2 class="form-signin-heading">Đăng nhập</h2>
        <?php 
            if ($dangky==1)
                echo '
                  </br>
                  <div class="col-lg-12">
                  <span style="color: green"><strong><i class="icon-ok-sign"></i> Đăng ký thành công! Mời bạn đăng nhập...</strong></span>
                  </div>';
            elseif ($dangky==2)                
                echo '
                  </br>
                  <div class="col-lg-12">
                  <span style="color: green"><strong><i class="icon-ok-sign"></i> Cập nhật thông tin tài khoản thành công! Mời bạn đăng nhập lại...</strong></span>
                  </div>'
                  ;

        ?>
        <div class="login-wrap">
            <input id="username" name="username" type="text" class="form-control" placeholder="Tên đăng nhập hoặc số điện thoại" value="<?php if (isset($_POST['username'])&&$_POST['username']!='') echo $_POST['username']; ?>">            
            <input id="password" name="password" type="password" class="form-control" placeholder="Mật khẩu">            
            <?php 
              if($loi!='') 
                  echo '<div class="alert alert-block alert-danger fade in">
                                  <button data-dismiss="alert" class="close close-sm" type="button">
                                      <i class="icon-remove"></i>
                                  </button>'.$loi.'</div>';                                         
            ?>
            <label class="checkbox"><input type="checkbox" id="remember" name="remember" value="1" /> Ghi nhớ đăng nhập</label></br>
            <button class="btn btn-lg btn-login btn-block" type="submit">Đăng nhập</button>  
            <button class="btn btn-lg btn-info btn-block" type="button" onclick="window.location.href='<?=base_url()?>'">VỀ TRANG CHỦ</button>          
        </div>
        <center>2022 &copy; FlatPC.</center></br>
      </form>
    </div>
    
    <script src="<?=base_url()?>static/admin/js/jquery.js"></script>
    <script src="<?=base_url()?>static/admin/js/bootstrap.min.js"></script>


  </body>
</html>
