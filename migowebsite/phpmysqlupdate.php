<!DOCTYPE html>
<html>
<head>
	<title>vjkd.</title>
</head>
<body>
<form method="GET">
	Input Your id:&nbsp;<input type="number" name="id"><br>
	Input Your New Firstname:&nbsp;<input type="text" name="fname"><br>
	Input your New Lastname&nbsp;<input type="text" name="lname"><br>
	Email:&nbsp;<input type="email" name="email">
	<input type="submit" name="submit">
</form>
<?php
include('connect.php');
    include('nav.php');
if (isset($_GET["submit"])) {
    $id=$_GET["id"];
    
    $fname=$_GET["fname"];
    $lname=$_GET["lname"];
    $email=$_GET["email"];
    $student_details_sql = "UPDATE store set = `Firstname`='$fname',`Lastname`='$lname', WHERE `status`= 'active'";
    if ($student_details_sql) {
     	echo "Updated";
     } 
     else{
     	echo "Failed to update";
     }
    $student_details_result = mysqli_query($blessing, $student_details_sql);

    if ($student_details_result) {
        echo "Student Data Deleted successfully";
    }
}
    ?>
    </body>
</html>
