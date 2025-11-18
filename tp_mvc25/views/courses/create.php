<?php include 'views/layouts/header.php'; ?>

<!DOCTYPE html>
<html>

<head>
  <title>Create Course</title>
  <link rel="stylesheet" href="../../bootstrap.min.css">
</head>

<body>

  <div class="col-lg-6 m-auto">
    <!-- form untuk membuat data course baru -->
    <form method="post" action="index.php?controller=courses&action=create">
      <br><br>
      <div class="card">
        <div class="card-header bg-primary">
          <!-- judul halaman create course -->
          <h1 class="text-white text-center"> Create Course </h1>
        </div><br>

        <!-- input nama course -->
        <label> COURSE NAME: </label>
        <input type="text" name="course_name" class="form-control" required><br>

        <!-- dropdown untuk memilih lecturer -->
        <label> LECTURER: </label>
        <select name="lecturer_id" class="form-control" required>
          <option value="">-- Select Lecturer --</option>

          <!-- looping semua lecturer untuk pilihan dropdown -->
          <?php foreach ($lecturers as $lec): ?>
            <option value="<?= $lec['id'] ?>">
              <?= $lec['name'] ?>
            </option>
          <?php endforeach; ?>
        </select><br>

        <!-- tombol submit untuk menyimpan data -->
        <button class="btn btn-success" type="submit" name="submit">Submit</button><br>

        <!-- tombol kembali ke halaman index course -->
        <a class="btn btn-info" href="index.php?controller=courses&action=index"> Cancel </a><br>
      </div>
    </form>
  </div>

</body>
</html>
