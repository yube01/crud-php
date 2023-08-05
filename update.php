<html>
    <style>
        a{
            text-decoration:none;
            color:inherit;
        }
    </style>

<body>


<?php
include "dbConfig.php";
$Id  = $_GET['Id'];
$sql = "Select * from Student where Id = '$Id'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);


?>

<form method="POST">

<input type="text" placeholder="name" name="Name" value="<?php echo $row['Name']?>"/>
<br>
<input type="radio" name="Gender" value="Male" <?php if($row['Gender'] == 'Male')
echo "checked";
?> />Male

<input type="radio" name="Gender" value="Female"  <?php if($row['Gender'] == 'Female')
echo "checked";
?>  />Female
<br>
<input type="text" placeholder="Email" name="Email" value="<?php echo $row['Email']?>"/>
<br>
<input type="number" placeholder="Marks" name="Marks" value="<?php echo $row['Marks']?>"/>
<br>
<input type="submit" name="Update" value="Update"/>
<button>
<a href="view.php" >View Records</a>    
</button>

</form>

<?php

if(isset($_POST['Update']))
{
    $Name = $_POST['Name'];
    $Gender = $_POST['Gender'];
    $Email = $_POST['Email'];
    $Marks = $_POST['Marks'];
    $sql= "update Student set Name ='$Name',Gender='$Gender',Email='$Email',Marks='$Marks' where Id = $Id";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo "data updated";
          header("Location:http://localhost/form/view.php");
    }else{
        echo "data not updated";
    }
}

?>

</body>



</html>

