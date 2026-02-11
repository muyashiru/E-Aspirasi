<?php
$page_title = 'Buat Pengaduan';
require_once 'config/data.php';
require_once 'includes/header.php';

// Handle form submission
$success_message = '';
$error_message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validasi sederhana (dalam aplikasi real, gunakan validasi yang lebih ketat)
    $nama = htmlspecialchars($_POST['nama'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $telepon = htmlspecialchars($_POST['telepon'] ?? '');
    $kategori = htmlspecialchars($_POST['kategori'] ?? '');
    $pengaduan = htmlspecialchars($_POST['pengaduan'] ?? '');
    
    if ($nama && $email && $telepon && $kategori && $pengaduan) {
        $success_message = "Pengaduan Anda berhasil dikirim! Tim kami akan segera memproses laporan Anda.";
        // Dalam aplikasi real, simpan ke database di sini
    } else {
        $error_message = "Mohon lengkapi semua field yang wajib diisi.";
    }
}
?>

    <!-- Page Header -->
    <section class="bg-gradient-to-r from-orange-500 via-orange-400 to-orange-500 text-white py-16">
        <div class="container mx-auto px-4">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Buat Pengaduan</h1>
                <p class="text-xl text-orange-100">Sampaikan aspirasi dan keluhan Anda kepada kami</p>
            </div>
        </div>
    </section>

    <!-- Form Pengaduan -->
    <section class="py-16 bg-slate-50">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto">
                
                <?php if ($success_message): ?>
                <div class="bg-green-100 border border-green-400 text-green-700 px-6 py-4 rounded-lg mb-8 flex items-center">
                    <i class="fas fa-check-circle text-2xl mr-4"></i>
                    <div>
                        <p class="font-semibold"><?php echo $success_message; ?></p>
                        <a href="daftar-aspirasi.php" class="text-green-800 underline hover:text-green-900">Lihat daftar aspirasi</a>
                    </div>
                </div>
                <?php endif; ?>

                <?php if ($error_message): ?>
                <div class="bg-red-100 border border-red-400 text-red-700 px-6 py-4 rounded-lg mb-8 flex items-center">
                    <i class="fas fa-exclamation-circle text-2xl mr-4"></i>
                    <p class="font-semibold"><?php echo $error_message; ?></p>
                </div>
                <?php endif; ?>

                <!-- Informasi Penting -->
                <div class="bg-orange-50 border border-orange-200 rounded-xl p-6 mb-8">
                    <h3 class="text-lg font-bold text-orange-900 mb-3">
                        <i class="fas fa-info-circle mr-2"></i>Informasi Penting
                    </h3>
                    <ul class="space-y-2 text-orange-800">
                        <li class="flex items-start">
                            <i class="fas fa-check text-orange-600 mr-2 mt-1"></i>
                            <span>Pastikan data yang Anda berikan akurat dan dapat dipertanggungjawabkan</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-orange-600 mr-2 mt-1"></i>
                            <span>Jelaskan pengaduan Anda dengan detail dan jelas</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-orange-600 mr-2 mt-1"></i>
                            <span>Lampirkan foto/dokumen pendukung jika diperlukan</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-orange-600 mr-2 mt-1"></i>
                            <span>Proses verifikasi dan respon awal maksimal 1x24 jam</span>
                        </li>
                    </ul>
                </div>

                <form method="POST" action="" enctype="multipart/form-data" class="bg-white rounded-2xl shadow-xl p-8 md:p-10">
                    <h2 class="text-2xl font-bold text-slate-800 mb-6">Formulir Pengaduan</h2>
                    
                    <div class="mb-6">
                        <label class="block text-slate-700 font-semibold mb-2">
                            <i class="fas fa-user text-orange-600 mr-2"></i>Nama Lengkap <span class="text-red-500">*</span>
                        </label>
                        <input type="text" name="nama" required placeholder="Masukkan nama lengkap Anda" 
                               value="<?php echo $_POST['nama'] ?? ''; ?>"
                               class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                    </div>
                    
                    <div class="mb-6">
                        <label class="block text-slate-700 font-semibold mb-2">
                            <i class="fas fa-envelope text-orange-600 mr-2"></i>Email <span class="text-red-500">*</span>
                        </label>
                        <input type="email" name="email" required placeholder="email@example.com" 
                               value="<?php echo $_POST['email'] ?? ''; ?>"
                               class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                    </div>
                    
                    <div class="mb-6">
                        <label class="block text-slate-700 font-semibold mb-2">
                            <i class="fas fa-phone text-orange-600 mr-2"></i>No. Telepon <span class="text-red-500">*</span>
                        </label>
                        <input type="tel" name="telepon" required placeholder="08xxxxxxxxxx" 
                               value="<?php echo $_POST['telepon'] ?? ''; ?>"
                               class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                    </div>
                    
                    <div class="mb-6">
                        <label class="block text-slate-700 font-semibold mb-2">
                            <i class="fas fa-map-marker-alt text-orange-600 mr-2"></i>Alamat Lengkap
                        </label>
                        <input type="text" name="alamat" placeholder="Alamat lengkap kejadian/lokasi" 
                               value="<?php echo $_POST['alamat'] ?? ''; ?>"
                               class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                    </div>
                    
                    <div class="mb-6">
                        <label class="block text-slate-700 font-semibold mb-2">
                            <i class="fas fa-tag text-orange-600 mr-2"></i>Kategori Pengaduan <span class="text-red-500">*</span>
                        </label>
                        <select name="kategori" required
                                class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                            <option value="">Pilih Kategori</option>
                            <option value="Infrastruktur" <?php echo (($_POST['kategori'] ?? '') == 'Infrastruktur') ? 'selected' : ''; ?>>Infrastruktur</option>
                            <option value="Kesehatan" <?php echo (($_POST['kategori'] ?? '') == 'Kesehatan') ? 'selected' : ''; ?>>Kesehatan</option>
                            <option value="Pendidikan" <?php echo (($_POST['kategori'] ?? '') == 'Pendidikan') ? 'selected' : ''; ?>>Pendidikan</option>
                            <option value="Lingkungan" <?php echo (($_POST['kategori'] ?? '') == 'Lingkungan') ? 'selected' : ''; ?>>Lingkungan</option>
                            <option value="Keamanan" <?php echo (($_POST['kategori'] ?? '') == 'Keamanan') ? 'selected' : ''; ?>>Keamanan</option>
                            <option value="Lainnya" <?php echo (($_POST['kategori'] ?? '') == 'Lainnya') ? 'selected' : ''; ?>>Lainnya</option>
                        </select>
                    </div>
                    
                    <div class="mb-6">
                        <label class="block text-slate-700 font-semibold mb-2">
                            <i class="fas fa-calendar text-orange-600 mr-2"></i>Tanggal Kejadian
                        </label>
                        <input type="date" name="tanggal_kejadian" 
                               value="<?php echo $_POST['tanggal_kejadian'] ?? ''; ?>"
                               class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                    </div>
                    
                    <div class="mb-6">
                        <label class="block text-slate-700 font-semibold mb-2">
                            <i class="fas fa-file-alt text-orange-600 mr-2"></i>Isi Pengaduan <span class="text-red-500">*</span>
                        </label>
                        <textarea name="pengaduan" rows="6" required placeholder="Jelaskan detail pengaduan atau aspirasi Anda dengan jelas..." 
                                  class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent"><?php echo $_POST['pengaduan'] ?? ''; ?></textarea>
                        <p class="text-sm text-slate-500 mt-2">Minimal 50 karakter</p>
                    </div>
                    
                    <div class="mb-6">
                        <label class="block text-slate-700 font-semibold mb-2">
                            <i class="fas fa-image text-orange-600 mr-2"></i>Lampiran (Opsional)
                        </label>
                        <input type="file" name="lampiran" accept="image/*,.pdf"
                               class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                        <p class="text-sm text-slate-500 mt-2">Format: JPG, PNG, PDF (Maks. 5MB)</p>
                    </div>
                    
                    <div class="mb-6">
                        <label class="flex items-start">
                            <input type="checkbox" required class="mt-1 w-5 h-5 text-orange-600 border-slate-300 rounded focus:ring-2 focus:ring-orange-500">
                            <span class="ml-3 text-slate-700">
                                Saya menyatakan bahwa data yang saya berikan adalah benar dan dapat dipertanggungjawabkan. <span class="text-red-500">*</span>
                            </span>
                        </label>
                    </div>
                    
                    <div class="flex flex-col sm:flex-row gap-4">
                        <button type="submit" 
                                class="flex-1 bg-gradient-to-r from-orange-500 to-orange-600 text-white py-4 rounded-lg font-bold text-lg hover:from-orange-600 hover:to-orange-700 transition shadow-lg hover:shadow-xl">
                            <i class="fas fa-paper-plane mr-2"></i>Kirim Pengaduan
                        </button>
                        <button type="reset" 
                                class="flex-1 bg-slate-200 text-slate-700 py-4 rounded-lg font-bold text-lg hover:bg-slate-300 transition">
                            <i class="fas fa-redo mr-2"></i>Reset Form
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

<?php require_once 'includes/footer.php'; ?>
