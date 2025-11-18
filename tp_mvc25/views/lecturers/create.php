<?php include 'views/layouts/header.php'; // menyertakan file header untuk layout halaman ?>

<!DOCTYPE html>
<html>

<head>
  <title>Create</title> <!-- judul halaman yang tampil di tab browser -->
  <link rel="stylesheet" href="../../bootstrap.min.css"> <!-- menyertakan file css bootstrap -->
</head>

<body>

  <div class="col-lg-6 m-auto"> <!-- container tengah dengan lebar kolom 6 -->
    <form method="post" action="index.php?controller=lecturers&action=create"> <!-- form untuk menambahkan data lecturer -->
      <br><br>
      <div class="card"> <!-- card bootstrap untuk membungkus form -->
        <div class="card-header bg-primary"> <!-- header card dengan background biru -->
          <h1 class="text-white text-center"> Create Lecturer</h1> <!-- judul card -->
        </div><br>

        <label> NAME: </label>
        <input type="text" name="name" class="form-control" required><br> <!-- input nama lecturer -->

        <label> NIDN: </label>
        <input type="text" name="nidn" class="form-control" required><br> <!-- input nidn lecturer -->

        <label> PHONE: </label>
        <input type="text" name="phone" class="form-control" required><br> <!-- input nomor telepon lecturer -->

        <label> JOIN DATE: </label>
        <input type="date" name="join_date" class="form-control" required><br> <!-- input tanggal bergabung lecturer -->

        <button class="btn btn-success" type="submit" name="submit">Submit</button><br> <!-- tombol submit untuk menyimpan data -->
        <a class="btn btn-info" href="index.php?controller=lecturers&action=index"> Cancel </a><br> <!-- tombol cancel untuk kembali ke halaman index -->
      </div>
    </form>
  </div>

</body>
</html>
