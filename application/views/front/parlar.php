<?php $this->load->view('front/header');?>

        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">

                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Advertising Dashboard  </h2>

                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#"
                                                    class="breadcrumb-link">Bueaty Parlar</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Javed Habib Bueaty Parlar
                                                </li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ============================================================== -->
                    <div class="ecommerce-widget">

                        <div class="row">

                         <?php
                        //echo '<pre>'; print_r($data);
                        if(!empty($data)){ foreach($data as $master){ 
                            //echo $master->website_link;
                            ?> 
                            <div class="col-xl-4 col-lg-12 col-md-6 col-sm-12 col-12">
                                <div class="card info-card">
                                        <div class="card-body p-0">
                                        <img src="<?php echo base_url().'images/'.$master->banner_image;?>"
                                                class="img-fluid img-height">
                                        </div>
                                    <div class="top-left"> 
                                            <img src="<?php echo base_url().'images/'.$master->logo;?>"
                                                class="img-fluid">
                                    </div>
                                    <div class="bottom-left">
                                            <span ><?php echo $master->website_link;?> </span>
                                            <br>
                                            <span><?php echo $master->email_address;?> </span>
                                    </div>
                                    <div class="bottom-right">
                                            <span><?php echo $master->contact_1; ?> </span> <br>
                                            <span><?php echo $master->contact_2; ?> </span>
                                    </div>
                                    
                                    <div class="black_patch"></div>
                                </div>
                            </div>
                             <?php } } else{ ?> 

                                 <?php } ?> 

      

                        </div>

                    </div>
                </div>
            </div>

            <?php $this->load->view('front/footer');?> 