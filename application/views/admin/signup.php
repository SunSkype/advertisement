
<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicons -->
    <link href="<?php echo base_url().'assets/images/Daas_Logo_main.jpg';?>" rel="icon">
    <link href="<?php echo base_url().'assets/images/Daas_Logo_main.jpg';?>" rel="apple-touch-icon">
    
    <title>Register</title>
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
    <!-- sign up page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center">
            <a href="">
            <img class="logo-img img-fluid" src="<?php echo base_url().'assets/images/Daas_Logo_main.jpg';?>" alt="logo">
            </a>
            </div>

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
            
            <div class="card-body">
                <form action="user_insert" method="POST">
                    <div class="form-group">
                    <label>Name:</label>
                        <input class="form-control form-control-lg" id="username" name="username" type="text" placeholder="Name" autocomplete="off" required>
                    </div>

                    <label>Email:</label>
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="email" name="email" type="email" placeholder="Email" required>
                    </div>

                    <div class="form-group">
                    <label>Mobile:</label>
                        <input class="form-control form-control-lg" id="mobile" name="mobile" type="number" placeholder="Enter Mobile Number" autocomplete="off" required>
                    </div>

                    <label>Password:</label>
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="password" name="password" type="password" placeholder="Enter Password" required>
                    </div>

                    <label>Confirm Password:</label>
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="Cpassword" name="Cpassword" type="password" placeholder="Enter Confirm Password" required>
                    </div>

                   

                    <button type="submit" class="btn btn-primary btn-lg btn-block">Register</button>
                    <button type="submit" class="btn btn-danger btn-lg btn-block">Cancel</button>
                    
                </form>
            </div>
            <div class="card-footer bg-white p-0  ">
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="#" class="footer-link">already registered</a></div>
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="<?php echo site_url().'admin/login';?>" class="footer-link">Log in</a>
                </div>
            </div>
        </div>
    </div>
  
    <!-- ============================================================== -->
    <!-- end sign up page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="<?php echo base_url().'assets/vendor/jquery/jquery-3.3.1.min.js;'?>"></script>
    <script src="<?php echo base_url().'assets/vendor/bootstrap/js/bootstrap.bundle.js;'?>"></script>
</body>
 
</html>

