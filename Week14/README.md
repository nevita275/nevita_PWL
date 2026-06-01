## NAMA  : NEVITA TRIYA YULIANA <br>
## KELAS : TI-2F <br>
## ABSEN : 19 <br>

## LAPORAN PRAKTIKUM WEEK 14 – Implementasi Relation pada Filament (HasMany) <br>
## LANGKAH - LANGKAH PRAKTIKUM:

<details>
<summary><h3>A. Membuat Dropdown Searchable</h3></summary>
<br>
<blockquote>

## Code
![](img/code1.png)<br>
## Output
![](img/web1.png)
</blockquote>
</details>

<br>

<details>
<summary><h3>B. Relationship pada Model</h3></summary>
<br>
<blockquote>

## Code
![](img/code2.png)<br>
![](img/code3.png)<br>
</blockquote>
</details>

<br>

<details>
<summary><h3>C. Menampilkan Data Relasi pada Table</h3></summary>
<br>
<blockquote>

## Code
![](img/code5.png)
## Output
![](img/web2.png)
</blockquote>
</details>

<br>

<details>
<summary><h3>D. Membuat Relationship Manager</h3></summary>
<br>
<blockquote>

## Command
![](img/command.png)<br>
## File yang dibuat
![](img/newfile.png)<br>
</blockquote>
</details>

<br>

<details>
<summary><h3>E. Menghubungkan Relationship Manager</h3></summary>
<br>
<blockquote>

## Code
**CategoryResource.php** <br>
![](img/code6.png)<br>
**Category.php** <br>
![](img/code7.png)<br>
## Output
![](img/web3.png)<br>
</blockquote>
</details>

<br>

<details>
<summary><h3>F. Menambahkan Kolom pada Relationship Table</h3></summary>
<br>
<blockquote>

## Code
![](img/code8.png)<br>
## Output
![](img/web4.png)<br>
</blockquote>
</details>

<br>

<details>
<summary><h3>G. Membuat Form Create Post pada Relationship</h3></summary>
<br>
<blockquote>

## Code
![](img/code9.png)<br>
## Output
![](img/web5.png)<br>
</blockquote>
</details>

<br>

<details>
<summary><h3>Analisis & Diskusi</h3></summary>
<br>
<blockquote>
 
**1. Apa perbedaan relationship() dengan options()?**<br>
-> options(): Mengambil data secara manual dan memuat seluruh datanya sekaligus ke dalam memori aplikasi (contohnya menggunakan Category::all()->pluck('name', 'id')). Options kurang efisien jika datanya sangat banyak.<br>
-> relationship(): Mengotomatiskan proses pengambilan data menggunakan relasi Eloquent yang sudah didefinisikan di Model. Relationship lebih efisien, dan otomatis terintegrasi dengan fitur Filament lainnya (seperti pencarian) tanpa perlu menulis query manual. <br> <br>
**2. Mengapa searchable penting untuk dataset besar?** <br>
Jika sebuah sistem memiliki ribuan data kategori, memuat semua data sekaligus ke dalam dropdown akan membuat halaman web menjadi sangat lambat atau bahkan crash. Fitur searchable sangat penting karena tidak perlu memuat semua data sekaligus, hanya akan mencari dan memuat data secara spesifik sesuai dengan kata kunci yang diketik oleh pengguna, sehingga jauh lebih cepat untuk dataset besar.<br><br>  
**3. Apa fungsi Relationship Manager pada Filament?**<br>
Relationship Manager berfungsi untuk mengelola data relasi secara langsung dari halaman resource utama tanpa perlu berpindah-pindah halaman. Contohnya, bisa melihat, membuat (Create), mengedit (Update), atau menghapus (Delete) baris data Post langsung dari dalam halaman edit Category. Selain itu, juga otomatis mengisikan foreign key (seperti category_id) saat membuat data baru, sehingga mengurangi risiko kesalahan input.<br><br>
**4. Kapan menggunakan HasMany dan BelongsTo?** <br>
Kedua metode ini digunakan untuk mendefinisikan relasi "Satu-ke-Banyak" (One-to-Many), tetapi diletakkan di sisi yang berbeda:<br>
-> HasMany (Memiliki Banyak): Digunakan pada tabel/model "Induk" (Parent) yang bisa memiliki banyak data turunan. Contoh: Satu Kategori memiliki banyak Post (Category → HasMany → Post).<br>
-> BelongsTo (Milik / Bagian Dari): Digunakan pada tabel/model "Anak" (Child) yang menyimpan foreign key (ID Induk) dan hanya terikat pada satu data induk. Contoh: Satu Post hanya memiliki satu Kategori (Post → Belongs To → Category). 
</blockquote>
</details>