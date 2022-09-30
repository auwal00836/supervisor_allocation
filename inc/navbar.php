 <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" data-navbar-on-scroll="data-navbar-on-scroll" style="background-color: #fff !important;">
        <div class="container"><a class="navbar-brand" href="Dashboard.php"><img src="assets/img/icons/logo.png" alt="" width="30" /><span class="text-1000 fs-1 ms-2 fw-medium">Invigilation Allocation System<span class="fw-bold"></span></span></a>
          <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <?php 

            if (!empty($_SESSION['Active'])) {

              ?>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto border-bottom border-lg-bottom-0 pt-2 pt-lg-0">
              <li class="nav-item"><a class="nav-link active active" aria-current="page" href="Dashboard.php">Dashboard</a></li>
              <li class="nav-item"><a class="nav-link" href="Staff.php"> Staff </a></li>
              <li class="nav-item"><a class="nav-link" href="Timetable-Upload.php"> Upload Timetable </a></li>
              <li class="nav-item"><a class="nav-link" href="Allocated.php"> Allocate Invigilation </a></li>
              <li class="nav-item"><a class="nav-link" href="logout.php"> Logout </a></li>
            </ul>
            
              <img src="assets/img/user-icon.jpg" alt="" width="30" height="30" style="border: 1px solid red; border-radius: 100%; height: 50px; width: 50px; padding: 0px" />

          </div>
          <?php
            }else{

              ?>

               <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto border-bottom border-lg-bottom-0 pt-2 pt-lg-0">
              <li class="nav-item"><a class="nav-link active active" aria-current="page" href="index.php">Home</a></li>
              <li class="nav-item"><a class="nav-link" href="check_allotment.php">Check Allocation</a></li>
              <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
              <li class="nav-item"><a class="nav-link" href="about.php"> About </a></li>
            </ul>
                <a href="staff_login.php" class="btn btn-outline-danger rounded-pill order-0">Staff LogIn</a>

              <a href="login.php" class="btn btn-outline-danger rounded-pill order-0">Admin Logn</a>

          </div>

          <?php
            }
           ?>
          
        </div>
      </nav>