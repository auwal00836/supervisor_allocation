<?php
require_once('config/db.php');
 $dbb = new operations();
 $data = $dbb->fetch_allocation_one();
 $data2 = $dbb->fetch_allocation_two();
  
     
?>
<!DOCTYPE html>
<html>
 <?php include 'inc/header.php'; ?>
  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">

   
<body>
	<div class="col-sm-12 col-md-12 col-lg-9 mt-4 mt-md-4 mt-lg-0 mb-5">
        <div class="card ">
            <h4 class="h4-responsive orange-text font-weight-bold p-3  mb-0 d-print-none">Allocation Preview</h4>
            <hr class="green mt-0 d-print-none">
           </div>
         </div>
         	<div class="container">
	 			<div class="row py-2">
				    <div class="col-sm-2  text-center">
				      <img src="kpoly.png" width="90" height="90" class="img-fluid rounded ml-3 ">
				    </div>
				    <div class="col-sm-8  text-center">
				        <h4 class="h4-responsive text-center font-weight-bold">KADUNA POLYTECHNIC <BR>DEPARTMENT OF COMPUTER SCIENCE</h4>
				    </div>
			       
			    </div>

				<div class="row text-center">
				    <div class="col-12  d-none d-md-block d-lg-block d-xl-block">
				        <div class="text-center mb-2" style="margin-top: -80px;">
				         <p class="text-center mt-3"> 
				         	<br>
				              <b>Semester: FIRST SEMESTER <br> Session: 2020/2023 EXAMS</b>
                      <br>
                      <b>Examination Invigilation System</b>
				         </p>
              </div>
				    </div>
				</div>
	              
				 <div class="row">
                    <div class="col-md-6 ">
                      <table class="table table-responsive-md  table-striped" style="width: 100%;">
                      <thead>
                        <tr>
                          <th class="h4"><b>Date</b></th>
                          <th class="h4"><b>Days</b></th>
                          <th class="h4"><b>8:30 AM - 11:00 AM</b></th>
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
                              <td><span  style="font-size: 18px"><b>Course:  </b><?php echo $row["course"]; ?></span> <br><span  style="font-size: 18px"><b>Level:  </b><?php echo $row["level"]; ?> </span>
                              <br><span  style="font-size: 18px"><b>Venue:  </b><?php echo $row["HALL"]; ?> </span><br><span  style="font-size: 18px"><b>Invigilators:  </b><?php echo $row["Invigilators"]; ?> </span>  </td>
                           </tr>
                         <?php
                          }
                          ?>
                      </tbody>
                  </table>
                    </div>
                    <div class="col-md-6 style="margin-left: -32px;">
                      <table class="table table-responsive-md  table-striped" style="width: 100%;">
                      <thead>
                        <tr>
                          <th class="h4"><b>11:30 AM - 13:30 PM</b></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                             $counter=1;
                          while ($row = mysqli_fetch_array($data2)) {
                         ?>
                          <tr>
                              <td><span  style="font-size: 18px"><b>Course:  </b><?php echo $row["course"]; ?></span> <br><span  style="font-size: 18px"><b>Level:  </b><?php echo $row["level"]; ?> </span>
                              <br><span  style="font-size: 18px"><b>Venue:  </b><?php echo $row["HALL"]; ?> </span><br><span  style="font-size: 18px"><b>Invigilators:  </b><?php echo $row["Invigilators"]; ?> </span>  </td>
                           </tr>
                         <?php
                          }
                          ?>
                      </tbody>
                  </table>
             
                    </div>
                  </div>

	  
				<div class="text-center m-4 d-print-none">
				    <a href="" onclick="window.print();" class="btn btn-dark-green p-3 waves-effect waves-light">
				    	<i class="fa fa-print">Print Application</i> 
				    </a>
				    <!--<a href="print-application" target="_blank" class="btn btn-dark-green p-3"><i class="fa fa-print"></i> Print</a>-->
				</div>
			
		</div>
	</div>
</body>
</main>
</html>