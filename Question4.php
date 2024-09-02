<?php
// Konfigurasi koneksi database
$servername = "localhost";
$username = "root"; // Ubah sesuai dengan username MySQL kamu
$password = ""; // Ubah sesuai dengan password MySQL kamu
$dbname = "tugas_programer"; // Nama database kamu

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// SQL query untuk mengambil data dari tbl_members
$sql = "SELECT first_name, last_name FROM tbl_members";
$result = $conn->query($sql);

// Memeriksa jika ada hasil yang ditemukan
if ($result->num_rows > 0) {
    echo "<ul>"; // Membuka tag ul untuk membuat daftar
    // Menampilkan hasil untuk setiap baris
    while($row = $result->fetch_assoc()) {
        echo "<li>" . $row["first_name"]. " " . $row["last_name"]. "</li>";
    }
    echo "</ul>"; // Menutup tag ul
} else {
    echo "0 hasil ditemukan";
}

// Menutup koneksi
$conn->close();
?>
