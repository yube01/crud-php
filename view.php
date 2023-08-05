<html>
   <style>
   
    th{
        padding:20px;
    }
    td{
        padding:10px;
    }
    a{
        text-decoration:none;
        color:Green;
    }

    </style>
    <body>
    <table border="2" >

    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Email</th>
        <th>Marks</th>
        <th colspan="2">Action</th>
        
        


</tr>

<?php

include "dbConfig.php";
$sql = "select * from Student";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
if($num>0){
    while($row = mysqli_fetch_assoc($result)){
        ?>

        <tr>

        <td><?php echo $row['Id']?></td>
        <td><?php echo $row['Name']?></td>
        <td><?php echo $row['Gender']?></td>
        <td><?php echo $row['Email']?></td>
        <td><?php echo $row['Marks']?></td>
        <td><a href="update.php?Id=<?php echo $row['Id'];?>" >Update</a></td>
        <td><a href="delete.php?Id=<?php echo $row['Id'];?>" >Delete</a></td>
       <?php


        // </tr>
        // echo"<tr>";
        // echo "<td>".$row['Id']."</td>";
        // echo "<td>".$row['Name']."</td>";
        // echo "<td>".$row['Gender']."</td>";
        // echo "<td>".$row['Email']."</td>";
        // echo "<td>".$row['Marks']."</td>";
        // echo "<td><a href='update.php'/>Update</td>" 
     
        // echo"<tr>";

    }
}

?>




</table>

</body>


</html>