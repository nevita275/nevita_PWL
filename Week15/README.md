## NAMA  : NEVITA TRIYA YULIANA <br>
## KELAS : TI-2F <br>
## ABSEN : 19 <br>

## LAPORAN PRAKTIKUM WEEK 15 – Implementasi Many-to-Many Relationship pada Filament<br>
## LANGKAH - LANGKAH PRAKTIKUM:

<details>
<summary><h3>A. Rollback Migration</h3></summary>
<br>
<blockquote>

## rollback product & post 
![](img/command1.png)<br>
![](img/migration.png)<br>
## Code
![](img/code1.png)
</blockquote>
</details>

<br>

<details>
<summary><h3>B. Membuat Tabel Tags</h3></summary>
<br>
<blockquote>

## Code
![](img/code2.png)<br>
</blockquote>
</details>

<br>

<details>
<summary><h3>C. Membuat Pivot Table</h3></summary>
<br>
<blockquote>

## Code
![](img/code3.png)<br>
## Jalankan Migration
![](img/migration2.png)<br>
## Database
![](img/database.png)<br>
</blockquote>
</details>

<br>

<details>
<summary><h3>D. Membuat Resource Tag pada Filament</h3></summary>
<br>
<blockquote>

## Command
![](img/resource.png)<br>
</blockquote>
</details>

<br>

<details>
<summary><h3>E. Membuat Model Tag</h3></summary>
<br>
<blockquote>

## Code
![](img/command2.png)<br>
## Edit models tag.php
![](img/code4.png)<br>
## Website
![](img/web1.png)<br>
## Form Tag
**file TagForm.php**<br>
![](img/tagform.png)<br>
**Tambah kode**<br>
![](img/code5.png)<br>
**Output**<br>
![](img/web2.png)
## Table Tag
**file TagsTable.php**<br>
![](img/tagstable.png)<br>
**Tambahkan kode**<br>
![](img/code6.png)<br>
**Output**<br>
![](img/web3.png)
## File CreateTag.php
**CreateTag** <br>
![](img/code7.png)<br>
**EditTag**<br>
![](img/code8.png)
</blockquote>
</details>

<br>

<details>
<summary><h3>F. Menambahkan Relationship pada Model Post</h3></summary>
<br>
<blockquote>

## Code
![](img/code9.png)<br>
</blockquote>
</details>

<br>

<details>
<summary><h3>G. Menambahkan Relationship pada Model Tags</h3></summary>
<br>
<blockquote>

## Code
![](img/code10.png)<br>
</blockquote>
</details>

<br>

<details>
<summary><h3>H. Menggunakan Relationship pada Form Post</h3></summary>
<br>
<blockquote>

## Code
![](img/code11.png)<br>
</blockquote>
</details>

<br>

<details>
<summary><h3>I. Hasil Form Post</h3></summary>
<br>
<blockquote>

## Output
![](img/web4.png)<br>
## Tambah multiple() dan preload()
**Code** <br>
![](img/code12.png)<br>
**Output** <br>
![](img/web5.png)
</blockquote>
</details>

<br>

<details>
<summary><h3>J. Membuat Relationship Manager</h3></summary>
<br>
<blockquote>

## Command
![](img/command3.png)<br>
</blockquote>
</details>

<br>

<details>
<summary><h3>K. Menghubungkan Relationship Manager</h3></summary>
<br>
<blockquote>

## Code
![](img/code13.png)<br>
</blockquote>
</details>

<br>

<details>
<summary><h3>L. Fitur Relationship Manager</h3></summary>
<br>
<blockquote>

## Code
![](img/code14.png)<br>
## Output
![](img/web6.png)<br>
![](img/web7.png)
</blockquote>
</details>

<br>


<details>
<summary><h3>Analisis & Diskusi</h3></summary>
<br>
<blockquote>
 
**1. Apa perbedaan HasMany dan Many-to-Many?** <br>
-> HasMany (One-to-Many): Relasi di mana satu data dari tabel induk bisa memiliki banyak data di tabel anak, tetapi data anak hanya dimiliki oleh satu induk. Contoh: 1 Kategori memiliki banyak Post (tapi 1 Post hanya punya 1 Kategori). <br>
-> Many-to-Many: Relasi di mana banyak data dari tabel A bisa terhubung ke banyak data dari tabel B secara timbal balik. Contoh: 1 Post bisa memiliki banyak Tag, dan 1 Tag juga bisa digunakan oleh banyak Post. <br><br>

**2. Mengapa pivot table diperlukan?**<br>
Pivot table diperlukan khusus pada relasi Many-to-Many untuk berfungsi sebagai jembatan yang menghubungkan kedua tabel utama (dalam hal ini posts dan tags). Tabel pivot ini (contohnya post_tag) menyimpan ID dari kedua tabel tersebut (post_id dan tag_id) sehingga struktur database menjadi lebih jelas dan ternormalisasi dengan baik.<br><br>

**3. Apa fungsi attach dan detach pada Filament?** <br>
-> Attach: Berfungsi untuk menghubungkan atau "mencantolkan" data yang sudah ada (misalnya menempelkan Tag "Laravel 11" ke dalam sebuah Post). Proses ini akan membuat baris data baru secara otomatis di dalam tabel pivot.<br>  
-> Detach: Berfungsi untuk melepas atau memutuskan hubungan tersebut (misalnya menghapus Tag dari sebuah Post). Proses ini hanya akan menghapus baris relasi di tabel pivot, tanpa menghapus data master Tag itu sendiri di database. <br><br>

**4. Mengapa JSON column kurang baik untuk relasi?** <br>
Menyimpan data relasi (seperti kumpulan tag) menggunakan format JSON di dalam satu kolom memiliki banyak kelemahan, antara lain: <br> 
-> Tidak terstruktur: Format datanya bebas sehingga rentan berantakan.<br>
-> Data duplikat: Rentan terjadi pengulangan data yang sama.<br>
-> Query sulit: Sangat tidak efisien dan lambat ketika database harus mencari Post berdasarkan Tag tertentu.<br>
->Sulit dimodifikasi: Jika ada perubahan nama Tag, kita harus membongkar isi JSON di setiap Post satu per satu.
</blockquote>
</details>