<?php
/*require_once('config/db.php');
 $dbb = new operations();
 $dbb->staff_login();*/
 session_start();
$connection=mysqli_connect("localhost", "root", "", "allocationDB");

  if(isset($_POST['btn_staff_login'])){

            $_SESSION['staff'] = $_POST['username'];
            $password = $_POST['password'];

            $query = "SELECT * FROM staff WHERE email = '".$_SESSION['staff']."' AND phone = '$password' ";
        $result = mysqli_query($connection, $query);
        $data = mysqli_fetch_assoc($result);

        if (mysqli_num_rows($result) > 0) {

               $_SESSION['staff'] = $data["staff_id"];
               header('location:staff_dashbord.php');
            
            # code...
        }else{
            
         echo '<script> alert("failed to login!!!")</script>';
        }

    }

?>
<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <?php include 'inc/header.php'; ?>
  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">

     <?php include 'inc/staff_navbar.php'; ?>


    





      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pt-5 pt-md-6">

        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-5 col-lg-7 text-lg-center"><img class="img-fluid mb-5 mb-md-0" src="assets/img/illustrations/2.png" alt="" /></div>
            <div class="col-md-7 col-lg-5 text-center text-md-start mt-4  pt-3">
              <h2 class="mb-3 text-center">Staff Login</h2>
              <p> This system automate the process of allocating the duties to achieve efficient coordination of examination management process in an educational organization.</p>
              <div class="d-flex">
                <div class="card-body">
                  <form action="" method="post">
                    <div class="form-group mb-4">
                       
                      
                        <input type="text" name="username"  class="form-control" placeholder="Email.." required="required" autofocus="autofocus">
                       
                    </div>
                    <div class="form-group mb-4">
                      
                        <input type="password" name="password" class="form-control" placeholder="Password" required="required">
                       
                    </div>
                    <div class="form-group">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="remember-me">
                          Remember Password
                        </label>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block mb-4" name="btn_staff_login">Login</button>
                  </form>
                  <div class="text-center">
                
   
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div><!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
   <?php include 'inc/main_js.php'; ?>
  </body>

</html>