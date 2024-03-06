<div class="content">
          
          <div class="card mb-3">
            <div class="card-body">
            <form action="insert_records.php" method="post">
              <div class="row flex-between-center">
                <div class="col-md">
                  <h5 class="mb-2 mb-md-0">Create a Batch</h5>
                </div>
                <div class="col-auto">
                  <input  type="reset" class="btn btn-link text-secondary p-0 me-3 fw-medium"  value="Discard">
                  <input type="submit" class="btn btn-primary" name="insert_batch" role="button" value="Create Batch">
                </div>
              </div>
            </div>
          </div>
          <div class="row g-0">
            <div class="col-lg-12 pe-lg-2">
              <div class="card mb-3">
                <div class="card-header bg-body-tertiary">
                  <h6 class="mb-0">Batch information</h6>
                </div>
                <div class="card-body pt-0">
                 
                  <div class="row gx-2">
                  <div class="col-4 mb-2">
                        <label class="form-label" for="import-status">Module: </label>
                        <select class="form-select" id="import-status" name="module_name">
                          <option value="imported" selected disabled>Select Module</option>
                          <?php
                                           include '../include/connection.php';                 
                                          $records = mysqli_query($conn, "SELECT * From tbl_module_master"); 
                                          while($data = mysqli_fetch_array($records))
                                          {
                                            echo "<option>" .$data['module_name'] ."</option>";
                                          } 
                                            mysqli_close($conn);
                                          
                                          ?>  
                          </select>
                      </div>
                      <div class="col-4 mb-2">
                        <label class="form-label" for="import-status">Trainer: </label>
                        <select class="form-select" id="import-status" name="employee_name">
                          <option value="imported" selected disabled>Select Trainer</option>
                          <?php
                                           include '../include/connection.php';                 
                                          $records = mysqli_query($conn, "SELECT * From tbl_staff where designation IN (6,7,8)"); 
                                          while($data = mysqli_fetch_array($records))
                                          {
                                            echo "<option>" .$data['employee_name'] ."</option>";
                                          } 
                                            mysqli_close($conn);
                                          
                                          ?>  
                          </select>
                      </div>
                      <div class="col-4 mb-2">
                        <label class="form-label" for="import-status">Batch Time: </label>
                        <select class="form-select" id="import-status" name="batch_time">
                          <option value="imported" selected disabled>Select Batch Time</option>
                          <?php
                                           include '../include/connection.php';                 
                                          $records = mysqli_query($conn, "SELECT * From tbl_batch_time_master"); 
                                          while($data = mysqli_fetch_array($records))
                                          {
                                            echo "<option>" .$data['batch_time'] ."</option>";
                                          } 
                                            mysqli_close($conn);
                                          
                                          ?>  
                          </select>
                      </div>
                  </div>

            
                  <div class="row gx-2">
                  <div class="col-4 mb-2">
                        <label class="form-label" for="manufacturar-name">Start Date</label>
                        <input class="form-control datetimepicker" name="start_batch_date" id="start-date" type="text" placeholder="dd/mm/yy" data-options='{"dateFormat":"Y-m-d","disableMobile":true}' />
                      </div>
                    <div class="col-4 mb-2">
                        <label class="form-label" for="manufacturar-name">End Date</label>
                        <input class="form-control datetimepicker" name="end_batch_date" id="start-date" type="text" placeholder="dd/mm/yy" data-options='{"dateFormat":"Y-m-d","disableMobile":true}' />
                      </div>
                      <div class="col-4 mb-2">
                        <label class="form-label" for="import-status">Lab: </label>
                        <select class="form-select" id="import-status" name="lab">
                        <option value="imported" selected disabled>Select Lab</option>
                        <option value="1">1 </option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                      </select>
                    </div>
                  </div>


                


                
                  </form>
                </div>
              </div>
             
            </div>
            
          </div>
         
          
          <?php include '../template/bottom.php';?>
        </div>