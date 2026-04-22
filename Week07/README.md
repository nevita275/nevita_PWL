## NAMA  : NEVITA TRIYA YULIANA <br>
## KELAS : TI-2F <br>
## ABSEN : 20 <br>

## LAPORAN PRAKTIKUM WEEK07
<details>
<summary><h3>JOBSHEET 01</h3></summary>
<br>
<blockquote>

## Struktur Database Product
**Database**
![](img/database.png)
## Membuat Resource Product
![](img/makeproduct.png)
![](img/web1.png)
## Implementasi Wizard Form
**Step 1 – Product Info**
![](img/web2.png)
**Step 2 – Pricing & Stock**
![](img/web3.png)
**Step 3 – Media & Status**
![](img/web4.png)
## Menambahkan Tombol Submit
![](img/web5.png)
## Menghilangkan Default Button
![](img/web6.png)
## Menampilkan Data pada Table
**Tampilan Web**
![](img/web7.png)
**Database**
![](img/database2.png)
**Halaman Awal**
![](img/web8.png)
![](img/web9.png)
## Analisis & Diskusi
**1. Mengapa Wizard Form lebih baik untuk form panjang?** <br>
Wizard Form lebih baik karena menerapkan prinsip chunking (memecah informasi menjadi bagian-bagian kecil). Saat berhadapan dengan form yang sangat panjang (seperti data produk e-commerce yang kompleks), pengguna sering kali merasa kewalahan (overwhelmed). Dengan Wizard Form, tampilan menjadi lebih terstruktur, fokus pengguna terjaga, dan proses pengisian data terasa lebih ringan dan sistematis. <br>
**2. Kapan kita menggunakan skippable()?** <br>
Fitur ->skippable() digunakan ketika ada sebuah langkah (step) di dalam form yang isiannya bersifat opsional atau tidak wajib diisi pada saat itu juga . Dengan fitur ini, pengguna diizinkan untuk menekan tombol "Next" dan melompati langkah tersebut tanpa terhalang oleh sistem validasi (error wajib isi).<br>
**3. Apa kelebihan multi step dibanding single form panjang?** <br>
-> Fokus Kontekstual: Pengguna hanya dihadapkan pada isian yang saling berkaitan pada satu waktu (misalnya fokus pada "Informasi Produk" dulu, baru lanjut ke "Harga & Stok"). <br>
->Validasi Bertahap: Kesalahan input (error validasi) dapat langsung dideteksi dan diperbaiki di tiap langkahnya . Pada form tunggal yang panjang, pengguna sering kali harus men-scroll jauh ke atas/bawah hanya untuk mencari di mana letak kolom yang salah.<br>
->Tampilan Lebih Rapi: Menghemat ruang vertikal pada layar sehingga User Interface (UI) terlihat jauh lebih profesional dan bersih.<br>
**4. Apakah wizard cocok untuk semua jenis form?**<br>
Tidak. Wizard Form sangat cocok dan direkomendasikan untuk form yang panjang, berjenjang, dan kompleks. Namun, untuk form yang sederhana dan hanya membutuhkan sedikit kolom (misalnya form input Kategori yang hanya berisi nama dan deskripsi singkat), penggunaan wizard justru akan memperburuk User Experience (UX) karena memaksa pengguna melakukan ekstra klik ("Next") yang sebenarnya tidak perlu.
</blockquote>
</details>