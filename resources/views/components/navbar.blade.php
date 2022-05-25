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
          <div id="nav-menu" class="text-[#598700] transition duration-300 lg:scale-100 absolute py-2 bg-white lg:text-white text-shadow-xl bg-opacity-80 lg:gb-opacity-100 shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none scale-y-0 ">
            <ul class="block lg:flex ">
              <li class="group"><a href="{{ url('/dev') }}" class="text-base py-2 mx-8 lg:mx-4 flex group-hover:text-yellow-500">Home</a></li>
              <li class="group">
                <button class="relative text-shadow-xl py-2 mx-4 lg:mx-4 flex jutify-center items-center focus:outline-none hover:text-yellow-500 group z-20">
                  <p class="px-4 lg:px-0">About</p>
                  <div class="absolute top-full hidden group-hover:block min-w-full w-max bg-white shadow-md rounded">
                    <ul class="text-black">
                      <a href="{{ route('aboutus') }}" class="">
                        <li class="px-4 py-1 hover:bg-gray-100 hover:text-yellow-500 border-b">
                          About us
                        </li>
                      </a>
                      <a href="{{ route('termsConditions') }}" class="">
                        <li class="px-4 py-1 hover:bg-gray-100 hover:text-yellow-500">
                          Terms & Conditions
                        </li>
                      </a>
                    </ul>
                  </div>
                </button>
              </li>
              <li class="group">
                <button class="relative text-shadow-xl py-2 mx-4 lg:mx-4 flex jutify-center items-center focus:outline-none hover:text-yellow-500 group">
                  <p class="px-4 lg:px-0">Programs</p>
                  {{-- <span class="hover:bg-gray-100">
                    <svg
                      class="w-5 h-5"
                      fill="none"
                      stroke="currentColor"
                      viewBox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M19 9l-7 7-7-7"
                        ></path>
                    </svg>
                  </span> --}}
                  <div class="absolute top-full hidden group-hover:block min-w-full w-max bg-white shadow-md rounded z-20">
                    <ul class="text-black">
                      <a href="{{ route('theValor') }}" class="">
                        <li class="flex items-center px-4 py-1 hover:bg-gray-100 hover:text-yellow-500 border-b">
                          <img class="w-6 mx-2" src="{{ url('/image/logo-valor.png') }}" alt="">
                          The Valor
                        </li>
                      </a>
                      <a href="{{ route('personalTraining') }}" class="">
                        <li class="px-4 py-1 hover:bg-gray-100 hover:text-yellow-500 border-b">
                          Personal Training
                        </li>
                      </a>
                      <a href="{{ url('group-exercise') }}" class="">
                        <li class="px-4 py-1 hover:bg-gray-100 hover:text-yellow-500 border-b">
                          Group Exercise
                        </li>
                      </a>
                      <a href="{{ route('onlineSchedule') }}" class="">
                        <li class="px-4 py-1 hover:bg-gray-100 hover:text-yellow-500">
                          Online Schedule
                        </li>
                      </a>
                    </ul>
                  </div>
                </button>
              </li>
              {{-- <li class="group"><a href="#" class="text-base py-2 mx-8 lg:mx-4 flex group-hover:text-yellow-500">What's on</a></li> --}}
              <li class="group"><a href="{{ route('successStory') }}" class="text-base py-2 mx-8 lg:mx-4 flex group-hover:text-yellow-500">Success Story</a></li>
              {{-- <li class="group">
                <button class="relative text-shadow-xl py-2 mx-4 flex jutify-center items-center focus:outline-none hover:text-yellow-500 group">
                  <p class="px-4 lg:px-0">Articles</p>
                  <span class="hover:bg-gray-100">
                    <svg
                      class="w-5 h-5"
                      fill="none"
                      stroke="currentColor"
                      viewBox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M19 9l-7 7-7-7"
                        ></path>
                    </svg>
                  </span>
                  <div class="absolute top-full hidden group-hover:block min-w-full w-max bg-white shadow-md rounded">
                    <ul class="text-left border rounded">
                      <li class="px-4 py-1 hover:bg-gray-100 hover:text-yellow-500 border-b">
                        <a href="#" class="">Media</a>
                      </li>
                      <li class="px-4 py-1 hover:bg-gray-100">
                        <a href="#" class="">Blog</a>
                      </li>
                    </ul>
                  </div>
                </button>
              </li> --}}
              <li class="group">
                <button class="relative text-shadow-xl py-2 mx-4 lg:mx-4 flex jutify-center items-center focus:outline-none hover:text-yellow-500 group">
                  <p class="px-4 lg:px-0">Articles</p>
                  {{-- <span class="hover:bg-gray-100">
                    <svg
                      class="w-5 h-5"
                      fill="none"
                      stroke="currentColor"
                      viewBox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M19 9l-7 7-7-7"
                        ></path>
                    </svg>
                  </span> --}}
                  <div class="absolute top-full hidden group-hover:block min-w-full w-max bg-white shadow-md rounded z-20">
                    <ul class="text-black">
                      <a href="{{ url('media') }}" class="">
                        <li class="px-4 py-1 hover:bg-gray-100 hover:text-yellow-500 border-b">
                          Media
                        </li>
                      </a>
                      <a href="{{ url('blog') }}" class="">
                        <li class="px-4 py-1 hover:bg-gray-100 hover:text-yellow-500">
                          Blog
                        </li>
                      </a>
                    </ul>
                  </div>
                </button>
              </li>
              <li class="group"><a href="{{ route('member.loginForm') }}" class="text-base py-2 mx-8 lg:mx-4 flex group-hover:text-yellow-500">Member Area</a></li>
              <li class="">
                <div class="flex lg:hidden flex-col items-center mt-4 lg:mt-0">
                  {{-- <a href="#" class="px-4 py-2 rounded-md text-black bg-yellow-400 hover:bg-yellow-500">Kemitraan</a> --}}
                  <a class="group relative border border-red-700 focus:outline-none lg:hidden my-1" href="{{ url('/get-free-trial') }}">
                    <span class="w-full inline-flex items-center justify-center self-stretch px-4 py-2 text-sm text-center font-bold uppercase ring-1 ring-offset-1 border-red-700 ring-red-700 ring-offset-red-700 transform transition-transform group-hover:-translate-y-1 group-hover:-translate-x-1 group-focus:-translate-y-1 group-focus:-translate-x-1 text-black">
                      <i class="fa-solid fa-ticket"></i> <p class="ml-2">Get Free Trial</p>
                    </span>
                  </a>
                  <a class="group relative border border-black focus:outline-none lg:hidden my-1" href="https://kemitraan.urbanathletes.co.id/home-franchise" target="_blank">
                    <span class="w-full inline-flex items-center justify-center self-stretch px-4 py-2 text-sm text-center font-bold uppercase ring-1 ring-offset-1 border-black ring-black ring-offset-black transform transition-transform group-hover:-translate-y-1 group-hover:-translate-x-1 group-focus:-translate-y-1 group-focus:-translate-x-1 text-black">
                      <i class="fa-solid fa-handshake"></i> <p class="ml-2">Kemitraan</p>
                    </span>
                  </a>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="hidden lg:flex items-center lg:mt-0">
          <a class="group relative border border-red-700 focus:outline-none hidden lg:ml-0 xl:ml-4 lg:inline-flex" href="{{ url('/get-free-trial') }}">
            <span class="w-full inline-flex items-center justify-center self-stretch px-4 py-2 text-sm text-center font-bold uppercase ring-1 ring-offset-1 border-red-700 ring-red-700 ring-offset-red-700 transform transition-transform group-hover:-translate-y-1 group-hover:-translate-x-1 group-focus:-translate-y-1 group-focus:-translate-x-1 text-red-700">
              <i class="fa-solid fa-ticket"></i> <p class="ml-2">Get Free Trial</p>
            </span>
          </a>
          <a class="group relative border border-black focus:outline-none hidden lg:ml-0 xl:ml-4 lg:inline-flex" href="https://kemitraan.urbanathletes.co.id/home-franchise" target="_blank">
            <span class="w-full inline-flex items-center justify-center self-stretch px-4 py-2 text-sm text-center font-bold uppercase ring-1 ring-offset-1 border-black ring-black ring-offset-black transform transition-transform group-hover:-translate-y-1 group-hover:-translate-x-1 group-focus:-translate-y-1 group-focus:-translate-x-1 text-black">
              <i class="fa-solid fa-handshake"></i> <p class="ml-2">Kemitraan</p>
            </span>
          </a>
          {{-- <a href="https://kemitraan.urbanathletes.co.id/home-franchise/" class="px-4 py-2 rounded-md bg-yellow-400 hover:bg-yellow-500">Kemitraan</a> --}}
        </div>
      </div>
    </div>
  </div>

</nav>