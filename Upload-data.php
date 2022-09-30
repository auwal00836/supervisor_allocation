<?php
 require_once('config/db.php');
 $dbb = new operations();
 $dbb->add_multiple_staff();
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
              <!-- <a href="Upload-Staff.php" class="btn btn-outline-danger rounded-pill mb-1" type="submit"> <b>+</b> Upload Staff <span class="fa fa-plus"></span> </a> -->
              <div class="card " style=" min-height: 450px;">
                <div class="text-center mt-2"><h2>Upload Staff</h2></div>
                <hr>
                <div class="card-body">
                  <?php $dbb->display_message(); ?>
                  <form method="POST" enctype="multipart/form-data">
                    <div class="container col-md-6 offset-sm-3">
                      <div class="form-group mb-4 mt-4">
                        <label>Choose a file (CSV format only)</label>
                        <input type="file" name="file" class="form-control">
                      </div>
                      
                      <div class="form-group mb-3">
                        <button class="btn btn-danger rounded-2 order-0 form-control" type="submit" name="btn_add_multiple_staff">Upload</button>
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