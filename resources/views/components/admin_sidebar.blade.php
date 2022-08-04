<div x-data class="antialiased flex justify-start">

  <div class="min-h-screen bg-gray-900 transition-all duration-300 space-y-2 fixed sm:relative"
    x-bind:class="{'w-64':$store.sidebar.full, 'w-64 sm:w-20':!$store.sidebar.full,'top-0 left-0':$store.sidebar.navOpen,'top-0 -left-64 sm:left-0':!$store.sidebar.navOpen}">

    <!-- Close Menu -->
    <button @click="$store.sidebar.navOpen = !$store.sidebar.navOpen" class="sm:hidden absolute top-5 right-5 focus:outline-none z-10">
      <svg id="close-sidebar" onmouseover="close_Sidebar" x-cloak xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white"
        x-bind:class="$store.sidebar.navOpen ? '':'hidden'" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
      </svg>
    </button>

    <div class="text-white font-black pt-1 m-0"
      x-bind:class="$store.sidebar.full ? 'text-xl px-4 justify-center flex' : 'text-xl px-0 mt-0 xm:px-2'">
      <img src="{{ url('/image/Logo_Urban-2.png') }}" alt="Urban Athletes" class="h-10">
    </div>

    <hr class="bg-white">

    <div class="px-4 space-y-2">

      <!-- SideBar Toggle -->
      <button @click="$store.sidebar.full = !$store.sidebar.full"
        class="hidden sm:block focus:outline-none absolute p-1 -right-3 top-10 bg-gray-900 rounded-full shadow-md z-10">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transition-all duration-300 text-white transform"
          x-bind:class="$store.sidebar.full ? 'rotate-90':'-rotate-90 '" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd"
            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
            clip-rule="evenodd" />
        </svg>
      </button>

      <!-- Dashboard -->
      <a href="{{ url('admin') }}">
        <div x-data="tooltip" x-on:mouseover="show = true" x-on:mouseleave="show = false"
          @click="$store.sidebar.active = 'home' "
          class=" relative flex items-center hover:text-gray-200 hover:bg-gray-800 space-x-2 rounded-md p-2 cursor-pointer"
          x-bind:class="{'justify-start': $store.sidebar.full, 'sm:justify-center':!$store.sidebar.full,'text-gray-200 bg-gray-800':$store.sidebar.active == 'home','text-gray-400 ':$store.sidebar.active != 'home'}">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
          </svg>
          <h1 x-cloak
            x-bind:class="!$store.sidebar.full && show ? visibleClass :'' || !$store.sidebar.full && !show ? 'sm:hidden':''">
            Dashboard
          </h1>
        </div>
      </a>
      
      {{-- @if (Auth::user()->role == 1) --}}
      <!-- Promotion -->
      <div x-data="dropdown" class="relative">
        <!-- Dropdown head -->
        <div @click="toggle('promotion')" x-data="tooltip" x-on:mouseover="show = true" x-on:mouseleave="show = false"
          class="flex justify-between text-gray-400 hover:text-gray-200 hover:bg-gray-800 items-center space-x-2 rounded-md p-2 cursor-pointer"
          x-bind:class="{'justify-start': $store.sidebar.full, 'sm:justify-center':!$store.sidebar.full, 'text-gray-200 bg-gray-800':$store.sidebar.active == 'promotion','text-gray-400 ':$store.sidebar.active != 'promotion'}">
          <div class="relative flex space-x-2 items-center">
            {{-- <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
            </svg> --}}
            <i class="fa-solid fa-table-list text-xl"></i>
            <h1 x-cloak
              x-bind:class="!$store.sidebar.full && show ? visibleClass :'' || !$store.sidebar.full && !show ? 'sm:hidden':''">
              Promotion
            </h1>
          </div>
          <svg x-cloak x-bind:class="$store.sidebar.full ? '':'sm:hidden'" xmlns="http://www.w3.org/2000/svg"
            class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd"
              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
              clip-rule="evenodd" />
          </svg>
        </div>
        <!-- Dropdown content -->
        <div x-cloak x-show="open" @click.outside="open =false"
          x-bind:class="$store.sidebar.full ? expandedClass : shrinkedClass" class="text-gray-400 space-y-3 block">
          <ul>
            <li class="py-1"><a href="{{ url('admin/99k') }}" class="hover:text-gray-200 cursor-pointer">99K</a></li>
            <li class="py-1"><a href="#" class="hover:text-gray-200 cursor-pointer">Sixpack</a></li>
          </ul>
        </div>
      </div>

      <!-- Product -->
      <div x-data="dropdown" class="relative">
        <!-- Dropdown head -->
        <div @click="toggle('Product')" x-data="tooltip" x-on:mouseover="show = true" x-on:mouseleave="show = false"
          class="flex justify-between text-gray-400 hover:text-gray-200 hover:bg-gray-800 items-center space-x-2 rounded-md p-2 cursor-pointer"
          x-bind:class="{'justify-start': $store.sidebar.full, 'sm:justify-center':!$store.sidebar.full, 'text-gray-200 bg-gray-800':$store.sidebar.active == 'Product','text-gray-400 ':$store.sidebar.active != 'Product'}">
          {{-- <div class="relative flex space-x-2 justify-center items-center"> --}}
          <div class="relative flex space-x-2 items-center">
            {{-- <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
            </svg> --}}
            <i class="fa-solid fa-box-open text-xl"></i>
            <h1 x-cloak
              x-bind:class="!$store.sidebar.full && show ? visibleClass :'' || !$store.sidebar.full && !show ? 'sm:hidden':''">
              Product
            </h1>
          </div>
          <svg x-cloak x-bind:class="$store.sidebar.full ? '':'sm:hidden'" xmlns="http://www.w3.org/2000/svg"
            class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd"
              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
              clip-rule="evenodd" />
          </svg>
        </div>
        <!-- Dropdown content -->
        <div x-cloak x-show="open" @click.outside="open =false"
          x-bind:class="$store.sidebar.full ? expandedClass : shrinkedClass" class="text-gray-400 space-y-3 block">
          <ul>
            <li class="py-1"><a href="{{ url('admin/membership') }}" class="hover:text-gray-200 cursor-pointer">Membership</a></li>
            {{-- <li class="py-1"><a href="#" class="hover:text-gray-200 cursor-pointer">Sixpack</a></li> --}}
          </ul>
        </div>
      </div>

      <!-- Product -->
      <div @click="$store.sidebar.active = 'product' " x-data="tooltip" x-on:mouseover="show = true"
        x-on:mouseleave="show = false"
        class=" relative flex justify-between items-center text-gray-400 hover:text-gray-200 hover:bg-gray-800 space-x-2 rounded-md p-2 cursor-pointer"
        x-bind:class="{'justify-start': $store.sidebar.full, 'sm:justify-center':!$store.sidebar.full,'text-gray-200 bg-gray-800':$store.sidebar.active == 'posts','text-gray-400 ':$store.sidebar.active != 'posts'}">
        <div class="flex  items-center space-x-2">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
          </svg>
          <h1 x-cloak
            x-bind:class="!$store.sidebar.full && show ? visibleClass :'' || !$store.sidebar.full && !show ? 'sm:hidden':''">
            Product
          </h1>
        </div>
        <span x-cloak x-bind:class="$store.sidebar.full ? '' :'sm:hidden'"
          class="w-5 h-5 p-1 bg-green-400 rounded-sm text-sm leading-3 text-center text-gray-900">
          8
        </span>
      </div>
      {{-- @endif --}}

      <a href="{{ url('sales-training') }}">
        <div x-data="tooltip" x-on:mouseover="show = true" x-on:mouseleave="show = false"
          @click="$store.sidebar.active = 'home' "
          class=" relative flex items-center hover:text-gray-200 hover:bg-gray-800 space-x-2 rounded-md p-2 cursor-pointer my-2"
          x-bind:class="{'justify-start': $store.sidebar.full, 'sm:justify-center':!$store.sidebar.full,'text-gray-200 bg-gray-800':$store.sidebar.active == 'posts','text-gray-400 ':$store.sidebar.active != 'posts'}">
          {{-- x-bind:class="{'justify-start': $store.sidebar.full, 'sm:justify-center':!$store.sidebar.full,'text-gray-200 bg-gray-800':$store.sidebar.active == 'home','text-gray-400 ':$store.sidebar.active != 'home'}"> --}}
          {{-- <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
          </svg> --}}
          <i class="fa-solid fa-book h-6 w-6 text-xl px-1"></i>
          <h1 x-cloak
            x-bind:class="!$store.sidebar.full && show ? visibleClass :'' || !$store.sidebar.full && !show ? 'sm:hidden':''">
            Sales Training
          </h1>
        </div>
      </a>

    </div>
  </div>
</div>