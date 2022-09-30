<?php
 require_once('config/db.php');
 $dbb = new operations();
 $dbb->add_staff();
?>
<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <?php include 'inc/header.php'; ?>
  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">

     <?php include 'inc/navbar.php'; ?>


       <section  style="padding-bottom: 0px; margin-top: -40px">
      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="bg-100 py-5">

        <div class="container-lg">
          <div class="row justify-content-center">
            <div class="col-md-12 pt-0 px-md-2 px-lg-3">
              <a href="Upload-Staff.php" class="btn btn-outline-danger rounded-pill mb-1" type="submit"> <b>+</b> Upload Staff <span class="fa fa-plus"></span> </a>
              <div class="card " style=" min-height: 450px;">
                <div class="text-center mt-2"><h2>Add Staff</h2></div>
                <hr>
                <div class="card-body">
                  <?php $dbb->display_message(); ?>
                  <form method="POST">
                    <div class="container col-md-6 offset-sm-3">
                      <div class="form-group mb-3">
                        <label>Staff Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Zainab...">
                      </div>
                      <div class="form-group mb-3">
                        <label>Phone Number</label>
                        <input type="text" name="phone" class="form-control" placeholder="+234xxxxxxxx">
                      </div>
                      <div class="form-group mb-3">
                        <label>Email Address</label>
                        <input type="text" name="email" class="form-control" placeholder="xxxxx@gmail.com">
                      </div>
                      <div class="form-group mb-3">
                        <label>Position</label>
                        <input type="text" name="position" class="form-control" placeholder="Senior lecturer">
                      </div>
                      <div class="form-group mb-3">
                        <button class="btn btn-danger rounded-2 order-0 form-control" type="submit" name="btn_add_staff">Submit</button>
                      </div>


                    </div>
                  </form>
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