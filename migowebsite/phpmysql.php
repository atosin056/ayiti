<!DOCTYPE html>
<html>
<head>
    <title>Phone</title>
</head>
<body>
<?php

   

    include('connect.php');
    include('nav.php');

    $student_details_sql = "SELECT * from store WHERE status='active'"; 
    $student_details_result = mysqli_query($blessing,$student_details_sql);
    if (mysqli_num_rows($student_details_result) > 0) {

        echo '<table border="1">';
            //Header information
            echo '<tr bgcolor="yellow">';
                echo '<td><strong>id</strong></td>';
                echo '<td><strong>Firstname</strong></td>';
                echo '<td><strong>Lastname</strong></td>';
                echo '<td><strong>Email</strong></td>';
                echo '<td><strong>Status</strong></td>';
                echo '<td><strong>Date Created</strong></td>';
                 echo '<td><strong>Action</strong></td>';
            echo '</tr>';
        while ($row = mysqli_fetch_assoc($student_details_result)) {
            echo '<tr>';
                echo '<td>' . $row['id'].'</td>';
                echo '<td>' . $row['Firstname'].'</td>';
                echo '<td>' . $row['Lastname'].'</td>';
                echo '<td>' . $row['Email'].'</td>';
                echo '<td>' . $row['Status'].'</td>';
                echo '<td>' . $row['date_of_update'].'</td>';
                echo '<td>' . $row['Action'].'</td>';
                echo "<td>"."<button><a href='phpmysqlupdate.php'>"."Update"."<a href='phpmysqldelete.php'>"."Delete"."</a>"."</td>";
            echo '</tr>';
        }
        echo '</table>';
    }

    // $array = [1, 2, 3, 4, 5];
    // foreach($array as $kesdsdy => $value) {
    //     echo 'Key: ' . $kesdsdy;
    //     echo '<br >';
    //     echo 'Value: ' . $value;
    //     echo '<br >';
    //     echo '<br >';
    // }
?>
</body>
</html>