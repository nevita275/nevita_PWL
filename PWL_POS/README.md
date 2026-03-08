NAMA    : NEVITA TRIYA YULIANA <br>
NIM     : 244107020208 <br>
KELAS   : TI-2F
<br><br>

PRAKTIKUM WEEK 03: <br>
PRAKTIKUM 01:
![DATABASE](screenshoot/database.png) <br>

PRAKTIKUM 02.1:
![CEK](screenshoot/database_m_level.png)
![CEK2](screenshoot/m_level_table.png)
![CEK1](screenshoot/kategori_supplier.png) <br>

PRAKTIKUM 02.2:
![CEK3](screenshoot/barang_penjualan_stok_penjualandetail.png)
![ERD](screenshoot/erd.png) <br>

PRAKTIKUM 03: <br>
LevelSeeder:
![LEVELSEEDER](screenshoot/levelseeder.png)
UserSeeder:
![USERSEEDER](screenshoot/userseeder.png)
KategoriSeeder:
![KATEGORISEEDER](screenshoot/kategoriseeder.png)
SupplierSeeder:
![SUPPLIERSEEDER](screenshoot/supplierseeder.png)
BarangSeeder:
![BARANGSEEDER](screenshoot/barangseeder.png)
StokSeeder:
![STOKBARANG](screenshoot/stokbarang.png)
PenjualanSeeder:
![PENJUALANSEEDER](screenshoot/penjualanseeder.png)
PenjualanDetailSeeder:
![PENJUALANDETAIL](screenshoot/penjualandetailseeder.png) <br>

PRAKTIKUM 04: <br>
Insert Data Baru Level:
![INSERT](screenshoot/insertdatabaru.png) <br>
Update Data Level:
![UPDATE](screenshoot/updatedata.png)
![UPDATE1](screenshoot/updatedidatabase.png) <br>
Delete Data Level:
![DELETE](screenshoot/deletedata.png)
![DELETE1](screenshoot/deletedidatabase.png) <br>
Output:
![HASILTABEL](screenshoot/hasiltabel.png) <br>

PRAKTIKUM 05: <br>
Insert Data Kategori:
![INSERTDATA](screenshoot/insertdatakategori.png)
![INSERTDATABASE](screenshoot/insertkategoridatabase.png) <br>
Update Data Kategori:
![UPDATE](screenshoot/updatekategori.png)
![UPDATE1](screenshoot/updatekategoridatabase.png) <br>
Detele Data Kategori
![DELETE2](screenshoot/deletekategori.png)
![DELETE3](screenshoot/deletekategoridatabase.png) <br>
Output:
![HASIL](screenshoot/hasiltabelkategori.png)

PRAKTIKUM 06:
![MODIF1](screenshoot/modifuser.png)
![MODIF3](screenshoot/modifuser3.png)

PENUTUP: <br>
1.Fungsi APP_KEY pada file .env Laravel: Berfungsi sebagai kunci rahasia (secret key) utama yang digunakan oleh Laravel untuk berbagai proses enkripsi dasar, seperti mengamankan session, enkripsi cookies, dan pembuatan token sandi. <br>

2.Cara generate nilai APP_KEY: Menggunakan perintah terminal php artisan 'key:generate'. <br>

3.Laravel secara default menyediakan file migrasi untuk: users (tabel pengguna), password_reset_tokens (token reset password), failed_jobs (menyimpan log kegagalan job/queue), dan personal_access_tokens (untuk autentikasi API/Sanctum). <br>

4.Tujuan '$table->timestamps();': Menghasilkan dua kolom otomatis di database, yaitu created_at (mencatat waktu data dibuat) dan updated_at (mencatat waktu data terakhir diubah) dengan tipe data timestamp / datetime. <br>

5.Tipe data dari '$table->id();': Menghasilkan tipe data BigInt Unsigned Auto Increment yang sekaligus dijadikan sebagai Primary Key pada tabel tersebut. <br>

6.Perbedaan '$table->id();' dengan '$table->id('level_id');:' yaitu '$table->id();' akan membuat kolom Primary Key dengan nama bawaan yaitu id. Sedangkan $table->id('level_id'); akan membuat kolom Primary Key dengan nama custom, yaitu level_id. <br>

7.Fungsi '->unique()': Memastikan (memberikan constraint unik) bahwa nilai data yang dimasukkan ke dalam kolom tersebut tidak boleh ada yang sama/duplikat dalam satu tabel tersebut. <br>

8.Perbedaan 'unsignedBigInteger' dan 'id()': 'id()' digunakan untuk membuat Primary Key yang nilainya otomatis bertambah (auto increment). Sedangkan 'unsignedBigInteger('level_id')' hanya membuat kolom bertipe BigInt tanpa sifat auto increment, yang tujuannya untuk disamakan tipe datanya dengan kolom Primary Key di tabel asal agar bisa dijadikan sebagai relasi / Foreign Key. <br>

9.Tujuan Class Hash: Digunakan untuk melakukan enkripsi password menggunakan algoritma Bcrypt agar tidak tersimpan sebagai teks biasa (plaintext) di database. Hash::make('1234') artinya mengenkripsi string '1234' menjadi hash yang aman. <br>

10.Kegunaan tanda tanya (?) pada DB Facade: Berfungsi sebagai parameter binding untuk mencegah celah keamanan SQL Injection. Nilai sebenarnya akan di-passing melalui array di parameter kedua. <br>

11.Tujuan penulisan 'protected $table & $primaryKey': Laravel Eloquent secara default akan mencari nama tabel berbentuk plural (misal: user_models) dan primary key bernama id. Karena kita menggunakan nama tabel kustom (m_user) dan PK kustom (user_id), kita wajib mendeklarasikan properti tersebut agar Model tahu tabel mana yang harus diakses. <br>

12.Cara yang lebih mudah (DB Facade / Query Builder / Eloquent ORM): Yang paling mudah dan efisien adalah Eloquent ORM. Karena memperlakukan tabel sebagai Objek (Object Oriented), kodenya menjadi jauh lebih rapi, tidak perlu menulis syntax SQL yang panjang secara manual, dan sangat memudahkan ketika harus berurusan dengan relasi antar tabel nantinya. <br>
<br><br><br>

PRAKTIKUM WEEK 04: <br>
PRAKTIKUM 01($fillable):
![WEEK4](screenshoot/propertifillable.png) <br>

PRAKTIKUM 02.1(Retrieving Single Models): <br>
(find(1)):
![WEEK4](screenshoot/find1.png)
(findOr(1)):
![WEEK](screenshoot/findor1.png)
(findOr(20)):
![WEEK4](screenshoot/findor20.png) <br>

PRAKTIKUM 02.2(Not Found Exceptions): <br>
findOrFail(1):
![WEEK4](screenshoot/findorfail1.png)
findOrfail(manager9):
![WEEK4](screenshoot/findorfailmanager9.png) <br>

PRAKTIKUM 02.03(Retreiving Aggregrates): 
![WEEK4](screenshoot/count.png) <br>
Menampilkan jumlah pengguna dengan id 2:
![WEEK4](screenshoot/jmlhpenggunaid2.png) <br>

PRAKTIKUM 02.4(Retreiving or Creating Models): <br>
firstOrCreate Manager:
![WEEK4](screenshoot/manager.png)
firstOrCreate Manager22:
![WEEK4](screenshoot/manager22.png)
![WEEK4](screenshoot/dbmanager22.png) <br>
firstOrNew Manager:
![WEEK4](screenshoot/firstornewmanager.png)
firstOrNew Manager33:
![WEEK4](screenshoot/firstornewmanager33.png)
(Karena data manager33 masih berupa draf dan belum resmi dimasukkan ke dalam tabel PostgreSQL, maka database belum sempat membuatkan dan memberikan nomor urut ID untuknya) <br>
Menambahkan $user->save();:
![WEEK4](screenshoot/firstornewmanager33+save.png) 
![WEEK4](screenshoot/dbfirstornewmanager33+save.png) <br>

PRAKTIKUM 02.5(Attribute Changes): <br>
isDirty():
![WEEK4](screenshoot/isdirty.png)
wasChanged:
![WEEK4](screenshoot/waschanged.png) <br>

PRAKTIKUM 02.6(Create, Read, Update, Delete (CRUD)):
Langkah 1&2:
![WEEK4](screenshoot/langkah1&2.png)
Langkah 4s/d6:
![WEEK4](screenshoot/langkah 4-6.png)
Menambahkan Data User:
![WEEK4](screenshoot/menambahkandatauser.png)
![WEEK4](screenshoot/.png)
Menjalankan link 'ubah':
![WEEK4](screenshoot/ubahdata.png)
Mengubah Data user:
![WEEK4](screenshoot/ubahdatasimpan.png)
Menghapus Data user:
![WEEK4](screenshoot/deletedatauser.png) <br>


