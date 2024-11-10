<x-app-layout>
    <div class="my-5 pt-20 pb-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="">
                    <!-- Title Section -->
                    <h1 class="text-center text-5xl text-orange-500 font-medium my-16">
                        Tentang Kami
                    </h1>

                    <!-- First Section with Images and Text -->
                    <section class="flex justify-between items-center bg-white w-[900px] h-[376px] mx-auto p-4 rounded-lg mb-20">
                        <div class="w-1/3">
                            <img src="{{ asset('img/gambar1.jpg') }}" alt="Gambar Minyak Jelantah" class="w-[300px] h-[300px] object-cover rounded-lg">
                        </div>
                        <div class="w-2/3 ml-4">
                            <p class="text-neutral-600 text-justify">
                                Minyak jelantah, atau minyak goreng bekas, telah lama menjadi masalah lingkungan yang dihadapi oleh masyarakat di seluruh dunia. Dahulu, kebanyakan orang hanya membuang minyak bekas ini tanpa memikirkan dampaknya.
                                <br><br>
                                Minyak yang dibuang sembarangan dapat mencemari tanah, air, dan mengganggu ekosistem, terutama karena minyak jelantah sangat sulit diurai oleh alam. Masalah ini semakin diperburuk dengan kebiasaan rumah tangga maupun industri makanan yang menghasilkan limbah minyak dalam jumlah besar.
                            </p>
                        </div>
                    </section>

                    <!-- Second Section with Background Color -->
                    <section class="flex justify-between items-center bg-neutral-700 w-[900px] h-[376px] mx-auto p-4 rounded-3xl mb-20 px-14">
                        <div class="w-2/3 mr-4">
                            <p class="text-white text-justify">
                                Namun, sejarah mulai berubah ketika teknologi pengolahan daur ulang minyak jelantah mulai dikembangkan. Pada awal abad ke-21, kesadaran global mengenai pentingnya keberlanjutan dan pengelolaan limbah mulai tumbuh.
                            </p>
                            <br>
                            <p class="text-white">
                                Para ilmuwan dan pengusaha melihat potensi besar di balik limbah ini. Minyak jelantah bisa diolah kembali menjadi sesuatu yang bernilai, seperti biodiesel, sabun, lilin, hingga bahan baku kosmetik. Inovasi ini bukan hanya memberikan solusi untuk limbah yang mengganggu, tetapi juga menciptakan peluang ekonomi baru bagi masyarakat.
                            </p>
                        </div>
                        <div class="w-1/3">
                            <img src="{{ asset('img/gambar2.jpg') }}" alt="gambar" class="w-[300px] h-[300px] object-cover rounded-xl">
                        </div>
                    </section>

                    <!-- Third Section -->
                    <section class="flex justify-between items-center bg-white w-[900px] h-[376px] mx-auto p-4 rounded-lg mb-20">
                        <div class="w-1/3">
                            <img src="{{ asset('img/gambar3.jpg') }}" alt="Gambar Minyak Jelantah" class="w-[300px] h-[300px] object-cover rounded-lg">
                        </div>
                        <div class="w-2/3 ml-4">
                            <p class="text-neutral-600 text-justify">
                                Minyak jelantah, atau minyak goreng bekas, telah lama menjadi masalah lingkungan yang dihadapi oleh masyarakat di seluruh dunia. Dahulu, kebanyakan orang hanya membuang minyak bekas ini tanpa memikirkan dampaknya.
                                <br><br>
                            </p>
                            <p class="text-neutral-600 text justify">
                                Berbagai komunitas mulai memprakarsai program pengumpulan minyak jelantah, yang kemudian disalurkan ke pabrik pengolahan untuk diubah menjadi produk yang bermanfaat. Seiring waktu, banyak negara, termasuk Indonesia, mulai memberikan perhatian lebih pada potensi minyak jelantah sebagai sumber energi terbarukan.
                            </p>
                        </div>
                    </section>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
