# Library Management System

Sistem untuk membantu mengelola perpustakaan, dalam peminjaman atau penyimpanan buku dengan berbagai detail.

## Mulai 

### Install PHP

Untuk memulai install terlebih dahulu PHP >= 7.1.3 dengan Extension, dibawah ini:
* OpenSSL 
* PDO 
* Mbstring
* Tokenizer
* XML 
* Ctype
* JSON
* BCMath

### Clone Proyek

Untuk clone proyek **Library Management System**, cukup *git clone*, seperti contoh dibawah ini:
```
git clone git@github.com:BabyCode10/Library-Management-System.git
```
Jangan lupa install terlebih dahulu **git**, untuk dapat meng-*clone*.

## Menjalankan 

Untuk menjalankan terlebih dahulu kita *setup* dalam *.env* dengan masing-masing database, seperti dibawah ini:
```
DB_CONNECTION=mysql // nama koneksi
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=LibraryManagementSystem // nama database
DB_USERNAME=root // nama user database
DB_PASSWORD=password // password user database
```
Setelah selesai jalankan perintah pada terminal, seperti dibwah ini:
```
php artisan migrate --seed
```

### Tes

Untuk memulai jalankan perintah:
```
php artisan serve
```
Untuk masuk ke *website* cukup masukan *url* di *browser* masing-masing dengan *url*:
```
http://localhost:8000 // atau 
http://127.0.0.1:8000
```

### Masuk Admin Panel

Untuk masuk ke dalam *admin panel*, cukup tambahkan */admin* pada *url browser*, seperti dibawah ini:
```
http://localhost:8000/admin
```
dengan *email* dan *password*:
```
email: jhon@mail.com
password: password
```

## Authors

* **Irfan Hadian** - *junior programmer*

## License

This project is licensed under the MIT License - see the [LICENSE](https://github.com/BabyCode10/Library-Management-System/blob/master/LICENSE) file for details
