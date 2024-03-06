<div class="content">
          
          <div class="card mb-3">
            <div class="card-body">
            <form action="insert_records.php" method="post">
              <div class="row flex-between-center">
                <div class="col-md">
                  <h5 class="mb-2 mb-md-0">Add Staff</h5>
                </div>
                <div class="col-auto">
                  <input  type="reset" class="btn btn-link text-secondary p-0 me-3 fw-medium"  value="Discard">
                  <input type="submit" class="btn btn-primary" name="insert_employee" role="button" value="Add Staff">
                </div>
              </div>
            </div>
          </div>
          <div class="row g-0">
            <div class="col-lg-12 pe-lg-2">
              <div class="card mb-3">
                <div class="card-header bg-body-tertiary">
                  <h6 class="mb-0">Basic Employee Information</h6>
                </div>
                <div class="card-body pt-0">
                 
                  <div class="row gx-2">
                      <div class="col-8 mb-2">
                        <label class="form-label" for="product-name">Employee name:</label>
                        <input class="form-control" id="product-name" name="employee_name" type="text"  /></div>
                        <?php 
                  // $str = date("y");
                  $randomid = mt_rand(100,999); 
                  // $abc = $str.$randomid;
                  ?>
                      <div class="col-2 mb-2">
                        <label class="form-label" for="manufacturar-name">Employee Code:</label>
                        <input class="form-control" name="emp_code" id="product-name" type="text" value="<?php echo $randomid;?>" readonly/>
                      </div>
                      <div class="col-2 mb-2">
                        <label class="form-label" for="manufacturar-name">Joining Date:</label>
                        <input class="form-control datetimepicker" name="joining_date" id="start-date" type="text" placeholder="dd/mm/yy" data-options='{"dateFormat":"d/m/y","disableMobile":true}' />
                      </div>
                  </div>

                  <div class="row gx-2">
                      <div class="col-4 mb-2">
                        <label class="form-label" for="product-name">Email Address:</label>
                        <input class="form-control" name="email" id="product-name" type="email" />
                      </div>
                      <div class="col-4 mb-2">
                        <label class="form-label" for="product-name">Contact No:</label>
                        <input class="form-control" id="product-name" name="contact_no" type="number" />
                      </div>
                      <div class="col-4 mb-2">
                        <label class="form-label" for="manufacturar-name">Alt Contact No:</label>
                        <input class="form-control" id="product-name" name="alt_contact_no" type="number" />
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
                        <select class="form-select" id="import-status" name="qualification">
                          <option value="imported" selected disabled>Select Qualification</option>
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
                      
                      <div class="col-3 mb-2">
                        <label class="form-label" for="import-status">Select Designation: </label>
                        <select class="form-select" id="import-status" name="designation">
                          <option value="imported" selected disabled>Select Designation</option>
                          <?php
                                           include '../include/connection.php';                 
                                          $records = mysqli_query($conn, "SELECT * From tbl_designation_master"); 
                                          while($data = mysqli_fetch_array($records))
                                          {
                                            echo "<option>" .$data['designation_name'] ."</option>";
                                          } 
                                            mysqli_close($conn);
                                          
                                          ?>  
                          </select>
                      </div>
                     
                      <div class="col-3 mb-2">
                        <label class="form-label" for="product-name">Experience:(In month)</label>
                        <input class="form-control" name="experience" id="product-name" type="text" />
                      </div>
                      
                      <div class="col-3 mb-2">
                        <label class="form-label" for="product-name">Time:</label>
                        <input class="form-control" name="work_time" id="product-name" type="text" />
                      </div>
                      
                      <div class="col-3 mb-2">
                        <label class="form-label" for="product-name">Salary:</label>
                        <input class="form-control" name="salary" id="product-name" type="text" />
                      </div>
                     
                  </div>

               



                
                  </form>
                </div>
              </div>
             
            </div>
            
          </div>
         
          
          <?php include '../template/bottom.php';?>
        </div>