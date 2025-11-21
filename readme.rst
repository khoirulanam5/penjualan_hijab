# 🛍️ Sistem Penjualan Pakaian Muslim & Muslimah dengan **CRM**, Notifikasi WA & Algoritma Diskon

Sistem ini dirancang untuk penjualan pakaian muslim dan muslimah dengan penerapan **Customer Relationship Management (CRM)**, **notifikasi WhatsApp**, serta **algoritma pemberian diskon otomatis** bagi pelanggan yang sering melakukan checkout. Sistem dilengkapi fitur lengkap mulai dari manajemen produk, transaksi, hingga laporan penjualan.

---

## 🚀 Teknologi yang Digunakan

* **Backend:** CodeIgniter 3
* **Database:** MySQL
* **Frontend:** HTML, CSS, JavaScript, Bootstrap
* **Metodologi:** CRM (Customer Relationship Management)
* **Fitur Tambahan:** WhatsApp Notification API, Algoritma Diskon Otomatis
* **UI/UX:** Landing Page modern dan responsif

---

## 👥 Role Pengguna

### 1. **Karyawan**

* Input pesanan offline
* Mengelola stok barang di toko
* Membantu pelanggan melakukan checkout

### 2. **Admin**

* Mengelola produk: tambah, ubah, hapus
* Mengelola kategori pakaian
* Mengelola banner promo website
* Mengatur diskon manual
* Kelola pelanggan

### 3. **Owner**

* Melihat laporan penjualan lengkap
* Melihat statistik CRM (pelanggan aktif, repeat order, pelanggan potensial)
* Monitoring kinerja karyawan & admin

### 4. **Pelanggan**

* Melihat katalog produk
* Checkout pembelian
* Mendapat notifikasi WA
* Mendapat diskon otomatis berdasarkan riwayat transaksi

---

## ⭐ Fitur Utama

### 🔹 **1. Landing Page Keren & Responsif**

* Menampilkan katalog pakaian muslim & muslimah
* Banner promo dinamis
* Fitur pencarian produk

### 🔹 **2. Manajemen Produk & Kategori**

* CRUD produk
* Upload foto produk
* Kelola ukuran & varian warna

### 🔹 **3. CRM (Customer Relationship Management)**

* Analisis perilaku pelanggan
* Tracking repeat order
* Tingkat loyalitas pelanggan (segmen: Bronze, Silver, Gold)

### 🔹 **4. Algoritma Diskon Otomatis**

Diskon diberikan berdasarkan:

* Jumlah checkout sebelumnya
* Total nominal pembelian
* Frekuensi transaksi

Contoh segmentasi otomatis:

* **Bronze** → Diskon 5%
* **Silver** → Diskon 10%
* **Gold** → Diskon 15%

### 🔹 **5. Notifikasi WhatsApp**

* Notifikasi pesanan berhasil
* Notifikasi pembayaran
* Notifikasi promo khusus member loyal

### 🔹 **6. Transaksi Lengkap**

* Checkout online dan offline
* Pembayaran manual / metode lain
* Cetak struk

### 🔹 **7. Laporan Lengkap**

* Laporan penjualan harian/mingguan/bulanan
* Laporan pelanggan loyal (CRM)
* Laporan stok produk
* Laporan diskon

---

## 📂 Struktur Folder (Ringkas)

```
/application
    /controllers
    /models
    /views
/assets
    /css
    /js
    /img
/database
    penjualan_pakaian_crm.sql
/index.php
```

---

## 🛠️ Instalasi

1. Clone atau download project
2. Import database `penjualan_pakaian_crm.sql`
3. Atur konfigurasi database di `/application/config/database.php`
4. Jalankan project dengan XAMPP/Laragon

---

## 📝 Lisensi

Project ini dibuat sebagai implementasi sistem penjualan dengan CRM & algoritma diskon.

---
