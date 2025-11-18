<?php
include "connection.php"; // menyertakan file koneksi database

$controller = $_GET['controller'] ?? 'lecturers'; // menentukan controller default jika tidak ada di url
$action = $_GET['action'] ?? 'index'; // menentukan action default jika tidak ada di url

if ($controller === 'lecturers') { 
    include 'controllers/LecturerController.php'; // menyertakan controller lecturer
    $ctrl = new LecturerController($conn); // membuat objek lecturer controller dengan koneksi database

    if ($action === 'index') $ctrl->index(); // panggil method index untuk menampilkan data lecturer
    if ($action === 'create') $ctrl->create(); // panggil method create untuk menambahkan lecturer
    if ($action === 'edit') $ctrl->edit(); // panggil method edit untuk mengubah data lecturer
    if ($action === 'delete') $ctrl->delete(); // panggil method delete untuk menghapus lecturer
}

if ($controller === 'courses') { 
    include 'controllers/CourseController.php'; // menyertakan controller course
    $ctrl = new CourseController($conn); // membuat objek course controller dengan koneksi database

    if ($action === 'index') $ctrl->index(); // panggil method index untuk menampilkan data course
    if ($action === 'create') $ctrl->create(); // panggil method create untuk menambahkan course
    if ($action === 'edit') $ctrl->edit(); // panggil method edit untuk mengubah data course
    if ($action === 'delete') $ctrl->delete(); // panggil method delete untuk menghapus course
}
