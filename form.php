<html>
<style>
        a{
            text-decoration:none;
            color:inherit;
        }
        </style>
<body>

<form method="POST">

<input type="text" placeholder="name" name="Name"/>
<input type="radio" name="Gender" value="Male" />Male
<input type="radio" name="Gender" value="Female" />Female
<input type="text" placeholder="Email" name="Email"/>
<input type="number" placeholder="Marks" name="Marks"/>
<input type="submit" name="Submit" value="Submit"/>
<button href="view.php">
<a href="view.php" >View Records</a>    
</button>

</form>

<?php
include "dbConfig.php";
if(isset($_POST['Submit'])){
    $Name = $_POST['Name'];
    $Gender = $_POST['Gender'];
    $Email = $_POST['Email'];
    $Marks = $_POST['Marks'];

    $sql = "Insert into Student (Name, Gender, Email,Marks) values(
        '$Name','$Gender','$Email','$Marks')";


    $result = mysqli_query($conn,$sql);
    if($result){
        echo"<br>";
        echo"data inserted ";
    }else{
        echo"data not inserted";
    }
}


?>

</body>

</html>