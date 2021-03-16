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
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Edit / Update Data</a></li>
                                    
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ============================================================== -->
            <div class="ecommerce-widget">

                <div class="row">

                    <div class="col-xl-12 col-lg-13 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Edit And Update Data</h5>
                            <div class="card-body">
                                <form method="post" action="<?php echo base_url().'Admin/Edit/'.$master['id'];?>"
                                    id="basicform" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="">Add Banner Image</label>
                                        <input id="banner_image" type="file" name="banner_image" value=""
                                            autocomplete="off" class="form-control">
                                    </div>
                                    <?php echo form_error('banner_image');?>

                                    <div class="form-group">
                                        <label for="">Add Logo</label>
                                        <input id="logo" type="file" name="logo" value="" autocomplete="off"
                                            class="form-control">
                                    </div>
                                    <?php echo form_error('logo');?>

                                    <div class="form-group">
                                        <label for="">Email address</label>
                                        <input id="" type="email" name="email_address"
                                            value="<?php echo set_value('email_address',$master['email_address']);?>" placeholder="Enter email"
                                            autocomplete="off" class="form-control">
                                    </div>
                                    <?php echo form_error('email_address');?>

                                    <div class="form-group">
                                        <label for="">Website Link</label>
                                        <input id="" type="text" name="website_link"
                                            value="<?php echo set_value('website_link',$master['website_link']);?>"
                                            placeholder="Enter website link" autocomplete="off" class="form-control">
                                    </div>
                                    <?php echo form_error('website_link');?>

                                    <div class="form-group">
                                        <label for="">Contact 1</label>
                                        <input id="" name="contact_1" value="<?php echo set_value('contact_1',$master['contact_1']);?>"
                                            type="text" placeholder="Contact Number" class="form-control">
                                    </div>
                                    <?php echo form_error('contact_1');?>

                                    <div class="form-group">
                                        <label for="">Contact 2</label>
                                        <input id="" name="contact_2" value="<?php echo set_value('contact_2',$master['contact_2']);?>"
                                            type="text" placeholder="Contact Number" class="form-control">
                                    </div>
                                    <?php echo form_error('contact_2');?>

                                    <div class="row">
                                        <div class="card-header">
                                            <div class="col-sm-12 pl-0">
                                                <p class="">
                                                    <button type="submit"
                                                        class="btn btn-space btn-primary">Update</button>
                                                    <button href="<?php echo base_url().'Admin/list';?>" class="btn btn-space btn-secondary">Cancel</button>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>

    <?php $this->load->view('admin/footer');?>