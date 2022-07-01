<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div style="width: 40vw; margin: 6em auto;">
        <a href="produk.php" class="btn btn-warning">Kembali</a>
        <h1 style="text-align:center ;">Update Makanan</h1>
        <form action="edit_proses.php" method="POST">
            <input type="hidden" id='id' name="id" value="<?php echo $barang["id"]; ?>">
            <div class="my-4">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" id="nama" name="nama" class="form-control" value="<?php echo $barang["nama"]; ?>">
            </div>
            <div class="my-4">
                <label for="harga" class="form-label">harga</label>
                <input type="text" id="harga" name="harga" class="form-control" value="<?php echo $barang["harga"]; ?>">
            </div>
            <div class="my-4">
                <label for="kuota" class="form-label">kuota</label>
                <input type="text" id="kuota" name="kuota" class="form-control" value="<?php echo $barang["kuota"]; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Kirim</button>
        </form>
    </div>
</body>

</html>