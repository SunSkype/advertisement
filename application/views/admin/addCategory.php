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
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Category</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"> Add Category
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ============================================================== -->
              
            <div class="ecommerce-widget">
            
            </div>

                <div class="row">

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Add Category</h5>
                            <div class="card-body">
                                 <form enctype="multipart/form-data" method="post" action=""
                                    id="basicform" > 
                                    
                                    <div class="form-group">
                                        <label>Add Category</label>
                                        <select id="addcategory" type="text" name="addcategory" 
                                            autocomplete="off" class="form-control">
                                            <option>Hotel</option>
                                            <option>Construction</option>
                                            <option>Parlar</option>
                                     </select>
                                    </div>
                                    

                                    <div class="form-group">
                                        <label>Add Sub Category</label>
                                        <select id="addcategory" type="text" name="addcategory" 
                                            autocomplete="off" class="form-control">
                                            <option>Hotel</option>
                                            <option>Construction</option>
                                            <option>Parlar</option>
                                     </select>
                                    </div>



                                    <div class="row">
                                        <div class="card-header">
                                            <div class="col-sm-12 pl-0">
                                                <p class="">
                                                    <button type="submit"
                                                        class="btn btn-space btn-primary">Add Category</button>
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