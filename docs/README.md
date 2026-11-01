# LOGISTIX — Sistem Inventaris Sekolah

> **Proyek Uji Kompetensi Keahlian (UKK) Tahap 1 & 2**  
> **Kompetensi Keahlian:** Pengembangan Perangkat Lunak dan Gim (PPLG)  
> **Konsentrasi:** Pemrograman Web — SMK Assalafiyyah Sleman  
> **Tahun Pelajaran:** 2026/2027  

---

## 📌 Deskripsi Proyek

**Logistix** adalah aplikasi Sistem Inventaris berbasis web yang dirancang untuk mengelola data aset dan logistik milik sekolah/instansi secara terstruktur. Aplikasi ini dibangun dengan memprioritaskan:
1. **Validasi Data yang Ketat**: Integritas data terjamin, kode barang unik, dan transaksi barang keluar tidak dapat melebihi stok yang tersedia.
2. **Kalkulasi Stok Otomatis**: Penambahan dan pengurangan stok barang dihitung secara langsung saat transaksi dicatat tanpa manipulasi manual.
3. **Integritas Relasi**: Data master (Kategori, Lokasi, Pemasok, Barang) yang masih memiliki riwayat transaksi tidak dapat dihapus sembarangan.
4. **Kode Bersih & Mudah Dipahami (Ponytail Style)**: Kode ditulis sesederhana dan semandiri mungkin untuk kemudahan penjelasan dan penulisan saat evaluasi **Live Coding (UKK Tahap 2)**.

---

## 🛠️ Tech Stack & Arsitektur

| Lapisan / Komponen | Teknologi | Keterangan |
| :--- | :--- | :--- |
| **Backend Framework** | **Laravel 13** (PHP 8.3+) | Pola MVC standar, Eloquent ORM, RESTful Resource Controller. |
| **Autentikasi** | **Laravel Breeze** (Blade Stack) | Login, logout, proteksi route dengan middleware `auth`. |
| **Styling & UI** | **Tailwind CSS v4** + **Flowbite** | Utility-first CSS minimalis, bersih, responsif, dan ringan tanpa animasi berlebih. |
| **Database** | **MySQL 8.4** | Database relasional dengan *foreign key constraints* dan index. |
| **Environment / Runtime** | **Laravel Sail (Docker)** | Container Docker terisolasi mencakup web app, MySQL, dan phpMyAdmin. |
| **Build Tool** | **Vite 8** + Alpine.js | Hot-Module Replacement (HMR) dan asset bundler cepat. |
| **Testing** | **PHPUnit / PEST** | 29 Automated Feature Tests mencakup auth dan aturan validasi SPK. |

---

## 🚀 Cara Menjalankan Proyek (Menggunakan Sail)

Pastikan Docker Desktop / Docker Engine kamu sudah berjalan di sistem.

### 1. Masuk ke Direktori Proyek
```bash
cd logistix
```

### 2. Jalankan Container Docker (Sail)
```bash
./vendor/bin/sail up -d
```

### 3. Migrasi Database & Seeding Awal
```bash
./vendor/bin/sail artisan migrate --seed
```
*Atau jika ingin mereset database dari awal:*
```bash
./vendor/bin/sail artisan migrate:fresh --seed
```

### 4. Build Aset Frontend
```bash
./vendor/bin/sail npm run build
# atau jalankan mode development:
npm run dev
```

### 5. Akses Aplikasi
* **Web App**: [http://localhost](http://localhost)
* **phpMyAdmin**: [http://localhost:8080](http://localhost:8080)

---

## 🔑 Akun Default Pengujian

| Role | Email | Password |
| :--- | :--- | :--- |
| **Administrator** | `admin@admin.com` | `password` |

---

## ✨ Fitur & Aturan Validasi Sesuai Panduan SPK

### 1. Master Data
* **Kategori (`/categories`)**: Pengelompokan jenis barang (Elektronik, Alat Tulis Kantor, dll.).
* **Lokasi Penyimpanan (`/locations`)**: Penempatan fisik barang (Rak A1, Gudang Utama, Lab Komputer, dll.).
* **Pemasok (`/suppliers`)**: Data rekanan pengadaan barang beserta kontak dan alamat.
* **Barang / Aset (`/items`)**:
  * Kode barang unik (`code`).
  * Relasi ke kategori dan lokasi penyimpanan.
  * Pencatatan kondisi barang (`baik`, `rusak_ringan`, `rusak_berat`).
  * Fitur pencarian kode/nama barang dan filter kategori & kondisi.

### 2. Transaksi Stok Otomatis
* **Barang Masuk (`/stock-ins`)**:
  * Mencatat kuantitas barang yang diterima dari supplier.
  * Otomatis menambah jumlah stok barang (`$item->increment('quantity', $qty)`).
* **Barang Keluar (`/stock-outs`)**:
  * Mencatat penerima dan kuantitas barang yang dikeluarkan.
  * **Validasi Kritis**: Sistem otomatis memeriksa sisa stok. Apabila kuantitas keluar $>$ stok yang ada, transaksi ditolak dengan pesan error:  
    *`"Stok tidak mencukupi! Stok saat ini: X unit."`*
  * Jika valid, stok barang otomatis berkurang (`$item->decrement('quantity', $qty)`).

### 3. Rekap & Laporan
* **Dashboard (`/dashboard`)**:
  * Kartu ringkasan total jenis barang, total unit, total transaksi masuk, dan total transaksi keluar.
  * Tabel peringatan barang dengan stok menipis ($\le 10$ unit).
  * Widget 5 mutasi barang terakhir.
* **Laporan Mutasi (`/reports`)**:
  * Rekap pergerakan stok masuk dan keluar dengan filter rentang tanggal.
  * Rekap ketersediaan sisa stok barang terkini.

---

## 📂 Struktur Folder Utama

```text
logistix/
├── app/
│   ├── Http/Controllers/
│   │   ├── CategoryController.php      # CRUD Kategori & Proteksi Relasi
│   │   ├── DashboardController.php     # Rekap Statistik & Notifikasi Stok Kritis
│   │   ├── ItemController.php          # CRUD Barang, Search & Filter
│   │   ├── LocationController.php      # CRUD Lokasi Penyimpanan
│   │   ├── ReportController.php        # Laporan & Filter Periode Mutasi
│   │   ├── StockInController.php       # Transaksi Masuk (+ Stok Otomatis)
│   │   ├── StockOutController.php      # Transaksi Keluar (- Stok & Cek Limit)
│   │   └── SupplierController.php      # CRUD Pemasok / Rekanan
│   └── Models/                         # Eloquent Models & Relasi Database
├── database/
│   ├── migrations/                     # Skema Database Relasional
│   └── seeders/DatabaseSeeder.php      # Seeder Data Awal Idempotent
├── docs/
│   ├── spk_ukk_tahap_1_pplg_2026_2027.md  # Dokumen Resmi SPK UKK
│   └── snippet_ukk_tahap_2_inventaris.md  # Snippet Kunci Persiapan Live Coding
├── resources/views/
│   ├── layouts/app.blade.php           # Layout Induk + Global Alert Flash
│   ├── dashboard.blade.php             # Halaman Dashboard
│   ├── items/                          # View Barang (index, create, edit)
│   ├── categories/                     # View Kategori (index, create, edit)
│   ├── locations/                      # View Lokasi (index, create, edit)
│   ├── suppliers/                      # View Supplier (index, create, edit)
│   ├── stock_ins/                      # View Transaksi Masuk (index, create)
│   ├── stock_outs/                     # View Transaksi Keluar (index, create)
│   └── reports/                        # View Laporan Mutasi (index)
├── routes/web.php                      # Definisi Seluruh Route Aplikasi
├── TODO.md                             # Catatan Progress & Roadmap
└── tests/Feature/InventorySPKTest.php   # Automated Test Validasi SPK
```

---

## 🧪 Menjalankan Pengujian (Testing)

Untuk memastikan seluruh logika bisnis dan validasi berfungsi dengan benar:

```bash
./vendor/bin/sail artisan test
```

Semua 29 skenario pengujian dijamin lolos (*green*).
