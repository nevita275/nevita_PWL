<!DOCTYPE html>
<html lang="id">
<head>
    <title>Profil Pengguna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="navbar navbar-dark bg-dark mb-4 shadow-sm">
        <div class="container"><a class="navbar-brand fw-bold" href="/">🛒 Kembali</a></div>
    </nav>

    <div class="container mt-5 d-flex justify-content-center">
        <div class="card shadow border-0" style="width: 25rem; border-radius: 15px;">
            <div class="card-body text-center p-5">
                <img src="https://ui-avatars.com/api/?name={{ $name }}&background=0D8ABC&color=fff&size=128" class="rounded-circle shadow-sm mb-4" alt="Profile">
                
                <h2 class="card-title fw-bold text-dark">{{ $name }}</h2>
                <p class="text-muted fs-5 mb-2">ID Pegawai: <span class="fw-bold">#{{ $id }}</span></p>
                
                <span class="badge bg-success px-3 py-2 fs-6 rounded-pill mt-3">Status: Kasir Aktif</span>
            </div>
        </div>
    </div>
</body>
</html>