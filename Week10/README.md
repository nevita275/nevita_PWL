## NAMA  : NEVITA TRIYA YULIANA <br>
## KELAS : TI-2F <br>
## ABSEN : 20 <br>

## LAPORAN PRAKTIKUM WEEK10
<details>
<summary><h3>Implementasi Sorting pada Kolom Title</h3></summary>
<br>
<blockquote>

## Code
![](img/code.png)<br>
## Output
![](img/web1.png)
</blockquote>
</details>

<br>

<details>
<summary><h3>Sorting pada Kolom Slug</h3></summary>
<br>
<blockquote>

## Code
![](img/code2.png)<br>
## Output
![](img/web2.png)
</blockquote>
</details>

<br>

<details>
<summary><h3>Sorting pada Relasi (Category)</h3></summary>
<br>
<blockquote>

## Code
![](img/code3.png)<br>
## Output
![](img/web3.png)
</blockquote>
</details>

<br>

<details>
<summary><h3>Sorting pada Kolom Tanggal</h3></summary>
<br>
<blockquote>

## Code
![](img/code4.png)<br>
## Output
![](img/web4.png)
</blockquote>
</details>

<br>

<details>
<summary><h3>Mengatur Default Sorting</h3></summary>
<br>
<blockquote>

## Code
![](img/code5.png)<br>
## Output
![](img/web5.png)
</blockquote>
</details>

<br>

<details>
<summary><h3>Analisis & Diskusi</h3></summary>
<br>
<blockquote>
 
**1. Mengapa sorting penting pada admin panel?** <br>
Sorting sangat penting karena ketika data bertambah banyak, pengguna akan sangat membutuhkan fitur untuk mengurutkan data (misalnya dari A-Z atau berdasarkan tanggal terbaru). Selain itu, sorting sangat penting untuk memudahkan manajemen data dalam skala yang besar.<br>
**2. Apa perbedaan sortable biasa dengan defaultSort()?**<br>
-> Method sortable() berfungsi untuk mengaktifkan fitur sorting pada kolom tertentu. Ini memungkinkan pengguna untuk mengurutkan tabel secara manual dengan mengklik header kolom.<br>
-> Method defaultSort() berfungsi untuk mengatur sorting bawaan (default) pada tabel. Ini membuat tabel otomatis terurut berdasarkan kolom dan kriteria tertentu sejak pertama kali halaman dimuat.<br>
**3. Mengapa relasi tetap bisa di-sort?**<br>
Kolom yang berasal dari relasi (seperti category.name) tetap bisa diurutkan karena sistem Filament secara otomatis menangani proses join relasi di dalam database.<br>
**4. Kapan kita menggunakan desc sebagai default?**<br>
Opsi desc (urut turun atau Z-A/9-0) sangat tepat digunakan sebagai default ketika kita ingin data terbaru tampil paling atas. Contoh penggunaannya adalah pada kolom tanggal pembaruan atau pembuatan, seperti ->defaultSort('created_at', 'desc').
</blockquote>
</details>