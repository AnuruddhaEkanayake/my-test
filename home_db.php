<?php
include "db_manager.php";

$req_number=$_POST['request_ID'];



if($req_number=='1'){


    $stu_name=$_POST['name'];
    $stu_cours=$_POST['course'];
    $stu_DofB=$_POST['birthday'];
    $stu_marks=$_POST['marks'];

    $sql="INSERT INTO student_details
    (stu_name,stu_course,stu_marks,stu_d_of_b)
    VALUES
    ('$stu_name','$stu_cours',$stu_marks,'$stu_DofB')";



if ($con->query($sql) === TRUE) {
    $response['msg']="New record created successfully";

   
} else {
    $response['msg']= "Error: " . $sql . "<br>" . $con->error;
}

echo json_encode($response);

$con->close();
}


if($req_number=='2'){

    $stu_name=$_POST['name'];

    $sql="SELECT stu_course,stu_d_of_b,stu_id,stu_marks,stu_name FROM student_details
    WHERE student_details.stu_name='$stu_name';";

$result=$con->query($sql);

$num_rows = mysqli_num_rows($result);
if($num_rows>0){

while($row=$result->fetch_assoc())
{            
    $content=array('course'=>$row['stu_course'],
                   'dob'=>$row['stu_d_of_b'],
                   'id'=>$row['stu_id'],
                   'marks'=>$row['stu_marks'],
                   'name'=>$row['stu_name'],
                );
}

}

else{

    $content['msg']="No result found";
}

echo json_encode($content);

$con->close();
}



if($req_number=='3'){

    $stu_name=$_POST['name'];
    $stu_cours=$_POST['course'];
    $stu_DofB=$_POST['birthday'];
    $stu_marks=$_POST['marks'];
    $id=$_POST['id'];

    $sql = "UPDATE student_details SET stu_course='$stu_cours',
            stu_d_of_b=' $stu_DofB',stu_marks='$stu_marks',stu_name='$stu_name' 
            WHERE stu_id='$id'";

if ($con->query($sql) === TRUE) {
    $response['msg']="Record Updated successfully";

   
} else {
    $response['msg']= "Error: " . $sql . "<br>" . $con->error;
}

echo json_encode($response);

$con->close();        


}


if($req_number=='4'){

    $id=$_POST['id'];

    $sql = "DELETE FROM student_details WHERE stu_id=$id";

    if ($con->query($sql) === TRUE) {
        $response['msg']="Record Deleted successfully";
    
       
    } else {
        $response['msg']= "Error: " . $sql . "<br>" . $con->error;
    }
    
    echo json_encode($response);
    
    $con->close(); 

}


?>