<?php include 'views/layouts/header.php'; // menyertakan file header untuk layout halaman ?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Lecturer</title> <!-- judul halaman yang tampil di tab browser -->
    <link rel="stylesheet" href="../../bootstrap.min.css"> <!-- menyertakan file css bootstrap -->
</head>

<body>
<div class="col-lg-6 m-auto"> <!-- container tengah dengan lebar kolom 6 -->
    <form method="post" action="index.php?controller=lecturers&action=edit"> <!-- form untuk mengedit data lecturer -->
        <br><br>
        <div class="card"> <!-- card bootstrap untuk membungkus form -->

            <div class="card-header bg-warning"> <!-- header card dengan background kuning -->
                <h1 class="text-white text-center"> Update Lecturer </h1> <!-- judul card -->
            </div><br>

            <input type="hidden" name="id" value="<?= $data['id']; ?>"> <!-- menyimpan id lecturer secara tersembunyi -->

            <label>NAME:</label>
            <input type="text" name="name" value="<?= $data['name']; ?>" class="form-control"><br> <!-- input nama lecturer -->

            <label>NIDN:</label>
            <input type="text" name="nidn" value="<?= $data['nidn']; ?>" class="form-control"><br> <!-- input nidn lecturer -->

            <label>PHONE:</label>
            <input type="text" name="phone" value="<?= $data['phone']; ?>" class="form-control"><br> <!-- input nomor telepon lecturer -->

            <label>JOIN DATE:</label>
            <input type="date" name="join_date" value="<?= $data['join_date']; ?>" class="form-control"><br> <!-- input tanggal bergabung lecturer -->

            <button class="btn btn-success" type="submit">Submit</button><br> <!-- tombol submit untuk menyimpan perubahan -->
            <a class="btn btn-info" href="index.php?controller=lecturers&action=index">Cancel</a><br> <!-- tombol cancel untuk kembali ke halaman index -->

        </div>
    </form>
</div>

</body>
</html>
