<!DOCTYPE html>
<html lang="id">
<head>
    <title>Transaksi POS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="navbar navbar-dark bg-dark mb-4 shadow-sm">
        <div class="container"><a class="navbar-brand fw-bold" href="/">🛒 Beranda Kasir</a></div>
    </nav>

    <div class="container">
        <h2 class="mb-4 fw-bold">Halaman Transaksi Kasir</h2>
        <div class="row">
            <div class="col-md-8">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-primary text-white fw-bold">Daftar Item Belanja</div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <tr><th>Nama Barang</th><th>Harga</th><th>Qty</th><th>Subtotal</th></tr>
                            </thead>
                            <tbody>
                                <tr><td>Kopi Susu Aren</td><td>Rp 18.000</td><td>2</td><td class="fw-bold">Rp 36.000</td></tr>
                                <tr><td>Roti Bakar Coklat</td><td>Rp 15.000</td><td>1</td><td class="fw-bold">Rp 15.000</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-dark text-white fw-bold">Ringkasan Pembayaran</div>
                    <div class="card-body text-center py-5">
                        <h5 class="text-muted">Total Tagihan:</h5>
                        <h2 class="display-6 fw-bold text-danger">Rp 51.000</h2>
                        <hr class="my-4">
                        <button class="btn btn-success btn-lg w-100 py-3 shadow">💵 Bayar Sekarang</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>