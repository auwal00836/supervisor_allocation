<?php
 require_once('config/db.php');
 $dbb = new operations();
 $dd = $dbb->get_timetable();
 $dbb->allocate_invigilator();
 $data = mysqli_fetch_array($dd);
?>


<!DOCTYPE html>
<html lang="en-US" dir="ltr">
<style type="text/css">
.lds-ring {
  display: inline-block;
  position: relative;
  width: 80px;
  height: 80px;
}
.lds-ring div {
  box-sizing: border-box;
  display: block;
  position: absolute;
  width: 64px;
  height: 64px;
  margin: 8px;
  border: 8px solid red;
  border-radius: 50%;
  animation: lds-ring 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
  border-color: red transparent transparent transparent;
}
.lds-ring div:nth-child(1) {
  animation-delay: -0.45s;
}
.lds-ring div:nth-child(2) {
  animation-delay: -0.3s;
}
.lds-ring div:nth-child(3) {
  animation-delay: -0.15s;
}
@keyframes lds-ring {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

#loader{
  display: none;
}

</style>
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
              <a href="Allocated.php" class="btn btn-outline-danger rounded-pill mb-1" type="submit"> <b></b> View Allocation <span class="fa fa-plus"></span> </a>
              <div class="card " style=" min-height: 450px;">
                <div class="text-center mt-2"><h2>Allocate Invigilator</h2></div>
                <hr>
                <div class="card-body">
                  <div class="container col-md-6 offset-sm-3">
                     <?php $dbb->display_message(); ?>
                    <div class="alert alert-success text-center" id="success" style="display: none;"> Allocation Successful!</div>
                  <div id="loader">
                        <div class="lds-ring form-group mb-2 offset-sm-5 "><div></div><div></div><div></div><div></div></div>
                        <div class="mb-2 alert alert-danger">Please wait while the system is allocating invigilators</div>
                      </div>
                  </div>

                  <form method="POST" enctype="multipart/form-data">
                    <div class="container col-md-6 offset-sm-3">
                      <div class="form-group mb-4 mt-2">
                        <label>Number of Invigilators</label>
                        <select name="staff" class="form-control">
                          <option value="">Select number of Invigilators per hall</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                        </select>
                      </div>

                      
                      
                <div class="form-group mb-3 ">
                    <button class="btn btn-danger rounded-2 order-0 form-control" type="submit" name="btn_schedule">Upload</button>
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

   <script>
    // var loader = document.getElementById("loader");
    // loader.style.display = "none";
    // function startLoader() {
    //   var load = document.getElementById("loader");
    //   load.style.display = "block";
    //   setTimeout(() => load.style.display = "none", 5000);
    // }
  // const loader = document.querySelector('#loader');
  // setTimeout(() => loader, 3000);
  // setTimeout(() => window.location.href = "Allocated.php", 3000);
 </script>

  </body>

</html>