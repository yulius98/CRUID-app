<nav class="bg-gradient-to-r from-gray-300 via-gray-400 to-gray-500 shadow-lg fixed w-full top-0 z-10" x-data="{ isOpen: false }">
	<div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
		<div class="flex h-16 items-center justify-between">
		  <div class="flex items-center">
			<div class="flex-shrink-0">
				<img class="h-12 w-12" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
			</div>
			<div class="ml-3 text-gray-300 font-bold text-lg"></div> <!-- Added text here -->
			<div class="hidden md:block">
				<div class="ml-10 flex items-baseline space-x-4">
					<!-- Links -->
					<a href="/" class="{{ request()->is('/') ? 'bg-white-800 text-white' : 'text-white hover:bg-gray-600 hover:text-white' }} px-3 py-2 rounded-md text-sm font-medium transition duration-200 ease-in-out">BARANG</a>
					<a href="/daftar_pembelian" class="{{ request()->is('/daftar_pembelian') ? 'bg-white-800 text-white' : 'text-white hover:bg-gray-600 hover:text-white' }} px-3 py-2 rounded-md text-sm font-medium transition duration-200 ease-in-out">PEMBELIAN</a>
					<a href="/daftar_suplier" class="{{ request()->is('/daftar_suplier') ? 'bg-white-800 text-white' : 'text-white hover:bg-gray-600 hover:text-white' }} px-3 py-2 rounded-md text-sm font-medium transition duration-200 ease-in-out">SUPLIER</a>
					<a href="/daftar_stock" class="{{ request()->is('/daftar_stock') ? 'bg-white-800 text-white' : 'text-white hover:bg-gray-600 hover:text-white' }} px-3 py-2 rounded-md text-sm font-medium transition duration-200 ease-in-out">STOCK</a>
					
				</div>
			</div>
		</div>
			  
		<div class="-mr-2 flex md:hidden">
			<!-- Mobile menu button -->
			<button type="button" @click="isOpen = !isOpen" class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
				<span class="sr-only">Open main menu</span>
				<svg :class="{'hidden': isOpen, 'block': !isOpen }" class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
					<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
				</svg>
				<svg :class="{'hidden': !isOpen, 'block': isOpen }" class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
					<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
				</svg>
			</button>
		
		</div>
	</div>
  
	<!-- Mobile menu -->
	<div x-show="isOpen" class="md:hidden">
		<div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
			<a href="/" class="{{ request()->is('/') ? 'bg-white-800 text-white' : 'text-white hover:bg-gray-600 hover:text-white' }} px-3 py-2 rounded-md text-sm font-medium transition duration-200 ease-in-out">BARANG</a>
			<a href="/daftar_pembelian" class="{{ request()->is('/daftar_pembelian') ? 'bg-white-800 text-white' : 'text-white hover:bg-gray-600 hover:text-white' }} px-3 py-2 rounded-md text-sm font-medium transition duration-200 ease-in-out">PEMBELIAN</a>
			<a href="/daftar_suplier" class="{{ request()->is('/daftar_suplier') ? 'bg-white-800 text-white' : 'text-white hover:bg-gray-600 hover:text-white' }} px-3 py-2 rounded-md text-sm font-medium transition duration-200 ease-in-out">SUPLIER</a>
			<a href="/daftar_stock" class="{{ request()->is('/daftar_stock') ? 'bg-white-800 text-white' : 'text-white hover:bg-gray-600 hover:text-white' }} px-3 py-2 rounded-md text-sm font-medium transition duration-200 ease-in-out">STOCK</a>
									
		</div>
	</div>
  </nav>
  