
        <div class="content">
          
          <div class="card mb-3">
            <div class="card-body">
            <form action="insert_records.php" method="post" enctype='multipart/form-data'>
              <div class="row flex-between-center">
                <div class="col-md">
                  <h5 class="mb-2 mb-md-0"> Add Notice Details</h5>
                </div>
                <div class="col-auto">
                  <input  type="reset" class="btn btn-link text-secondary p-0 me-3 fw-medium"  value="Discard">
                  <input type="submit" class="btn btn-primary" name="insert_student_notice" role="button" value="Add Notice">
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
                        <label class="form-label" for="product-name">Category name:</label>
                        <input class="form-control" id="product-name" name="category" type="text"/></div>
                     
                      <div class="col-6 mb-2">
                        <label class="form-label" for="manufacturar-name">File No:</label>
                        <input class="form-control" name="stat_file" id="product-name" type="file" />
                      </div>
                      
                  </div>

                  </form>
                </div>
              </div>
             
            </div>
            
          </div>
         
          
          <?php include '../template/bottom.php';?>
        </div>
        
      