<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Data Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.2);
            width: 350px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border-radius: 8px;
            border: 1px solid #ccc;
            outline: none;
        }

        input[type="text"]:focus {
            border-color: #2575fc;
        }

        .gender {
            margin-top: 10px;
        }

        .gender label {
            font-weight: normal;
            margin-right: 10px;
        }

        button {
            width: 100%;
            margin-top: 20px;
            padding: 10px;
            border: none;
            border-radius: 10px;
            background: #2575fc;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background: #1a5edb;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Form Mahasiswa</h2>

    <form>
        <label>Nama</label>
        <input type="text" placeholder="Masukkan nama">

        <label>NIM</label>
        <input type="text" placeholder="Masukkan NIM">

        <label>Kelas</label>
        <input type="text" placeholder="Masukkan kelas">

        <label>Jenis Kelamin</label>
        <div class="gender">
            <label><input type="radio" name="jk"> Laki-laki</label>
            <label><input type="radio" name="jk"> Perempuan</label>
        </div>

        <button type="submit">Kirim</button>
    </form>
</div>

</body>
</html>
