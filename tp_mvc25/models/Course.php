<?php
class CourseModel {
    private $conn; // koneksi database disimpan dalam variabel ini

    public function __construct($conn) {
        $this->conn = $conn; // menyimpan koneksi yang dikirim dari controller
    }

    public function getAll() {
        // mengambil semua data course dan sekaligus mengambil nama lecturer dengan join
        $sql = "SELECT c.id, c.course_name, c.lecturer_id, l.name AS lecturer_name
                FROM courses c 
                LEFT JOIN lecturers l ON c.lecturer_id = l.id";
        return $this->conn->query($sql); // menjalankan query dan mengembalikan hasilnya
    }

    public function create($course_name, $lecturer_id) {
        // menambahkan data course baru ke tabel courses
        $sql = "INSERT INTO courses (course_name, lecturer_id)
                VALUES ('$course_name', '$lecturer_id')";
        return $this->conn->query($sql); // menjalankan query insert
    }

    public function getById($id) {
        // mengambil satu data course berdasarkan id
        $sql = "SELECT * FROM courses WHERE id = $id";
        return $this->conn->query($sql)->fetch_assoc(); // mengembalikan satu baris data sebagai array
    }

    public function update($id, $course_name, $lecturer_id) {
        // mengupdate data course berdasarkan id
        $sql = "UPDATE courses SET 
                course_name = '$course_name',
                lecturer_id = '$lecturer_id'
                WHERE id = $id";
        return $this->conn->query($sql); // menjalankan query update
    }

    public function delete($id) {
        // menghapus data course berdasarkan id
        $sql = "DELETE FROM courses WHERE id = $id";
        return $this->conn->query($sql); // menjalankan query delete
    }
}
