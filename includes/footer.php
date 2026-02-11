    <!-- Footer -->
    <footer class="bg-slate-800 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8 mb-8">
                <!-- Kolom 1 -->
                <div>
                    <div class="flex items-center space-x-3 mb-4">
                        <div class="bg-gradient-to-br from-orange-500 to-orange-600 p-2 rounded-lg shadow-md">
                            <i class="fas fa-bullhorn text-white text-xl"></i>
                        </div>
                        <span class="text-2xl font-bold">E-Aspirasi</span>
                    </div>
                    <p class="text-slate-300">
                        Platform digital untuk menyampaikan aspirasi dan pengaduan masyarakat secara transparan dan efisien.
                    </p>
                </div>
                
                <!-- Kolom 2 -->
                <div>
                    <h3 class="text-lg font-bold mb-4">Menu Cepat</h3>
                    <ul class="space-y-2">
                        <li><a href="index.php" class="text-slate-300 hover:text-orange-400 transition"><i class="fas fa-angle-right mr-2"></i>Beranda</a></li>
                        <li><a href="statistik.php" class="text-slate-300 hover:text-orange-400 transition"><i class="fas fa-angle-right mr-2"></i>Statistik</a></li>
                        <li><a href="buat-pengaduan.php" class="text-slate-300 hover:text-orange-400 transition"><i class="fas fa-angle-right mr-2"></i>Buat Pengaduan</a></li>
                        <li><a href="daftar-aspirasi.php" class="text-slate-300 hover:text-orange-400 transition"><i class="fas fa-angle-right mr-2"></i>Daftar Aspirasi</a></li>
                    </ul>
                </div>
                
                <!-- Kolom 3 -->
                <div>
                    <h3 class="text-lg font-bold mb-4">Kategori</h3>
                    <ul class="space-y-2">
                        <li class="text-slate-300"><i class="fas fa-road mr-2 text-orange-400"></i>Infrastruktur</li>
                        <li class="text-slate-300"><i class="fas fa-heartbeat mr-2 text-orange-400"></i>Kesehatan</li>
                        <li class="text-slate-300"><i class="fas fa-graduation-cap mr-2 text-orange-400"></i>Pendidikan</li>
                        <li class="text-slate-300"><i class="fas fa-leaf mr-2 text-orange-400"></i>Lingkungan</li>
                        <li class="text-slate-300"><i class="fas fa-shield-alt mr-2 text-orange-400"></i>Keamanan</li>
                    </ul>
                </div>
                
                <!-- Kolom 4 -->
                <div>
                    <h3 class="text-lg font-bold mb-4">Hubungi Kami</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt text-orange-400 mr-3 mt-1"></i>
                            <span class="text-slate-300">Jl. Contoh No. 123<br>Jakarta Pusat, 10110</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-phone text-orange-400 mr-3"></i>
                            <span class="text-slate-300">(021) 1234-5678</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-envelope text-orange-400 mr-3"></i>
                            <span class="text-slate-300">info@e-aspirasi.id</span>
                        </li>
                    </ul>
                    
                    <div class="mt-6">
                        <h4 class="font-semibold mb-3">Ikuti Kami</h4>
                        <div class="flex space-x-3">
                            <a href="#" class="bg-slate-700 hover:bg-orange-600 p-3 rounded-full transition">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="bg-slate-700 hover:bg-orange-600 p-3 rounded-full transition">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="bg-slate-700 hover:bg-orange-600 p-3 rounded-full transition">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="bg-slate-700 hover:bg-orange-600 p-3 rounded-full transition">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-slate-700 pt-8 text-center">
                <p class="text-slate-400">
                    &copy; 2026 E-Aspirasi. All rights reserved. Made with <i class="fas fa-heart text-red-500"></i> for better community.
                </p>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button -->
    <button onclick="scrollToTop()" id="scrollTopBtn" 
            class="hidden fixed bottom-8 right-8 bg-gradient-to-r from-orange-500 to-orange-600 text-white p-4 rounded-full shadow-lg hover:from-orange-600 hover:to-orange-700 transition z-50">
        <i class="fas fa-arrow-up"></i>
    </button>

    <script>
        // Toggle Mobile Menu
        function toggleMobileMenu() {
            const menu = document.getElementById('mobileMenu');
            menu.classList.toggle('hidden');
        }
        
        // Scroll to Top
        function scrollToTop() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }
        
        // Show/Hide Scroll to Top Button
        window.onscroll = function() {
            const btn = document.getElementById('scrollTopBtn');
            if (btn && (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300)) {
                btn.classList.remove('hidden');
            } else if (btn) {
                btn.classList.add('hidden');
            }
        };
    </script>
</body>
</html>
