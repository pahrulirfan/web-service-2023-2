## About Laravel

CRUD data tabel Biaya sebagai bahan praktikum MK Pemrograman WEB Service

### Cara Penggunaan
- Buka terminal 
- Masuk ke folder project masing - masing, bisa di dokumen atau ditempat lain
- clone project ```git clone https://github.com/pahrulirfan/web-service-2023-2.git```
- Masuk ke folder project yang di clone ```cd web-service-2023-2```
- Ketikkan ```composer install``` untuk instalasi plugin yang dibutuhkan Laravel
- Tunggu sampai proses intalasi selesai, kemudian copy file ```.env.example``` ke file ```.env```
- Jalankan perintah ```php artisan key:generate```
- setting database di file ```.env``` sesuai dengan nama database di komputer masing - masing, jika belum ada database, silahkan dibuat terlebih dahulu
- Jalan perintah ```php artisan migrate``` untuk membuat tabel pada database dari fitur migrasi laravel
- Isi tabel biaya dengan data acak
- Jalankan perintah ```php artisan serve``` untuk memulai project laravel.

Semoga bermanfaat.
