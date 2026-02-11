<?php
$page_title = 'Daftar Aspirasi';
require_once 'config/data.php';
require_once 'includes/header.php';

// Pagination
$items_per_page = 10;
$current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$total_items = count($aspirasi_list);
$total_pages = ceil($total_items / $items_per_page);

// Filter
$filter_kategori = $_GET['kategori'] ?? '';
$filter_status = $_GET['status'] ?? '';
$search = $_GET['search'] ?? '';

// Apply filters
$filtered_aspirasi = $aspirasi_list;

if ($filter_kategori) {
    $filtered_aspirasi = array_filter($filtered_aspirasi, function($item) use ($filter_kategori) {
        return $item['kategori'] === $filter_kategori;
    });
}

if ($filter_status) {
    $filtered_aspirasi = array_filter($filtered_aspirasi, function($item) use ($filter_status) {
        return $item['status'] === $filter_status;
    });
}

if ($search) {
    $filtered_aspirasi = array_filter($filtered_aspirasi, function($item) use ($search) {
        return stripos($item['nama'], $search) !== false || 
               stripos($item['isi_laporan'], $search) !== false;
    });
}

$total_filtered = count($filtered_aspirasi);
?>

    <!-- Page Header -->
    <section class="bg-gradient-to-r from-orange-500 via-orange-400 to-orange-500 text-white py-16">
        <div class="container mx-auto px-4">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Daftar Aspirasi</h1>
                <p class="text-xl text-orange-100">Pantau status dan perkembangan pengaduan masyarakat</p>
            </div>
        </div>
    </section>

    <!-- Filter & Search -->
    <section class="py-8 bg-slate-50 border-b border-slate-200">
        <div class="container mx-auto px-4">
            <form method="GET" action="" class="max-w-6xl mx-auto">
                <div class="grid md:grid-cols-4 gap-4">
                    <!-- Search -->
                    <div class="md:col-span-2">
                        <div class="relative">
                            <i class="fas fa-search absolute left-4 top-4 text-slate-400"></i>
                            <input type="text" name="search" placeholder="Cari berdasarkan nama atau isi laporan..." 
                                   value="<?php echo htmlspecialchars($search); ?>"
                                   class="w-full pl-12 pr-4 py-3 border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500">
                        </div>
                    </div>
                    
                    <!-- Filter Kategori -->
                    <div>
                        <select name="kategori" 
                                class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500">
                            <option value="">Semua Kategori</option>
                            <option value="Infrastruktur" <?php echo $filter_kategori === 'Infrastruktur' ? 'selected' : ''; ?>>Infrastruktur</option>
                            <option value="Kesehatan" <?php echo $filter_kategori === 'Kesehatan' ? 'selected' : ''; ?>>Kesehatan</option>
                            <option value="Pendidikan" <?php echo $filter_kategori === 'Pendidikan' ? 'selected' : ''; ?>>Pendidikan</option>
                            <option value="Lingkungan" <?php echo $filter_kategori === 'Lingkungan' ? 'selected' : ''; ?>>Lingkungan</option>
                            <option value="Keamanan" <?php echo $filter_kategori === 'Keamanan' ? 'selected' : ''; ?>>Keamanan</option>
                        </select>
                    </div>
                    
                    <!-- Filter Status -->
                    <div>
                        <div class="flex gap-2">
                            <select name="status" 
                                    class="flex-1 px-4 py-3 border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500">
                                <option value="">Semua Status</option>
                                <option value="Pending" <?php echo $filter_status === 'Pending' ? 'selected' : ''; ?>>Pending</option>
                                <option value="Proses" <?php echo $filter_status === 'Proses' ? 'selected' : ''; ?>>Proses</option>
                                <option value="Selesai" <?php echo $filter_status === 'Selesai' ? 'selected' : ''; ?>>Selesai</option>
                            </select>
                            <button type="submit" class="px-6 py-3 bg-gradient-to-r from-orange-500 to-orange-600 text-white rounded-lg hover:from-orange-600 hover:to-orange-700 transition">
                                <i class="fas fa-filter"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <?php if ($filter_kategori || $filter_status || $search): ?>
                <div class="mt-4 flex items-center gap-3">
                    <span class="text-slate-600 font-medium">Filter aktif:</span>
                    <?php if ($filter_kategori): ?>
                        <span class="px-3 py-1 bg-orange-100 text-orange-800 rounded-full text-sm">
                            Kategori: <?php echo $filter_kategori; ?>
                        </span>
                    <?php endif; ?>
                    <?php if ($filter_status): ?>
                        <span class="px-3 py-1 bg-orange-100 text-orange-800 rounded-full text-sm">
                            Status: <?php echo $filter_status; ?>
                        </span>
                    <?php endif; ?>
                    <?php if ($search): ?>
                        <span class="px-3 py-1 bg-orange-100 text-orange-800 rounded-full text-sm">
                            Pencarian: "<?php echo htmlspecialchars($search); ?>"
                        </span>
                    <?php endif; ?>
                    <a href="daftar-aspirasi.php" class="text-orange-600 hover:text-orange-800 text-sm font-semibold">
                        <i class="fas fa-times mr-1"></i>Hapus Filter
                    </a>
                </div>
                <?php endif; ?>
            </form>
        </div>
    </section>

    <!-- Daftar Aspirasi -->
    <section class="py-16 bg-slate-50">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <div class="mb-6 flex justify-between items-center">
                    <p class="text-slate-600">
                        Menampilkan <span class="font-bold text-slate-800"><?php echo $total_filtered; ?></span> aspirasi
                    </p>
                    <a href="buat-pengaduan.php" class="bg-gradient-to-r from-orange-500 to-orange-600 text-white px-6 py-2 rounded-lg hover:from-orange-600 hover:to-orange-700 transition">
                        <i class="fas fa-plus mr-2"></i>Buat Pengaduan Baru
                    </a>
                </div>

                <?php if (empty($filtered_aspirasi)): ?>
                    <div class="bg-white rounded-xl shadow-lg p-12 text-center">
                        <i class="fas fa-inbox text-slate-300 text-6xl mb-4"></i>
                        <h3 class="text-2xl font-bold text-slate-800 mb-2">Tidak Ada Data</h3>
                        <p class="text-slate-600 mb-6">Tidak ditemukan aspirasi dengan filter yang Anda pilih.</p>
                    <a href="daftar-aspirasi.php" class="inline-block bg-gradient-to-r from-orange-500 to-orange-600 text-white px-6 py-3 rounded-lg hover:from-orange-600 hover:to-orange-700 transition">
                            Lihat Semua Aspirasi
                        </a>
                    </div>
                <?php else: ?>
                    <div class="space-y-6">
                        <?php foreach ($filtered_aspirasi as $aspirasi): ?>
                        <div class="bg-white rounded-xl shadow-lg p-6 md:p-8 hover-lift">
                            <div class="flex flex-col md:flex-row md:items-start md:justify-between mb-4">
                                <div class="flex items-center space-x-4 mb-4 md:mb-0">
                                <div class="bg-orange-100 p-4 rounded-full flex-shrink-0">
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
                                
                                <div class="flex items-center space-x-3 flex-wrap gap-2">
                                <span class="px-4 py-2 rounded-full text-sm font-semibold bg-orange-100 text-orange-800">
                                        <i class="fas fa-folder mr-1"></i><?php echo $aspirasi['kategori']; ?>
                                    </span>
                                    <span class="px-4 py-2 rounded-full text-sm font-semibold <?php echo getStatusBadge($aspirasi['status']); ?>">
                                        <?php 
                                        $status_icons = [
                                            'Pending' => 'fa-clock',
                                            'Proses' => 'fa-sync-alt',
                                            'Selesai' => 'fa-check-circle'
                                        ];
                                        ?>
                                        <i class="fas <?php echo $status_icons[$aspirasi['status']]; ?> mr-1"></i>
                                        <?php echo $aspirasi['status']; ?>
                                    </span>
                                </div>
                            </div>
                            
                            <p class="text-slate-700 leading-relaxed mb-4">
                                <?php echo htmlspecialchars($aspirasi['isi_laporan']); ?>
                            </p>
                            
                            <div class="flex items-center justify-between pt-4 border-t border-slate-200">
                            <button class="text-orange-600 hover:text-orange-800 font-semibold transition">
                                    <i class="fas fa-eye mr-2"></i>Lihat Detail
                                </button>
                                
                                <?php if ($aspirasi['status'] !== 'Selesai'): ?>
                                <button class="text-slate-600 hover:text-slate-800 font-semibold transition">
                                    <i class="fas fa-bell mr-2"></i>Pantau Status
                                </button>
                                <?php else: ?>
                                <span class="text-green-600 font-semibold">
                                    <i class="fas fa-check-double mr-2"></i>Penanganan Selesai
                                </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- Pagination (jika diperlukan) -->
                    <?php if ($total_pages > 1): ?>
                    <div class="mt-10 flex justify-center">
                        <div class="flex gap-2">
                            <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                            <a href="?page=<?php echo $i; ?><?php echo $filter_kategori ? '&kategori='.$filter_kategori : ''; ?><?php echo $filter_status ? '&status='.$filter_status : ''; ?><?php echo $search ? '&search='.$search : ''; ?>" 
                               class="px-4 py-2 rounded-lg <?php echo $i === $current_page ? 'bg-orange-600 text-white' : 'bg-white text-slate-700 hover:bg-slate-100'; ?> transition">
                                <?php echo $i; ?>
                            </a>
                            <?php endfor; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>

<?php require_once 'includes/footer.php'; ?>
