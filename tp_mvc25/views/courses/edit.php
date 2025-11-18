<?php include 'views/layouts/header.php'; // menyertakan file header untuk layout halaman ?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Course</title> <!-- judul halaman yang tampil di tab browser -->
    <link rel="stylesheet" href="../../bootstrap.min.css"> <!-- menyertakan file css bootstrap -->
</head>

<body>

<div class="col-lg-6 m-auto"> <!-- membuat container tengah dengan lebar kolom 6 -->
    <form method="post" action="index.php?controller=courses&action=edit"> <!-- form untuk update data course -->
        <br><br>
        <div class="card"> <!-- card bootstrap untuk membungkus form -->

            <div class="card-header bg-warning"> <!-- header card dengan background kuning -->
                <h1 class="text-white text-center"> Update Course </h1> <!-- judul card -->
            </div><br>

            <input type="hidden" name="id" value="<?= $data['id']; ?>"> <!-- menyimpan id course secara tersembunyi -->

            <label>COURSE NAME:</label>
            <input type="text" name="course_name" value="<?= $data['course_name']; ?>" class="form-control"><br> <!-- input nama course -->

            <label>LECTURER:</label>
            <select name="lecturer_id" class="form-control"> <!-- dropdown untuk memilih lecturer -->
                <?php while ($l = $lecturers->fetch_assoc()): ?> <!-- loop data lecturer dari database -->
                    <option value="<?= $l['id']; ?>"
                        <?= $l['id'] == $data['lecturer_id'] ? 'selected':'' ?>> <!-- menandai lecturer yang sedang dipilih -->
                        <?= $l['name']; ?> <!-- menampilkan nama lecturer -->
                    </option>
                <?php endwhile; ?>
            </select><br>

            <button class="btn btn-success" type="submit">Submit</button><br> <!-- tombol submit untuk menyimpan perubahan -->
            <a class="btn btn-info" href="index.php?controller=courses&action=index">Cancel</a><br> <!-- tombol batal kembali ke halaman index -->

        </div>
    </form>
</div>

</body>
</html>
