<?php include 'views/layouts/header.php'; // menyertakan file header untuk layout halaman ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8"> <!-- set encoding karakter halaman -->
  <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- responsive untuk mobile -->
  <link href="bootstrap.min.css" rel="stylesheet"> <!-- menyertakan file css bootstrap -->
  <title>Lecturers</title> <!-- judul halaman yang tampil di tab browser -->
</head>

<body>

  <div class="container my-4"> <!-- container bootstrap dengan margin atas-bawah -->

    <div class="col-2 my-3">
      <a class="btn btn-primary" href="index.php?controller=lecturers&action=create">Add New</a> <!-- tombol untuk menambahkan lecturer baru -->
    </div>

    <table class="table"> <!-- tabel bootstrap -->
      <thead>
        <tr>
          <th>ID</th> <!-- kolom id lecturer -->
          <th>Name</th> <!-- kolom nama lecturer -->
          <th>NIDN</th> <!-- kolom nidn lecturer -->
          <th>Phone</th> <!-- kolom nomor telepon lecturer -->
          <th>Join Date</th> <!-- kolom tanggal bergabung lecturer -->
          <th>Actions</th> <!-- kolom untuk tombol edit/delete -->
        </tr>
      </thead>

      <tbody>
        <?php while ($row = $lecturers->fetch_assoc()): ?> <!-- loop data lecturer dari database -->
            <tr>
                <td><?= $row['id'] ?></td> <!-- menampilkan id lecturer -->
                <td><?= $row['name'] ?></td> <!-- menampilkan nama lecturer -->
                <td><?= $row['nidn'] ?></td> <!-- menampilkan nidn lecturer -->
                <td><?= $row['phone'] ?></td> <!-- menampilkan nomor telepon lecturer -->
                <td><?= $row['join_date'] ?></td> <!-- menampilkan tanggal bergabung lecturer -->
                <td>
                    <a class='btn btn-success' 
                    href='index.php?controller=lecturers&action=edit&id=<?= $row['id'] ?>'>Edit</a> <!-- tombol edit -->

                    <a class='btn btn-danger' 
                    href='index.php?controller=lecturers&action=delete&id=<?= $row['id'] ?>'>Delete</a> <!-- tombol hapus -->
                </td>
            </tr>
        <?php endwhile; ?> <!-- akhir loop data lecturer -->
        </tbody>
    </table>
  </div>

</body>
</html>
