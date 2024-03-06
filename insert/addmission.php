<div class="content">
          
          <div class="card mb-3">
            <div class="card-body">
            <form action="insert_records.php" method="post">
              <div class="row flex-between-center">
                <div class="col-md">
                  <h5 class="mb-2 mb-md-0">Add an Admission</h5>
                </div>
                <div class="col-auto">
                  <input  type="reset" class="btn btn-link text-secondary p-0 me-3 fw-medium"  value="Discard">
                  <input type="submit" class="btn btn-primary" name="insert_admission" role="button" value="Add Admission">
                </div>
              </div>
            </div>
          </div>
          <div class="row g-0">
            <div class="col-lg-12 pe-lg-2">
              <div class="card mb-3">
                <div class="card-header bg-body-tertiary">
                  <h6 class="mb-0">Basic information</h6>
                </div>
                <div class="card-body pt-0">
                 
                  <div class="row gx-2">
                      <div class="col-8 mb-2">
                        <label class="form-label" for="product-name">Student Admission name:</label>
                        <input class="form-control" id="product-name" name="student_name" type="text"  /></div>
                        <?php 
                  // $str = date("y");
                  $randomid = mt_rand(100000000,999999999); 
                  // $abc = $str.$randomid;
                  ?>
                      <div class="col-2 mb-2">
                        <label class="form-label" for="manufacturar-name">Enrollment No:</label>
                        <input class="form-control" name="enrollment_no" id="product-name" type="text" value="<?php echo $randomid;?>" readonly/>
                      </div>
                      <div class="col-2 mb-2">
                        <label class="form-label" for="manufacturar-name">Enrollment No:</label>
                        <input class="form-control datetimepicker" id="start-date" type="text" name="date" placeholder="dd/mm/yy" data-options='{"dateFormat":"d/m/y","disableMobile":true}' />
                      </div>
                  </div>

                  <div class="row gx-2">
                      <div class="col-4 mb-2">
                        <label class="form-label" for="product-name">Email Address:</label>
                        <input class="form-control" name="email" id="product-name" type="email" />
                      </div>
                      <div class="col-4 mb-2">
                        <label class="form-label" for="product-name">Contact No:</label>
                        <input class="form-control" id="product-name" name="phone_no" type="number" />
                      </div>
                      <div class="col-4 mb-2">
                        <label class="form-label" for="manufacturar-name">Alt Contact No:</label>
                        <input class="form-control" id="product-name" name="alt_phone_no" type="number" />
                      </div>
                  </div>

                  <div class="row gx-2">
                  <div class="col-4 mb-2">
                        <label class="form-label" for="import-status">Gender: </label>
                        <select class="form-select" id="import-status" name="gender">
                        <option value="imported" selected disabled>Select Gender</option>
                        <option value="male">Male </option>
                        <option value="female">Female </option>
                       
                      </select>
                    </div>
                    <div class="col-4 mb-2">
                        <label class="form-label" for="manufacturar-name">Date of Birth</label>
                        <input class="form-control datetimepicker" name="dob" id="start-date" type="text" placeholder="dd/mm/yy" data-options='{"dateFormat":"d/m/y","disableMobile":true}' />
                      </div>
                      <div class="col-4 mb-2">
                        <label class="form-label" for="import-status">Qualification: </label>
                        <select class="form-select" id="import-status" name="area">
                          <option value="imported" selected disabled>Select Area</option>
                          <?php
                                           include '../include/connection.php';                 
                                          $records = mysqli_query($conn, "SELECT qualification From tbl_qualification"); 
                                          while($data = mysqli_fetch_array($records))
                                          {
                                            echo "<option>" .$data['qualification'] ."</option>";
                                          } 
                                            mysqli_close($conn);
                                          
                                          ?>  
                          </select>
                    </div>
                  </div>


                  <div class="row gx-2">
                      <div class="col-8 mb-2">
                        <label class="form-label" for="product-name">Address:</label>
                        <input class="form-control" id="product-name" type="text" name="address" />
                      </div>
                      <div class="col-2 mb-2">
                        <label class="form-label" for="import-status">Area: </label>
                        <select class="form-select" id="import-status" name="area">
                          <option value="imported" selected disabled>Select Area</option>
                          <?php
                                           include '../include/connection.php';                 
                                          $records = mysqli_query($conn, "SELECT area_name From tbl_area_master"); 
                                          while($data = mysqli_fetch_array($records))
                                          {
                                            echo "<option>" .$data['area_name'] ."</option>";
                                          } 
                                            mysqli_close($conn);
                                          
                                          ?>  
                          </select>
                      </div>
                      <div class="col-2 mb-2">
                          <label class="form-label" for="import-status">City: </label>
                          <input class="form-control" id="product-name" type="text" name="city" value="Surat"/>
                      </div>
                  </div>


                  <div class="row gx-2">
                      
                      <div class="col-4 mb-2">
                        <label class="form-label" for="import-status">Select Course: </label>
                        <select class="form-select" id="import-status" name="course_name">
                          <option value="imported" selected disabled>Select Course</option>
                          <?php
                                           include '../include/connection.php';                 
                                          $records = mysqli_query($conn, "SELECT course_name From tbl_course_master"); 
                                          while($data = mysqli_fetch_array($records))
                                          {
                                            echo "<option>" .$data['course_name'] ."</option>";
                                          } 
                                            mysqli_close($conn);
                                          
                                          ?>  
                          </select>
                      </div>
                      <div class="col-4 mb-2">
                          <label class="form-label" for="import-status">Course Category: </label>
                          <select class="form-select" id="import-status" name="c_category">
                          <option value="imported" selected disabled>Course Category</option>
                          <option value="Career">Career</option> 
                           <option value="Degree">Degree</option> 
                           <option value="Modular">Modular</option> 
                           <option value="Upgrade">Upgrade</option>
                        </select>
                      </div>
                      <div class="col-4 mb-2">
                          <label class="form-label" for="import-status">Counsellor: </label>
                          <select class="form-select" id="import-status" name="counsellor">
                          <option value="imported" selected disabled>Select Counsellor</option>
                          <?php
                                           include '../include/connection.php';                 
                                          $records = mysqli_query($conn, "SELECT employee_name From tbl_staff where status=1"); 
                                          while($data = mysqli_fetch_array($records))
                                          {
                                            echo "<option>" .$data['employee_name'] ."</option>";
                                          } 
                                            mysqli_close($conn);
                                          
                                          ?>  
                        </select>
                      </div>
                  </div>

                  <div class="row gx-2">
                      
                  <div class="col-4 mb-2">
                        <label class="form-label" for="product-name">Course Fee:</label>
                        <input class="form-control" name="course_fee" id="product-name" type="number" />
                      </div>
                      <div class="col-4 mb-2">
                          <label class="form-label" for="import-status">Payment Mode: </label>
                          <select class="form-select" id="import-status" name="payment_mode">
                          <option selected="selected" disabled>Select Mode</option>
                      <option value="One-Shot">One-Shot</option>
                      <option value="Semester">Semester</option>
                      <option value="Installment">Installment</option>
                        </select>
                      </div>
                      <div class="col-4 mb-2">
                        <label class="form-label" for="product-name">Remarks:</label>
                        <input class="form-control" name="remarks" id="product-name" type="text" />
                      </div>
                  </div>



                
                  </form>
                </div>
              </div>
             
            </div>
            
          </div>
         
          
          <?php include '../template/bottom.php';?>
        </div>