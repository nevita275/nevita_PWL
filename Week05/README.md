NAMA  : NEVITA TRIYA YULIANA <br>
KELAS : TI-2F <br>
ABSEN : 20 <br>

## LAPORAN PRAKTIKUM WEEK05

## JOBSHEET 01 
## Langkah Praktikum :
## Langkah 1 – Membuat Project Laravel Baru 
Install Laravel dengan nama project Week05 <br>
## Langkah 2 – Konfigurasi Database MySQL 
1.Edit file .env
![](img/database.png)
2.Jalankan migrasi
![](img/migrate.png) <br>
## Langkah 3 – Install Filament v4 
1.Install Filament
![](img/filament.png)
2.Install Panel Builder
![](img/panel1.png)
![](img/panel2.png) <br>
## Langkah 4 – Membuat User Admin 
![](img/user.png)
## Langkah 5 – Menjalankan Aplikasi 
![](img/login.png)
Database:
![](img/databaseuser.png)<br>
## Analisis & Diskusi :
1.Kelebihan Filament: Memungkinkan pembuatan admin panel dengan cepat dan elegan tanpa banyak coding manual, karena menyediakan banyak komponen UI dan fitur bawaan. <br>
2.Filament dibangun menggunakan Livewire untuk memberikan interaktivitas dinamis pada halaman web tanpa perlu menulis banyak kode JavaScript khusus atau melakukan reload halaman penuh. <br>
3.SQLite adalah database berbasis file yang sangat ringan dan mudah disetup (cocok untuk testing cepat). Sedangkan MySQL atau PostgreSQL (yang digunakan pada project ini di pgAdmin) adalah sistem manajemen database (RDBMS) berbasis server yang kuat, memiliki integritas data yang lebih ketat, dan merepresentasikan environment yang sama dengan versi production sesungguhnya. <br>
4.Fungsi Panel Builder: Digunakan untuk membuat, mengonfigurasi, dan mengelola antarmuka admin (panel). Fitur ini juga memfasilitasi pembuatan sistem dengan multi-panel. <br><br>

## JOBSHEET 02
## Langkah Praktikum :
## Langkah 1 – Melihat Daftar Perintah Filament 
![](img/list1.png)
![](img/list2.png)
##  Langkah 2 – Membuat Resource User 
![](img/resourceuser.png)
![](img/strukturfolder.png)
##  Langkah 3 – Menjalankan Aplikasi 
Menu Users di sidebar
![](img/menu-user.png)
![](img/user1.png)
![](img/user2.png)
## Membuat Form Input (Create & Edit) 
![](img/add-form.png)
![](img/inputdata.png)
![](img/db-user.png)
![](img/tampil-user.png)
## Menampilkan Data pada Tabel 
![](img/tabel-user.png)
## Mengganti Icon Menu Resource 
sebelum:
![](img/icon-before.png)
setelah:
![](img/icon-after.png)
## Analisis & Diskusi 
1.Karena Filament menggunakan arsitektur Resource-driven berbasis Laravel (Eloquent & Livewire). Perintah make:filament-resource otomatis men-generate struktur halaman lengkap (List, Create, Edit) yang sudah terhubung dengan model database, sehingga developer tidak perlu menulis controller, routing, atau view (HTML/Blade) secara manual. <br>
2.Form Schema untuk Mengatur antarmuka input data (seperti teks, dropdown) untuk halaman Create (tambah) dan Edit (ubah). Sedangkan Table Schema untuk Mengatur antarmuka tampilan data (seperti kolom informasi) untuk halaman List (daftar/tabel). <br>
3.Cukup tambahkan metode ->unique(ignoreRecord: true) pada komponen TextInput di dalam Form Schema. Pengaturan ignoreRecord: true mencegah error validasi saat pengguna sedang memperbarui (edit) data miliknya sendiri. <br>
4.Karena Filament otomatis terintegrasi dengan sistem autentikasi Laravel. Ketika input didefinisikan sebagai ->password(), Filament dan model User Laravel (melalui casting) akan secara otomatis mengenkripsi (hash) password tersebut sebelum disimpan ke database.<br>