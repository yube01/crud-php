<?php
include "dbConfig.php";
$Id  = $_GET['Id'];
$sql = "DELETE FROM Student WHERE Id = '$Id'";
$result = mysqli_query($conn,$sql);


if($result){
    echo "data updated";
      header("Location:http://localhost/form/view.php");
}else{
    echo "data not updated";
}



?>


