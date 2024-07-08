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

        .document-info {
            margin-bottom: 20px;
        }

        .pdf-viewer {
            width: 100%;
            height: 500px;
            border: 1px solid #ccc;
            margin-bottom: 20px;
        }

        .actions {
            display: flex;
            justify-content: space-between;
        }

        .actions button {
            padding: 10px 20px;
            font-size: 1em;
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
        <h1>Arsip Surat &gt;&gt; Lihat</h1>
        <div class="document-info">
            <p>Nomor: 2022/PD3/TU/001</p>
            <p>Kategori: Pengumuman</p>
            <p>Judul: Nota Dinas WFH</p>
            <p>Waktu Unggah: 2023-06-21 17:23</p>
        </div>
        <div class="pdf-viewer">
            <embed src="your-pdf-file.pdf" width="100%" height="100%" type="application/pdf">
        </div>
        <div class="actions">
            <button>&lt;&lt; Kembali</button>
            <button>Unduh</button>
            <button>Edit/Ganti File</button>
        </div>
    </div>
</body>

</html>
