# WEBSITE SIPADU DISKOPUM
### Deskripsi proyek
- Website Sistem Pengelolaan Arsip Terpadu - Dinas Koperasi dan Usaha Mikro Kabupaten Lamongan
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
