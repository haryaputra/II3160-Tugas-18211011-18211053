#Selamat Datang di web service Pendataan Perpustakaan

## Requirements

1. PHP 5.2 or greater
2. CodeIgniter 2.1.0 to 3.0-dev

##Penjelasan
Terdapat 3 database yang bisa diakses dari web service ini:
	1. Koran
	2. Majalah
	3. Buku
	
Masing-masing disimpan dalam tabel yang berisi id dan judul

User dapat mengakses semua data yang ada di database tersebut sesuai dengan informasi yang dibutuhkan oleh User

##Penggunaan

Untuk mengakses seluruh database 1 dapat mengakses URI :
/tp/index.php/search/korans/format/<format yang diinginkan : xml, json, html>
Contoh:
/tp/index.php/search/korans/format/html

Untuk mengakses database 1 dengan id yang diinginkan dapat mengakses URI :
/tp/index.php/search/koran/id/<id>/format/<format yang diinginkan : xml, json, html>
Contoh:
/tp/index.php/search/koran/id/13/format/html

Untuk mengakses seluruh database 2 dapat mengakses URI :
/tp/index.php/search/majalahs/format/<format yang diinginkan : xml, json, html>
Contoh:
/tp/index.php/search/majalahs/format/html

Untuk mengakses database 2 dengan id yang diinginkan dapat mengakses URI :
/tp/index.php/search/majalah/id/<id>/format/<format yang diinginkan : xml, json, html>
Contoh:
/tp/index.php/search/majalah/id/31/format/html

Untuk mengakses seluruh database 3 dapat mengakses URI :
/tp/index.php/search/bukus/format/<format yang diinginkan : xml, json, html>
Contoh:
/tp/index.php/search/bukus/format/html

Untuk mengakses database 1 dengan id yang diinginkan dapat mengakses URI :
/tp/index.php/search/buku/id/<id>/format/<format yang diinginkan : xml, json, html>
Contoh:
/tp/index.php/search/buku/id/9/format/html
