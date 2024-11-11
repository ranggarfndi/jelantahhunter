<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Penjemputan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-20">
                <!-- resources/views/penjemputan.blade.php -->
                <h2 class="text-2xl font-semibold text-gray-700 mb-4">Form Penjemputan</h2>
                @if (session('status'))
                    <div class="mb-4 text-green-600">
                        {{ session('status') }}
                    </div>
                @endif
                <form method="POST" action="{{ route('penjemputan.store') }}">
                    @csrf
                    <div class="mb-4">
                        <label for="quantity" class="block text-gray-700">Quantity</label>
                        <input type="number" name="quantity" id="quantity" class="w-full p-2 border rounded" required>
                    </div>
                    <div class="mb-4">
                        <label for="phone_number" class="block text-gray-700">Phone Number</label>
                        <input type="text" name="phone_number" id="phone_number" class="w-full p-2 border rounded" required>
                    </div>
                    <div class="mb-4">
                        <label for="address" class="block text-gray-700">Address</label>
                        <input type="text" name="address" id="address" class="w-full p-2 border rounded" required>
                    </div>
                    <div class="mb-4">
                        <label for="address_note" class="block text-gray-700">Address Note</label>
                        <input type="text" name="address_note" id="address_note" class="w-full p-2 border rounded">
                    </div>
                    <div class="mb-4">
                        <label for="longtitude" class="block text-gray-700">Longitude</label>
                        <input type="text" name="longtitude" id="longtitude" class="w-full p-2 border rounded">
                    </div>
                    <div class="mb-4">
                        <label for="latitude" class="block text-gray-700">Latitude</label>
                        <input type="text" name="latitude" id="latitude" class="w-full p-2 border rounded">
                    </div>
                    <button type="submit" class="bg-orange-500 text-white p-2 rounded">Submit</button>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
