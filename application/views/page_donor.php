
<?php $this->load->view('page_header'); ?>

    <main>

        <!--Main layout-->
        <div class="container">
            <div class="row">

                <!--Sidebar-->
                <div class="col-lg-3">

                    <div class="widget-wrapper">
                        <div class="list-group">
                            <a href="#" class="list-group-item active">1</a>
                            <a href="#" class="list-group-item">2</a>
                            <a href="#" class="list-group-item">3</a>
                        </div>
                    </div>

                    <div class="widget-wrapper">
                        <div class="card">
                            <div class="card-block">
                                <p>information</p>
                                <p>information</p>
                                <p>information</p>
                                <p>information</p>
                                <p>information</p>
                                <p>information</p>

                            </div>
                        </div>
                    </div>

                </div>
                <!--/.Sidebar-->

                <!--Main column-->
                <div class="col-lg-9">

                    <!--First row-->
                    <div class="row">
                        <div class="col-lg-12">

                          <nav class="navbar navbar-dark stylish-color">
                            <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">หน้าแรก</a></li>
                              <li class="breadcrumb-item active">บริจาค</li>
                            </ol>
                          </nav>
                          <br>
                          <div class="card card-block" id="detailupload">
                          <div class="divider-new">
                              <h2 class="h2-responsive">รายละเอียดของที่บริจาค</h2>
                          </div>

                          <!-- alert -->
                          <?php if (isset($success_msg)) { echo $success_msg; } ?>
                          <!-- end alert -->

                         <form action="<?php echo base_url(); ?>index.php/donate/donor_create" method="post" enctype="multipart/form-data">
                          <div class="row">
                            <div class="col-md-1"></div>
                                  <div class="col-md-6">
                                      <div class="md-form">
                                          <input type="text" class="form-control" name="dname" required>
                                          <label>ชื่อของที่บริจาค :</label>
                                      </div>
                                  </div>
                            <div class="col-md-5"></div>
                          </div>
                          <br>
                          <div class="row">
                            <div class="col-md-1"></div>
                                  <div class="col-md-10">
                                      <div class="md-form">
                                          <textarea type="text" class="md-textarea" name="ddetail" required></textarea>
                                          <label>รายละเอียด :</label>
                                      </div>
                                  </div>
                            <div class="col-md-1"></div>
                          </div>
                          <br>
                          <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-5">
                              <div class="md-form">
                              <input type="text" class="form-control" name="dsize" required>
                              <label>ขนาด :</label>
                            </div>
                            </div>
                            <div class="col-md-5">
                                <div class="md-form">
                                  <input type="text" class="form-control" name="dweight" required >
                                  <label>น้ำหนัก :</label>
                                </div>
                            </div>
                            <div class="col-md-1"></div>
                          </div>
                          <br>
                          <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                              <!-- upload here -->
                                  <span>เลือกไฟล์</span>
                                  <input type="file" class="form-control" name="fileUpload[]" multiple>
                            </div>
                            <div class="col-md-1"></div>
                          </div>
                          <div class="row">
                            <div class="col-md-9"></div>
                            <div class="col-md-2">
                              <input type="submit" value="บริจาค" class="btn btn-primary">
                            </div>
                          </div>

                        </form>
                      </div>
                        </div>
                    </div>
                    <!--/.First row-->


                </div>
                <!--/.Main column-->

            </div>
        </div>
        <!--/.Main layout-->

    </main>

<?php $this->load->view('page_footer'); ?>
