<?php

   $students =[ 
        ["09876", "Munyanyu", "XI RPL", "Kopti Raya", "Perempuan", "4.jpg"],
        ["02345", "Rorr", "XI RPL", "Cigadung", "Laki-Laki", "22.jpg"], 
        ["05432", "Njep", "XI RPL", "Cijambe", "Laki-Laki", "3.jpg"],
        ["05678", "Ajay", "XI RPL", "Cimerta", "Laki-Laki", "1.jpg"],
        ["00987", "Pret", "XI RPL", "Cijambe", "Perempuan","5.jpg"]

      ];
    
     ?>
<!DOCTYPE html>
<html>
<head>
    <title>Array Multidimensi</title>
</head>
<body>
    <?php foreach ($students as $students) : ?>
        <ul>
            <li><img src="../foto/<?php echo $students['5']?>"></li>
            <li><?php echo $students['1']?></li>
            <li><?php echo $students['0']?></li>
            <li><?php echo $students['2']?></li>
            <li><?php echo $students['3']?></li>
            <li><?php echo $students['4']?></li>

        </ul>
    <?php endforeach?>
    

</body>
</html>