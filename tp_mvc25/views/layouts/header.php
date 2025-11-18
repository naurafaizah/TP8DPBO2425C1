<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> <!-- set encoding karakter halaman -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- responsive untuk mobile -->
    <link rel="stylesheet" href="../../bootstrap.min.css"> <!-- menyertakan file css bootstrap -->
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark"> <!-- navbar bootstrap dengan tema gelap -->
    <div class="container-fluid"> <!-- container full width -->

        <a class="navbar-brand" href="index.php">HOME</a> <!-- link brand/home -->

        <div class="collapse navbar-collapse"> <!-- container untuk menu collapsible -->
            <ul class="navbar-nav"> <!-- daftar menu navbar -->

                <li class="nav-item">
                    <a class="nav-link" href="index.php?controller=lecturers&action=index">
                        Lecturers
                    </a> <!-- link ke halaman lecturers -->
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="index.php?controller=courses&action=index">
                        Courses
                    </a> <!-- link ke halaman courses -->
                </li>

            </ul>
        </div>

    </div>
</nav>

<div class="container my-4"> <!-- container bootstrap dengan margin atas-bawah untuk isi halaman -->
