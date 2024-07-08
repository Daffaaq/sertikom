<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arsip Surat</title>
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
            display: flex;
            flex-direction: column;
            align-items: center;
            /* Center horizontally */
            padding: 60px;
            overflow-y: auto;
        }

        .search-container {
            margin-bottom: 20px;
        }

        .table-container {
            width: 100%;
            max-width: 800px;
            /* Set a maximum width for the table */
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid #ccc;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }

        .actions button {
            margin-right: 5px;
        }

        .archive-button {
            margin-top: 20px;
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
        <h1>Arsip Surat</h1>
        <p>Berikut ini adalah surat-surat yang telah terbit dan diarsipkan. Klik "Lihat" pada kolom aksi untuk
            menampilkan surat.</p>

        <div class="search-container">
            <input type="text" placeholder="Cari surat..." id="search">
            <button>Cari!</button>
        </div>

        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Nomor Surat</th>
                        <th>Kategori</th>
                        <th>Judul</th>
                        <th>Waktu Pengarsipan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2022/PD3/TU/001</td>
                        <td>Pengumuman</td>
                        <td>Nota Dinas WFH</td>
                        <td>2023-06-21 17:23</td>
                        <td class="actions">
                            <button style="background-color: red; color: white;">Hapus</button>
                            <button style="background-color: orange; color: white;">Unduh</button>
                            <button style="background-color: blue; color: white;">Lihat >></button>
                        </td>
                    </tr>
                    <tr>
                        <td>2022/PD2/TU/022</td>
                        <td>Undangan</td>
                        <td>Undangan Halal Bi Halal</td>
                        <td>2023-04-21 18:23</td>
                        <td class="actions">
                            <button style="background-color: red; color: white;">Hapus</button>
                            <button style="background-color: orange; color: white;">Unduh</button>
                            <button style="background-color: blue; color: white;">Lihat >></button>
                        </td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>

        <button class="archive-button">Arsipkan Surat..</button>
    </div>
</body>

</html>
