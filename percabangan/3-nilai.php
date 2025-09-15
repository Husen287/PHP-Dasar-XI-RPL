<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tugas</title>
</head>
<body>
     <?php
     $na = 90;

     if ($na >= 100) {
     	      echo ("keterangan : tidak valid");
     	      echo "<br>";
     	      echo ("predikat : tidak valid");
     	      echo "<br>";
     	      echo ("nilai akhir :". $na);
     	      echo "<br>";
     }elseif ($na >= 90) {
     	      echo "keterangan : lulus";
     	      echo "<br>";
     	      echo "predikat : a";
     	      echo "<br>";
     	      echo "nilai akhir :". $na;
     	      echo "<br>";
     }elseif ($na >= 80) {
     	      echo "keterangan : lulus";
     	      echo "<br>";
     	      echo "predikat : b";
     	      echo "<br>";
     	      echo "nilai akhir :". $na; 
     	      echo "<br>";
     }elseif ($na >= 70) {
     	      echo "keterangan : lulus";
     	      echo "<br>";
     	      echo "predikat : c";
     	      echo "<br>";
     	      echo "nilai akhir :". $na;
     	      echo "<br>";
     	 }elseif ($na >= 60) {
     	      echo "keterangan : tidak lulus";
     	      echo "<br>";
     	      echo "predikat : d";
     	      echo "<br>";
     	      echo "nilai akhir :". $na;
     	      echo "<br>";
     
     }elseif ($na >= 0) {
     	      echo "keterangan : tidak lulus";
     	      echo "<br>";
     	      echo "predikat : e";
     	      echo "<br>";
     	      echo "nilai akhir :". $na;
     	      echo "<br>";
     }else if ($na <= -1){
             echo "keterangan : tidak valid";
     	      echo "<br>";
     	      echo "predikat : tidak valid";
     	      echo "<br>";
     	      echo "nilai akhir :". $na;
     	      echo "<br>";
            echo "udididin dun"



     }

       ?>
</body>
</html>