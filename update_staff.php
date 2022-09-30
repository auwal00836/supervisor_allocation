<?php
 session_start();
 error_reporting();
$connection=mysqli_connect("localhost", "root", "", "allocationDB");

 
     echo $_SESSION['staff'];
        $query = "SELECT  * FROM staff WHERE staff_id = '".$_SESSION['staff']."' ";
        $result = mysqli_query($connection, $query);
         while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {

        $name = $row["staff_name"];
        $email = $row["email"];
        $phone = $row["phone"];
        $position = $row["position"];


    }
      //echo $_SESSION['id'];

        if (isset($_POST['btn_update_staff'])) {
            //$id = $_GET['sn'];
        //global $db;
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $position = $_POST["position"];
             $query = "UPDATE staff SET staff_name='$name', phone='$phone', email='$email',position='$position' WHERE staff_id = '".$_SESSION['staff']."' ";
             $result = mysqli_query($connection, $query);
             if ($result==1) {
                ?>
                    <script>
                      alert("Record successful update");
                        setTimeout(() => window.location.href = "update_staff.php", 2000);
                    </script>

                <?php
        }else{

            return false;
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
  
              <div class="card " style=" min-height: 450px;">
                <div class="text-center mt-2"><h2>Update Profile</h2></div>
                <hr>
                <div class="card-body">
                
                  <form method="POST">
                    <div class="container col-md-6 offset-sm-3">
                      <div class="form-group mb-3">
                        <label>Staff Name</label>
                        <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
                      </div>
                      <div class="form-group mb-3">
                        <label>Phone Number</label>
                        <input type="text" name="phone" class="form-control" value="<?php echo $phone; ?>">
                      </div>
                      <div class="form-group mb-3">
                        <label>Email Address</label>
                        <input type="text" name="email" class="form-control" value="<?php echo $email; ?>">
                      </div>
                      <div class="form-group mb-3">
                        <label>Position</label>
                        <input type="text" name="position" class="form-control" value="<?php echo $position; ?>">
                      </div>
                      <div class="form-group mb-3">
                        <button class="btn btn-danger rounded-2 order-0 form-control" type="submit" name="btn_update_staff">Submit</button>
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