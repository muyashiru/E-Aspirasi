<?php
$page_title = 'Statistik';
require_once 'config/data.php';
require_once 'includes/header.php';
?>

    <!-- Page Header -->
    <section class="bg-gradient-to-r from-orange-500 via-orange-400 to-orange-500 text-white py-16">
        <div class="container mx-auto px-4">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Statistik Pengaduan</h1>
                <p class="text-xl text-orange-100">Transparansi data penanganan aspirasi masyarakat</p>
            </div>
        </div>
    </section>

    <!-- Cards Statistik Utama -->
    <section class="py-16 bg-slate-50">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-6 mb-12">
                <!-- Card 1 -->
                <div class="bg-white p-6 rounded-xl shadow-lg hover-lift">
                    <div class="flex items-center justify-between mb-4">
                        <div class="bg-orange-100 p-4 rounded-lg">
                            <i class="fas fa-inbox text-orange-600 text-3xl"></i>
                        </div>
                        <span class="text-orange-600 font-semibold text-sm">Total</span>
                    </div>
                    <h3 class="text-4xl font-bold text-slate-800 mb-2"><?php echo number_format($statistik['total']); ?></h3>
                    <p class="text-slate-600 font-medium">Total Pengaduan</p>
                    <div class="mt-4 pt-4 border-t border-slate-200">
                        <span class="text-green-600 text-sm font-semibold">
                            <i class="fas fa-arrow-up mr-1"></i>12% dari bulan lalu
                        </span>
                    </div>
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
                    <div class="mt-4 pt-4 border-t border-slate-200">
                        <span class="text-slate-600 text-sm font-semibold">
                            <?php echo number_format(($statistik['pending']/$statistik['total'])*100, 1); ?>% dari total
                        </span>
                    </div>
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
                    <div class="mt-4 pt-4 border-t border-slate-200">
                        <span class="text-slate-600 text-sm font-semibold">
                            <?php echo number_format(($statistik['proses']/$statistik['total'])*100, 1); ?>% dari total
                        </span>
                    </div>
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
                    <div class="mt-4 pt-4 border-t border-slate-200">
                        <span class="text-green-600 text-sm font-semibold">
                            <?php echo number_format(($statistik['selesai']/$statistik['total'])*100, 1); ?>% dari total
                        </span>
                    </div>
                </div>
            </div>

            <!-- Statistik per Kategori -->
            <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
                <h2 class="text-2xl font-bold text-slate-800 mb-6">
                    <i class="fas fa-chart-bar text-orange-600 mr-3"></i>Statistik per Kategori
                </h2>
                
                <div class="space-y-6">
                    <!-- Infrastruktur -->
                    <div>
                        <div class="flex justify-between items-center mb-2">
                            <div class="flex items-center">
                                <i class="fas fa-road text-orange-600 text-xl mr-3"></i>
                                <span class="font-semibold text-slate-700">Infrastruktur</span>
                            </div>
                            <span class="text-slate-600 font-bold">342 pengaduan</span>
                        </div>
                        <div class="w-full bg-slate-200 rounded-full h-3">
                            <div class="bg-orange-600 h-3 rounded-full" style="width: 72%"></div>
                        </div>
                    </div>
                    
                    <!-- Kesehatan -->
                    <div>
                        <div class="flex justify-between items-center mb-2">
                            <div class="flex items-center">
                                <i class="fas fa-heartbeat text-red-600 text-xl mr-3"></i>
                                <span class="font-semibold text-slate-700">Kesehatan</span>
                            </div>
                            <span class="text-slate-600 font-bold">289 pengaduan</span>
                        </div>
                        <div class="w-full bg-slate-200 rounded-full h-3">
                            <div class="bg-red-600 h-3 rounded-full" style="width: 65%"></div>
                        </div>
                    </div>
                    
                    <!-- Pendidikan -->
                    <div>
                        <div class="flex justify-between items-center mb-2">
                            <div class="flex items-center">
                                <i class="fas fa-graduation-cap text-purple-600 text-xl mr-3"></i>
                                <span class="font-semibold text-slate-700">Pendidikan</span>
                            </div>
                            <span class="text-slate-600 font-bold">267 pengaduan</span>
                        </div>
                        <div class="w-full bg-slate-200 rounded-full h-3">
                            <div class="bg-purple-600 h-3 rounded-full" style="width: 58%"></div>
                        </div>
                    </div>
                    
                    <!-- Lingkungan -->
                    <div>
                        <div class="flex justify-between items-center mb-2">
                            <div class="flex items-center">
                                <i class="fas fa-leaf text-green-600 text-xl mr-3"></i>
                                <span class="font-semibold text-slate-700">Lingkungan</span>
                            </div>
                            <span class="text-slate-600 font-bold">198 pengaduan</span>
                        </div>
                        <div class="w-full bg-slate-200 rounded-full h-3">
                            <div class="bg-green-600 h-3 rounded-full" style="width: 45%"></div>
                        </div>
                    </div>
                    
                    <!-- Keamanan -->
                    <div>
                        <div class="flex justify-between items-center mb-2">
                            <div class="flex items-center">
                                <i class="fas fa-shield-alt text-gray-700 text-xl mr-3"></i>
                                <span class="font-semibold text-slate-700">Keamanan</span>
                            </div>
                            <span class="text-slate-600 font-bold">138 pengaduan</span>
                        </div>
                        <div class="w-full bg-slate-200 rounded-full h-3">
                            <div class="bg-gray-700 h-3 rounded-full" style="width: 35%"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Waktu Respon Rata-rata -->
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-white rounded-xl shadow-lg p-8">
                    <h2 class="text-2xl font-bold text-slate-800 mb-6">
                        <i class="fas fa-clock text-orange-600 mr-3"></i>Waktu Respon Rata-rata
                    </h2>
                    <div class="space-y-4">
                        <div class="flex justify-between items-center p-4 bg-slate-50 rounded-lg">
                            <span class="text-slate-700 font-medium">Respon Awal</span>
                            <span class="text-2xl font-bold text-orange-600">2 Jam</span>
                        </div>
                        <div class="flex justify-between items-center p-4 bg-slate-50 rounded-lg">
                            <span class="text-slate-700 font-medium">Proses Penanganan</span>
                            <span class="text-2xl font-bold text-orange-600">3 Hari</span>
                        </div>
                        <div class="flex justify-between items-center p-4 bg-slate-50 rounded-lg">
                            <span class="text-slate-700 font-medium">Penyelesaian</span>
                            <span class="text-2xl font-bold text-orange-600">7 Hari</span>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg p-8">
                    <h2 class="text-2xl font-bold text-slate-800 mb-6">
                        <i class="fas fa-star text-orange-600 mr-3"></i>Rating Kepuasan
                    </h2>
                    <div class="text-center mb-6">
                        <div class="text-6xl font-bold text-orange-600 mb-2">4.7</div>
                        <div class="text-yellow-400 text-3xl mb-2">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <p class="text-slate-600">Dari 824 responden</p>
                    </div>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3">
                            <span class="text-sm text-slate-600 w-12">5 ⭐</span>
                            <div class="flex-1 bg-slate-200 rounded-full h-2">
                                <div class="bg-yellow-400 h-2 rounded-full" style="width: 78%"></div>
                            </div>
                            <span class="text-sm text-slate-600 w-12 text-right">78%</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-sm text-slate-600 w-12">4 ⭐</span>
                            <div class="flex-1 bg-slate-200 rounded-full h-2">
                                <div class="bg-yellow-400 h-2 rounded-full" style="width: 15%"></div>
                            </div>
                            <span class="text-sm text-slate-600 w-12 text-right">15%</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-sm text-slate-600 w-12">3 ⭐</span>
                            <div class="flex-1 bg-slate-200 rounded-full h-2">
                                <div class="bg-yellow-400 h-2 rounded-full" style="width: 5%"></div>
                            </div>
                            <span class="text-sm text-slate-600 w-12 text-right">5%</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-sm text-slate-600 w-12">2 ⭐</span>
                            <div class="flex-1 bg-slate-200 rounded-full h-2">
                                <div class="bg-yellow-400 h-2 rounded-full" style="width: 1%"></div>
                            </div>
                            <span class="text-sm text-slate-600 w-12 text-right">1%</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-sm text-slate-600 w-12">1 ⭐</span>
                            <div class="flex-1 bg-slate-200 rounded-full h-2">
                                <div class="bg-yellow-400 h-2 rounded-full" style="width: 1%"></div>
                            </div>
                            <span class="text-sm text-slate-600 w-12 text-right">1%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php require_once 'includes/footer.php'; ?>
