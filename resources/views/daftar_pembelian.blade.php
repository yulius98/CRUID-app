<x-layot>
    <x-slot:title>{{ $title }}</x-slot:title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <div class="container mx-auto px-4 py-8">
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
                            <td class="border border-gray-300 px-4 py-2 font-medium text-gray-500">{{ $dtbeli->TOTALRP}}</td>    
                        </tr>    
                    </tbody>
            @endforeach


                </table>
            </div>        
        </div>
        
        
    </div>
</x-layot>