<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Pengguna</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 20px;
        }
        .container {
            max-width: 500px;
            background: #ffffff;
            padding: 20px 25px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            margin: 0 auto;
        }
        h2, h3 {
            color: #333;
            margin-top: 0;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="email"],
        input[type="tel"],
        textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .radio-group label {
            display: inline;
            font-weight: normal;
            margin-right: 15px;
        }
        button {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }
        button:hover {
            background-color: #0056b3;
        }
        .hasil-box {
            margin-top: 25px;
            padding: 15px;
            background-color: #e9f5ff;
            border-left: 4px solid #007bff;
            border-radius: 4px;
        }
        .hasil-box p {
            margin: 6px 0;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Form Input Data Pengguna</h2>
    
    <!-- Form menggunakan method POST dan mengarah ke file index.php -->
    <form action="index.php" method="POST">
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label>Jenis Kelamin:</label>
            <div class="radio-group">
                <label><input type="radio" name="jenis_kelamin" value="Laki-laki" required> Laki-laki</label>
                <label><input type="radio" name="jenis_kelamin" value="Perempuan" required> Perempuan</label>
            </div>
        </div>

        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <textarea id="alamat" name="alamat" rows="4" required></textarea>
        </div>

        <div class="form-group">
            <label for="no_telepon">Nomor Telepon:</label>
            <input type="tel" id="no_telepon" name="no_telepon" required>
        </div>

        <button type="submit">Submit</button>
    </form>

    <?php
    // Memeriksa apakah data dikirim melalui method POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil data input dan mengamankannya dengan htmlspecialchars
        $nama = htmlspecialchars($_POST['nama']);
        $email = htmlspecialchars($_POST['email']);
        $jenis_kelamin = htmlspecialchars($_POST['jenis_kelamin']);
        $alamat = htmlspecialchars($_POST['alamat']);
        $no_telepon = htmlspecialchars($_POST['no_telepon']);
        ?>
        
        <!-- Menampilkan data setelah form dikirim -->
        <div class="hasil-box">
            <h3>Hasil Input Data Pengguna</h3>
            <p><strong>Nama:</strong> <?php echo $nama; ?></p>
            <p><strong>Email:</strong> <?php echo $email; ?></p>
            <p><strong>Jenis Kelamin:</strong> <?php echo $jenis_kelamin; ?></p>
            <p><strong>Alamat:</strong> <?php echo nl2br($alamat); ?></p>
            <p><strong>Nomor Telepon:</strong> <?php echo $no_telepon; ?></p>
        </div>

        <?php
    }
    ?>
</div>

</body>
</html>