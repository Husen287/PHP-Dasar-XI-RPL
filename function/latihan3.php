<?php 

   $pelajar = "husen ganteng";

    function siswa($nama, $kelas){
    	 global $pelajar; //mengambil variabel dari luar function
    	echo "siswa kelas $kelas yang bernama $nama selalu rajin.";
    }

    siswa("kucen", "xi rpl");
   

