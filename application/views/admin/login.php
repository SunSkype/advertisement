
<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicons -->
    <link href="<?php echo base_url().'assets/images/Daas_Logo_main.jpg';?>" rel="icon">
    <link href="<?php echo base_url().'assets/images/Daas_Logo_main.jpg';?>" rel="apple-touch-icon">
    
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/vendor/bootstrap/css/bootstrap.min.css';?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/vendor/fonts/circular-std/style.css';?>" >
    <link rel="stylesheet" href="<?php echo base_url().'assets/libs/css/style.css';?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/vendor/fonts/fontawesome/css/fontawesome-all.css';?>">
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f3f2ef;
    }
    .logo-img{
        width:90px;
    }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center">
            <a href="">
            <img class="logo-img img-fluid" src="<?php echo base_url().'assets/images/Daas_Logo_main.jpg';?>" alt="logo">
            </a>
            <div class="card-header text-center" id="card">
            <?php 
                if($this->session->flashdata('msg')) 
                {			 
                    echo $this->session->flashdata('msg'); 
                    $array_items = array('msg' => '');	
                    echo '<script> window.setTimeout(function(){ document.getElementById("card").style.display = "none"; }, 3000);</script>';			
                }
            ?>
            </div>
            <span class="splash-description">Please enter your user information.</span>
            </div>
            <div class="card-body">
                <form method="post" name="user_login" action="admin/user_login">
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="email" id="email" type="email" placeholder="Email" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="password" id="password" type="password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <label class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" name="remember" id="remember"><span class="custom-control-label">Remember Me</span>
                        </label>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
                </form>
            </div>
            <div class="card-footer bg-white p-0  ">
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="<?php echo site_url().'admin/signup';?>" class="footer-link">Create An Account</a></div>
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="<?php echo site_url().'admin/forgote_password';?>" class="footer-link">Forgot Password</a>
                </div>
            </div>
        </div>
    </div>
  
    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="<?php echo base_url().'assets/vendor/jquery/jquery-3.3.1.min.js;'?>"></script>
    <script src="<?php echo base_url().'assets/vendor/bootstrap/js/bootstrap.bundle.js;'?>"></script>
</body>
 
</html>

