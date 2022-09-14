<?php  
include 'function/config.php';
//login session
    session_start();
    if(!isset($_SESSION['username'])) {
        header('location:login.php');
        exit;
    }
//login query
    $query = mysqli_query($con,"SELECT * FROM user");
    $row = mysqli_fetch_array($query);


?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet" href="test.css">
</head>

<body>

  <!--Navigasi-->
  <nav class="navbar bg-success p-3">
    <div class="container ">
      <span class="navbar-brand mb-0 h1" id="text"><b>Welcome <?=$row['nama']?> ? </b></span>
    </div>
  </nav>
  <!--Content-->
  <div class="container">
    <table class="table table-striped mt-4" border="1">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama</th>
          <th scope="col">Penulis</th>
          <th scope="col">Penerbit</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <?php
      //crud query Select
      $query_crud = mysqli_query($con,"SELECT * FROM crud");
      $no = 1;
      while($data = mysqli_fetch_array($query_crud)) {
     
      ?>
      <tbody>
        <tr>
          <th scope="row"><?=$no++;?></th>
          <td scope="row"><?=$data['judul']?></td>
          <td scope="row"><?=$data['penulis']?></td>
          <td scope="row"><?=$data['penerbit']?></td>
          <td scope="row">
            <a href="edit.php?id=<?php echo $data['id']; ?>" class="btn btn-success" role="button">Edit</a>
            <button href="#" class="btn btn-danger ">Hapus</button>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
    <a href="tambah_data.php" class="btn btn-success" role="button">Tambah</a>

  </div>

  <!-- CDN Bootstrap-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
  </script>
</body>

</html>