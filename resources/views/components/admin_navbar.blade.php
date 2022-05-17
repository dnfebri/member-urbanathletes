
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

<nav id="navbar" class="bg-green-ua absolute top-0 left-0 w-full flex items-center z-10">
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
          <div id="nav-menu" class="text-[#598700] transition duration-300 scale-y-0 lg:scale-100 absolute py-2 bg-white lg:text-white text-shadow-xl bg-opacity-80 lg:gb-opacity-100 shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
            <ul class="block lg:flex ">
              <li class="group"><a href="{{ url('/admin') }}" class="text-base py-2 mx-8 lg:mx-4 flex group-hover:text-yellow-500">Invoice 99K</a></li>
              <li class="group"><a href="{{ url('/admin') }}" class="text-base py-2 mx-8 lg:mx-4 flex group-hover:text-yellow-500">Sixpack 3</a></li>
              <li class="group"><a href="{{ url('/admin/product') }}" class="text-base py-2 mx-8 lg:mx-4 flex group-hover:text-yellow-500">Products</a></li>
              
              {{-- <li class="group">
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
              </li> --}}
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
          {{-- <a href="#" class="px-4 py-2 rounded-md bg-yellow-400 hover:bg-yellow-500">Kemitraan</a> --}}
        </div>
      </div>
    </div>
  </div>

</nav>