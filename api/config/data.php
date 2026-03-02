<?php
// Data Dummy Aspirasi
$aspirasi_list = [
    [
        'nama' => 'Budi Santoso',
        'kategori' => 'Infrastruktur',
        'tanggal' => '2026-02-08',
        'status' => 'Selesai',
        'isi_laporan' => 'Jalan di depan perumahan Griya Indah rusak parah dan berlubang. Mohon segera diperbaiki karena membahayakan pengendara.'
    ],
    [
        'nama' => 'Siti Nurhaliza',
        'kategori' => 'Kesehatan',
        'tanggal' => '2026-02-07',
        'status' => 'Proses',
        'isi_laporan' => 'Puskesmas Kecamatan kekurangan stok obat-obatan dasar. Banyak warga yang tidak mendapat pelayanan optimal.'
    ],
    [
        'nama' => 'Ahmad Fauzi',
        'kategori' => 'Pendidikan',
        'tanggal' => '2026-02-06',
        'status' => 'Pending',
        'isi_laporan' => 'SD Negeri 05 memerlukan renovasi atap yang bocor. Saat hujan, proses belajar mengajar terganggu.'
    ],
    [
        'nama' => 'Dewi Lestari',
        'kategori' => 'Lingkungan',
        'tanggal' => '2026-02-05',
        'status' => 'Selesai',
        'isi_laporan' => 'Sampah menumpuk di TPS Kelurahan Mawar. Diperlukan penambahan jadwal pengangkutan sampah.'
    ],
    [
        'nama' => 'Rizki Pratama',
        'kategori' => 'Keamanan',
        'tanggal' => '2026-02-04',
        'status' => 'Proses',
        'isi_laporan' => 'Lampu penerangan jalan di Gang Melati mati semua. Membuat rawan kriminalitas di malam hari.'
    ]
];

// Data Statistik
$statistik = [
    'total' => 1234,
    'pending' => 87,
    'proses' => 145,
    'selesai' => 1002
];

// Fungsi untuk badge status
function getStatusBadge($status) {
    $badges = [
        'Pending' => 'bg-yellow-100 text-yellow-800',
        'Proses' => 'bg-orange-100 text-orange-800',
        'Selesai' => 'bg-green-100 text-green-800'
    ];
    return $badges[$status] ?? 'bg-gray-100 text-gray-800';
}

// Fungsi untuk icon kategori
function getCategoryIcon($kategori) {
    $icons = [
        'Infrastruktur' => 'fa-road',
        'Kesehatan' => 'fa-heartbeat',
        'Pendidikan' => 'fa-graduation-cap',
        'Lingkungan' => 'fa-leaf',
        'Keamanan' => 'fa-shield-alt'
    ];
    return $icons[$kategori] ?? 'fa-file-alt';
}

// Fungsi untuk format tanggal Indonesia
function formatTanggal($tanggal) {
    $bulan = [
        1 => 'Jan', 2 => 'Feb', 3 => 'Mar', 4 => 'Apr',
        5 => 'Mei', 6 => 'Jun', 7 => 'Jul', 8 => 'Agu',
        9 => 'Sep', 10 => 'Okt', 11 => 'Nov', 12 => 'Des'
    ];
    $timestamp = strtotime($tanggal);
    return date('d', $timestamp) . ' ' . $bulan[date('n', $timestamp)] . ' ' . date('Y', $timestamp);
}
?>
