<?php
include "config.php";
$sql = "SELECT * FROM users";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0)
{
    ///while($rows=mysqli_fetch_array($res))

    {
       // $pp['username']=$rows["username"];
       
       // echo  json_encode($pp);
     
 //echo "<td>".$rows['username']."</td><br>";
 
 $output = mysqli_fetch_all($res, MYSQLI_ASSOC);
 echo json_encode($output);
    }
    
}

?>

<?php 
 