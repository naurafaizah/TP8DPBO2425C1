<?php
class LecturerController {
    private $model;

    public function __construct($conn) {
        include 'models/Lecturer.php'; 
        // menghubungkan controller dengan file model lecturer

        $this->model = new LecturerModel($conn); 
        // membuat objek model untuk akses database
    }

    public function index() {
        $lecturers = $this->model->getAll(); 
        // mengambil semua data lecturer dari model

        include 'views/lecturers/index.php'; 
        // menampilkan halaman daftar lecturer
    }

    public function create() {
        if (isset($_POST['submit'])) { 
            // mengecek apakah tombol submit ditekan

            $name = $_POST['name']; 
            // mengambil input nama

            $nidn = $_POST['nidn']; 
            // mengambil input nidn

            $phone = $_POST['phone']; 
            // mengambil input phone

            $join_date = $_POST['join_date']; 
            // mengambil input join date

            $this->model->create($name, $nidn, $phone, $join_date); 
            // memanggil fungsi create untuk menambah data ke database

            header("Location: index.php?controller=lecturers&action=index"); 
            // redirect kembali ke halaman daftar lecturer
            exit;
        }

        include 'views/lecturers/create.php'; 
        // menampilkan halaman form create lecturer
    }

    public function edit() {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') { 
            // kondisi ketika halaman edit pertama kali dibuka (via url)

            $id = $_GET['id']; 
            // mengambil id dari url

            $data = $this->model->getById($id); 
            // mengambil data lecturer berdasarkan id

            include 'views/lecturers/edit.php'; 
            // menampilkan halaman edit dengan data yang sudah diambil
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
            // kondisi ketika form edit dikirim

            $id = $_POST['id']; 
            // mengambil id dari input hidden

            $name = $_POST['name']; 
            // mengambil input nama

            $nidn = $_POST['nidn']; 
            // mengambil input nidn

            $phone = $_POST['phone']; 
            // mengambil input phone

            $join_date = $_POST['join_date']; 
            // mengambil input join date

            $this->model->update($id, $name, $nidn, $phone, $join_date); 
            // memproses update data lecturer

            header("Location: index.php?controller=lecturers&action=index"); 
            // redirect kembali ke halaman index
            exit;
        }
    }
    
    public function delete() {
        if (isset($_GET['id'])) { 
            // mengecek apakah id tersedia di url

            $id = $_GET['id']; 
            // mengambil id yang akan dihapus

            $this->model->delete($id); 
            // menghapus data berdasarkan id

            header("Location: index.php?controller=lecturers&action=index"); 
            // redirect ke halaman utama lecturer
            exit;
        }
    }

}
