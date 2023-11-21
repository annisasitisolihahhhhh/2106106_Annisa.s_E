<?php
$db = mysqli_connect("localhost", "root", "", "uts");
if (!$db) {
    echo "<script>
                alert('database tidak terhubung')
            </script>";
};

$nama = $_POST['nama'];
$email = $_POST['email'];
$jurusan = $_POST['pilih'];
$alamat = $_POST['alamat'];
$tanggal = $_POST['tanggal'];

$query = "INSERT INTO tanggal VALUES(NULL,'$nama','$email','$jurusan','$alamat','$tanggal')";
mysqli_query($db, $query);
echo "<script>alert('data berhasil ditambahkan')</script>";
echo "<script>window.location='./index.php'</script>";
?>