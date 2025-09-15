<?php

    $students =[ 
        ["09876", "Munyanyu", "XI RPL", "Kopti Raya", "Perempuan", "4.jpg"],
        ["02345", "Rorr", "XI RPL", "Cigadung", "Laki-Laki", "22.jpg"], 
        ["05432", "Njep", "XI RPL", "Cijambe", "Laki-Laki", "3.jpg"],
        ["05678", "Ajay", "XI RPL", "Cimerta", "Laki-Laki", "1.jpg"],
        ["00987", "Pret", "XI RPL", "Cijambe", "Perempuan","5.jpg"]

      ];
      
   ?>
   <?php $no=1 ?>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
  <title>Data Siswa</title>
  
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

</head>
<body>
  <div class="container-fluid bg-primary-subtle py-5">
    <div class="container">
      <!-- card -->
    <div class="card">
    <div class="card-header">
      data siswa
    </div>  
      <div class="card-body">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">NO.</th>
            <th scope="col">Foto</th>
            <th scope="col">Nama</th>
            <th scope="col">NISN</th>
            <th scope="col">Kelas</th>
            <th scope="col">Alamat</th>
            <th scope="col">Gender</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($students as $student) : ?>
          <tr>
            <th scope="row"><?= $no ?></th>
            <td><img src="../foto/<?= $student['5']?>" class="rounded" class="100px"></td>
            <td><?= $student['1'] ?></td>
            <td><?= $student['0'] ?></td>
            <td><?= $student['2'] ?></td>
            <td><?= $student['3'] ?></td>
            <td><?= $student['4'] ?></td>
            <td>
              <a href="edit.php?foto=<?=$student['5']?>
              &Nama= <?=$student ['1']?>
              &NISN= <?=$student ['0']?>
              &Kelas= <?=$student ['2']?>
              &Alamat= <?=$student ['3']?>
              &Gender= <?=$student ['4']?>" class="btn btn-success"><i class="bi bi-pencil"></i></a>
              <a href="detail.php?foto=<?=$student['5']?>
              &Nama= <?=$student ['1']?>
              &NISN= <?=$student ['0']?>
              &Kelas= <?=$student ['2']?>
              &Alamat= <?=$student ['3']?>
              &Gender= <?=$student ['4']?>" class="btn btn-primary"><i class="bi bi-list"></i></a>

            </td>
          </tr>
          <?php $no++ ?>
          <?php endforeach?>
        </tbody>
      </table>
      </div>
    </div>
  </div>
</div>
</body>
</html>