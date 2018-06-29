<?php
include "db_manager.php";

$id = $_GET['id'];



$sql="SELECT stu_course,stu_d_of_b,stu_id,stu_marks,stu_name FROM student_details
WHERE student_details.stu_id='$id';";



$result=$con->query($sql);

while($row=$result->fetch_assoc())
{            
                   $course=$row['stu_course'];
                   $dob=$row['stu_d_of_b'];
                   $id=$row['stu_id'];
                   $marks=$row['stu_marks'];
                   $name=$row['stu_name'];
                
}



?>


<form method="POST" action="report.php">
    <h1>Profile Report</h1>
    <table>
        <tr>
            <td>#</td>
            <td></td>
            <td><?php echo $id ?></td>
        </tr>
        <tr>
            <td>Name</td>
            <td></td>
            <td><?php echo $name ?></td>
        </tr>
        <tr>
            <td>Course</td>
            <td></td>
            <td><?php echo $course ?></td>
        </tr>
        <tr>
            <td>Date of Birth</td>
            <td></td>
            <td><?php echo $dob ?></td>
        </tr>
        <tr>
            <td>Marks</td>
            <td></td>
            <td><?php echo $marks ?></td>
        </tr>
        
    </table>
</form>





