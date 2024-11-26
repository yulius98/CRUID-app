<x-layot>
    <x-slot:title>{{ $title }}</x-slot:title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <form>
        <div class="space-y-12">
          <div class="border-b border-gray-900/10 pb-12">
            <!-- <h2 class="text-base/7 font-semibold text-gray-900">No Transaksi</h2>
            <p class="mt-1 text-sm/6 text-gray-600">Bxxxx</p> -->
            <div class="container">
                <h2 class="text-base/7 font-semibold text-gray-900">No Transaksi</h2> 
                <p class="mt-1 text-sm/6 text-gray-600" id="nomorTransaksi">Bxxxx</p> 
            </div> 
            <script> 
                let urut = 1; 
                function generateNomorTransaksi() { 
                    const date = new Date(); 
                    const tahun = date.getFullYear(); 
                    const bulan = ('0' + (date.getMonth() + 1)).slice(-2); 
                    const nomorUrut = ('000' + urut).slice(-3); 
                    const nomorTransaksi = `B${tahun}${bulan}${nomorUrut}`; 
                    document.getElementById('nomorTransaksi').innerText = nomorTransaksi; urut++; 
                } 
                document.addEventListener('DOMContentLoaded', (event) => { generateNomorTransaksi(); }); 
            </script>
            <h3 class="text-base/7 font-semibold text-gray-900">Tanggal Pembelian</h3>
            <p class="mt-1 text-sm/6 text-gray-600">{{ \Illuminate\Support\Facades\Date::now()->format('d/m/Y') }}</p>
          
          
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
              <div class="sm:col-span-1 sm:col-start-1">
                <label for="first-name" class="block text-sm/6 font-medium text-gray-900">Kode Suplier</label>
                <div class="mt-2">
                  <input type="text" name="kode-psl" id="kode-spl" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                </div>
              </div>
      
              <div class="sm:col-span-2 sm:col-start-2">
                <label for="last-name" class="block text-sm/6 font-medium text-gray-900">Nama Suplier</label>
                <div class="mt-2">
                  <input type="text" name="nama-spl" id="nama-spl" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                </div>
              </div>
      
              <div class="sm:col-span-1 sm:col-start-1">
                <label for="email" class="block text-sm/6 font-medium text-gray-900">Kode Barang</label>
                <div class="mt-2">
                  <input id="kode-brg" name="kode-brg" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                </div>
              </div>

              <div class="sm:col-span-2 sm:col-start-2">
                <label for="email" class="block text-sm/6 font-medium text-gray-900">Nama Barang</label>
                <div class="mt-2">
                  <input id="nama-brg" name="nama-brg" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                </div>
              </div>

              <!-- <div class="sm:col-span-4 sm:col-start-4">
                <label for="email" class="block text-sm/6 font-medium text-gray-900">Satuan</label>
                <div class="mt-2">
                  <input id="satuan" name="satuan" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                </div>
              </div> -->
      
              <div class="sm:col-span-4 sm:col-start-4">
                <label for="satuan" class="block text-sm/6 font-medium text-gray-900">Satuan</label>
                <div class="mt-2">
                  <select id="kode-satuan" name="kode-satuan" autocomplete="country-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm/6">
                    <option>PCS</option>
                    <option>KG</option>
                    <option>L</option>
                    <option>M</option>
                    <option>BOX</option>
                    <option>PACK</option>
                    <option>DOZ</option>
                    <option>SET</option>
                  </select>
                </div>
              </div>

              <div class="sm:col-span-1 sm:col-start-1">
                <label for="email" class="block text-sm/6 font-medium text-gray-900">Jumlah Barang</label>
                <div class="mt-2">
                  <input id="jumlah-brg" name="jumlah-brg" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                </div>
              </div>

              <div class="sm:col-span-2 sm:col-start-2">
                <label for="email" class="block text-sm/6 font-medium text-gray-900">Diskon</label>
                <div class="mt-2">
                  <input id="diskon" name="diskon" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                </div>
              </div>

              <div class="sm:col-span-4 sm:col-start-4">
                <label for="email" class="block text-sm/6 font-medium text-gray-900">Total Harga</label>
                <div class="mt-2">
                  <input id="total-harga" name="total-harga" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                </div>
              </div>
            </div>
          </div>
        </div>
      
        <div class="mt-6 flex items-center justify-end gap-x-6">
          <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
          <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
        </div>
      </form>
</x-layot>