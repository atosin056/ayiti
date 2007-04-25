<!DOCTYPE html>
<html>
<head>
	<title>dfkdlf</title>
</head>
<body>
<form method="POST">
    First&nbsp;name:&nbsp;<input type="text" name="a">
    <br>
    Last&nbsp;name:&nbsp;<input type="text" name="c">
    <br>
    Status:&nbsp;<input type="text" name="b" value="active">
    <br>
    Email:&nbsp;<input type="email" name="d">
    <br>
    <input type="submit" name="submit">
</form>
 <?php
include('connect.php');
    include('nav.php');
if (isset($_POST["submit"])) { 
$f_name=$_POST["a"];
 $status=$_POST["b"];
$l_name=$_POST["c"];
 $email=$_POST["d"];
 
 // $text="localhost/Great/migowebsite/phpmysqlupdate.php";

    $student_details_sql = "INSERT into store (id, Firstname, Lastname, Email , Status ,date_of_update, Action) VALUES (NULL,'$f_name','$l_name','$email','$status',current_timestamp())";
    $student_details_result = mysqli_query($blessing, $student_details_sql);

    if ($student_details_result) {
        echo "Student data inserted successfully";
    }
    else{
    	echo "Failed to insert".die(mysqli_error($blessing));
    }
}
?>
</body>
</html>