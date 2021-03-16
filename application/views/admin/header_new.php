<!doctype html>
<html lang="en">
<?php 
if(!$this->session->userdata('Admin_session')){
    redirect('Admin');	
}
?>
<head>
    

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicons -->
    <link href="<?php echo base_url().'assets/images/Daas_Logo_main.jpg';?>" rel="icon">
    <link href="<?php echo base_url().'assets/images/Daas_Logo_main.jpg';?>" rel="apple-touch-icon">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/vendor/bootstrap/css/bootstrap.min.css';?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/vendor/fonts/circular-std/style.css';?>" >
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/libs/css/style.css';?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/vendor/fonts/fontawesome/css/fontawesome-all.css';?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css';?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/vendor/fonts/flag-icon-css/flag-icon.min.css';?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/vendor/datatables/css/dataTables.bootstrap4.css';?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/vendor/datatables/css/buttons.bootstrap4.css';?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/vendor/datatables/css/select.bootstrap4.css';?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/vendor/datatables/css/fixedHeader.bootstrap4.css';?>">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Advertising Website</title>
   
</head>

<body>
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">

        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="<?php echo site_url().'Admin/index'?>">
                    <img src="<?php echo base_url().'assets/images/Daas_Logo_main.jpg';?>" style="width:70px;">
                </a>
                
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a href="<?php echo base_url().'Admin/logout'?>">logout</a>
            </nav>
        </div>

        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false"
                                    data-target="#submenu-1" aria-controls="submenu-1"><i
                                        class="fa fa-fw fa-user-circle"></i>Categories</a>

                                        <div id="submenu-1" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo site_url().'Admin/main_category';?>">Main Category</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo site_url().'Admin/sub_category';?>">Sub Category</a>
                                        </li>
                                                                               
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false"
                                    data-target="#submenu-2" aria-controls="submenu-1"><i
                                        class="fa fa-fw fa-user-circle"></i>Advertisement</a>

                                        <div id="submenu-2" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo site_url().'Admin/addAdvertisement';?>">Add Advertisement</a>
                                        </li>
                                                                       
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>