<x-layot>
    <x-slot:title>{{ $title }}</x-slot:title>
    
    <div class="overflow-x-auto">
        <table class="min-w-full border-collapse border-gray-300 text-left text-sm">
            <thead class="bg-gray-100">
            <tr>
                
                <th class="border border-gray-300 px-4 py-2 font-medium text-gray-900">Nama Barang</th>
                <th class="border border-gray-300 px-4 py-2 font-medium text-gray-900">QTY</th>
                
            </tr>
            </thead>
            @foreach ( $prtstock as $stc)
                <tbody class="divide-y divide-gray-200">
                <tr>
                    <td class="border border-gray-300 px-4 py-2 font-medium text-gray-500">{{$stc->NAMABRG}}</td>
                    <td class="border border-gray-300 px-4 py-2 font-medium text-gray-500">{{ $stc->QTY  }}</td>
                    
                </tr>    
                </tbody>
            @endforeach
                

        </table>
    </div>    
    
        
    
</x-layot>