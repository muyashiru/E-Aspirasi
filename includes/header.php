<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title ?? 'E-Aspirasi'; ?> - Sistem Pengaduan Masyarakat</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Google Fonts - Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <style>
        * {
            font-family: 'Inter', sans-serif;
        }
        
        .gradient-bg {
            background: linear-gradient(135deg, #f97316 0%, #f1610d 50%, #f97316 100%);
        }
        
        .hover-lift {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .hover-lift:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        
        .smooth-scroll {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body class="bg-slate-50 smooth-scroll">
    
    <!-- Header -->
    <header class="bg-white shadow-md sticky top-0 z-50">
        <nav class="container mx-auto px-4 py-4">
            <div class="flex justify-between items-center">
                <a href="index.php" class="flex items-center space-x-3">
                    <div class="bg-gradient-to-br from-orange-500 to-orange-600 p-2 rounded-lg shadow-md">
                        <i class="fas fa-bullhorn text-white text-xl"></i>
                    </div>
                    <span class="text-2xl font-bold bg-gradient-to-r from-gray-900 to-orange-600 bg-clip-text text-transparent">E-Aspirasi</span>
                </a>
                
                <!-- Desktop Menu -->
                <ul class="hidden md:flex space-x-8 items-center">
                    <li>
                        <a href="index.php" class="<?php echo $current_page == 'index.php' ? 'text-orange-600 font-bold' : 'text-slate-700 hover:text-orange-600'; ?> font-medium transition">
                            Beranda
                        </a>
                    </li>
                    <li>
                        <a href="statistik.php" class="<?php echo $current_page == 'statistik.php' ? 'text-orange-600 font-bold' : 'text-slate-700 hover:text-orange-600'; ?> font-medium transition">
                            Statistik
                        </a>
                    </li>
                    <li>
                        <a href="buat-pengaduan.php" class="<?php echo $current_page == 'buat-pengaduan.php' ? 'text-orange-600 font-bold' : 'text-slate-700 hover:text-orange-600'; ?> font-medium transition">
                            Buat Pengaduan
                        </a>
                    </li>
                    <li>
                        <a href="daftar-aspirasi.php" class="<?php echo $current_page == 'daftar-aspirasi.php' ? 'text-orange-600 font-bold' : 'text-slate-700 hover:text-orange-600'; ?> font-medium transition">
                            Daftar Aspirasi
                        </a>
                    </li>
                    <li>
                        <a href="buat-pengaduan.php" class="bg-gradient-to-r from-orange-500 to-orange-600 text-white px-6 py-2 rounded-lg hover:from-orange-600 hover:to-orange-700 transition shadow-md">
                            <i class="fas fa-plus mr-2"></i>Lapor Sekarang
                        </a>
                    </li>
                </ul>
                
                <!-- Mobile Menu Button -->
                <button class="md:hidden text-slate-600 hover:text-orange-600" onclick="toggleMobileMenu()">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>
            
            <!-- Mobile Menu -->
            <div id="mobileMenu" class="hidden md:hidden mt-4 pb-4">
                <ul class="flex flex-col space-y-3">
                    <li>
                        <a href="index.php" class="block <?php echo $current_page == 'index.php' ? 'text-orange-600 font-bold' : 'text-slate-700 hover:text-orange-600'; ?> font-medium transition">
                            Beranda
                        </a>
                    </li>
                    <li>
                        <a href="statistik.php" class="block <?php echo $current_page == 'statistik.php' ? 'text-orange-600 font-bold' : 'text-slate-700 hover:text-orange-600'; ?> font-medium transition">
                            Statistik
                        </a>
                    </li>
                    <li>
                        <a href="buat-pengaduan.php" class="block <?php echo $current_page == 'buat-pengaduan.php' ? 'text-orange-600 font-bold' : 'text-slate-700 hover:text-orange-600'; ?> font-medium transition">
                            Buat Pengaduan
                        </a>
                    </li>
                    <li>
                        <a href="daftar-aspirasi.php" class="block <?php echo $current_page == 'daftar-aspirasi.php' ? 'text-orange-600 font-bold' : 'text-slate-700 hover:text-orange-600'; ?> font-medium transition">
                            Daftar Aspirasi
                        </a>
                    </li>
                    <li>
                        <a href="buat-pengaduan.php" class="block bg-gradient-to-r from-orange-500 to-orange-600 text-white px-6 py-2 rounded-lg hover:from-orange-600 hover:to-orange-700 transition text-center shadow-md">
                            <i class="fas fa-plus mr-2"></i>Lapor Sekarang
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
