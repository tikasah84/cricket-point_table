<?php

include 'connect.php';
?>





<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
<form class="form-column" action="action.php" method="post">
  
    <div class="form-group">

                <label>Team</label>
                
                        <?php

                        $sql = "SELECT team From point_table";
                        $result = mysqli_query($con,$sql);
                        
                            echo "<select name='team'>";
                            while ($row = mysqli_fetch_array($result)){
                                echo "<option value='". $row['team'] ."'>" .$row['team'] ."</option>" ;
                            }
                            echo "</select>" ;

                        ?>

                </select>


            </div>
    
  
  
  <div class="form-group">
    <label for="game">Game</label>
    <input type="number" class="" name="game">
  </div>
  
  <div class="form-group">
    <label for="won">Won</label>
    <input type="number" class="" name="won">
  </div>
  
  <div class="form-group">
    <label for="lost">Lost</label>
    <input type="number" class="" name="lost">
  </div>
  
  <br>

   <div class="form-group">
    <label for="point">Point:</label>
    <input type="number" class="" name="point">
  </div>
  <br>
  <div class="form-group">
    <label for="nrr">NRR:</label>
    <input type="number" step="0.01" min="-10" max="10" class=""  name="nrr">
  </div>
<br>
  <div class="form-group">
  	<label for="submit"></label>
  	<input type="submit" name="submit">
  </div>
  
</form>
</body>
</html>