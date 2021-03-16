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
                        <h2 class="pageheader-title">Add Advertisement</h2>

                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Advertisement</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Add Advertisement</li>
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
                        <h5 class="card-header">Add Advertisement Details</h5>
                        <div class="card-body">
                            <form enctype="multipart/form-data" method="post"
                                action="<?php echo base_url().'Admin/insertAdvertisementData'?>" id="basicform">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-lg-6">
                                    <div class="form-group">
                                            <label>Main Category</label>
                                            <?php echo form_error('main_category', '<div style="color:red;">', '</div>'); ?>
                                            <select id="main_category" name="main_category" autocomplete="off"
                                                class="form-control" placeholder="Enter Main Category" value="<?php echo set_value('main_category'); ?>" onChange="getSubCategories(this.value)">
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
                                            <label>Sub Category</label>
                                            <?php echo form_error('sub_category', '<div style="color:red;">', '</div>'); ?>
                                            <select id="sub_category" type="text" name="sub_category" autocomplete="off"
                                                class="form-control">
                                                <option value="">Please choose sub category</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 col-lg-6">
                                        <div class="form-group">
                                            <label>Business Name</label>
                                            <?php echo form_error('client_name', '<div style="color:red;">', '</div>'); ?>
                                            <input id="client_name" type="text" name="client_name" autocomplete="off"
                                                class="form-control" placeholder="Enter Business Name" value="<?php echo set_value('client_name'); ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 col-lg-6">
                                        <div class="form-group">
                                            <label>Contact Person</label>
                                            <?php echo form_error('contact_person', '<div style="color:red;">', '</div>'); ?>
                                            <input id="contact_person" type="text" name="contact_person"
                                                autocomplete="off" class="form-control"
                                                placeholder="Contact Person Name" value="<?php echo set_value('contact_person'); ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 col-lg-6">
                                        <div class="form-group">
                                            <label>Personal Contact Number</label>
                                            <?php echo form_error('contact_number', '<div style="color:red;">', '</div>'); ?>
                                            <input id="contact_number" type="number" name="contact_number"
                                                autocomplete="off" class="form-control" placeholder="Contact Number" value="<?php echo set_value('contact_number'); ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 col-lg-6">
                                        <div class="form-group">
                                            <label>Office Contact Number</label>
                                            <?php echo form_error('display_contact', '<div style="color:red;">', '</div>'); ?>
                                            <input id="display_contact" type="number" name="display_contact" autocomplete="off"
                                                class="form-control" placeholder="Contact" value="<?php echo set_value('display_contact'); ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 col-lg-6">
                                        <div class="form-group">
                                            <label>Personal Email Address</label>
                                            <?php echo form_error('email', '<div style="color:red;">', '</div>'); ?>
                                            <input id="email" type="email" name="email" autocomplete="off"
                                                class="form-control" placeholder="Enter Email Address" value="<?php echo set_value('email'); ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 col-lg-6">
                                        <div class="form-group">
                                            <label>Office Email Address</label>
                                            <?php echo form_error('officeemail', '<div style="color:red;">', '</div>'); ?>
                                            <input id="officeemail" type="email" name="officeemail" autocomplete="off"
                                                class="form-control" placeholder="Enter Email Address" value="<?php echo set_value('officeemail'); ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 col-lg-6">
                                        <div class="form-group">
                                            <label>Banner Image</label>
                                            <input id="banner" type="file" name="banner" autocomplete="off"
                                                class="form-control" placeholder="" value="<?php echo set_value('banner'); ?>" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 col-lg-6">
                                        <div class="form-group">
                                            <label>Logo Image</label>
                                            <?php echo form_error('logo', '<div style="color:red;">', '</div>'); ?>
                                            <input id="logo" type="file" name="logo" autocomplete="off" class="form-control"
                                                placeholder="" value="<?php echo set_value('logo'); ?>" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 col-lg-6">
                                        <div class="form-group">
                                            <label>Website Address</label>
                                            <?php echo form_error('website', '<div style="color:red;">', '</div>'); ?>
                                            <input id="website" type="text" name="website" autocomplete="off"
                                                class="form-control" placeholder="Website Address" value="<?php echo set_value('website'); ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 col-lg-6">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <?php echo form_error('address', '<div style="color:red;">', '</div>'); ?>
                                            <input id="address" type="text" name="address" autocomplete="off"
                                                class="form-control" placeholder="Enter address" value="<?php echo set_value('address'); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-lg-6">
                                        <div class="form-group">
                                            <label>Landmark</label>
                                            <?php echo form_error('landmark', '<div style="color:red;">', '</div>'); ?>
                                            <input id="landmark" type="text" name="landmark" autocomplete="off"
                                                class="form-control" placeholder="Enter address" value="<?php echo set_value('landmark'); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-lg-6">
                                        <div class="form-group">
                                            <label>City</label>
                                            <?php echo form_error('city', '<div style="color:red;">', '</div>'); ?>
                                            <input id="city" type="text" name="city" autocomplete="off" class="form-control"
                                                placeholder="Enter city" value="<?php echo set_value('city'); ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 col-lg-6">
                                        <div class="form-group">
                                            <label>State</label>
                                            <?php echo form_error('state', '<div style="color:red;">', '</div>'); ?>
                                            <input id="state" type="text" name="state" autocomplete="off"
                                                class="form-control" placeholder="Enter State" value="<?php echo set_value('state'); ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 col-lg-6">
                                        <div class="form-group">
                                            <label>Pin Code</label>
                                            <?php echo form_error('pin', '<div style="color:red;">', '</div>'); ?>
                                            <input id="pin" type="number" name="pin" autocomplete="off" class="form-control"
                                                placeholder="Enter pin Code" value="<?php echo set_value('pin'); ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                                        <div class="form-group">
                                            <label>Discription</label>
                                            <?php echo form_error('description', '<div style="color:red;">', '</div>'); ?>
                                            <textarea name="description" id="description" class="form-control" value="<?php echo set_value('description'); ?>"><?php echo set_value('description'); ?></textarea>
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
<script>
function getSubCategories(id){
    //alert(id);
    if(id != ""){
        $.ajax({  
            url:"<?php echo base_url();?>Admin/getSubCategories",  
            data:{main_category_id:id},  
            type: "POST",  
            success:function(data){
                //alert(data);
                $("#sub_category").html(data);			
            }  
        });
    } else {
        $("#sub_category").html('<option value="">Please choose sub category</option>');
    }
}
</script>
<?php $this->load->view('admin/footer');?>