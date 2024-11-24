<x-layot>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="tab-pane fade" id="stock">
        <div class="d-flex justify-content-between mb-3">
            <button class="btn btn-danger gap-x-1.5 rounded-md bg-gray-400 px-3 py-2 text-sm font-semibold text-white shadow-sm ring-1 ring-inset ring-gray-800 hover:bg-gray-700" onclick="window.location.href='export-pdf'">Cetak PDF</button>
            <button class="btn btn-danger gap-x-1.5 rounded-md bg-gray-400 px-3 py-2 text-sm font-semibold text-white shadow-sm ring-1 ring-inset ring-gray-800 hover:bg-gray-700" onclick="window.location.href='export-excel'">Cetak Excel</button>
        </div>
    </div>
    <div class="overflow-x-auto">
        <table class="min-w-full border-collapse border-gray-300 text-left text-sm">
            <thead class="bg-gray-100">
            <tr>
                <th class="border border-gray-300 px-4 py-2 font-medium text-gray-900">Kode Barang</th>
                <th class="border border-gray-300 px-4 py-2 font-medium text-gray-900">Nama Barang</th>
                <th class="border border-gray-300 px-4 py-2 font-medium text-gray-900">Quantity</th>
                
            </tr>
            </thead>
            @foreach ( $stock as $stk)
            <tbody class="divide-y divide-gray-200">
                <tr>
                    <td class="border border-gray-300 px-4 py-2 font-medium text-gray-500">{{$stk->KODEBRG}}</td>
                    <td class="border border-gray-300 px-4 py-2 font-medium text-gray-500">{{$stk->NAMABRG}}</td>
                    <td class="border border-gray-300 px-4 py-2 font-medium text-gray-500">{{ $stk->QTY}}</td>
                </tr>   
            </tbody> 
            @endforeach
                

        </table>
    </div>    
    <div style="margin-top: 60px">
        <nav class="flex justify-center items-center">
            <ul class="flex space-x-4">
                <!-- Prev Button -->
                @if ($stock->onFirstPage())
                    <li class="disabled">
                        <span class="px-3 py-1 text-gray-500 cursor-not-allowed">&laquo; Prev</span>
                    </li>
                @else
                    <li>
                        <a href="{{ $$stock->previousPageUrl() }}" 
                           class="px-3 py-1 text-gray-700 hover:text-gray-900 transition duration-300 ease-in-out">
                            &laquo; Prev
                        </a>
                    </li>
                @endif
                @php
                    $currentPage = $stock->currentPage();
                    $lastPage = $stock->lastPage();
                    $start = max(1, $currentPage - 1);
                    $end = min($lastPage, $currentPage + 1);
                @endphp    
                <!-- Page Numbers -->
                @foreach (range($start, $end) as $page)
                    <li>
                        <a href="{{ $stock->url($page) }}" 
                           class="px-3 py-1 rounded-full {{ $page == $stock->currentPage() ? 'bg-gray-600 text-white' : 'text-gray-700 hover:bg-gray-100' }} transition duration-200 ease-in-out">
                            {{ $page }}
                        </a>
                    </li>
                @endforeach
    
                <!-- Next Button -->
                @if ($stock->hasMorePages())
                    <li>
                        <a href="{{ $stock->nextPageUrl() }}" 
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