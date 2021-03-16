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
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Hotel</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"> Hotel Maharaja Restaurant
                                        And Bar
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
                        <h5 class="card-header">Add Hotel Details</h5>
                        <div class="card-body">
                            <form enctype="multipart/form-data" method="post"
                                action="<?php echo base_url().'Admin/insertData'?>" id="basicform">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-lg-6">
                                        <div class="form-group">
                                            <label>Category</label>
                                            <select id="addcategory" type="text" name="addcategory" autocomplete="off"
                                                class="form-control">
                                                <option>Hotel</option>
                                                <option>Construction</option>
                                                <option>Parlar</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-lg-6">

                                        <div class="form-group">
                                            <label>Sub Category</label>
                                            <select id="addcategory" type="text" name="addcategory" autocomplete="off"
                                                class="form-control">
                                                <option>Hotel</option>
                                                <option>Construction</option>
                                                <option>Parlar</option>
                                            </select>
                                        </div>

                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 col-lg-6">

                                        <div class="form-group">
                                            <label>Business Name</label>
                                            <input id="client_name" type="text" name="client_name" autocomplete="off"
                                                class="form-control" placeholder="Enter Business Name">
                                        </div>

                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 col-lg-6">

                                        <div class="form-group">
                                            <label>Contact Person</label>
                                            <input id="contact_person" type="text" name="contact_person"
                                                autocomplete="off" class="form-control"
                                                placeholder="Contact Person Name">
                                        </div>

                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 col-lg-6">

                                        <div class="form-group">
                                            <label>Personal Contact Number</label>
                                            <input id="contact_number" type="text" name="contact_number"
                                                autocomplete="off" class="form-control" placeholder="Contact Number">
                                        </div>

                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 col-lg-6">

                                        <div class="form-group">
                                            <label>Office Contact Number</label>
                                            <input id="" type="text" name="display_contact" autocomplete="off"
                                                class="form-control" placeholder="Contact">
                                        </div>

                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 col-lg-6">

                                        <div class="form-group">
                                            <label>Personal Email Address</label>
                                            <input id="email" type="text" name="email" autocomplete="off"
                                                class="form-control" placeholder="Enter Email Address">
                                        </div>

                                    </div>


                                    <div class="col-md-6 col-sm-6 col-xs-12 col-lg-6">

                                        <div class="form-group">
                                            <label>Office Email Address</label>
                                            <input id="email" type="text" name="email" autocomplete="off"
                                                class="form-control" placeholder="Enter Email Address">
                                        </div>

                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 col-lg-6">

                                        <div class="form-group">
                                            <label>Banner Image</label>
                                            <input id="" type="file" name="banner" autocomplete="off"
                                                class="form-control" placeholder="">
                                        </div>

                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 col-lg-6">

                                        <div class="form-group">
                                            <label>Logo Image</label>
                                            <input id="" type="file" name="logo" autocomplete="off" class="form-control"
                                                placeholder="">
                                        </div>

                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 col-lg-6">

                                        <div class="form-group">
                                            <label>Website Address</label>
                                            <input id="" type="text" name="website" autocomplete="off"
                                                class="form-control" placeholder="Website Address">
                                        </div>

                                    </div>




                                    <div class="col-md-6 col-sm-6 col-xs-12 col-lg-6">

                                        <div class="form-group">
                                            <label>Address</label>
                                            <input id="" type="text" name="address" autocomplete="off"
                                                class="form-control" placeholder="Enter address">
                                        </div>

                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-lg-6">

                                        <div class="form-group">
                                            <label>Landmark</label>
                                            <input id="" type="text" name="landmark" autocomplete="off"
                                                class="form-control" placeholder="Enter address">
                                        </div>

                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-lg-6">

                                        <div class="form-group">
                                            <label>City</label>
                                            <input id="" type="text" name="city" autocomplete="off" class="form-control"
                                                placeholder="Enter city">
                                        </div>

                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 col-lg-6">

                                        <div class="form-group">
                                            <label>State</label>
                                            <input id="" type="text" name="state" autocomplete="off"
                                                class="form-control" placeholder="Enter State">
                                        </div>

                                    </div>



                                    <div class="col-md-6 col-sm-6 col-xs-12 col-lg-6">

                                        <div class="form-group">
                                            <label>Pin Code</label>
                                            <input id="" type="text" name="pin" autocomplete="off" class="form-control"
                                                placeholder="Enter pin Code">
                                        </div>

                                    </div>

                                    <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">

                                        <div class="form-group">
                                            <label>Discription</label>
                                            <textarea class="form-control"></textarea>
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