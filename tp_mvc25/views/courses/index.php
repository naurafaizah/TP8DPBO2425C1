<?php include 'views/layouts/header.php'; // menyertakan file header untuk layout halaman ?>

<!DOCTYPE html>
<html>
<head>
    <title>Courses</title> <!-- judul halaman yang tampil di tab browser -->
    <link rel="stylesheet" href="../../bootstrap.min.css"> <!-- menyertakan file css bootstrap -->
</head>

<body>

<div class="container my-4"> <!-- container bootstrap dengan margin atas-bawah -->

    <a class="btn btn-primary" 
       href="index.php?controller=courses&action=create">Add New</a> <!-- tombol untuk menambahkan course baru -->

    <table class="table mt-3"> <!-- tabel bootstrap dengan margin top -->
        <thead>
            <tr>
                <th>ID</th> <!-- kolom id course -->
                <th>Course Name</th> <!-- kolom nama course -->
                <th>Lecturer</th> <!-- kolom nama lecturer -->
                <th>Actions</th> <!-- kolom untuk tombol aksi edit/delete -->
            </tr>
        </thead>

        <tbody>
            <?php while ($row = $courses->fetch_assoc()): ?> <!-- loop data course dari database -->
                <tr>
                    <td><?= $row['id'] ?></td> <!-- menampilkan id course -->
                    <td><?= $row['course_name'] ?></td> <!-- menampilkan nama course -->
                    <td><?= $row['lecturer_name'] ?></td> <!-- menampilkan nama lecturer -->

                    <td>
                        <a class="btn btn-success" 
                           href="index.php?controller=courses&action=edit&id=<?= $row['id'] ?>">Edit</a> <!-- tombol edit -->

                        <a class="btn btn-danger" 
                           href="index.php?controller=courses&action=delete&id=<?= $row['id'] ?>">Delete</a> <!-- tombol hapus -->
                    </td>
                </tr>
            <?php endwhile; ?> <!-- akhir loop data course -->
        </tbody>
    </table>

</div>

</body>
</html>
