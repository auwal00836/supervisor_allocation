<?php
$id = $_GET['token'];
$connection=mysqli_connect("localhost", "root", "", "allocationDB");
 $query = "DELETE FROM staff WHERE staff_id LIKE '$id'";
 $result = mysqli_query($connection, $query);
 echo "<script>alert('Record Deleted!'); window.location='staff.php'</script>";
?>
