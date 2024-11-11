<x-app-layout>
    <div class="pt-32">

        <!-- Judul Utama -->
        <h1 class="flex justify-center mb-10 text-5xl text-orange-500 font-bold">
            JELANTAH HUNTER
        </h1>
        
        <!-- Deskripsi -->
        <p class="text-center text-neutral-600 text-lg max-w-3xl mx-auto pb-5">
            Jelantah Hunter adalah sebuah website yang berfungsi sebagai penghubung antara masyarakat yang ingin
            membuang minyak jelantah dengan cara yang lebih ramah lingkungan, dan pihak kami yang mengumpulkan minyak
            tersebut untuk diolah kembali.
            <br><br>
            Platform ini memberikan kemudahan bagi pengguna untuk mendaftar dan menjadwalkan penjemputan minyak jelantah
            di rumah atau lokasi mereka. Tim kami akan mengumpulkan dan mengelola minyak jelantah tersebut secara
            berkelanjutan, mengolahnya menjadi produk-produk yang bernilai guna atau mendistribusikannya ke pihak-pihak
            yang membutuhkan untuk berbagai tujuan industri dan non-industri.
        </p>

        <!-- Harga Jual Minyak Jelantah -->
        <div class="bg-white py-14 mt-5">
            <h2 class="text-center text-3xl text-orange-500 font-medium mb-5">
                Harga Jual Minyak Jelantah
            </h2>
            <div class="flex justify-center space-x-5">
                <button class="bg-neutral-700 text-white rounded-full px-6 py-3">
                    Rp 10.000 / liter
                </button>
                <button class="bg-neutral-700 text-white rounded-full px-6 py-3">
                    Rp 200.000 / 18 liter
                </button>
            </div>
            <p class="text-center text-red-700 italic mt-4">
                Gratis ongkir minimal penjemputan 20 liter
            </p>
        </div>

        <!-- Kenapa Harus Jual di Jelantah Hunter (Lebar Sama dengan List) -->
        <div class="pt-14 pb-10 bg-gray-100 w-full px-5">
            <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-5">
                <!-- Teks Judul -->
                <div class="text-left align-center">
                    <h2 class="text-5xl font-medium text-gray-800 pt-5">Kenapa harus jual di</h2>
                    <h2 class="text-5xl font-medium text-orange-500 pt-3">Jelantah Hunter?</h2>
                </div>
                <!-- Daftar Alasan dengan Bullet Points -->
                <ul class="list-disc list-inside text-neutral-600 text-lg">
                    <li>Sumber Penghasilan Tambahan</li>
                    <li>Mengurangi Pencemaran Lingkungan</li>
                    <li>Mendukung Produksi Biodiesel</li>
                    <li>Mengurangi Penggunaan Minyak yang Berulang-ulang</li>
                    <li>Mendukung Program Daur Ulang dan Ekonomi Sirkular</li>
                </ul>
            </div>
        </div>

        <!-- Visi dan Misi -->
        <div class="grid grid-cols-1 md:grid-cols-2 py-10">
            <!-- Visi -->
            <div class="bg-white p-10">
                <h3 class="text-center text-3xl text-orange-500 font-semibold mb-4">Visi</h3>
                <p class="text-center text-neutral-600">
                    Menjadi pionir dalam pengelolaan minyak jelantah yang berkelanjutan dan berkontribusi terhadap
                    kelestarian lingkungan serta kesejahteraan masyarakat melalui ekonomi sirkular.
                </p>
            </div>
            <!-- Misi -->
            <div class="bg-neutral-700 text-white p-10">
                <h3 class="text-center text-3xl text-orange-500 font-semibold mb-3">Misi</h3>
                <ul class="text-left space-y-2 list-disc ml-20">
                    <li>Mengurangi Limbah dan Pencemaran</li>
                    <li>Mendukung Energi Ramah Lingkungan</li>
                    <li>Memberdayakan Masyarakat</li>
                    <li>Mendorong Ekonomi Sirkular</li>
                    <li>Edukasi dan Kolaborasi</li>
                    <li>Menjaga Kesehatan Publik</li>
                </ul>
            </div>
        </div>

        <!-- Galeri -->
<div class="py-10 bg-gray-100 w-full px-5">
    <h2 class="text-center text-4xl text-orange-500 font-medium mb-10">Galeri</h2>
    <div class="max-w-4xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-10">
        <!-- Card 1 -->
        <div class="bg-white rounded-lg overflow-hidden shadow-md">
            <img onclick="openModal('{{ asset('img/gambar4.jpg') }}')" src="{{ asset('img/gambar4.jpg') }}" alt="minyak jelantah" class="w-full h-48 object-cover cursor-pointer">
            <div class="p-5">
                <h3 class="text-lg font-semibold text-gray-700">Gambar 1</h3>
                <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, ipsam.</p>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="bg-white rounded-lg overflow-hidden shadow-md">
            <img onclick="openModal('{{ asset('img/gambar5.jpg') }}')" src="{{ asset('img/gambar5.jpg') }}" alt="minyak jelantah" class="w-full h-48 object-cover cursor-pointer">
            <div class="p-5">
                <h3 class="text-lg font-semibold text-gray-700">Gambar 2</h3>
                <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, reiciendis?</p>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="bg-white rounded-lg overflow-hidden shadow-md">
            <img onclick="openModal('{{ asset('img/gambar6.jpg') }}')" src="{{ asset('img/gambar6.jpg') }}" alt="minyak jelantah" class="w-full h-48 object-cover cursor-pointer">
            <div class="p-5">
                <h3 class="text-lg font-semibold text-gray-700">Gambar 3</h3>
                <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae, rem!</p>
            </div>
        </div>
    </div>
</div>

        
        </div>
        <!-- Modal -->
<div id="imageModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
    <div class="bg-white p-4 rounded-lg max-w-md mx-auto relative">
        <button onclick="closeModal()" class="absolute top-2 right-2 text-gray-700 hover:text-gray-900 text-2xl">&times;</button>
        <img id="modalImage" src="" alt="Full-size Image" class="w-full h-auto rounded-lg" />
    </div>
</div>

<script>
    function openModal(imageSrc) {
        document.getElementById('modalImage').src = imageSrc;
        document.getElementById('imageModal').classList.remove('hidden');
    }

    function closeModal() {
        document.getElementById('imageModal').classList.add('hidden');
    }
</script>

</x-app-layout>
