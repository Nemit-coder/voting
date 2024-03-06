<div class="content">
          
          <div class="card mb-3">
            <div class="card-body">
            <form action="insert_records.php" method="post">
              <div class="row flex-between-center">
                <div class="col-md">
                  <h5 class="mb-2 mb-md-0">Add a Enquiry</h5>
                </div>
                <div class="col-auto">
                  <input  type="reset" class="btn btn-link text-secondary p-0 me-3 fw-medium"  value="Discard">
                  <input type="submit" class="btn btn-primary" name="insert_enquiry" role="button" value="Add Enquiry">
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
                      <div class="col-9 mb-2">
                        <label class="form-label" for="product-name">Enquiry name:</label>
                        <input class="form-control" id="product-name" type="text" name="enquiry_name"/></div>
                      <div class="col-3 mb-2">
                        <label class="form-label" for="manufacturar-name">Enquiry Date:</label>
                        <input class="form-control datetimepicker" id="start-date" name="date" type="text" placeholder="dd/mm/yy" data-options='{"dateFormat":"Y-m-d","disableMobile":true}' />
                      </div>
                  </div>

                  <div class="row gx-2">
                      <div class="col-4 mb-2">
                        <label class="form-label" for="product-name">Email Address:</label>
                        <input class="form-control" id="product-name" type="email" name="email" />
                      </div>
                      <div class="col-4 mb-2">
                        <label class="form-label" for="product-name">Contact No:</label>
                        <input class="form-control" id="product-name" type="number" name="phone_no" />
                      </div>
                      <div class="col-4 mb-2">
                        <label class="form-label" for="manufacturar-name">Alt Contact No:</label>
                        <input class="form-control" id="product-name" type="number" name="alt_phone_no"/>
                      </div>
                  </div>

                  <div class="row gx-2">
                    <div class="col-4 mb-3">
                    <label class="form-label" for="manufacturar-name">Gender:</label><br>
                      <div class="form-check-inline">
                        <input class="form-check-input mr-3" id="flexRadioDefault1" type="radio" name="gender"  value="Male"/>
                        <label class="form-check-label mb-0" for="flexRadioDefault1">Male</label>
                      </div>
                      <div class="form-check-inline">
                        <input class="form-check-input" id="flexRadioDefault2" type="radio" name="gender"  value="Female"/>
                        <label class="form-check-label mb-0" for="flexRadioDefault2">Female</label>
                      </div>
                    </div>
                    <div class="col-4 mb-2">
                        <label class="form-label" for="manufacturar-name">Date of Birth</label>
                        <input class="form-control datetimepicker" name="dob" id="start-date" type="text" placeholder="dd/mm/yy" data-options='{"dateFormat":"Y-m-d","disableMobile":true}' />
                      </div>
                      <div class="col-4 mb-2">
                        <label class="form-label" for="import-status">Qualification: </label>
                        <select class="form-select" id="import-status" name="qualitication">
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
                      <div class="col-6 mb-2">
                        <label class="form-label" for="product-name">Address:</label>
                        <input class="form-control" id="product-name" type="text" name="address"/>
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
                      <div class="col-2 mb-2">
                          <label class="form-label" for="import-status">Pincode: </label>
                          <input class="form-control" id="product-name" type="text" name="pincode"/>
                      </div>
                  </div>


                  <div class="row gx-2">
                      
                      <div class="col-4 mb-2">
                        <label class="form-label" for="import-status">Enquiry Source: </label>
                        <select class="form-select" id="import-status" name="source_enquiry">
                          <option value="imported" selected disabled>Select Source</option>
                          <option value="WOM">WOM </option>
                          <option value="Letter">Letter </option>
                          <option value="Seminar">Seminar</option>
                          <option value="Social Media">Social Media</option>
                          <option value="Student Reference">Student Reference</option>
                          </select>
                      </div>
                      <div class="col-4 mb-2">
                          <label class="form-label" for="import-status">Enquiry Counsellor: </label>
                          <select class="form-select" id="import-status" name="counsellor">
                          <option value="imported" selected disabled>Select Counsellor</option>
                          
                          <?php
                                           include '../include/connection.php';                 
                                          $records = mysqli_query($conn, "SELECT employee_name From tbl_staff"); 
                                          while($data = mysqli_fetch_array($records))
                                          {
                                            echo "<option>" .$data['employee_name'] ."</option>";
                                          } 
                                            mysqli_close($conn);
                                          
                                          ?>  
                        </select>
                      </div>
                      <div class="col-4 mb-2">
                          <label class="form-label" for="import-status">Telecaller: </label>
                          <select class="form-select" id="import-status" name="telecaller">
                          <option value="imported" selected disabled>Select Telecaller</option>
                          <option value="WOM">WOM </option>
                          <?php
                                           include '../include/connection.php';                 
                                          $records = mysqli_query($conn, "SELECT employee_name From tbl_staff"); 
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
                      <div class="col-12 mb-2">
                        <label class="form-label" for="product-name">Remarks:</label>
                        <input class="form-control" id="product-name" type="text" name="remarks" />
                      </div>
                      
                  </div>

                  </form>
                </div>
              </div>
             
            </div>
            
          </div>
         
          
          <?php include '../template/bottom.php';?>
        </div>