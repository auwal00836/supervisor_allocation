<?php
 require_once('config/db.php');
 $dbb = new operations();
 $data = $dbb->fetch_staff_record();
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
              <a href="Add-Staff.php" class="btn btn-outline-danger rounded-pill mb-1" type="submit">Add Staff <span class="fa fa-plus"></span> </a>
              <div class="card " style=" min-height: 450px;">
                <div class="card-body">
                  <div class="text-center mt-2"><h2>Registered Staff</h2></div>
                <hr>
                  <table class="table table-responsive-md  table-striped" style="width: 100%;">
                      <thead>
                        <th>S/N</th>
                        <th>Staff Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Position</th>
                        <th>Action</th>
                      </thead>
                      <tbody>
                        <?php 
                          $counter=1;
                          while ($row = mysqli_fetch_array($data)) {
                            # code...
                          ?>
                          <tr>
                          <td><?php echo $counter++; ?></td>
                          <td><?php echo $row["staff_name"]; ?></td>
                          <td><?php echo $row["phone"]; ?></td>
                          <td><?php echo $row["email"]; ?></td>
                          <td><?php echo $row["position"]; ?></td>
                          <td><a href="delete_staff.php?token=<?php echo $row["staff_id"]; ?>" class="btn btn-danger">Delete</a></td>
                        </tr>
                          <?php
                          }
                         ?>
                      </tbody>
                  </table>
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