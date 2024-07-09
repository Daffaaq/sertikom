<!DOCTYPE html>
<html>

<body>

    <div class="d-flex">
        <div class="bg-light" style="width: 25%; height: 100vh;">
            <h3 class="bg-primary text-white p-3">Menu</h3>
            <div class="list-group list-group-flush">
                <a href="{{ route('arsip_surat.index') }}" class="list-group-item list-group-item-action">Arsip</a>
                <a href="{{ route('kategori_surats.index') }}" class="list-group-item list-group-item-action">Kategori
                    Surat</a>
                <a href="/about" class="list-group-item list-group-item-action">About</a>
            </div>
        </div>
</body>

</html>
