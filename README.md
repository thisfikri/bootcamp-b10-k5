## Apa Itu Rest API ?
REST itu kependakan dari REpresentational State Transfer yang merupakan standar arsitektur berbasis web yang menggunakan protokol HTTP untuk berkomunikasi data.

REST ini diperkenalkan oleh Roy Fielding pada tahun 2000. Lalu API itu artinya Application Protocol Interface dimana adalah kumpulan dari subroutine definitions, protocol dan juga tools untuk berkomunikasi data antar aplikasi software.

Jadi bisa dibilang, REST itu adalah salah satu dari desain arsitektur di dalam API.

Cara kerja RESTful API adalah REST client akan mengakses data/resource ke REST server dimana masing-masing resource atau data tersebut dibedakan oleh sebuah global ID atau URIs (Universal Resource Identifiers).

Jadi data yang diberikan oleh REST server itu bisa berupa format text, JSON atau XML. Yang paling populer dipakai saat ini adalah format JSON.

JSON digunakan pada REST API karena:
1. JSON lebih pendek
2. JSON lebih cepat membaca dan menulis
3. JSON dapat menggunakan array
4. XML jauh lebih sulit diurai daripada JSON sedangkan JSON diuraikan menjadi objek JavaScript yang siap digunakan.

*Source:*
(http://ngide.net/posts/apa-itu-rest-api)
(https://www.w3schools.com/js/js_json_xml.asp)


## Aplikasi Data Programmer

[After](https://github.com/thisfikri/bootcamp-b10-k5/blob/master/aplikasi-data-programmers/before.png)


[Before](https://github.com/thisfikri/bootcamp-b10-k5/blob/master/aplikasi-data-programmers/after.png)

*Note: maaf kalau screenshotnya hanya 2*

Saya tidak memakai framework untuk membuatnya.
Untuk menjalankan aplikasi ini software yang dibutuhkan adalah XAMPP (https://www.apachefriends.org/index.html)

## Cara memasangnya
1. install xampp
2. jalankan xampp (server apache, dan mysql)
3. simpan folder aplikasi ini di xampp/htdocs/
4. lalu buka browser dan ketik localhost:8080/folder_aplikasi (port untuk localhost xampp biasanya 8080).

## Pemakaian

Untuk pemakaian, di halaman utama aplikasi ini \(karena hanya ada 1 halaman\) ada input tambah programmer.

1. masukkan nama programmer, lalu klik tombol ** Tambah **.
2. jika berhasil maka halaman akan reload secara otomatis
3. untuk menambahkan skill, pada list tabel daftar programmer ada input dan tombol yang sama.

*Note:
mohon maaf jika ada bug, untuk ke depannya mungkin saya bisa membuat yang lebih baik jika ada kesempatan.*

*Note: Jawaban Soal No.6 Bagian A ada di folder aplikasi*
