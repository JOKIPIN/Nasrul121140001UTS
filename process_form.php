<?php
// Menerima data 
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$prodi = $_POST['prodi'];
$email = $_POST['email'];
$password = $_POST['password'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tgl_lahir = $_POST['tgl_lahir'];
$alamat = $_POST['alamat'];


// Menyiapkan data yang akan dikirim kembali ke halaman formulir
$response_data = array(
    'nama' => $nama,
    'nim' => $nim,
    'prodi' => $prodi,
    'email' => $email,
    'password' => $password,
    'jenis_kelamin' => $jenis_kelamin,
    'tgl_lahir' => $tgl_lahir,
    'alamat' => $alamat
);

// Mengirimkan data kembali ke halaman formulir dalam format JSON
header('Content-Type: application/json');
echo json_encode($response_data);
?>
