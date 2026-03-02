<?php
$page_title = 'Beranda';
require_once 'config/data.php';
require_once 'includes/header.php';
?>

    <!-- Hero Section -->
    <section class="gradient-bg text-white py-20 md:py-32">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="text-center md:text-left">
                    <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                        Suara Anda, <br>Prioritas Kami
                    </h1>
                    <p class="text-xl md:text-2xl mb-8 text-orange-100">
                        Sampaikan aspirasi dan pengaduan Anda untuk pembangunan daerah yang lebih baik.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
                        <a href="buat-pengaduan.php" class="bg-white text-orange-600 px-8 py-4 rounded-lg font-semibold hover:bg-orange-50 transition shadow-lg">
                            <i class="fas fa-edit mr-2"></i>Buat Pengaduan
                        </a>
                        <a href="daftar-aspirasi.php" class="bg-gray-900 text-white px-8 py-4 rounded-lg font-semibold hover:bg-black transition border-2 border-white">
                            <i class="fas fa-list mr-2"></i>Lihat Aspirasi
                        </a>
                    </div>
                </div>
                
                <div class="hidden md:flex justify-center">
                    <div class="relative">
                        <div class="absolute inset-0 bg-white opacity-10 rounded-full blur-3xl"></div>
                        <i class="fas fa-comments text-9xl opacity-20 relative"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cards Statistik -->
    <section class="py-16 bg-slate-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-4">Statistik E-Aspirasi</h2>
                <p class="text-slate-600 text-lg">Transparansi dalam setiap penanganan aspirasi masyarakat</p>
            </div>
            
            <div class="grid md:grid-cols-4 gap-6">
                <!-- Card 1 -->
                <div class="bg-white p-6 rounded-xl shadow-lg hover-lift">
                    <div class="flex items-center justify-between mb-4">
                        <div class="bg-blue-100 p-4 rounded-lg">
                            <i class="fas fa-inbox text-blue-600 text-3xl"></i>
                        </div>
                        <span class="text-blue-600 font-semibold text-sm">Total</span>
                    </div>
                    <h3 class="text-4xl font-bold text-slate-800 mb-2"><?php echo number_format($statistik['total']); ?></h3>
                    <p class="text-slate-600 font-medium">Total Pengaduan</p>
                </div>
                
                <!-- Card 2 -->
                <div class="bg-white p-6 rounded-xl shadow-lg hover-lift">
                    <div class="flex items-center justify-between mb-4">
                        <div class="bg-yellow-100 p-4 rounded-lg">
                            <i class="fas fa-clock text-yellow-600 text-3xl"></i>
                        </div>
                        <span class="text-yellow-600 font-semibold text-sm">Pending</span>
                    </div>
                    <h3 class="text-4xl font-bold text-slate-800 mb-2"><?php echo number_format($statistik['pending']); ?></h3>
                    <p class="text-slate-600 font-medium">Menunggu Proses</p>
                </div>
                
                <!-- Card 3 -->
                <div class="bg-white p-6 rounded-xl shadow-lg hover-lift">
                    <div class="flex items-center justify-between mb-4">
                        <div class="bg-orange-100 p-4 rounded-lg">
                            <i class="fas fa-sync-alt text-orange-600 text-3xl"></i>
                        </div>
                        <span class="text-orange-600 font-semibold text-sm">Proses</span>
                    </div>
                    <h3 class="text-4xl font-bold text-slate-800 mb-2"><?php echo number_format($statistik['proses']); ?></h3>
                    <p class="text-slate-600 font-medium">Dalam Proses</p>
                </div>
                
                <!-- Card 4 -->
                <div class="bg-white p-6 rounded-xl shadow-lg hover-lift">
                    <div class="flex items-center justify-between mb-4">
                        <div class="bg-green-100 p-4 rounded-lg">
                            <i class="fas fa-check-circle text-green-600 text-3xl"></i>
                        </div>
                        <span class="text-green-600 font-semibold text-sm">Selesai</span>
                    </div>
                    <h3 class="text-4xl font-bold text-slate-800 mb-2"><?php echo number_format($statistik['selesai']); ?></h3>
                    <p class="text-slate-600 font-medium">Telah Selesai</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Informasi Singkat -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-4">Cara Menyampaikan Aspirasi</h2>
                <p class="text-slate-600 text-lg">Proses mudah dan transparan untuk menyuarakan aspirasi Anda</p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                <div class="text-center">
                    <div class="bg-orange-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-edit text-orange-600 text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-3">1. Isi Formulir</h3>
                    <p class="text-slate-600">Sampaikan pengaduan Anda melalui formulir yang telah disediakan dengan lengkap dan jelas.</p>
                </div>
                
                <div class="text-center">
                    <div class="bg-orange-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-check-circle text-orange-600 text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-3">2. Verifikasi</h3>
                    <p class="text-slate-600">Tim kami akan memverifikasi dan memproses pengaduan Anda dalam 1x24 jam.</p>
                </div>
                
                <div class="text-center">
                    <div class="bg-orange-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-comments text-orange-600 text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-3">3. Tindak Lanjut</h3>
                    <p class="text-slate-600">Pantau status pengaduan Anda dan dapatkan update secara berkala hingga selesai.</p>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <a href="buat-pengaduan.php" class="inline-block bg-gradient-to-r from-orange-500 to-orange-600 text-white px-10 py-4 rounded-lg font-bold text-lg hover:from-orange-600 hover:to-orange-700 transition shadow-lg">
                    <i class="fas fa-paper-plane mr-2"></i>Buat Pengaduan Sekarang
                </a>
            </div>
        </div>
    </section>

    <!-- Daftar Aspirasi Terbaru -->
    <section class="py-16 bg-slate-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-4">Aspirasi Terbaru</h2>
                <p class="text-slate-600 text-lg">Pantau status pengaduan masyarakat yang telah disampaikan</p>
            </div>
            
            <div class="max-w-5xl mx-auto space-y-6">
                <?php 
                $aspirasi_terbaru = array_slice($aspirasi_list, 0, 3);
                foreach ($aspirasi_terbaru as $aspirasi): 
                ?>
                <div class="bg-white rounded-xl shadow-lg p-6 md:p-8 hover-lift">
                    <div class="flex flex-col md:flex-row md:items-start md:justify-between mb-4">
                        <div class="flex items-center space-x-4 mb-4 md:mb-0">
                            <div class="bg-orange-100 p-4 rounded-full">
                                <i class="fas <?php echo getCategoryIcon($aspirasi['kategori']); ?> text-orange-600 text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-slate-800"><?php echo htmlspecialchars($aspirasi['nama']); ?></h3>
                                <p class="text-slate-500">
                                    <i class="fas fa-calendar-alt mr-2"></i>
                                    <?php echo formatTanggal($aspirasi['tanggal']); ?>
                                </p>
                            </div>
                        </div>
                        
                        <div class="flex items-center space-x-3">
                            <span class="px-4 py-2 rounded-full text-sm font-semibold bg-orange-100 text-orange-800">
                                <i class="fas fa-folder mr-1"></i><?php echo $aspirasi['kategori']; ?>
                            </span>
                            <span class="px-4 py-2 rounded-full text-sm font-semibold <?php echo getStatusBadge($aspirasi['status']); ?>">
                                <?php echo $aspirasi['status']; ?>
                            </span>
                        </div>
                    </div>
                    
                    <p class="text-slate-700 leading-relaxed">
                        <?php echo htmlspecialchars($aspirasi['isi_laporan']); ?>
                    </p>
                    
                    <div class="mt-4 pt-4 border-t border-slate-200">
                        <button class="text-orange-600 hover:text-orange-800 font-semibold transition">
                            <i class="fas fa-eye mr-2"></i>Lihat Detail
                        </button>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            
            <div class="text-center mt-10">
                <a href="daftar-aspirasi.php" class="inline-block bg-gradient-to-r from-orange-500 to-orange-600 text-white px-8 py-3 rounded-lg font-semibold hover:from-orange-600 hover:to-orange-700 transition shadow-lg">
                    <i class="fas fa-list mr-2"></i>Lihat Semua Aspirasi
                </a>
            </div>
        </div>
    </section>

<?php require_once 'includes/footer.php'; ?>
