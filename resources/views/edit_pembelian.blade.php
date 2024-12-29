<x-Layot>
    <x-slot:title>{{ $title }}</x-slot:title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    
    <form action="/pembelian/{{ $edit_pembelian->NOTRANSAKSI }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="space-y-2">
          <div class="border-b border-gray-900/10 pb-12">
            <div>
                <h3 class="mt-5 text-base/7 font-semibold text-gray-900">No Transaksi</h3>  
                <p class="mt-1 text-sm text-gray-600">{{ $edit_pembelian->NOTRANSAKSI }}</p>
            </div>
            
            <h3 class="mt-5 text-base/7 font-semibold text-gray-900">Tanggal Pembelian</h3> 
            <p class="mt-1 text-sm/6 text-gray-600">{{$edit_pembelian->TGLBELI }}</p>  
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
              <div class="sm:col-span-1 sm:col-start-1">
                <label for="Kode Suplier" class="block text-sm/6 font-medium text-gray-900">Kode Suplier</label>
                <div class="mt-2">
                  <p class="mt-1 text-sm/6 text-gray-600">{{ $edit_pembelian->KODESPL }}</p>
                 </div>
              </div>
      
              <div class="sm:col-span-2 sm:col-start-2">
                <label for="Nama Suplier" class="block text-sm/6 font-medium text-gray-900">Nama Suplier</label>
                <div class="mt-2">
                  <input type="text" name="NAMASPL" id="NAMASPL" value="{{ $edit_pembelian->NAMASPL }}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                </div>
              </div>
      
              <div class="sm:col-span-1 sm:col-start-1">
                <label for="Kode Barang" class="block text-sm/6 font-medium text-gray-900">Kode Barang</label>
                <div class="mt-2">
                  <input id="KODEBRG" name="KODEBRG" value="{{ $edit_pembelian->KODEBRG }}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                </div>
              </div>

              <div class="sm:col-span-2 sm:col-start-2">
                <label for="Nama Barang" class="block text-sm/6 font-medium text-gray-900">Nama Barang</label>
                <div class="mt-2">
                  <input id="NAMABRG" name="NAMABRG" value="{{ $edit_pembelian->NAMABRG }}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                </div>
              </div>

              <div class="sm:col-span-4 sm:col-start-4">
                <label for="satuan" class="block text-sm/6 font-medium text-gray-900">Satuan</label>
                <div class="mt-2">
                  <select id="SATUAN" name="SATUAN" autocomplete="SATUAN" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm/6">
                    <option value="PCS" {{ $edit_pembelian->SATUAN == 'PCS' ? 'selected' : '' }}>PCS</option>
                    <option value="KG" {{ $edit_pembelian->SATUAN == 'KG' ? 'selected' : '' }}>KG</option>
                    <option value="L" {{ $edit_pembelian->SATUAN == 'L' ? 'selected' : '' }}>L</option>
                    <option value="M" {{ $edit_pembelian->SATUAN == 'M' ? 'selected' : '' }}>M</option>
                    <option value="BOX" {{ $edit_pembelian->SATUAN == 'BOX' ? 'selected' : '' }}>BOX</option>
                    <option value="PACK" {{ $edit_pembelian->SATUAN == 'PACK' ? 'selected' : '' }}>PACK</option>
                    <option value="DOZ" {{ $edit_pembelian->SATUAN == 'DOZ' ? 'selected' : '' }}>DOZ</option>
                    <option value="SET" {{ $edit_pembelian->SATUAN == 'SET' ? 'selected' : '' }}>SET</option>
                  </select>
                </div>
              </div>

              <div class="sm:col-span-1 sm:col-start-1">
                <label for="Jumlah Barang" class="block text-sm/6 font-medium text-gray-900">Jumlah Barang</label>
                <div class="mt-2">
                  <input id="QTY" name="QTY" value="{{ $edit_pembelian->QTY }}"class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                </div>
              </div>

              <div class="sm:col-span-2 sm:col-start-2">
                <label for="Diskon" class="block text-sm/6 font-medium text-gray-900">Diskon</label>
                <div class="mt-2">
                  <input id="DISKON" name="DISKON" value="{{ $edit_pembelian->DISKON }}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                </div>
              </div>

              <div class="sm:col-span-4 sm:col-start-4">
                <label for="Total Harga" class="block text-sm/6 font-medium text-gray-900">Total Harga</label>
                <div class="mt-2">
                  <input id="TOTALRP" name="TOTALRP" type="number" step="1" value="{{ $edit_pembelian->TOTALRP }}"class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">

                </div>
              </div>
            </div>
          </div>
        </div>
      
        <div class="mt-6 flex items-center justify-end gap-x-6">
          <button class="btn btn-danger gap-x-1.5 rounded-md bg-blue-400 px-3 py-2 text-sm font-semibold text-white shadow-sm ring-1 ring-inset ring-blue-800 hover:bg-blue-700" onclick="window.location.href='/daftar_pembelian'" >Cancel</button>
          <button class="btn btn-danger gap-x-1.5 rounded-md bg-blue-400 px-3 py-2 text-sm font-semibold text-white shadow-sm ring-1 ring-inset ring-blue-800 hover:bg-blue-700"">Save</button>
        </div>
      </form>
</x-Layot>