<x-layout>
    <x-slot:title>
        Dashboard
    </x-slot:title>
    <x-slot:email>
        {{ auth()->user()->email }}
    </x-slot:email>
    <x-slot:name>
        {{ auth()->user()->name }}
    </x-slot:name>
    <x-slot:page>
        <div>
            <span class="text-2xl text-white font-sans font-semibold">Dashboard Statistik Armada</span>
        </div>
    </x-slot:page>

    <div class="container mx-auto mt-10">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded shadow text-center">
                <div class="text-4xl font-bold text-blue-600">{{ $truckCount }}</div>
                <div class="mt-2 text-gray-700">Total Truk</div>
            </div>
            <div class="bg-white p-6 rounded shadow text-center">
                <div class="text-4xl font-bold text-green-600">{{ $driverCount }}</div>
                <div class="mt-2 text-gray-700">Total Pengemudi</div>
            </div>
            <div class="bg-white p-6 rounded shadow text-center">
                <div class="text-4xl font-bold text-yellow-600">{{ $shipmentCount }}</div>
                <div class="mt-2 text-gray-700">Total Pengiriman</div>
            </div>
            <div class="bg-white p-6 rounded shadow text-center">
                <div class="text-4xl font-bold text-purple-600">{{ $inspectionCount }}</div>
                <div class="mt-2 text-gray-700">Total Inspeksi</div>
            </div>
            <div class="bg-white p-6 rounded shadow text-center">
                <div class="text-4xl font-bold text-red-600">{{ $reportCount }}</div>
                <div class="mt-2 text-gray-700">Total Laporan Kendala</div>
            </div>
        </div>
    </div>
</x-layout>