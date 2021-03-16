<?php $this->load->view('admin/header_new');?>
<!-- wrapper  -->
<!-- ============================================================== -->
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">

            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="pageheader-title">Sub Category</h2>

                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Categoies</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"> Sub Category
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ============================================================== -->
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


            <div class="row">

                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <h5 class="card-header">Add Sub Category</h5>
                        <?php //echo validation_errors(); ?>
                        <div class="card-body">
                            <form enctype="multipart/form-data" method="post"
                                action="<?php echo base_url().'Admin/insertSubhCategory'?>" id="basicform">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-lg-6">
                                        <div class="form-group">
                                            <label>Main Category</label>
                                            <?php echo form_error('main_category', '<div style="color:red;">', '</div>'); ?>
                                            <select id="main_category" name="main_category" autocomplete="off"
                                                class="form-control" placeholder="Enter Main Category" value="<?php echo set_value('main_category'); ?>">
                                                <option value="">Please choose main category</option>
                                                <?php
                                                    foreach ($main_category_data as $value) { ?>
                                                        <option value="<?php echo $value->id; ?>"><?php echo $value->main_category_name; ?></option>
                                                   <?php }
                                                ?>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-lg-6">
                                    <div class="form-group">
                                            <label>Category</label>
                                            <?php echo form_error('sub_category', '<div style="color:red;">', '</div>'); ?>
                                            <input id="sub_category" type="text" name="sub_category" autocomplete="off"
                                                class="form-control" placeholder="Enter Sub Category" value="<?php echo set_value('sub_category'); ?>">
                                        </div>
                                    </div>                                   
                                </div>

                                <div class="row">
                                    
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-lg-6">
                                        <div class="form-group">
                                            <label>Description</label>
                                            <?php echo form_error('description', '<div style="color:red;">', '</div>'); ?>
                                            <textarea id="description" name="description" autocomplete="off"
                                                class="form-control" placeholder="Enter Description" value="<?php echo set_value('description'); ?>"><?php echo set_value('description'); ?></textarea> 
                                        </div>
                                    </div>                                   
                                </div>


                                <div class="row">
                                    <div class="card-header">
                                        <div class="col-sm-12 pl-0">
                                            <p class="">
                                                <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                                <button class="btn btn-space btn-secondary">Cancel</button>
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