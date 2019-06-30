<?php
include 'connect.php';
$sort="SELECT * FROM point_table ORDER BY point ,nrr DESC";
mysqli_query($con,$sort);
?>

<!DOCTYPE html>
<html>
<head>
	<title>BCT CRICKET LEAGUE</title>
	<!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.7/css/mdb.min.css" rel="stylesheet">

<!-- css -->
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="script.js">


<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.7/js/mdb.min.js"></script>


<h1 align="center">BCT CRICKET LEAGUE 2076</h1>
</head>
<body>

	<table class="table table-striped table-dark" action="action.php">
  <thead>
    <tr>
      <th scope="col">SN</th>
      <th scope="col">Teams</th>
      <th scope="col">Match</th>
      <th scope="col">Won</th>
      <th scope="col">Lost</th>
      <th scope="col">points</th>
      <th scope="col">NRR</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $query = "SELECT * FROM point_table";
 
if ($result = mysqli_query($con,"SELECT * FROM point_table")) {
 
    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {
        $sn = $row["sn"];
        $team = $row["team"];
        $match = $row["game"];
        $won = $row["won"];
        $lost = $row["lost"];
        $point = $row["point"];
        $nrr = $row["nrr"];
        
        if($sn==1)
{
  ?>
    <tr class="bg-success">
      <th scope="row"><?php echo $sn ?></th>
      <td>  <?php echo $team ?></td>
      <td><?php echo $match ?></td>
      <td><?php echo $won ?></td>
      <td><?php echo $lost ?></td>
      <td><?php echo $point ?></td>
      <td><?php echo $nrr ?></td>
    </tr>
  <?php 
}
else if ($sn==2) {

?>
  <tr class="bg-warning">
      <th scope="row"><?php echo $sn ?></th>
      <td>  <?php echo $team ?></td>
      <td><?php echo $match ?></td>
      <td><?php echo $won ?></td>
      <td><?php echo $lost ?></td>
      <td><?php echo $point ?></td>
      <td><?php echo $nrr ?></td>
    </tr>
<?php
}
  
elseif ($sn==3) {
  ?>
  <tr class="bg-warning">
      <th scope="row"><?php echo $sn ?></th>
      <td>  <?php echo $team ?></td>
      <td><?php echo $match ?></td>
      <td><?php echo $won ?></td>
      <td><?php echo $lost ?></td>
      <td><?php echo $point ?></td>
      <td><?php echo $nrr ?></td>
    </tr>
    <?php
}
    
    elseif ($sn==4) {
      ?>
       <tr class="bg-danger">
      <th scope="row"><?php echo $sn ?></th>
      <td>  <?php echo $team ?></td>
      <td><?php echo $match ?></td>
      <td><?php echo $won ?></td>
      <td><?php echo $lost ?></td>
      <td><?php echo $point ?></td>
      <td><?php echo $nrr ?></td>
    </tr>
     <?php 
   }
     elseif ($sn==5) {
      ?>
        <tr class="bg-danger">
      <th scope="row"><?php echo $sn ?></th>
      <td>  <?php echo $team ?></td>
      <td><?php echo $match ?></td>
      <td><?php echo $won ?></td>
      <td><?php echo $lost ?></td>
      <td><?php echo $point ?></td>
      <td><?php echo $nrr ?></td>
    </tr>
     <?php 
   }
      
     } 


    
 
    /* free result set */
    $result->free();
    

}
?>
    <!-- <tr class="bg-warning">
      <th scope="row">2</th>
      <td>C-star 'A'</td>
      <td>1</td>
      <td>1</td>
      <td>0</td>
      <td>2</td>
      <td>0.2</td>
    </tr>
    <tr class="bg-warning">
      <th scope="row">3</th>
      <td>Structure Xi</td>
      <td>1</td>
      <td>1</td>
      <td>0</td>
      <td>2</td>
      <td>0.00</td>
    </tr>
    <tr class="bg-danger">
      <th scope="row">3</th>
      <td>DF super kings</td>
      <td>1</td>
      <td>0</td>
      <td>1</td>
      <td>0</td>
      <td>0.00</td>
    </tr>
    <tr class="bg-danger">
      <th scope="row">3</th>
      <td>Professional Engineers</td>
      <td>2</td>
      <td>0</td>
      <td>2</td>
      <td>0</td>
      <td>2.10</td>
    </tr> -->
    
  </tbody>
</table>


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    
    <div class="carousel-item active">
      <img class="d-block w-20" src="aces.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-20" src="c.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-20" src="cb.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-20" src="d.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-20" src="e.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-20" src="s.jpg" alt="Third slide">
    </div>
    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<img src="e.jpg" class="rounded float-right" alt="...">
<img src="d.jpg" class="rounded float-right" alt="...">
<img src="s.jpg" class="rounded float-right" alt="...">
<img src="cb.jpg" class="rounded float-right" alt="...">
<img src="c.jpg" class="rounded float-right" alt="...">

</body>
</html>