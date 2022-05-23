
{{-- <div id="navbar" class="bg-green-ua absolute top-0 left-0 w-full flex items-center z-10">
  <div class="container lg:px-4">
    <div class="flex items-center justify-start relative py-2 lg:py-0">
      <div class="px-4">
        <div class="pl-4 md:pl-0 w-28">
          <a href="#" class=""><img src="{{ url('/image/Logo_Urban-2.png') }}" alt="Urban Athletes" class="h-10"></a>
        </div>
      </div>
      <div class="flex justify-end lg:justify-between mx-4 items-center w-full">
        <div class="flex items-center px-4 lg:px-0">
          <button id="hamburger" name="hamburger" type="button" class="block right-4 lg:hidden">
            <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
            <span class="hamburger-line transition duration-300 ease-in-out"></span>
            <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
          </button>
          <div id="nav-menu" class="text-[#598700] hidden absolute py-2 bg-white lg:text-white text-shadow-xl bg-opacity-80 lg:gb-opacity-100 shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
            <ul class="block lg:flex ">
              <li class="group"><a href="{{ url('/dev') }}" class="text-base py-2 mx-8 lg:mx-4 flex group-hover:text-yellow-500">Invoice 99K</a></li>
              <li class="group"><a href="{{ url('/dev') }}" class="text-base py-2 mx-8 lg:mx-4 flex group-hover:text-yellow-500">Sixpack 3</a></li>
              
              <li class="group">
      
                <div class="text-base py-2 mx-8 lg:mx-4 flex group-hover:text-yellow-500">
                    <a class="" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
      
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
              </li>
              
            </ul>
          </div>
        </div>
        <div class="hidden md:flex flex-col items-center hover:scale-110 lg:mt-0">
          <a href="#" class="px-4 py-2 rounded-md bg-yellow-400 hover:bg-yellow-500">Kemitraan</a>
        </div>
      </div>
    </div>
  </div>
</div> --}}

<nav id="navbar" class="bg-gray-900 w-full flex items-center">
  {{-- <div class="container lg:px-4">
    <div class="flex items-center justify-start relative py-2 lg:py-0">
      <div class="px-4">
        <div class="pl-4 md:pl-0 w-28">
          <a href="#" class=""><img src="{{ url('/image/Logo_Urban-2.png') }}" alt="Urban Athletes" class="h-10"></a>
        </div>
      </div>
      <div class="flex justify-end lg:justify-between mx-4 items-center w-full">
        <div class="flex items-center px-4 lg:px-0">
          <button id="hamburger" name="hamburger" type="button" class="block right-4 lg:hidden">
            <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
            <span class="hamburger-line transition duration-300 ease-in-out"></span>
            <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
          </button>
          <div id="nav-menu" class="text-[#598700] transition duration-300 scale-y-0 lg:scale-100 absolute py-2 bg-white lg:text-white text-shadow-xl bg-opacity-80 lg:gb-opacity-100 shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
            <ul class="block lg:flex ">
              <li class="group"><a href="{{ url('/admin') }}" class="text-base py-2 mx-8 lg:mx-4 flex group-hover:text-yellow-500">Invoice 99K</a></li>
              <li class="group"><a href="{{ url('/admin') }}" class="text-base py-2 mx-8 lg:mx-4 flex group-hover:text-yellow-500">Sixpack 3</a></li>
              <li class="group"><a href="{{ url('/admin/product') }}" class="text-base py-2 mx-8 lg:mx-4 flex group-hover:text-yellow-500">Products</a></li>
              
            </ul>
          </div>
        </div>
        <div class="hidden md:flex flex-col items-center hover:scale-110 lg:mt-0">
          <div class="text-base py-2 mx-8 lg:mx-4 flex group-hover:text-yellow-500">
              <a class="" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
          </div>
        </div>
      </div>
    </div>
  </div> --}}
  <div class="flex justify-between items-center w-full">
    <div x-data class="antialiased flex">
      <!-- Mobile Menu Toggle -->
      <button @click="$store.sidebar.navOpen = !$store.sidebar.navOpen"
        class="sm:hidden focus:outline-none z-10">
        <!-- Menu Icons -->
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white text-shadow-xl shadow-2xl shadow-black ml-4" x-bind:class="$store.sidebar.navOpen ? 'hidden':''"
            fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
        </svg>
      </button>
      <div class="pl-4 md:pl-0 w-28 py-2 min-h-[60px]">
        <a href="#" class=""><img src="{{ url('/image/Logo_Urban-2.png') }}" alt="Urban Athletes" class="h-10 sm:hidden"></a>
      </div>
    </div>
    <div class="flex justify-end items-center pr-6">
      <button id="btn-dropdown" class="relative text-shadow-xl py-2 mx-4 lg:mx-4 flex jutify-center items-center focus:outline-none hover:text-yellow-500 group z-20 px-4 lg:px-0 text-white font-medium">
        Admin
        <div id="dropdown-menu" class="absolute top-10 left-0 m-0 p-0 overflow-hidden transition ease-in-out duration-500 bg-white shadow-md rounded max-h-0">
          <ul class="text-black">
            <li class="px-4 py-1 hover:text-yellow-500 border-b">
              <a class="" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                LogOut
              </a>
            </li>
              
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
              @csrf
            </form>
          </ul>
        </div>
      </button>
      <img class="h-12 rounded-full mx-4" src="{{ asset('storage/default-img.png') }}" alt="Image Profile">
    </div>
  </div>

</nav>