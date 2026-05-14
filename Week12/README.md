## NAMA  : NEVITA TRIYA YULIANA <br>
## KELAS : TI-2F <br>
## ABSEN : 20 <br>

## LAPORAN PRAKTIKUM WEEK 12 – Implementasi Toggle Column pada Table Filament <br>
## LANGKAH - LANGKAH PRAKTIKUM:

<details>
<summary><h3>A. Menambahkan Kolom Baru</h3></summary>
<br>
<blockquote>

## 1. Menambahkan Kolom ID
**Code**<br>
![](img/code1.png)<br>
## 2. Menambahkan Kolom Tags
**Code**<br>
![](img/code2.png) <br>
## 3. Menambahkan Kolom Published (Boolean)
**Code** <br>
![](img/code3.png)<br>
## Output
![](img/web1.png)
</blockquote>
</details>

<br>

<details>
<summary><h3>B. Mengaktifkan Toggle Column</h3></summary>
<br>
<blockquote>

## Code
![](img/code4.png)<br>
## Output<br>
![](img/web2.png)
</blockquote>
</details>

<br>

<details>
<summary><h3>C. Menyembunyikan Kolom Secara Default</h3></summary>
<br>
<blockquote>

## Code
![](img/code5.png)<br>
## Output
![](img/web3.png)
</blockquote>
</details>

<br>

<details>
<summary><h3>D. Menerapkan Toggle pada Semua Kolom</h3></summary>
<br>
<blockquote>

## Code
![](img/code6.png)<br>
## Output
![](img/web4.png)
</blockquote>
</details>

<br>

<details>
<summary><h3>Analisis & Diskusi</h3></summary>
<br>
<blockquote>
 
**1. Mengapa toggle column penting pada admin panel?**<br>
Fitur toggle column sangat penting untuk menjaga antarmuka tabel tetap rapi dan tidak penuh, terutama pada sistem yang memiliki banyak data dan kolom dinamis. Jika semua kolom ditampilkan sekaligus, tabel akan terlihat sulit dibaca. Dengan fitur toggle column, tampilan tabel menjadi jauh lebih fleksibel karena user dapat mengatur sendiri kolom mana saja yang relevan. <br>
**2. Apa perbedaan toggleable() biasa dengan isToggledHiddenByDefault??** <br>
-> toggleable() biasa: Kolom tersebut bisa disembunyikan melalui menu dropdown, tetapi saat halaman web pertama kali dimuat, kolom ini dalam keadaan ditampilkan (tercentang). <br>
-> isToggledHiddenByDefault(): Kolom tersebut juga memiliki fitur toggle, tetapi saat halaman pertama kali dimuat, kolom ini dalam keadaan disembunyikan secara default (tidak tercentang). Pengguna harus membuka menu dropdown dan mencentangnya secara manual jika ingin melihatnya. <br>
**3. Mengapa preferensi kolom tetap tersimpan?** <br>
Karena secara internal, Filament otomatis menyimpan data preferensi kolom mana saja yang diaktifkan atau disembunyikan oleh pengguna ke dalam session browser. Berkat penyimpanan di session ini, konfigurasi tabel tidak akan reset atau berubah meskipun pengguna berpindah ke halaman lain lalu kembali lagi ke halaman tersebut. <br>
**4. Kapan sebaiknya kolom disembunyikan secara default?** <br>
Kolom sebaiknya disembunyikan secara default ketika data di dalamnya tidak terlalu sering dibaca secara langsung untuk kebutuhan harian, tetapi sesekali tetap dibutuhkan untuk analisis mendalam atau pencarian spesifik. 
</blockquote>
</details>