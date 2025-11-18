<?php
class CourseController {
    private $model;

    public function __construct($conn) {
        include 'models/Course.php'; 
        include 'models/Lecturer.php'; // untuk dropdown dosen
        $this->model = new CourseModel($conn); // inisialisasi model course
        $this->lecturerModel = new LecturerModel($conn); // inisialisasi model lecturer
    }

    public function index() {
        $courses = $this->model->getAll(); // mengambil semua data course
        include 'views/courses/index.php'; // menampilkan halaman index course
    }

    public function create() {
        $lecturers = $this->lecturerModel->getAll(); // mengambil list lecturer untuk dropdown

        if (isset($_POST['submit'])) { // cek tombol submit ditekan
            $course_name = $_POST['course_name']; // ambil input nama course
            $lecturer_id = $_POST['lecturer_id']; // ambil id lecturer yang dipilih

            $this->model->create($course_name, $lecturer_id); // simpan data ke database
            header("Location: index.php?controller=courses&action=index"); // redirect ke index
            exit;
        }

        include 'views/courses/create.php'; // tampilkan form create
    }

    public function edit() {
        $lecturers = $this->lecturerModel->getAll(); // ambil data lecturer untuk dropdown

        if ($_SERVER['REQUEST_METHOD'] === 'GET') { // jika baru membuka halaman edit
            $id = $_GET['id']; // ambil id dari url
            $data = $this->model->getById($id); // ambil data course berdasarkan id
            include 'views/courses/edit.php'; // tampilkan halaman edit
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') { // jika form edit dikirim
            $id = $_POST['id']; // ambil id course
            $course_name = $_POST['course_name']; // ambil nama course baru
            $lecturer_id = $_POST['lecturer_id']; // ambil lecturer baru

            $this->model->update($id, $course_name, $lecturer_id); // update data course
            header("Location: index.php?controller=courses&action=index"); // kembali ke index
            exit;
        }
    }

    public function delete() {
        $id = $_GET['id']; // ambil id course yang mau dihapus
        $this->model->delete($id); // hapus data dari database
        header("Location: index.php?controller=courses&action=index"); // redirect ke index
        exit;
    }
}
