<?php

class LecturerModel {
    private $conn;

    public function __construct($conn) {
        // menyimpan koneksi database ke dalam properti conn
        $this->conn = $conn;
    }

    public function getAll() {
        // mengambil semua data dosen dari tabel lecturers
        $sql = "SELECT * FROM lecturers";
        return $this->conn->query($sql);
    }

    public function create($name, $nidn, $phone, $join_date) {
        // menambahkan data dosen baru ke tabel lecturers
        $sql = "INSERT INTO lecturers (name, nidn, phone, join_date)
                VALUES ('$name', '$nidn', '$phone', '$join_date')";
        return $this->conn->query($sql);
    }

    public function getById($id) {
        // mengambil satu data dosen berdasarkan id
        $sql = "SELECT * FROM lecturers WHERE id = $id";
        return $this->conn->query($sql)->fetch_assoc();
    }

    public function update($id, $name, $nidn, $phone, $join_date) {
        // mengupdate data dosen berdasarkan id
        $sql = "UPDATE lecturers SET 
                name='$name', 
                nidn='$nidn', 
                phone='$phone', 
                join_date='$join_date'
                WHERE id=$id";
        return $this->conn->query($sql);
    }

    public function delete($id) {
        // menghapus data dosen berdasarkan id
        $sql = "DELETE FROM lecturers WHERE id = $id";
        return $this->conn->query($sql);
    }

}
