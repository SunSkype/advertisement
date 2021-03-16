<?php $this->load->view('admin/header');?>
<!-- wrapper  -->
<!-- ============================================================== -->
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">

            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="pageheader-title">Advertising Dashboard </h2>

                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Builder</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"> RS Builder
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ============================================================== -->
            <div class="ecommerce-widget">
            <?php  if(isset($message)){
                 echo $message;
            }  ?>
            </div>


                <div class="row">

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Add Builder Details</h5>
                            <div class="card-body">
                                <!-- <form enctype="multipart/form-data" method="post" action="<?php echo base_url().'Admin_Controller/insertData'?>"
                                    id="basicform" > -->
                                    <?php echo form_open_multipart('Admin_Controller/insertData');?>
                                    <div class="form-group">
                                        <label>Add Banner Image</label>
                                        <input id="banner_image" type="file" name="banner_image" 
                                            autocomplete="off" class="form-control">
                                    </div>
                                    <?php echo form_error('banner_image');?>

                                    <div class="form-group">
                                        <label>Add Logo</label>
                                        <input id="logo" type="file" name="logo"  autocomplete="off"
                                            class="form-control">
                                    </div>
                                    <?php echo form_error('logo');?>

                                    <div class="form-group">
                                        <label>Email address</label>
                                        <input type="email" name="email_address"
                                            value="<?php echo set_value('email_address');?>" placeholder="Enter email"
                                            autocomplete="off" class="form-control">
                                    </div>
                                    <?php echo form_error('email_address');?>

                                    <div class="form-group">
                                        <label>Website Link</label>
                                        <input type="text" name="website_link"
                                            value="<?php echo set_value('website_link');?>"
                                            placeholder="Enter website link" autocomplete="off" class="form-control">
                                    </div>
                                    <?php echo form_error('website_link');?>

                                    <div class="form-group">
                                        <label> Primary Contact</label>
                                        <input name="contact_1" value="<?php echo set_value('contact_1');?>"
                                            type="text" placeholder="Contact Number" class="form-control">
                                    </div>
                                    <?php echo form_error('contact_1');?>

                                    <div class="form-group">
                                        <label>Secondary Contact</label>
                                        <input name="contact_2" value="<?php echo set_value('contact_2');?>"
                                            type="text" placeholder="Contact Number" class="form-control">
                                    </div>
                                    <?php echo form_error('contact_2');?>

                                    <div class="row">
                                        <div class="card-header">
                                            <div class="col-sm-12 pl-0">
                                                <p class="">
                                                    <button type="submit"
                                                        class="btn btn-space btn-primary">Submit</button>
                                                    <button class="btn btn-space btn-secondary">Cancel</button>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                <!-- </form> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $this->load->view('admin/footer');?>