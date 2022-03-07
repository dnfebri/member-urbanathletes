<div class="container items-center justify-between flex flex-row w-full">
  <div class="flex flex-row w-full items-center my-4 justify-between lg:justify-start">
    <div class="pl-4 md:pl-0 w-28">
      <img src="{{ url('/image/Logo_Urban-2.png') }}" alt="Urban Athletes" class="h-10">
    </div>
    <div class="font-semibold">
      <ul class="hidden lg:flex flex-row text-white text-sm text-shadow-xl">
        <li class="px-5 hover:text-yellow-500 text-shadow-xl"><a href="#">Home</a></li>
        <li class="px-5 hover:text-yellow-500"><a href="#">Abaut</a></li>
        <li class="px-5 hover:text-yellow-500"><a href="#">Programs</a></li>
        <li class="px-5 hover:text-yellow-500"><a href="#">What's on</a></li>
        <li class="px-5 hover:text-yellow-500"><a href="#">Success Story</a></li>
        <li class="px-5 hover:text-yellow-500"><a href="#">Articles</a></li>
        <li class="px-5 hover:text-yellow-500"><a href="#">Member</a></li>
      </ul>
    </div>
    <div class="block z-10 lg:hidden">
      <button class="py-1 px-8 rounded focus:outline-none hover:bg-gray-200 btn-menu group ">
        <svg class="text-gray-800 h-6 w-6" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>

        {{-- Menu Mobile --}}
        <div class="hidden menu-mobile absolute top-0 -right-full w-8/12 bg-white border group-focus:opacity-100 transition-all duration-500">
          <div class="flex justify-end border-b-2 btn-close-menu mr-4">
            <svg class="w-12 h-12 my-3 mx-4 text-gray-500 hover:h-14 hover:w-14" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </div>
          <ul class="flex flex-col items-center w-full text-base text-shadow-xl cursor-pointer">
            <li class="hover:bg-gray-200 py-4 px-6 w-full"><a href="#">Home</a></li>
            <li class="hover:bg-gray-200 py-4 px-6 w-full"><a href="#">Abaut</a></li>
            <li class="hover:bg-gray-200 py-4 px-6 w-full"><a href="#">Programs</a></li>
            <li class="hover:bg-gray-200 py-4 px-6 w-full"><a href="#">What's on</a></li>
            <li class="hover:bg-gray-200 py-4 px-6 w-full"><a href="#">Success Story</a></li>
            <li class="hover:bg-gray-200 py-4 px-6 w-full"><a href="#">Articles</a></li>
            <li class="hover:bg-gray-200 py-4 px-6 w-full"><a href="#">Member</a></li>
          </ul>
          <div class="flex flex-col items-center hover:scale-110 pb-4">
            <a href="#" class="px-4 py-2 rounded-md bg-yellow-400 hover:bg-yellow-500">Franchise Info</a>
          </div>
        </div>

      </button>
    </div>
  </div>
  <div class="hidden sm:flex justify-end sm:w-1/3 md:w-1/3 lg:w-1/4">
    <div class="flex flex-row items-center px-1 md:px-4">
      <svg xmlns="http://www.w3.org/2000/svg" 
      class="h-6 w-6 hover:scale-110 opacity-100 transition-all duration-300" 
      fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
      </svg>
    </div>
    <div class="hidden sm:flex">
      <a href="#" class="px-4 py-2 rounded-md bg-yellow-400 hover:bg-yellow-500 shadow-lg hover:scale-110 opacity-100 transition-all duration-300">Franchise Info</a>
    </div>
  </div>
</div>