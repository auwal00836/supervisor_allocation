<?php
 require_once('config/db.php');
 $dbb = new operations();
 $data = $dbb->fetch_timetable();
 $data2 = $dbb->fetch_timetable_two();
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
               <a href="Upload-Timetable.php" class="btn btn-outline-danger rounded-pill mb-1" type="submit"> <b>+</b> Upload Timetable <span class="fa fa-plus"></span> </a>
              <div class="card " style=" min-height: 450px;">
                <div class="card-body">
                  <div class="text-center mt-2"><h2>Examination Timetable</h2></div>
                <hr>
                  <div class="row">
                    <div class="col-md-6 offset-sm-1">
                      <table class="table table-responsive-md  table-striped" style="width: 100%;">
                      <thead>
                        <tr>
                          <th class="h5">Date</th>
                           <th class="h5">Days</th>
                          <th class="h5">8:30 AM - 11:00 AM</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                             $counter=1;
                          while ($row = mysqli_fetch_array($data)) {
                         ?>
                           <tr>
                              <td><?php echo $row["date"]; ?></td>
                               <td><?php echo $row["days"]; ?></td>
                              <td><span  style="font-size: 18px"><?php echo $row["course"]; ?></span> <br><span  style="font-size: 18px"><?php echo $row["level"]; ?> </span> </td>
                           </tr>
                         <?php
                          }
                          ?>
                      </tbody>
                  </table>
                    </div>
                    <div class="col-md-5" style="margin-left: -32px;">
                      <table class="table table-responsive-md  table-striped" style="width: 100%;">
                      <thead>
                        <tr>
                          <th class="h5">11:30 AM - 13:30 PM</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                             $counter=1;
                          while ($row = mysqli_fetch_array($data2)) {
                         ?>
                           <tr>
                              <td><span  style="font-size: 18px"><?php echo $row["course"]; ?></span> <br><span  style="font-size: 18px"><?php echo $row["level"]; ?> </span> </td>
                           </tr>
                         <?php
                          }
                          ?>
                      </tbody>
                  </table>
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