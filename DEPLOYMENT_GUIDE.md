# 📘 Panduan Lengkap Deploy E-Aspirasi ke Vercel

## ✅ Persiapan yang Sudah Dilakukan

Proyek Anda telah dipersiapkan untuk deployment ke Vercel dengan:

1. ✅ Struktur direktori `api/` telah dibuat
2. ✅ Semua file PHP dipindahkan ke `api/`
3. ✅ File `vercel.json` telah dikonfigurasi
4. ✅ File `.vercelignore` dan `.gitignore` telah dibuat

## 🚀 Langkah Deployment

### Step 1: Push ke GitHub

```bash
# Tambahkan semua file ke git
git add .

# Commit perubahan
git commit -m "Setup deployment untuk Vercel"

# Push ke GitHub
git push origin main
```

**Catatan**: Jika belum punya repository GitHub, buat dulu:
1. Buka https://github.com/new
2. Buat repository baru (misalnya: `e-aspirasi`)
3. Jangan centang "Initialize this repository with a README"
4. Klik "Create repository"
5. Ikuti instruksi untuk push existing repository

```bash
git init
git add .
git commit -m "Initial commit"
git branch -M main
git remote add origin https://github.com/username/e-aspirasi.git
git push -u origin main
```

### Step 2: Deploy ke Vercel

#### Opsi 1: Via Dashboard Vercel (Paling Mudah) ⭐

1. **Login ke Vercel**
   - Buka https://vercel.com
   - Klik "Sign Up" atau "Login"
   - Login dengan akun GitHub Anda

2. **Import Repository**
   - Klik tombol "Add New..." → "Project"
   - Pilih "Import Git Repository"
   - Cari dan pilih repository `e-aspirasi`
   - Klik "Import"

3. **Configure Project**
   - **Project Name**: Biarkan default atau ganti sesuai keinginan
   - **Framework Preset**: Pilih "Other"
   - **Root Directory**: Biarkan "./" (default)
   - **Build Command**: Kosongkan (tidak perlu)
   - **Output Directory**: Kosongkan (tidak perlu)

4. **Deploy**
   - Klik tombol "Deploy"
   - Tunggu proses deployment selesai (± 1-2 menit)
   - Setelah selesai, Anda akan mendapat URL deployment

#### Opsi 2: Via Vercel CLI

```bash
# Install Vercel CLI (hanya sekali)
npm install -g vercel

# Login ke Vercel
vercel login

# Deploy
vercel

# Untuk production deployment
vercel --prod
```

### Step 3: Akses Website Anda

Setelah deployment selesai, Anda akan mendapat URL seperti:
```
https://e-aspirasi.vercel.app
```

atau

```
https://e-aspirasi-username.vercel.app
```

## 🔧 Konfigurasi Custom Domain (Opsional)

Jika Anda punya domain sendiri:

1. Buka project di Vercel Dashboard
2. Klik tab "Settings"
3. Klik "Domains" di sidebar
4. Ketik domain Anda dan klik "Add"
5. Ikuti instruksi DNS configuration

## 🐛 Troubleshooting

### Problem 1: Error 404 saat akses halaman

**Solusi**:
- Pastikan semua file ada di folder `api/`
- Cek file `vercel.json` sudah benar
- Clear cache browser (Ctrl + Shift + R)

### Problem 2: Error 500 Internal Server Error

**Solusi**:
1. Buka Vercel Dashboard
2. Pilih project Anda
3. Klik tab "Deployments"
4. Klik deployment terakhir
5. Klik "View Function Logs"
6. Lihat error message detail

**Kemungkinan penyebab**:
- Path `require_once` salah
- Syntax error di PHP
- PHP version incompatible

### Problem 3: Redirect loop atau halaman blank

**Solusi**:
- Cek routing di `vercel.json`
- Pastikan tidak ada redirect infinite di code PHP
- Hapus cache Vercel: Deployments → ⋮ → Redeploy

### Problem 4: CSS/JS tidak muncul

**Solusi**:
- Periksa browser console (F12) untuk error
- Pastikan CDN link benar (Tailwind, Font Awesome)
- Cek CORS settings jika ada external resources

## 🔄 Update Website (Re-deploy)

Setiap kali Anda push ke GitHub, Vercel akan otomatis deploy ulang:

```bash
# Edit file PHP di local
# Kemudian:
git add .
git commit -m "Update fitur baru"
git push origin main
```

Vercel akan otomatis detect dan deploy dalam 1-2 menit.

## 📊 Monitoring

**Lihat Analytics**:
1. Buka Vercel Dashboard
2. Pilih project Anda
3. Klik tab "Analytics"

**Lihat Logs**:
1. Klik tab "Deployments"
2. Klik deployment yang ingin dilihat
3. Klik "View Function Logs"

## ⚡ Tips Optimasi

1. **Environment Variables**: Jika perlu menyimpan credentials
   - Dashboard → Settings → Environment Variables
   - Tambahkan variable (misal: DB_HOST, DB_PASSWORD)

2. **Caching**: Vercel otomatis cache static files

3. **Performance**: 
   - Minify CSS/JS jika ada custom files
   - Optimize images jika upload file gambar

## 📱 Testing

Setelah deploy, test semua fitur:
- ✅ Homepage load
- ✅ Form pengaduan berfungsi
- ✅ Daftar aspirasi tampil
- ✅ Statistik muncul
- ✅ Navigation links work
- ✅ Responsive di mobile

## 🎉 Selesai!

Website Anda sudah live di internet!

**Bagikan link Anda**:
```
https://your-project.vercel.app
```

## 📞 Butuh Bantuan?

- **Vercel Documentation**: https://vercel.com/docs
- **Vercel PHP Runtime**: https://github.com/vercel-community/php
- **Vercel Community**: https://github.com/vercel/vercel/discussions

---

**Dibuat dengan ❤️ untuk E-Aspirasi**
