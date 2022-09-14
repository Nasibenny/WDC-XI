<?php
 include 'function/config.php';

?>
<?php
if(isset($_POST['btninput']))
{
$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];

$query = mysqli_query($con,"INSERT INTO crud VAlUE('','$judul','$penulis','$penerbit') ");

if($query){
echo"
<script>
    alert('Data Sukses');
    window.location.href = 'tambah_data.php';
</script>
";
}
header("Location: index.php");

}
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

<body>
    <div class="container mt-5">
        <form action="" method="POST">
            <div class="mb-3">
                <label for="" class="form-label">judul</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="judul">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Penulis</label>
                <input type="text" class="form-control" id="penulis" name="penulis">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Penerbit</label>
                <input type="text" class="form-control" id="penerbit" name="penerbit">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-success p-2" name="btninput"> Tambah </button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>