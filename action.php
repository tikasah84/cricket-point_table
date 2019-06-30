<?php

include 'connect.php';
if(!mysqli_select_db($con,"bct_league"))
	echo "Error! while selecting database";

if(isset($_POST['submit']))
{	


$nrr=$_POST['nrr'];
$team=$_POST['team'];
$game=$_POST['game'];
$won=$_POST['won'];
$lost=$_POST['lost'];
$point=$_POST['point'];


//$point1= mysqli_query($con,"SELECT point FROM point_table WHERE `team`=$team");


  $sql= "UPDATE `point_table` SET `game`='$game',`won`='$won',`lost`='$lost',`point`='$point',`nrr`='$nrr' WHERE `team`= '$team' ";

if (mysqli_query($con,$sql)) {
	?>
   <script>
   alert("Record updated successfully...");
    </script>
    <?php 
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
}
$sort="SELECT * FROM point_table ORDER BY point DESC,nrr DESC";
mysqli_query($con,$sort)
?>
