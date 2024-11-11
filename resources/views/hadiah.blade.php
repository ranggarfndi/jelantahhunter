<x-app-layout>
    <x-slot name="header">
    </x-slot>

    <div class="flex justify-center items-center min-h-screen">
        <div class="bg-white p-6 rounded-lg shadow-lg max-w-lg w-full text-center">
            <!-- Menampilkan pesan status atau error -->
            @if(session('status'))
                <div class="text-green-600 bg-green-100 p-4 rounded-md mb-4">
                    {{ session('status') }}
                </div>
            @endif

            @if(session('error'))
                <div class="text-red-600 bg-red-100 p-4 rounded-md mb-4">
                    {{ session('error') }}
                </div>
            @endif

            <!-- Menampilkan gambar hadiah di tengah -->
            <img src="img/tepung-terigu.jpg" alt="Hadiah" class="mx-auto mb-6 max-w-full h-auto rounded-md">
    
            <!-- Menampilkan nama hadiah -->
            <h2 class="text-2xl font-semibold text-gray-800 mb-2">Tepung 1Kg</h2>
    
            <!-- Menampilkan harga hadiah dalam liter -->
            <p class="text-lg text-gray-600 mb-4">Harga: 10.000 liter</p>
    
            <!-- Form untuk tukar hadiah -->
            <form action="{{ route('reward.exchange', 1) }}" method="POST">  <!-- Pastikan '1' adalah id hadiah yang tepat -->
                @csrf
                <button type="submit" class="px-6 py-3 bg-orange-500 text-white rounded-md shadow-md hover:bg-orange-800 focus:outline-none focus:ring-2 focus:ring-orange-400">Tukar Hadiah</button>
            </form>
        </div>
    </div>
    
</x-app-layout>
