<div class="content">
          
          <div class="card mb-3">
            <div class="card-body">
            <form action="insert_records.php" method="post" enctype='multipart/form-data'>
              <div class="row flex-between-center">
                <div class="col-md">
                  <h5 class="mb-2 mb-md-0">Add a Enquiry</h5>
                </div>
                <div class="col-auto">
                  <input  type="reset" class="btn btn-link text-secondary p-0 me-3 fw-medium"  value="Discard">
                  <input type="submit" class="btn btn-primary" name="insert_documents" role="button" value="Add Enquiry">
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
                      <div class="col-4 mb-2">
                        <label class="form-label" for="product-name">Enquiry name:</label>
                        <input class="form-control" id="product-name" type="file" name="stat_file"/>
                    </div>
                      <div class="col-4 mb-2">
                        <label class="form-label" for="manufacturar-name">Document Category</label>
                        <select class="form-select" id="import-status" name="category">
                          <option value="imported" selected disabled>Select Category</option>
                          <option value="Passport_Photo">Photo</option>
                          <option value="Aadhar Card">Aadhar Card</option>
                          <option value="Leaving Certificate">Leaving Certificate</option>
                          <option value="Family Aadhar Card">Family Aadhar Card</option>
                          
                          <option value="Marksheet">Marksheet</option>
                          <option value="Other Doc">Other Doc</option>

                          </select>
                      </div>
                      <div class="col-4 mb-2">
                        <label class="form-label" for="manufacturar-name">Student Name:</label>
                        <select class="form-select" id="import-status" name="enrollment_no">
                        <option value="imported" selected disabled>Select Student</option>
                        <?php
                                           include '../include/connection.php';                 
                                          $records = mysqli_query($conn, "SELECT * From tbl_admission order by student_name desc"); 
                                          while($data = mysqli_fetch_array($records))
                                          {?>
                                            <option value='<?php echo $data['enrollment_no']?>'><?php echo $data['student_name'] ?></option>";
                                          <?php } 
                                            mysqli_close($conn);
                                        ?>  
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