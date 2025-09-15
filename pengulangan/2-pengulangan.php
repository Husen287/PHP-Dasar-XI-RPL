<!DOCTYPE html>
<html>
<head>
	<title>pengulangan</title>
</head>
<body>

</body>
</html>

<head>
</head>
<body>
	<h1>pengulangan</h1>
	<h2>for</h2>
	<?php 
    for ($i = 1; $i <= 5; $i++) {
    	echo "hello word <br>";
    }
	 ?>

	 <h2>while</h2>
	 <?php 
     $i = 6;
     while ($i <= 5) {
     	echo "hello word <br>"; 
     	$i++;
     }
	  ?>

	  <h2>do while</h2>
	  <?php 
      $i = 6;
      do {
      	 echo "hello word <br>";
      	 $i++;
      } while ($i <= 5);
	   ?>
</body>