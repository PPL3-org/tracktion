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
            <span class="text-2xl text-white font-sans font-semibold">Data Pengiriman</span>
        </div>

        <div class="flex justify-around gap-3.5">
            <x-button text="Sort By" 
            :iconPaths="['M3 7H21', 'M6 12H18', 'M10 17H14']"/>

            <x-button text="Filter"
            :iconPaths="['M22 3.58002H2C1.99912 5.28492 2.43416 6.96173 3.26376 8.45117C4.09337 9.94062 5.29 11.1932 6.73999 12.09C7.44033 12.5379 8.01525 13.1565 8.41062 13.8877C8.80598 14.6189 9.00879 15.4388 9 16.27V21.54L15 20.54V16.25C14.9912 15.4188 15.194 14.599 15.5894 13.8677C15.9847 13.1365 16.5597 12.5178 17.26 12.07C18.7071 11.175 19.9019 9.92554 20.7314 8.43988C21.5608 6.95422 21.9975 5.28153 22 3.58002Z']"/>
            
            <x-button color="green" text="Cetak .xlsx"/>
        </div>
    </x-slot:page>
    <x-table 
    :heads="['Nomor Plat', 'Waktu Keberangkatan', 'Muatan', 'Nomor Surat Jalan (pergi)', 'Nomor Surat Jalan (pulang)', 'klien', 'status']"
    :widths="['w-32', 'w-40', 'w-28', 'w-48', 'w-52', 'w-32', 'w-24']">
        @foreach ($shipments as $shipment)
            <tr class="text-[#212121] bg-white text-xs font-sans hover:bg-gray-300 text-center">
                <x-table-data href="shipments/{{ $shipment['id'] }}">{{ $loop->iteration }}</x-table-data>
                <x-table-data href="shipments/{{ $shipment['id'] }}">{{ $shipment->truck->plate_number }}</x-table-data>
                <x-table-data href="shipments/{{ $shipment['id'] }}">{{ $shipment->formatted_date }}</x-table-data>
                <x-table-data href="shipments/{{ $shipment['id'] }}">{{ $shipment->load_type }}</x-table-data>
                <x-table-data href="shipments/{{ $shipment['id'] }}">{{ $shipment->departure_waybill_number }}</x-table-data>
                <x-table-data href="shipments/{{ $shipment['id'] }}">{{ $shipment->return_waybill_number }}</x-table-data>
                <x-table-data href="shipments/{{ $shipment['id'] }}">{{ $shipment->client }}</x-table-data>
                <x-table-data href="shipments/{{ $shipment['id'] }}">
                    <span class="px-2 py-1 rounded-xl
                        @php
                            $status = $shipment->status;
                            echo $status === 'dalam pengiriman' ? 'bg-[#FEF4EA] text-[#F08927]' : 'bg-[#E7EFED] text-[#065F46]'
                        @endphp">
                        {{ $status === 'dalam pengiriman' ? 'Perjalanan' : 'Selesai'}}
                    </span>
                </x-table-data>
            </tr>
            @endforeach    
    </x-table>
    <div class="my-4 px-4">
        {{ $shipments->links() }}
    </div>    
</x-layout>