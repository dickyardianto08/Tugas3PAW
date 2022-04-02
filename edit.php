<?php
$konek = mysqli_connect("localhost", "root", "", "dicky");

$id = $_GET["id"];
$dicky = mysqli_query($konek, "SELECT * FROM dicky_064 where id=$id");
$result = mysqli_fetch_assoc($dicky);
$data = $result;

if (isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $tipe = $_POST["tipe"];
    $deskripsi = $_POST["deskripsi"];
    $kondisi = $_POST["kondisi"];
    $harga = $_POST["harga"];
    $insert = mysqli_query($konek, "UPDATE dicky_064 SET nama='$nama', tipe='$tipe', deskripsi='$deskripsi', kondisi='$kondisi', harga='$harga' where id=$id");
    $hasil = mysqli_affected_rows($konek);
    if ($hasil > 0) {
        echo "<script>
                alert('Selamat data anda berhasil diubah');
        </script>";
    } else {
        echo "<script>
                alert('Mohon maaf, Data anda belum berhasil dirubah');
        </script>";
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Edit</title>
</head>

<body>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form method="POST" action="">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control" value="<?php echo $data["nama"]; ?>" required />
                </div>
                <div class="form-group">
                    <label for="tipe">Tipe</label>
                    <input type="text" name="tipe" class="form-control" value="<?php echo $data["tipe"]; ?>" required />
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <input type="text" name="deskripsi" class="form-control" value="<?php echo $data["deskripsi"]; ?>" required />
                </div>
                <div class="form-group">
                    <label for="kondisi">Kondisi</label>
                    <input type="text" name="kondisi" class="form-control" value="<?php echo $data["kondisi"]; ?>" required />
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" name="harga" class="form-control" value="<?php echo $data["harga"]; ?>" required />
                    <p></p>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>