<!DOCTYPE html>
<html>
<head>
	<title>vjkd.</title>
</head>
<body>
<?php
if (isset($_GET["submit"])) {
include 'phpmysqlupdate.php';
    $id=$_GET["id"];
    $status=$_GET["Status"];
    $fname=$_GET["fname"];
    $lname=$_GET["lname"];
    $email=$_GET["email"];
    $student_details_sql = "UPDATE store set = `Firstname`='$fname',`Lastname`='$lname', status='inactive', WHERE `status`= 'active'";
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
