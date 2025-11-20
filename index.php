<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>List Data Buku Tamu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>List Data Buku Tamu</h1>
        <a href="create.php" class="btn btn-primary">Input Buku Tamu</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Komentar</th>
                    <th scope="col">Waktu</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require 'koneksi.php';
                $hasil = $koneksi->query("SELECT * FROM tamu");
                $no = 1;
                while ($row = $hasil->fetch_assoc()) {
                ?>
                    <tr>
                        <th scope="row"><?= $no++ ?></th>
                        <td><?= $row['nama'] ?></td>
                        <td><?= $row['email'] ?></td>
                        <td><?= $row['komentar'] ?></td>
                        <td><?= $row['date_created'] ?></td>
                        <td>
                            <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>