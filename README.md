# WEBSITE SIPADU DISKOPUM
### Deskripsi proyek
- Website Sistem Pengelolaan Arsip Terpadu - Dinas Koperasi dan Usaha Mikro Kabupaten Lamongan (Tugas magang berdampak)
<br>

> ### PREREQUISITE❗
> - install Git
> - install PHP 8.2 
> - install composer
> - install nodejs
<br>

### Cara menjalankannya
#### 1. Clone atau download source code
```sh
git clone https://github.com/auizadi/sipadu-diskopum.git
```
#### 2. Masuk ke direktori proyek
```sh
cd sipadu-diskopum
```
#### 3. install dependencies
```sh
composer install
```
```sh
npm install
```
#### 4. Copy .env
```sh
cp .env.example .env
```
#### 5. Generate key
```sh
php artisan key:generate
```
#### 6. Setup database pada .env
```sh
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database
DB_USERNAME=root
DB_PASSWORD=
```
#### 7. Migrasi database
```sh
php artisan migrate --seed
```
#### 8. Generate asset front end
```sh
npm run dev
``` 
#### 9. Jalankan aplikasi 
```sh
php artisan serve
``` 

> Langkah 8 dan 9 dijalankan pada terminal terpisah❗
> Kredensial login admin [Email : admin@mail.com | Kata Sandi : admin1234] 

<br>
<br>


### 1. Tampilan Login
![tampilan login](/assets/login.png "tampilan login")
<br>

### 2. Tampilan Dashboard
![tampilan dashboard](/assets/dashboard.png "tampilan dashboard")
<br>

### 3. Tampilan Menu Kelembagaan
![tampilan kelembagaan](/assets/kelembagaan.png "tampilan kelembagaan")
<br>

### 4. Tampilan Menu Pengembangan
![tampilan pengembangan](/assets/pengembangan.png "tampilan pengembangan")
<br>

### 5. Tampilan Menu Pemberdayaan
![tampilan pemberdayaan](/assets/pemberdayaan.png "tampilan pemberdayaan")
<br>

### 6. Tampilan Menu Pengawasan
![tampilan pengawasan](/assets/pengawasan.png "tampilan pengawasan")
<br>

### 7. Tampilan Menu Sekretariat
![tampilan sekretariat](/assets/sekretariat.png "tampilan sekretariat")
<br>

### 8. Tampilan Menu Kepegawaian
![tampilan kepegawaian](/assets/kepegawaian.png "tampilan kepegawaian")
<br>

### 9. Tampilan Fitur Tambah Data
![tampilan tambah-data](/assets/tambah-data.png "tampilan tambah-data")
<br>

### 10. Tampilan Fitur Pencarian
![tampilan pencarian](/assets/pencarian.png "tampilan pencarian")
<br>

### 11. Tampilan Fitur Edit
![tampilan edit](/assets/edit.png "tampilan edit")
<br>

### 12. Tampilan Pencarian Tidak Ada
![tampilan !pencarian](/assets/!pencarian.png "tampilan !pencarian")
<br>

### 13. Tampilan Fitur Hapus Data 
![tampilan hapus-data](/assets/hapus-data.png "tampilan hapus-data")
<br>

### 14. Tampilan Data Berhasil dihapus
![tampilan delete-success](/assets/delete-success.png "tampilan delete-success")
<br>

### 15. Tampilan Lihat Dokumen
![tampilan lihat](/assets/lihat.png "tampilan lihat")
<br>

### 16. Tampilan Profile
![tampilan profile](/assets/profile.png "tampilan profile")
<br>

### 17. Tampilan Konfirmasi Logout
![tampilan logout](/assets/logout.png "tampilan logout")
<br>



