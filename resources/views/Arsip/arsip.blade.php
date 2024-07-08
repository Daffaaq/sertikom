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
            padding: 20px;
            overflow-y: auto;
        }

        .form-container {
            width: 100%;
            max-width: 800px;
        }

        .form-group {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .form-group label {
            width: 150px;
            margin-right: 10px;
        }

        .form-group input,
        .form-group select,
        .form-group button {
            flex: 1;
            padding: 10px;
            font-size: 1em;
        }

        .form-group button {
            flex: none;
        }

        .notes {
            margin-bottom: 20px;
            font-size: 0.9em;
            color: #555;
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
        <div class="form-container">
            <h1>Arsip Surat &gt;&gt; Unggah</h1>
            <p>Unggah surat yang telah terbit pada form ini untuk diarsipkan.</p>
            <p class="notes">Catatan:
                <br>• Gunakan file berformat PDF
            </p>
            <div class="form-group">
                <label for="nomor-surat">Nomor Surat</label>
                <input type="text" id="nomor-surat" name="nomor-surat">
            </div>
            <div class="form-group">
                <label for="kategori">Kategori</label>
                <select id="kategori" name="kategori">
                    <option value="undangan">Undangan</option>
                    <option value="pengumuman">Pengumuman</option>
                    <!-- Add more options as needed -->
                </select>
            </div>
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" id="judul" name="judul">
            </div>
            <div class="form-group">
                <label for="file-surat">File Surat (PDF)</label>
                <input type="text" id="file-surat" name="file-surat">
                <button>Browse File...</button>
            </div>
            <div class="actions">
                <button>&lt;&lt; Kembali</button>
                <button>Simpan</button>
            </div>
        </div>
    </div>
</body>

</html>
