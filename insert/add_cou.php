
        <div class="content">
          
          <div class="card mb-3">
            <div class="card-body">
            <form action="insert_records.php" method="post" enctype='multipart/form-data'>
              <div class="row flex-between-center">
                <div class="col-md">
                  <h5 class="mb-2 mb-md-0"> Add Course Details</h5>
                </div>
                <div class="col-auto">
                  <input  type="reset" class="btn btn-link text-secondary p-0 me-3 fw-medium"  value="Discard">
                  <input type="submit" class="btn btn-primary" name="insert_course" role="button" value="Add Course">
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
                      <div class="col-6 mb-2">
                        <label class="form-label" for="product-name">Course name:</label>
                        <input class="form-control" id="product-name" name="course_name" type="text" required/></div>
                        
                        <div class="col-6 mb-2">
                        <label class="form-label" for="product-name">Course Duration:(in months)</label>
                        <input class="form-control" id="product-name" name="course_duration" type="number" required/></div>
                        
                        
                         <div class="col-6 mb-2">
                        <label class="form-label" for="product-name">Course Fee:</label>
                        <input class="form-control" id="product-name" name="course_fee" type="number" required/></div>
                        
                         <div class="col-6 mb-2">
                        <label class="form-label" for="product-name">Course Certificate:</label>
                        <input class="form-control" id="product-name" name="certificate" type="text" required/></div>
                     
                      
                      
                  </div>

                  </form>
                </div>
              </div>
             
            </div>
            
          </div>
         
          
          <?php include '../template/bottom.php';?>
        </div>
        
      