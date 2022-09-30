<?php
$staff = ['Adam', 'Ibrahim', 'Umar', 'Abdullah', 'Sulaiman'];
$hall =  array('ND-I', 'ND-II', 'HND-I', 'HND-II', 'SOFTWARE-LAB', 'HARDWARE-LAB' );
$timetable = [1, 2, 3, 4, 5, 6, 7, 8];
$allocation = [];
$noOfStaff = 2;
$staffArray = [];
$currentStaff = [];
$duplicate = [];
$hallDuplicate = [];
shuffle($hall);
shuffle($staff);
for ($i=0; $i <sizeof($timetable); $i++) { 
	// code...
	$arrayDiff = array_diff($staff, $duplicate);
	shuffle($arrayDiff);
	$currentTime = $timetable[$i];
	if (sizeof($timetable) > sizeof($hall)) {
		array_push($hall, $hall[$i]);
		$currentHall = $hall[$i];
	}else{
		$currentHall = $hall[$i];
	}
	for ($j=0; $j <2; $j++) { 
		// code...
		if (is_null(isset($arrayDiff[$j]) ? $arrayDiff[$j] : null) || empty(isset($arrayDiff[$j]) ? $arrayDiff[$j] : null)) {
			// code...
			$duplicate = [];
			$arrayDiff = array_diff($staff, $duplicate);
			$currentStaff[] = $arrayDiff[$j];
			array_push($staffArray, $currentStaff[$j]);
			array_push($duplicate, $arrayDiff[$j]);
		}else{
			$currentStaff[] = $arrayDiff[$j];
			array_push($staffArray, $currentStaff[$j]);
			array_push($duplicate, $arrayDiff[$j]);
		}
			
		
	}
	$currentAllocation = $currentTime.'/'.$currentHall.'/'.json_encode($staffArray);
	array_push($allocation, $currentAllocation);
	$staffArray = [];
	$currentStaff = [];
}

foreach ($allocation as $key => $value) {
	// code...
	 $staff_list = explode('/', $value)[2];
	  $staff_list = preg_replace('/["["]/', "", $staff_list);
	 echo $staff_list = explode(']', $staff_list)[0]."<br>";

	 echo $hall_list = explode('/', $value)[1]."<br>";

	 echo $timetable_list = explode('/', $value)[0]."<br>";
	 echo "<br>";
}


?>