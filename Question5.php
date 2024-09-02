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

// SQL query untuk menemukan klien yang tidak memiliki tagihan
$sql = "SELECT c.name AS Clients
        FROM tbl_clients c
        LEFT JOIN tbl_invoices i ON c.id = i.cient_id
        WHERE i.cient_id IS NULL";
$result = $conn->query($sql);

// Memeriksa jika ada hasil yang ditemukan
if ($result->num_rows > 0) {
    echo "<ul>"; // Membuka tag ul untuk membuat daftar
    // Menampilkan hasil untuk setiap baris
    while($row = $result->fetch_assoc()) {
        echo "<li>" . $row["Clients"]. "</li>";
    }
    echo "</ul>"; // Menutup tag ul
} else {
    echo "0 hasil ditemukan";
}

// Menutup koneksi
$conn->close();
?>
