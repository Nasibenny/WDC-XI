<?php
include 'function/config.php';
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Input_data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<?php
    include 'function/config.php';
      $id = $_GET['id'];
      $query_crud = mysqli_query($con,"SELECT * FROM crud WHERE id= '$id'");
      $data = mysqli_fetch_array($query_crud);     
      ?>

<body>
    <div class="container mt-5">
        <form method="POST">
            <div class="mb-3">
                <label for="" class="form-label">judul</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="judul"
                    value="<?=$data['judul']?>">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Penulis</label>
                <input type="text" class="form-control" id="penulis" name="penulis" value="<?=$data['penulis']?>">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Penerbit</label>
                <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?=$data['penerbit']?>">
            </div>
            <div class="mb-3">
                <!-- <a href="" role="button" name="btnsave" class="btn btn-success">Save</a> -->
                <td><button type="submit" name="Simpan">Simpan</button></td>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
    <h1>HEllo</h1>
</body>
<?php 
if(isset($_POST['Simpan'])) {
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    
    $query = mysqli_query($con,"UPDATE crud SET judul='$judul', penulis='$penulis', penerbit='$penerbit' WHERE id='$id' ");
    header("location: index.php");
}
?>

</html>