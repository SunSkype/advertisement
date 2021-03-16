<?php $this->load->view('admin/header');?>

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
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Update</a></li>
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
                            <h5 class="card-header">All Record Details</h5>

                            <div class="card-body">
                            <div class="row">
                                    <div class="col-md-12">
                                        <?php 
                                $success = $this->session->userdata('success');
                                if($success != "")
                                {
                                    ?>
                                        <div class="alert alert-success"><?php echo $success; ?></div>
                                        <?php 
                                }
                                ?>

                                        <?php 
                                $failure = $this->session->userdata('failure');
                                if($failure != "")
                                {
                                    ?>
                                        <div class="alert alert-danger"><?php echo $failure; ?></div>
                                        <?php 
                                }
                                ?>
                                    </div>
                                </div>
                                <div class="row">
                                    
                                    <div class="col-md-12">
                                        <div class="table-responsive">
                                        <table id="DataTables_Table_0_wrapper" class="table table-striped table-bordered first">
                                            <tr>
                                                <th>Id</th>
                                                <th>Banner Image</th>
                                                <th>Logo Image</th>
                                                <th>Website Link</th>
                                                <th>Email Address</th>
                                                <th>Contact Primary</th>
                                                <th>Contact Secondary</th>

                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                            <?php if(!empty($master_table)){ foreach($master_table as $master){?>
                                            <tr>
                                                <td><?php echo $master['id']?></td>
                                                <td><?php echo $master['banner_image']?></td>
                                                <td><?php echo $master['logo_image']?></td>
                                                <td><?php echo $master['website_link']?></td>
                                                <td><?php echo $master['email_address']?></td>
                                                <td><?php echo $master['contact_1']?></td>
                                                <td><?php echo $master['contact_2']?></td>



                                                <td>
                                                    <a href="<?php echo base_url().'Admin/Edit/'.$master['id']?>"
                                                        class="btn btn-primary">Edit <i class="fa fa-edit"></i> </a>
                                                </td>
                                                <td>
                                                    <a href="<?php echo base_url().'Admin/delete/'.$master['id']?>"
                                                        class="btn btn-danger">Delete <i class="fa fa-trash"></i></a>
                                                </td>

                                            </tr>
                                            <?php } } else{ ?>
                                            <tr>
                                                <td colspan="10">Records not found</td>
                                            </tr>
                                            <?php } ?>
                                        </table>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>

    <?php $this->load->view('admin/footer');?>