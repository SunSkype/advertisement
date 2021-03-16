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
                        <h2 class="pageheader-title">Main Category</h2>

                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Categoies</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"> Main Category
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
                        <h5 class="card-header">Add Main Category</h5>
                        <?php //echo validation_errors(); ?>
                        <div class="card-body">
                            <form enctype="multipart/form-data" method="post"
                                action="<?php echo base_url().'Admin/insertMainCategory'?>" id="basicform">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-lg-6">
                                        <div class="form-group">
                                            <label>Category</label>
                                            <?php echo form_error('category', '<div style="color:red;">', '</div>'); ?>
                                            <input id="category" type="text" name="category" autocomplete="off"
                                                class="form-control" placeholder="Enter Main Category" value="<?php echo set_value('category'); ?>">
                                        </div>
                                    </div>
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