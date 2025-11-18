Saya Naura Nur Faizah dengan NIM 2408352 mengerjakan TP 8 dalam mata kuliah Desain Pemrograman Berbasis Objek untuk keberkahan-Nya maka saya tidak akan melakukan kecurangan seperti yang telah di spesifikasikan

# desain program
Program ini dibangun menggunakan MVC agar struktur kode lebih rapi, terorganisir, dan mudah dikembangkan. 

Pada bagian Model, setiap tabel dalam database—seperti lecturers dan courses—memiliki file khusus yang bertanggung jawab menangani semua proses query ke database, seperti mengambil data, menambah, mengubah, dan menghapus data. 

Bagian Controller menjadi penghubung antara Model dan View controller menerima request dari URL (misalnya controller=lecturers&action=edit), lalu memanggil fungsi yang sesuai pada Model, dan akhirnya meneruskan data ke View. 

Sementara itu, bagian View berisi file–file PHP yang menangani tampilan HTML, termasuk form create, edit, dan tabel data. Untuk tampilan antarmuka, program memakai Bootstrap, sehingga seluruh halaman seperti menu, form, tabel, dan tombol CRUD memiliki desain yang konsisten dan responsif.

# penjelasan alur
Alur utama program berjalan melalui file index.php yang bertindak sebagai router. Ketika pengguna membuka halaman tertentu, parameter controller dan action di URL menentukan fungsi mana yang harus dijalankan. Misalnya, saat pengguna membuka daftar lecturer, router akan memanggil LecturerController->index(), yang kemudian mengambil semua data lecturer melalui Model dan menampilkannya menggunakan View index.php. 

Untuk menambah data, pengguna membuka halaman create, mengisi form, lalu controller memproses input dan menyimpannya ke database. Begitu juga saat edit controller mengambil data berdasarkan ID, menampilkan form yang sudah terisi, lalu menyimpan perubahan. Proses delete dijalankan dengan memanggil action delete, yang langsung mengeksekusi query penghapusan. 

Secara keseluruhan, setiap operasi CRUD mengikuti 
alur : request → controller → model → controller → view, 
sehingga pengelolaan data menjadi terstruktur, mudah dipahami, dan mudah dikembangkan.

# alur pengisian data di web
Proses pengisian data pada website dimulai dari menu Lecturers, karena tabel Lecturer menjadi induk bagi tabel Course yang membutuhkan lecturer_id. 

Pengguna pertama kali membuka halaman Lecturers, kemudian mengisi data dosen melalui form Create yang meliputi nama, NIDN, nomor telepon, dan tanggal masuk. Setelah data lecturer tersedia, pengguna dapat berpindah ke menu Course untuk membuat mata kuliah. 

Pada form Create Course, pengguna cukup mengisi nama mata kuliah dan memilih lecturer yang mengajar melalui dropdown yang mengambil data langsung dari tabel Lecturer. 
Dengan urutan ini, relasi antara lecturer dan course dapat terbentuk dengan benar dan pengguna dapat menambah, mengedit, atau menghapus data tanpa kendala. Struktur navigasi melalui navbar memudahkan pengguna berpindah antara Home, Lecturers, dan Courses saat ingin memeriksa atau memperbarui data.

# dokumentasi
CRUD Lecturer

user menambahkan data
https://github.com/user-attachments/assets/865c1430-757f-4861-a023-103e7ff55ad6

user mengupdate data
https://github.com/user-attachments/assets/c50b06f9-fa8f-4fd6-8c6b-69af6c37ff47

setelah user menambahkan data baru lagi
<img width="1919" height="644" alt="Screenshot 2025-11-18 201744" src="https://github.com/user-attachments/assets/1f3d1cd0-1d90-4299-a274-c4afecdda6aa" />

user menghapus salah satu data
https://github.com/user-attachments/assets/7a1d6d26-0624-49f0-b5e5-048e38365cb7

CRUD Course

user menambahkan data
https://github.com/user-attachments/assets/f6e4febe-6cb6-4086-89ad-e1bbbb4551c5

user mengupdate data
https://github.com/user-attachments/assets/3c2224eb-637c-4440-8092-36e5f57e855e

user menghapus salah satu data
https://github.com/user-attachments/assets/a42bb25d-0df3-4338-b6dc-aff9e8554f30










