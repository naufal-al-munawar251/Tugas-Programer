# Question Pertama (1)

arr.map() adalah metode yang menerapkan fungsi yang diberikan pada setiap elemen dalam array arr dan mengembalikan array baru.
Di dalam fungsi map, str.length mengembalikan panjang dari setiap string.
Hasilnya adalah array yang berisi panjang dari setiap string di array asli.

## Coding : 
```javascript
function getLengthsOfStrings(arr) {
    // Membuat array baru yang berisi panjang dari setiap string dalam array yang diberikan
    return arr.map(function(str) {
        return str.length;
    });
}

let arrayOfStrings = ["Nutella", "Mars", "Snickers", "Kinder", "Cadbury"];
let lengthsArray = getLengthsOfStrings(arrayOfStrings);

console.log(lengthsArray); // Output: [7, 4, 8, 6, 7]

```
## Output :
<img src="https://github.com/naufal-al-munawar251/Tugas-Programer/blob/master/Screenshot%202024-09-02%20101501.png" width="550" title="hover text">

# Question Kedua (2)

str.split('') membagi string menjadi array karakter.
reverse() membalikkan urutan elemen dalam array.
join('') menggabungkan elemen array kembali menjadi string.
Fungsi checkPalindrome membandingkan string asli dengan string yang dibalik:
Jika sama, itu adalah palindrome dan fungsi mengembalikan panjang string.
Jika tidak sama, fungsi mengembalikan false.

```javascript
function checkPalindrome(str) {
    // Membalikkan string dan memeriksa apakah sama dengan string asli
    let reversedStr = str.split('').reverse().join('');
    if (str === reversedStr) {
        // Jika palindrome, kembalikan panjang string
        return str.length;
    } else {
        // Jika tidak palindrome, kembalikan false
        return false;
    }
}

let string1 = "aabaa";
let string2 = "daba";

console.log(checkPalindrome(string1)); // Output: 5
console.log(checkPalindrome(string2)); // Output: false

```

## Output :
<img src="https://github.com/naufal-al-munawar251/Tugas-Programer/blob/master/Screenshot%202024-09-02%20101551.png" width="550" title="hover text">

# Question Ketiga (3)

filter() digunakan untuk memilih bilangan genap dari array, di mana num % 2 === 0 memeriksa apakah bilangan tersebut genap.
reduce() digunakan untuk menjumlahkan semua bilangan genap yang telah difilter.
Fungsi ini mengembalikan jumlah dari bilangan genap yang ada di dalam array yang diberikan.

```javascript
function sumOfEvenIntegers(arr) {
    // Menggunakan filter untuk mendapatkan bilangan genap, kemudian menjumlahkannya dengan reduce
    return arr.filter(function(num) {
        return num % 2 === 0;
    }).reduce(function(sum, num) {
        return sum + num;
    }, 0);
}

let arrayOfIntegers = [15, 18, 3, 9, 6, 2, 12];
let sumOfEvens = sumOfEvenIntegers(arrayOfIntegers);

console.log(sumOfEvens); // Output: 38
```

## Output :
<img src="https://github.com/naufal-al-munawar251/Tugas-Programer/blob/master/Screenshot%202024-09-02%20101603.png" width="550" title="hover text">


# Question Ketiga tbl_members(4)

filter() digunakan untuk memilih bilangan genap dari array, di mana num % 2 === 0 memeriksa apakah bilangan tersebut genap.
reduce() digunakan untuk menjumlahkan semua bilangan genap yang telah difilter.
Fungsi ini mengembalikan jumlah dari bilangan genap yang ada di dalam array yang diberikan.

```javascript
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

```

## Output :
<img src="https://github.com/naufal-al-munawar251/Tugas-Programer/blob/master/Question4.png" width="550" title="hover text">

# Question Ketiga tbl_addresses(4)

filter() digunakan untuk memilih bilangan genap dari array, di mana num % 2 === 0 memeriksa apakah bilangan tersebut genap.
reduce() digunakan untuk menjumlahkan semua bilangan genap yang telah difilter.
Fungsi ini mengembalikan jumlah dari bilangan genap yang ada di dalam array yang diberikan.

```javascript
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

// SQL query untuk mengambil data dari tbl_addresses
$sql = "SELECT address_id, member_id, city, state FROM tbl_addresses";
$result = $conn->query($sql);

// Memeriksa jika ada hasil yang ditemukan
if ($result->num_rows > 0) {
    echo "<ul>"; // Membuka tag ul untuk membuat daftar
    // Menampilkan hasil untuk setiap baris
    while($row = $result->fetch_assoc()) {
        echo "<li>Address ID: " . $row["address_id"]. 
             " - Member ID: " . $row["member_id"]. 
             " - City: " . $row["city"]. 
             " - State: " . $row["state"]. "</li>";
    }
    echo "</ul>"; // Menutup tag ul
} else {
    echo "0 hasil ditemukan";
}

// Menutup koneksi
$conn->close();
?>


```

## Output :
<img src="https://github.com/naufal-al-munawar251/Tugas-Programer/blob/master/Question4_tbl_adress.png" width="550" title="hover text">

# Question Ketiga (5)

Konfigurasi Koneksi Database:

Menyimpan informasi koneksi seperti nama server, username, password, dan nama database.
Membuat Koneksi:

Menghubungkan ke database MySQL menggunakan mysqli.
Memeriksa Koneksi:

Mengecek apakah koneksi berhasil. Jika tidak, menampilkan pesan kesalahan dan menghentikan skrip.
SQL Query untuk Menemukan Klien Tanpa Tagihan:

Menggunakan LEFT JOIN untuk menggabungkan tabel tbl_clients dengan tbl_invoices, dan mencari klien yang tidak memiliki tagihan (i.cient_id IS NULL).
Memeriksa dan Menampilkan Hasil:

Jika ada hasil, menampilkan nama klien dalam daftar HTML (<ul>). Jika tidak ada hasil, menampilkan "0 hasil ditemukan".
Menutup Koneksi:

Menutup koneksi ke database setelah query selesai.
Ini akan menampilkan daftar klien yang tidak memiliki tagihan.

```javascript
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


```

## Output :
<img src="https://github.com/naufal-al-munawar251/Tugas-Programer/blob/master/Question5.png" width="550" title="hover text">


# Question Ketiga (6)

Konfigurasi Koneksi Database:

Mengatur variabel untuk menyimpan informasi koneksi ke database: nama server, username, password, dan nama database.
Membuat Koneksi:

Membuat objek mysqli untuk menghubungkan ke database menggunakan konfigurasi yang telah ditentukan.
Memeriksa Koneksi:

Mengecek apakah koneksi berhasil. Jika terjadi kesalahan, menampilkan pesan kesalahan dan menghentikan eksekusi skrip.
SQL Query untuk Menemukan Nomor Telepon Duplikat:

Query SQL menggunakan GROUP BY untuk mengelompokkan nomor telepon dan HAVING COUNT(*) > 1 untuk memilih hanya nomor telepon yang muncul lebih dari sekali dalam tabel kontak.
Memeriksa dan Menampilkan Hasil:

Jika ada hasil, menampilkan nomor telepon yang duplikat dalam bentuk daftar HTML (<ul>). Jika tidak ada hasil, menampilkan "0 hasil ditemukan".
Menutup Koneksi:

Menutup koneksi ke database setelah query selesai untuk menghindari kebocoran sumber daya.

```javascript
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

// SQL query untuk menemukan nomor telepon yang muncul lebih dari sekali
$sql = "SELECT Mobile
        FROM kontak
        GROUP BY Mobile
        HAVING COUNT(*) > 1";
$result = $conn->query($sql);

// Memeriksa jika ada hasil yang ditemukan
if ($result->num_rows > 0) {
    echo "<ul>"; // Membuka tag ul untuk membuat daftar
    // Menampilkan hasil untuk setiap baris
    while($row = $result->fetch_assoc()) {
        echo "<li>" . $row["Mobile"]. "</li>";
    }
    echo "</ul>"; // Menutup tag ul
} else {
    echo "0 hasil ditemukan";
}

// Menutup koneksi
$conn->close();
?>


```

## Output :
<img src="https://github.com/naufal-al-munawar251/Tugas-Programer/blob/master/Question6.png" width="550" title="hover text">
