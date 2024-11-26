<x-layot>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="container mx-auto px-4 py-4">
        <div class="card-header">
            <button class="btn btn-danger gap-x-1.5 rounded-md bg-blue-400 px-3 py-2 text-sm font-semibold text-white shadow-sm ring-1 ring-inset ring-blue-800 hover:bg-blue-700 add-pembelian" onclick="window.location.href='/add_pembelian'">Tambah Pembelian</button>
        </div>
    </div>
    <div class="container mx-auto px-4">
        <div class="card">
            <div class="card-header">
                Data Pembelian
            </div>
            
            <div class="card-body">
                <table>
                    <thead>
                        <tr>
                            <th class="border border-gray-300 px-4 py-2 font-medium text-gray-900">No Transaksi</th>
                            <th class="border border-gray-300 px-4 py-2 font-medium text-gray-900">Tanggal Beli</th>
                            <th class="border border-gray-300 px-4 py-2 font-medium text-gray-900">Nama suplier</th>
                            <th class="border border-gray-300 px-4 py-2 font-medium text-gray-900">Kode Barang</th>
                            <th class="border border-gray-300 px-4 py-2 font-medium text-gray-900">Jumlah Barang</th>
                            <th class="border border-gray-300 px-4 py-2 font-medium text-gray-900">Diskon</th>
                            <th class="border border-gray-300 px-4 py-2 font-medium text-gray-900">Total Harga</th>
                            <th class="border border-gray-300 px-4 py-2 font-medium text-gray-900"></th>
                            <th class="border border-gray-300 px-4 py-2 font-medium text-gray-900"></th>
                        </tr>
                    </thead>

                    @foreach ( $data_pembelian as $dtbeli)
                    <tbody class="divide-y divide-gray-200">
                        <tr>
                            <td class="border border-gray-300 px-4 py-2 font-medium text-gray-500">{{$dtbeli->NOTRANSAKSI}}</td>
                            <td class="border border-gray-300 px-4 py-2 font-medium text-gray-500">{{ $dtbeli->TGLBELI}}</td>
                            <td class="border border-gray-300 px-4 py-2 font-medium text-gray-500">{{ $dtbeli->NAMASPL}}</td>
                            <td class="border border-gray-300 px-4 py-2 font-medium text-gray-500">{{ $dtbeli->KODEBRG}}</td>
                            <td class="border border-gray-300 px-4 py-2 font-medium text-gray-500">{{ $dtbeli->QTY}}</td>
                            <td class="border border-gray-300 px-4 py-2 font-medium text-gray-500">{{ $dtbeli->DISKON}}</td>
                            <td class="border border-gray-300 px-4 py-2 font-medium text-gray-500">Rp {{ number_format((float)$dtbeli->TOTALRP,0, ',', '.')}}</td>
                            <td class="border border-gray-300 px-4 py-2 font-medium text-gray-500">
                                <div class="d-flex justify-content-between mb-3">
                                    <button class="btn btn-danger gap-x-1.5 rounded-md bg-gray-400 px-3 py-2 text-sm font-semibold text-white shadow-sm ring-1 ring-inset ring-gray-800 hover:bg-gray-700" onclick="window.location.href='#'">Edit</button>
                                </div>
                            </td>
                            <td class="border border-gray-300 px-4 py-2 font-medium text-gray-500">
                                <div class="d-flex justify-content-between mb-3">
                                    <button class="btn btn-danger gap-x-1.5 rounded-md bg-gray-400 px-3 py-2 text-sm font-semibold text-white shadow-sm ring-1 ring-inset ring-gray-800 hover:bg-gray-700" onclick="window.location.href='#'">Delete</button>
                                </div>
                            </td>
                        </tr>    
                    </tbody>
            @endforeach


                </table>
            </div>        
        </div>
    </div>
    
</x-layot>