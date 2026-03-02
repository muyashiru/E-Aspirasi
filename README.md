# E-Aspirasi - Sistem Pengaduan Masyarakat

Platform digital untuk menyampaikan aspirasi dan pengaduan masyarakat secara transparan dan efisien.

## 🚀 Deployment ke Vercel

### Prasyarat
- Akun GitHub
- Akun Vercel
- Repository GitHub yang sudah di-push

### Langkah-langkah Deploy

#### 1. Push ke GitHub Repository

Pastikan semua file sudah di-push ke GitHub repository Anda:

```bash
git add .
git commit -m "Setup untuk Vercel deployment"
git push origin main
```

#### 2. Deploy ke Vercel

**Opsi A: Via Vercel Dashboard**

1. Buka https://vercel.com dan login
2. Klik "Add New" → "Project"
3. Import repository GitHub Anda
4. Vercel akan otomatis mendeteksi konfigurasi dari `vercel.json`
5. Klik "Deploy"

**Opsi B: Via Vercel CLI**

```bash
# Install Vercel CLI
npm i -g vercel

# Login ke Vercel
vercel login

# Deploy proyek
vercel
```

### ⚙️ Struktur File untuk Vercel

Proyek ini telah dikonfigurasi dengan:

```
E-Aspirasi/
├── api/                      # Semua file PHP (Vercel Serverless Functions)
│   ├── index.php
│   ├── buat-pengaduan.php
│   ├── daftar-aspirasi.php
│   ├── statistik.php
│   ├── config/
│   │   └── data.php
│   └── includes/
│       ├── header.php
│       └── footer.php
├── vercel.json               # Konfigurasi Vercel
├── .vercelignore            # File yang diabaikan saat deploy
└── package.json              # Dependencies
```

### 📝 Konfigurasi vercel.json

File `vercel.json` mengatur:
- PHP runtime (vercel-php@0.6.0)
- Routing dari root ke api directory
- Handling untuk semua halaman PHP

### 🔧 Testing Lokal

Untuk testing di local environment (Laragon/XAMPP):
- File asli masih ada di root directory
- Struktur api/ adalah khusus untuk Vercel deployment

### 📌 Catatan Penting

1. **URL Setelah Deploy**: Semua URL akan tetap sama (misalnya: `/index.php`, `/buat-pengaduan.php`)
2. **Runtime PHP**: Vercel menggunakan PHP 8.x sebagai serverless function
3. **Database**: Saat ini menggunakan dummy data. Untuk production, tambahkan database (MySQL/PostgreSQL)

### 🐛 Troubleshooting

**Masalah: Error 404 saat akses halaman**
- Pastikan file ada di direktori `api/`
- Periksa routing di `vercel.json`

**Masalah: Error 500 Internal Server Error**
- Cek log di Vercel Dashboard
- Pastikan semua path include/require benar

**Masalah: Assets tidak muncul**
- Semua CDN (Tailwind, Font Awesome) sudah digunakan
- Jika ada file lokal, tambahkan ke `public/` directory

### 📞 Support

Untuk pertanyaan lebih lanjut:
- Dokumentasi Vercel: https://vercel.com/docs
- Vercel PHP Runtime: https://github.com/vercel-community/php

### 📄 License

© 2026 E-Aspirasi. All rights reserved.
