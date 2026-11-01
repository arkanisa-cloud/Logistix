# YAYASAN ASSALAFIYYAH MLANGI
## SMK ASSALAFIYYAH SLEMAN
**Alamat:** Jl. Kiai Masduqi Mlangi Nogotirto Gamping Sleman DIY 55592  
**Kompetensi Keahlian:** DKV dan PPLG  
**Telp/WA:** 081393128882 | **Email:** smkassalafiyyah@gmail.com | **Website:** https://smkam.sch.id  

---

### SURAT PENGANTAR KERJA KOMPETENSI KEAHLIAN
### TAHUN PELAJARAN 2026/2027
### SOAL UKK (UJI KOMPETENSI KEAHLIAN) TAHAP 1

* **Kelas** : XII
* **Kompetensi Keahlian** : Pengembangan Perangkat Lunak dan Gim (PPLG)
* **Konsentrasi** : Pemrograman Web
* **Alokasi Waktu** : 5 Oktober - 5 November 2026
* **Bentuk Soal** : Penugasan Perorangan
* **Judul Tugas/Proyek** : Membuat Website Proyek UKK Tahap 1

---

### I. PETUNJUK UMUM

1. Periksalah dengan teliti dokumen soal proyek kejuruan sebelum memulai pekerjaan.
2. Periksalah perangkat keras (hardware), perangkat lunak (software), dan bahan pendukung yang dibutuhkan.
3. Gunakan peralatan utama dan peralatan keselamatan kerja yang telah disediakan sesuai ketentuan.
4. Gunakan peralatan sesuai dengan SOP (Standard Operating Procedure) yang berlaku.
5. Bekerjalah dengan memperhatikan arahan Guru Pembimbing/Guru Manajemen Proyek.
6. Dilarang melakukan plagiarisme, menyalin, atau saling berbagi (sharing) dengan peserta didik lain.
7. Lakukan konsultasi dan laporkan perkembangan (progress) proyek secara berkala sesuai jadwal yang telah ditentukan.
8. Setelah proyek selesai, lakukan pengujian/pengecekan terhadap seluruh proyek sebelum dikumpulkan sesuai waktu yang telah ditetapkan.

---

### II. SOAL/TUGAS

Uji Kompetensi Keahlian (UKK) Web Technology dilaksanakan sebagai bentuk pengukuran kemampuan peserta didik dalam menerapkan kompetensi pengembangan aplikasi web secara utuh, mulai dari tahap perencanaan, perancangan antarmuka, pengelolaan database, pengembangan sistem, penerapan validasi data, pengujian, hingga dokumentasi dan presentasi hasil proyek.

Dalam pelaksanaan proyek ini, peserta didik tidak hanya dituntut untuk membuat tampilan website, tetapi juga mampu membangun sistem yang dapat mengelola data secara terstruktur dan memastikan data yang dimasukkan oleh pengguna sesuai dengan aturan yang telah ditentukan.

Peserta didik diperintahkan untuk membuat sebuah aplikasi web dengan memilih **2 dari 3 tema proyek** berikut:
1. Sistem Rental
2. Sistem Inventaris
3. Sistem Tiketing Wisata/Event Lokal

Aplikasi dikembangkan menggunakan teknologi:
* **Frontend:** Bootstrap atau Tailwind CSS
* **Backend:** CodeIgniter 3 atau Laravel
* **Database:** MySQL atau database relasional yang ditentukan oleh sekolah
* **JavaScript:** Dapat menggunakan JavaScript/jQuery sesuai kebutuhan sistem

Aplikasi harus memiliki tampilan yang responsif, sistem pengelolaan data yang jelas, serta menerapkan validasi data pada setiap proses penting.

---

#### 1. Tema Proyek: Sistem Rental

##### Deskripsi Proyek
Peserta didik diminta membuat aplikasi Sistem Rental berbasis web yang digunakan untuk membantu pengelolaan proses penyewaan barang atau kendaraan. Sistem harus mampu mengelola data barang/kendaraan yang disewakan, data pelanggan, transaksi penyewaan, pengembalian, serta informasi status barang atau kendaraan.

Aplikasi harus memberikan kemudahan bagi pengelola rental dalam mengetahui ketersediaan barang atau kendaraan, mencatat transaksi penyewaan, menghitung biaya sewa, serta memantau status penyewaan.

##### Data yang Dikelola
Data minimal yang dapat dikelola meliputi:
* Data barang/kendaraan
* Data kategori
* Data pelanggan
* Data transaksi rental
* Data pengembalian
* Data tarif/harga sewa
* Data status rental

##### Proses Utama Sistem
Sistem minimal memiliki proses:
1. Pengelolaan data barang/kendaraan.
2. Pengelolaan data pelanggan.
3. Pencatatan transaksi penyewaan.
4. Penentuan tanggal mulai dan selesai rental.
5. Perhitungan biaya penyewaan.
6. Perubahan status barang/kendaraan.
7. Pencatatan pengembalian.
8. Pencarian dan penyaringan data.
9. Menampilkan rekap transaksi.

##### Fokus Validasi
Validasi menjadi bagian penting dalam sistem. Contohnya:
* Kode barang/kendaraan tidak boleh sama.
* Data pelanggan wajib diisi.
* Harga sewa harus berupa angka dan tidak boleh negatif.
* Tanggal pengembalian tidak boleh lebih awal dari tanggal penyewaan.
* Barang/kendaraan yang sedang disewa tidak dapat disewa kembali.
* Data transaksi harus memiliki pelanggan dan barang/kendaraan yang valid.
* Jumlah biaya harus sesuai dengan durasi dan tarif yang ditentukan.

**Hasil akhir:** aplikasi rental yang mampu mengelola proses penyewaan secara terstruktur dan mencegah kesalahan input maupun transaksi yang tidak valid.

---

#### 2. Tema Proyek: Sistem Inventaris

##### Deskripsi Proyek
Peserta didik diminta membuat aplikasi Sistem Inventaris berbasis web yang digunakan untuk mengelola data barang atau aset milik suatu sekolah, instansi, organisasi, atau perusahaan.

Sistem harus mampu mencatat informasi barang mulai dari identitas barang, kategori, lokasi penyimpanan, jumlah, kondisi, hingga proses barang masuk dan barang keluar.

Aplikasi diharapkan dapat membantu pengguna mengetahui jumlah dan kondisi barang secara lebih cepat serta mengurangi kesalahan dalam pencatatan inventaris.

##### Data yang Dikelola
Data minimal yang dapat dikelola meliputi:
* Data barang
* Data kategori barang
* Data lokasi
* Data kondisi barang
* Data barang masuk
* Data barang keluar
* Data pengguna/pengelola
* Data riwayat inventaris

##### Proses Utama Sistem
Sistem minimal memiliki proses:
1. Menambahkan data barang.
2. Mengubah data barang.
3. Menghapus data barang sesuai aturan.
4. Mengelompokkan barang berdasarkan kategori.
5. Menentukan lokasi penyimpanan barang.
6. Mencatat barang masuk.
7. Mencatat barang keluar.
8. Memperbarui jumlah stok secara otomatis.
9. Mengubah atau memperbarui kondisi barang.
10. Menampilkan riwayat pergerakan barang.
11. Melakukan pencarian dan penyaringan data.
12. Menampilkan rekap inventaris.

##### Fokus Validasi
Validasi menjadi bagian utama sistem. Contohnya:
* Kode barang harus unik.
* Nama barang wajib diisi.
* Kategori dan lokasi harus dipilih.
* Jumlah barang harus berupa angka.
* Jumlah barang tidak boleh bernilai negatif.
* Barang keluar tidak boleh melebihi stok yang tersedia.
* Jumlah barang masuk harus lebih dari nol.
* Data barang yang masih digunakan dalam transaksi tidak boleh sembarangan dihapus.

**Contoh kasus validasi:**  
Jika stok sebuah kamera adalah 5 unit, pengguna mencoba mencatat barang keluar sebanyak 7 unit, sistem harus menolak transaksi tersebut dan memberikan informasi bahwa stok tidak mencukupi.

**Hasil akhir:** aplikasi inventaris yang mampu mencatat, memantau, dan mengendalikan data barang dengan validasi stok yang tepat.

---

#### 3. Tema Proyek: Sistem Tiketing Wisata/Event Lokal

##### Deskripsi Proyek
Peserta didik diminta membuat aplikasi Sistem Tiketing Wisata/Event Lokal berbasis web yang digunakan untuk mengelola informasi wisata atau event serta proses pemesanan tiket.

Sistem dapat diterapkan pada objek wisata, festival budaya, pertunjukan seni, pameran, konser lokal, kegiatan komunitas, maupun event lainnya.

Aplikasi harus mampu membantu pengelola dalam mengatur informasi event, jenis tiket, harga, kuota, data pengunjung/pemesan, serta transaksi pemesanan tiket.

##### Data yang Dikelola
Data minimal yang dapat dikelola meliputi:
* Data wisata/event
* Data lokasi
* Data kategori event
* Data jenis tiket
* Data harga tiket
* Data kuota tiket
* Data pemesan/pengunjung
* Data transaksi tiket
* Data status pemesanan

##### Proses Utama Sistem
Sistem minimal memiliki proses:
1. Menambahkan data wisata/event.
2. Mengatur tanggal dan lokasi event.
3. Membuat jenis tiket.
4. Menentukan harga tiket.
5. Menentukan kuota tiket.
6. Mengelola data pemesan.
7. Melakukan pemesanan tiket.
8. Menghitung total harga tiket.
9. Mengurangi kuota setelah transaksi berhasil.
10. Menampilkan status pemesanan.
11. Melakukan pencarian data transaksi.
12. Menampilkan rekap tiket terjual dan tiket tersisa.

##### Fokus Validasi
Validasi menjadi bagian penting dalam proses pemesanan. Contohnya:
* Nama event wajib diisi.
* Tanggal event harus valid.
* Harga tiket harus berupa angka dan tidak boleh negatif.
* Kuota tiket harus berupa angka positif.
* Jumlah tiket yang dipesan harus lebih dari nol.
* Jumlah tiket yang dipesan tidak boleh melebihi kuota.
* Pemesan wajib mengisi data yang diperlukan.
* Event yang sudah selesai tidak dapat menerima pemesanan.
* Total pembayaran harus sesuai dengan jumlah tiket dan harga tiket.

**Contoh kasus validasi:**  
Jika sebuah event memiliki 100 tiket dan sudah terjual 95 tiket, maka sistem hanya boleh menerima pemesanan maksimal 5 tiket. Apabila pengguna mencoba memesan 6 tiket, sistem harus menolak transaksi tersebut.

**Hasil akhir:** aplikasi tiketing yang mampu mengelola event dan transaksi pemesanan tiket dengan perhitungan serta validasi kuota yang tepat.

---

### Catatan Penting

Proyek UKK Web Technology ini bukan sekadar tugas untuk menghasilkan sebuah website, tetapi menjadi salah satu tolak ukur kemampuan dan hasil belajar kalian selama tiga tahun. Melalui proyek ini, kalian diharapkan mampu menunjukkan pemahaman terhadap fundamental pengembangan web, mulai dari HTML, CSS, JavaScript, PHP, database, hingga framework CodeIgniter 3/Laravel serta Bootstrap/Tailwind CSS. Oleh karena itu, setiap bagian proyek harus dikerjakan dengan sungguh-sungguh dan dipahami, bukan hanya dibuat agar dapat berjalan.

UKK Tahap 2 akan dilaksanakan dalam bentuk **Live Coding** berdasarkan dua pilihan proyek yang telah kalian kerjakan. Kalian akan diminta untuk memahami, menjelaskan, memperbaiki, atau mengembangkan kembali bagian tertentu dari sistem yang telah dibuat. Karena itu, selama proses pengerjaan proyek, perbanyaklah eksplorasi dan latihan secara mandiri. Biasakan membaca dokumentasi, mencoba menyelesaikan error sendiri, memahami alur program, serta mengetahui fungsi setiap kode yang digunakan. Jangan hanya menghafalkan atau menyalin kode, tetapi pahami bagaimana dan mengapa kode tersebut bekerja.

Gunakan AI secara bijak sebagai alat bantu belajar, bukan sebagai pengganti kemampuan kalian. AI dapat digunakan untuk membantu memahami konsep, mencari alternatif solusi, atau membantu membaca error, tetapi jangan terlalu bergantung pada AI untuk membuat keseluruhan sistem. Pastikan setiap kode yang digunakan benar-benar kalian baca, pahami, uji, dan sesuaikan dengan kebutuhan proyek. Harapannya, ketika menghadapi Live Coding nanti, kalian tidak hanya memiliki website yang sudah jadi, tetapi juga memiliki fundamental dan pemahaman yang kuat sehingga mampu membangun, memodifikasi, menjelaskan, dan memperbaiki sistem secara mandiri.

---

### III. GAMBAR KERJA

#### 1. Contoh Flowchart dan Desain Interface

##### Keterangan Simbol Flowchart:
* **Terminator (Mulai/Selesai)**: Menandai awal atau akhir alur sistem.
* **Input/Output**: Proses memasukkan atau menampilkan data.
* **Proses**: Pemrosesan logika, manipulasi data, atau komputasi.
* **Keputusan (Decision)**: Pengambilan keputusan percabangan kondisi.
* **Database**: Operasi baca/tulis/simpan ke basis data.

---

##### A. Alur Flowchart Sistem Rental
```text
[Mulai]
   │
   ▼
[Input: Login (Username & Password)]
   │
   ▼
{Valid?}
   ├── Tidak ──> (Kembali ke form Login)
   └── Ya
         │
         ▼
[Masuk ke Dashboard]
   │
   ├─> [Kelola Data Barang/Kendaraan]
   ├─> [Kelola Data Pelanggan]
   ├─> [Transaksi Penyewaan]
   ├─> [Pengembalian Barang/Kendaraan]
   └─> [Laporan]
         │
         ▼
[Pilih Menu]
   │
   ▼
[Input / Cari Data]
   │
   ▼
{Validasi Data}
   ├── Tidak ──> [Tampilkan Pesan Kesalahan] ──> (Kembali ke Input / Cari Data)
   └── Ya
         │
         ▼
[Proses: Simpan Data ke Database]
   │
   ▼
[(Database)]
   │
   ▼
[Tampilkan Data / Hasil Proses]
   │
   ▼
{Keluar / Logout?}
   ├── Tidak ──> (Kembali ke Dashboard / Menu)
   └── Ya
         │
         ▼
[Selesai]
```

---

##### B. Alur Flowchart Sistem Inventaris
```text
[Mulai]
   │
   ▼
[Input: Login (Username & Password)]
   │
   ▼
{Valid?}
   ├── Tidak ──> (Kembali ke form Login)
   └── Ya
         │
         ▼
[Masuk ke Dashboard]
   │
   ├─> [Kelola Data Barang]
   ├─> [Kelola Kategori]
   ├─> [Kelola Lokasi]
   ├─> [Barang Masuk / Barang Keluar]
   └─> [Laporan]
         │
         ▼
[Pilih Menu]
   │
   ▼
[Input / Cari Data]
   │
   ▼
{Validasi Data}
   ├── Tidak ──> [Tampilkan Pesan Kesalahan] ──> (Kembali ke Input / Cari Data)
   └── Ya
         │
         ▼
[Proses: Simpan / Update / Hapus Data]
   │
   ▼
[(Database)]
   │
   ▼
[Tampilkan Data / Hasil Proses]
   │
   ▼
{Keluar / Logout?}
   ├── Tidak ──> (Kembali ke Dashboard / Menu)
   └── Ya
         │
         ▼
[Selesai]
```

---

##### C. Alur Flowchart Sistem Tiketing Wisata/Event Lokal
```text
[Mulai]
   │
   ▼
[Input: Login (Username & Password)]
   │
   ▼
{Valid?}
   ├── Tidak ──> (Kembali ke form Login)
   └── Ya
         │
         ▼
[Masuk ke Dashboard]
   │
   ├─> [Kelola Data Event/Wisata]
   ├─> [Kelola Jenis Tiket]
   ├─> [Kelola Pemesan]
   ├─> [Transaksi Pemesanan]
   └─> [Laporan]
         │
         ▼
[Pilih Menu]
   │
   ▼
[Input / Cari Data]
   │
   ▼
{Validasi Data}
   ├── Tidak ──> [Tampilkan Pesan Kesalahan] ──> (Kembali ke Input / Cari Data)
   └── Ya
         │
         ▼
[Proses: Simpan Data Transaksi]
   │
   ▼
[(Database)]
   │
   ▼
[Proses: Update Kuota Tiket & Status Pemesanan]
   │
   ▼
[Tampilkan Data / Hasil Proses]
   │
   ▼
{Keluar / Logout?}
   ├── Tidak ──> (Kembali ke Dashboard / Menu)
   └── Ya
         │
         ▼
[Selesai]
```