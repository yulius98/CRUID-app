<x-layot>
    <x-slot:title>{{ $title }}</x-slot:title>
    
    <div class="overflow-x-auto">
        <table class="min-w-full border-collapse border-gray-300 text-left text-sm">
            <thead class="bg-gray-100">
            <tr>
                <th class="border border-gray-300 px-4 py-2 font-medium text-gray-900">ID</th>
                <th class="border border-gray-300 px-4 py-2 font-medium text-gray-900">Kode Barang</th>
                <th class="border border-gray-300 px-4 py-2 font-medium text-gray-900">Nama Barang</th>
                <th class="border border-gray-300 px-4 py-2 font-medium text-gray-900">Satuan</th>
                <th class="border border-gray-300 px-4 py-2 font-medium text-gray-900">Harga Beli</th>
            </tr>
            </thead>
            @foreach ( $barang as $brg)
                <tbody class="divide-y divide-gray-200">
                <tr>
                    <td class="border border-gray-300 px-4 py-2 font-medium text-gray-500">{{$brg->id}}</td>
                    <td class="border border-gray-300 px-4 py-2 font-medium text-gray-500">{{ $brg->KODEBRG  }}</td>
                    <td class="border border-gray-300 px-4 py-2 font-medium text-gray-500">{{ $brg->NAMABRG }}</td>
                    <td class="border border-gray-300 px-4 py-2 font-medium text-gray-500">{{ $brg->SATUAN  }}</td>
                    <td class="border border-gray-300 px-4 py-2 font-medium text-gray-500">{{ $brg->HARGABELI }}</td>

                </tr>    
                </tbody>
            @endforeach
                

        </table>
    </div>    
    <div style="margin-top: 60px">
        <nav class="flex justify-center items-center">
            <ul class="flex space-x-4">
                <!-- Prev Button -->
                @if ($barang->onFirstPage())
                    <li class="disabled">
                        <span class="px-3 py-1 text-gray-500 cursor-not-allowed">&laquo; Prev</span>
                    </li>
                @else
                    <li>
                        <a href="{{ $barang->previousPageUrl() }}" 
                           class="px-3 py-1 text-gray-700 hover:text-gray-900 transition duration-300 ease-in-out">
                            &laquo; Prev
                        </a>
                    </li>
                @endif
                @php
                    $currentPage = $barang->currentPage();
                    $lastPage = $barang->lastPage();
                    $start = max(1, $currentPage - 1);
                    $end = min($lastPage, $currentPage + 1);
                @endphp    
                <!-- Page Numbers -->
                @foreach (range($start, $end) as $page)
                    <li>
                        <a href="{{ $barang->url($page) }}" 
                           class="px-3 py-1 rounded-full {{ $page == $barang->currentPage() ? 'bg-gray-600 text-white' : 'text-gray-700 hover:bg-gray-100' }} transition duration-200 ease-in-out">
                            {{ $page }}
                        </a>
                    </li>
                @endforeach
    
                <!-- Next Button -->
                @if ($barang->hasMorePages())
                    <li>
                        <a href="{{ $barang->nextPageUrl() }}" 
                           class="px-3 py-1 text-gray-700 hover:text-gray-900 transition duration-300 ease-in-out">
                            Next &raquo;
                        </a>
                    </li>
                @else
                    <li class="disabled">
                        <span class="px-3 py-1 text-gray-500 cursor-not-allowed">Next &raquo;</span>
                    </li>
                @endif
            </ul>
        </nav>
    </div>
        
    
</x-layot>