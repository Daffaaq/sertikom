<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            display: flex;
            font-family: Arial, sans-serif;
        }

        .sidebar {
            width: 200px;
            background-color: #f4f4f4;
            padding: 20px;
            border-right: 1px solid #ccc;
            display: flex;
            flex-direction: column;
        }

        .sidebar h2 {
            text-align: center;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
            flex: 1;
        }

        .sidebar ul li {
            margin: 15px 0;
        }

        .sidebar ul li a {
            text-decoration: none;
            color: #000;
        }

        .main-content {
            flex: 1;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .about-container {
            display: flex;
            align-items: center;
        }

        .about-container img {
            width: 100px;
            height: 100px;
            margin-right: 20px;
        }

        .about-container div {
            line-height: 1.6;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <h2>Menu</h2>
        <ul>
            <li><a href="#">Arsip</a></li>
            <li><a href="#">Kategori Surat</a></li>
            <li><a href="#">About</a></li>
        </ul>
    </div>
    <div class="main-content">
        <h1>About</h1>
        <div class="about-container">
            <img src="profile-placeholder.png" alt="Profile Picture">
            <div>
                <p>Aplikasi ini dibuat oleh:</p>
                <p>Nama: Daffa Aqila Rahmatullah</p>
                <p>Prodi: D4 Teknik Informatika</p>
                <p>NIM: 2041720098</p>
                <p>Tanggal: 10 Oktober 2024</p>
            </div>
        </div>
    </div>
</body>

</html>
