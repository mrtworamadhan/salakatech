<header class="bg-white shadow sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex items-center justify-between">
        <a href="{{ route('home') }}" class="flex items-center space-x-2">
            <img src="{{ asset('img/logo.png') }}" alt="SalakaTech Logo" class="w-10 h-10 object-contain">
            <span class="font-bold text-lg text-gray-800">SalakaTech</span>
        </a>

        <button id="burger" class="md:hidden focus:outline-none">
            <i data-feather="menu" class="w-6 h-6 text-gray-800"></i>
        </button>

        <nav id="menu" class="hidden md:flex flex-col md:flex-row md:items-center md:space-x-6 absolute md:static bg-white top-16 left-0 w-full md:w-auto md:bg-transparent shadow-lg md:shadow-none px-6 py-4 md:p-0">
            <a href="/#produk" class="block py-2 text-sm font-medium text-gray-600 hover:text-blue-600">Produk</a>
            <a href="/#harga" class="block py-2 text-sm font-medium text-gray-600 hover:text-blue-600">Harga</a>
            <a href="/#kontak" class="block py-2 text-sm font-medium text-gray-600 hover:text-blue-600">Kontak</a>

            <div class="md:ml-4 flex flex-col md:flex-row items-center gap-2 mt-4 md:mt-0">
                @guest
                    <a href="{{ route('login') }}" class="w-full md:w-auto text-center text-sm font-medium text-gray-600 hover:text-blue-600 px-4 py-2 rounded-md">
                        Login
                    </a>
                    <a href="{{ route('register') }}" class="w-full md:w-auto text-center text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded-md">
                        Register
                    </a>
                @endguest
                @auth
                    <a href="{{ route('dashboard') }}" class="w-full md:w-auto text-center text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded-md">
                        My Dashboard
                    </a>
                    <form method="POST" action="{{ route('logout') }}" class="w-full md:w-auto">
                        @csrf
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" class="block text-center text-sm font-medium text-gray-500 hover:text-red-600 px-4 py-2 rounded-md">
                            Logout
                        </a>
                    </form>
                @endauth
            </div>
        </nav>
    </div>
</header>