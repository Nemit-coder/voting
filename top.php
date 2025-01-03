<nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-lg">
          <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarStandard" aria-controls="navbarStandard" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
          <a class="navbar-brand me-1 me-sm-3" href="<?php echo BASE_URL?>index.php">
            <div class="d-flex align-items-center">
              <img class="me-2" src="<?php echo BASE_URL?>assets/img/pureskill.png" alt="" width="140" />
            </div>
          </a>
          <div class="collapse navbar-collapse scrollbar" id="navbarStandard" style="margin-left:150px">
            <ul class="navbar-nav" data-top-nav-dropdowns="data-top-nav-dropdowns"> 
              <li class="nav-item dropdown">
                <a class="nav-link" href="view_register.php" role="button"  aria-haspopup="true" aria-expanded="false">Registrations</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="view_vote.php" role="button"  aria-haspopup="true" aria-expanded="false">Votes</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="reports.php" role="button"  aria-haspopup="true" aria-expanded="false">Reports</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="add_user.php" role="button"  aria-haspopup="true" aria-expanded="false">Add User</a>
              </li>
              
            </ul>
          </div>
          <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
          
            
           
            <li class="nav-item dropdown"><a class="nav-link pe-0 ps-2" id="navbarDropdownUser" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-xl">
                  <img class="rounded-circle" src="<?php echo BASE_URL?>assets/img/team/3-thumb.png" alt="" />
                </div>
              </a>
              <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end py-0" aria-labelledby="navbarDropdownUser">
                <div class="bg-white dark__bg-1000 rounded-2 py-2">
                  <div>
                    <h5 class="mx-5 text-danger"><?php echo strtoupper($_SESSION['username']) ?></h5>
                  </div>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="<?php echo BASE_URL?>logout.php">Logout</a>
                </div>
              </div>
            </li>
          </ul>
        </nav>