<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Pendaftaran kuliah</title>
</head>

<body>
    <div class="container">
        <h2>FORMULIR <br> PENDAFTARAN MASUK UNIVERSITAS</h2>
        <form action="proses_input.php" method="POST">
            <label for="nama"> Masukan Nama Lengkap:</label>
            <input type="text" id="nama" name="nama" required>

            <label for="email">Masukan email:</label>
            <input type="text" id="email" name="email" required>

            <!-- <label for="jenis"></label> -->
            Pilih jurusan:
            <select id="pilih" name="pilih" required>
                <option value="Ilkom">Ilmu komputer</option>
                <option value="Arsitektur">Arsitektur</option>
                <option value="Sipil">Sipil</option>
                <option value="industri">industri</option>
            </select>

            <label for="alamat">Masukan alamat anda:</label>
            <input type="text" id="alamat" name="alamat" required>

            <label for="tanggal">masukan Tanggal pendaftaran:</label>
            <input type="date" id="tanggal" name="tanggal" required>

            <input type="submit" value="Daftar" name="submit">
        </form>
    </div>
</body>

</html>