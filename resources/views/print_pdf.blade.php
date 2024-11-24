<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .border { border: 1px solid gray; }
        .border-collapse { border-collapse: collapse; }
        .px-4 { padding-left: 1rem; padding-right: 1rem; }
        .py-2 { padding-top: 0.5rem; padding-bottom: 0.5rem; }
        .bg-gray-100 { background-color: #f7fafc; }
        .text-gray-900 { color: #1a202c; }
        .text-gray-500 { color: #6b7280; }
      </style>
</head>
<body>
    
        <h1>Daftar Stock</h1>
        
    <table class="min-w-full border-collapse border-gray-300 text-left text-sm">
        <thead class="bg-gray-100">
        <tr>
            <th class="border border-gray-300 px-4 py-2 font-medium text-gray-900">No</th>
            <th class="border border-gray-300 px-4 py-2 font-medium text-gray-900">Nama Barang</th>
            <th class="border border-gray-300 px-4 py-2 font-medium text-gray-900">QTY</th>
            
        </tr>
        </thead>
        @foreach ( $prtstock as $stc)
            <tbody class="divide-y divide-gray-200">
            <tr>
                <td class="border border-gray-300 px-4 py-2 font-medium text-gray-500"></td>
                <td class="border border-gray-300 px-4 py-2 font-medium text-gray-500">{{$stc->NAMABRG}}</td>
                <td class="border border-gray-300 px-4 py-2 font-medium text-gray-500">{{ $stc->QTY  }}</td>
                
            </tr>    
            </tbody>
        @endforeach
            

    </table>


</body>
</html>
