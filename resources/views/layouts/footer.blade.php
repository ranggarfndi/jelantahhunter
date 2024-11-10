<footer class="bg-neutral-800 text-white py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- About Section -->
            <div>
                {{-- <h3 class="text-lg font-semibold mb-4">Tentang Kami</h3> --}}
                {{-- <p class="text-sm">
                    Kami adalah perusahaan yang peduli terhadap pengelolaan minyak jelantah dan bertujuan untuk mengurangi dampak negatif terhadap lingkungan.
                </p> --}}
                <div class="shrink-0 flex items-center">
                        <img src="img/logo-jelantah-hunter.png" alt="logo" class="h-44 mt-1 w-auton mx-auto">
                </div>
            </div>

            <!-- Quick Links Section -->
            <div class="mt-5 text-neutral-400">
                <h3 class="text-lg font-semibold mb-4">Link Halaman</h3>
                <ul class="text-sm space-y-2">
                    <li><a href="{{ route('beranda') }}" class="hover:underline">Beranda</a></li>
                    <li><a href="{{ route('tentang') }}" class="hover:underline">Tentang</a></li>
                    <li><a href="{{ route('penjemputan') }}" class="hover:underline">Penjemputan</a></li>
                    <li><a href="{{ route('hadiah') }}" class="hover:underline">Hadiah</a></li>
                </ul>
            </div>

            <!-- Contact Section -->
            <div class="mt-5 text-neutral-400">
                <h3 class="text-lg font-semibold mb-4">Kontak</h3>
                <ul class="text-sm space-y-2">
                    <li>Email: <a href="mailto:info@jelantahhunter.com" class="hover:underline">info@jelantahhunter.com</a></li>
                    <li>Telp: <a href="tel:+6282363546207" class="hover:underline">+62 823 6354 6207</a></li>
                    <li>Alamat: Jl. Gatot Subroto No.km, Simpang Tj., Kec. Medan Sunggal, Kota Medan, Sumatera Utara 20122</li>
                </ul>
            </div>
        </div>

        <!-- Bottom Copyright -->
        <div class="mt-8 border-t border-gray-600 pt-4 text-center text-sm text-neutral-400">
            <p>&copy; 2024 Jelantah Hunter.</p>
        </div>
    </div>
</footer>
