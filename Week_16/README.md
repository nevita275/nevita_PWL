## NAMA  : NEVITA TRIYA YULIANA <br>
## KELAS : TI-2F <br>
## ABSEN : 19 <br>

## LAPORAN PRAKTIKUM WEEK 16 – RESTful API<br>
## LANGKAH - LANGKAH PRAKTIKUM:

<details>
<summary><h3>Praktikum 1: Membuat autentikasi token pada RESTful API</h3></summary>
<br>
<blockquote>

## 1. Buatlah proyek baru Laravel 
![](img/langkah1.png)
## 2. Tambahkan package laravel sanctum 
![](img/langkah2.png)
## 3. Publish konfigurasi dari Laravel sanctum
![](img/langkah3.png)
## 4. Sisipkan trait HasApiTokens ke dalam file User.php
![](img/langkah4.png)
## 5. Buatlah database kosong dan atur koneksi ke database baru dengan menyesuaikan file .env
![](img/langkah5.png)
## 6. Jalankan migrate data 
![](img/langkah6.png)
## 7. Pastikan proyek bisa dijalankan dan tidak ada kesalahan
![](img/langkah7.png)
## 8. Tambahkan trait ApiResponse.php di lokasi directory app/Traits/ApiResponse.php
![](img/langkah8.png)
## 9. Buatlah custom request untuk menangani request spesifik terhadap API
![](img/langkah9.png)
## 10. Class ApiRequest diganti menjadi abstract class ApiRequest
![](img/langkah10.png)
## 11. Buatlah controller untuk menangani autentikasi
![](img/langkah11.png)
## 12. Tambahkan Trait ApiResponse
![](img/langkah12.png)
## 13. Buatlah custom request dengan nama RegisterRequest
![](img/langkah13.png)
## 14. Ubah parent class yng ada di file RegisterRequest.php menjadi ApiRequest
![](img/langkah14.png)
## 15. Tambahkan function register dengan parameter RegisterRequest pada Api/AuthController
![](img/langkah15.png)
## 16. Buatlah custom request dengan nama LoginRequest, lalu modifikasi isi dari LoginRequest.php
![](img/langkah16.png)<br>
![](img/langkah16_1.png)
## 17. Letakkan function login pada file Api/AuthController.php
![](img/langkah17.png)
## 18. Tambahkan route baru untuk register dan juga login pada file routes/api.php
![](img/langkah18.png)
## 19. Ubah semua path {{baseurl}} menjadi path server development
**Register**<br>
![](img/langkah19.png)<br>
**Login**<br>
![](img/langkah19_1.png)
## 20. Copy token yang didapatkan dari proses login atau register pada postman
**Register**<br>
![](img/langkah20_1.png)<br>
![](img/langkah20_2.png)<br>
**Login** <br>
![](img/langkah20_3.png)<br>
![](img/langkah20_4.png)<br>
## 21. Tambahkan fungsi untuk menghapus token sebagai implementasi fitur logout pada file Api/AuthController.php
![](img/langkah21.png)
## 22. Tambahkan route pada routes/api.php untuk endpoint logout
![](img/langkah22.png)
## 23. Buka postman, lakukan percobaan request logout dengan menyisipkan informasi token pada tab Authorization di postman
![](img/langkah23.png)
</blockquote>
</details>

<br>

