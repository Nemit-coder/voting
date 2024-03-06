<div class="content">
          
          <div class="card mb-3">
            <div class="card-body">
            <form action="<?php echo BASE_URL?>repo/st.php" method="POST">
              <div class="row flex-between-center">
                <div class="col-md">
                  <h5 class="mb-2 mb-md-0">Select Date for Student report</h5>
                </div>
                <div class="col-auto">
                      <input type="submit" class="btn btn-primary" name="student_report" role="button" value="Student Report">
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
                        <label class="form-label" for="manufacturar-name">Start Date:</label>
                        <input class="form-control datetimepicker"  name="start-date" type="date" placeholder="dd/mm/yy" data-options='{"dateFormat":"Y-m-d","disableMobile":true}' />
                      </div>
                      <div class="col-6 mb-2">
                        <label class="form-label" for="manufacturar-name">End Date:</label>
                        <input class="form-control datetimepicker"  name="end-date" type="date" placeholder="dd/mm/yy" data-options='{"dateFormat":"Y-m-d","disableMobile":true}' />
                      </div>
                  </div>

                  </form>
                </div>
              </div>
             
            </div>
            
          </div>
         
          
          <?php include '../template/bottom.php';?>
        </div>