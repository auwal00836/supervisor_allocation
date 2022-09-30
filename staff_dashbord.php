<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <?php 
  session_start();
  include 'inc/header.php'; ?>
  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">

     <?php include 'inc/staff_navbar.php'; ?>


       <section  style="padding-bottom: 0px; margin-top: -40px">
      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->



      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="bg-100 py-5">

        <div class="container-lg">
          <div class="row justify-content-center">
            <div class="col-md-8 col-lg-5 text-center mb-1">
              <h2>Staff Dashboard</h2>
              <p>Welcome Staff, you are entitled to Check For allocation of examination .</p>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-4 pt-2 px-md-2 px-lg-3">
              <div class="card h-100">
                <div class="card-body d-flex flex-column justify-content-around mx-auto">
                  <div class="text-center pt-5"><img class="img-fluid" src="assets/img/icons/pricing.png" alt="" />
                    <h5 class="my-4">Staff</h5>
                  </div>
                  
                </div>
              </div>
            </div>
            <div class="col-md-4 pt-2 px-md-2 px-lg-3">
              <div class="card h-100">
                <div class="card-body d-flex flex-column justify-content-around mx-auto">
                  <div class="text-center pt-5"><img class="img-fluid" src="assets/img/icons/pricing.png" alt="" />
                    <h5 class="my-4">Timetable</h5>
                  </div>
                 
                </div>
              </div>
            </div>
            <div class="col-md-4 pt-2 px-md-2 px-lg-3">
              <div class="card h-100">
                <div class="card-body d-flex flex-column justify-content-around mx-auto">
                  <div class="text-center pt-5"><img class="img-fluid" src="assets/img/icons/pricing.png" alt="" />
                    <h5 class="my-4">Invigilation Allocation</h5>
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