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
          <div id="nav-menu" class="text-[#598700] hidden absolute py-2 bg-white lg:text-white text-shadow-xl bg-opacity-80 lg:gb-opacity-100 shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
            <ul class="block lg:flex ">
              <li class="group"><a href="{{ url('/dev') }}" class="text-base py-2 mx-8 lg:mx-4 flex group-hover:text-yellow-500">Home</a></li>
              <li class="group">
                <button class="relative py-2 mx-4 lg:mx-4 flex jutify-center items-center focus:outline-none hover:text-yellow-500 group z-20">
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
                <button class="relative py-2 mx-4 lg:mx-4 flex jutify-center items-center focus:outline-none hover:text-yellow-500 group">
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
                        <li class="px-4 py-1 hover:bg-gray-100 hover:text-yellow-500 border-b">
                          The Valor
                        </li>
                      </a>
                      <a href="{{ route('personalTraining') }}" class="">
                        <li class="px-4 py-1 hover:bg-gray-100 hover:text-yellow-500 border-b">
                          Personal Training
                        </li>
                      </a>
                      <li class="px-4 py-1 hover:bg-gray-100 hover:text-yellow-500 border-b">
                        <a href="#" class="">Group Exercise</a>
                      </li>
                      <li class="px-4 py-1 hover:bg-gray-100 hover:text-yellow-500">
                        <a href="#" class="">Online Schedule</a>
                      </li>
                    </ul>
                  </div>
                </button>
              </li>
              <li class="group"><a href="#" class="text-base py-2 mx-8 lg:mx-4 flex group-hover:text-yellow-500">What's on</a></li>
              <li class="group"><a href="#" class="text-base py-2 mx-8 lg:mx-4 flex group-hover:text-yellow-500">Success Story</a></li>
              {{-- <li class="group">
                <button class="relative py-2 mx-4 flex jutify-center items-center focus:outline-none hover:text-yellow-500 group">
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
                <button class="relative py-2 mx-4 lg:mx-4 flex jutify-center items-center focus:outline-none hover:text-yellow-500 group">
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
                      <li class="px-4 py-1 hover:bg-gray-100 hover:text-yellow-500 border-b">
                        <a href="#" class="">Media</a>
                      </li>
                      <li class="px-4 py-1 hover:bg-gray-100 hover:text-yellow-500">
                        <a href="#" class="">Blog</a>
                      </li>
                    </ul>
                  </div>
                </button>
              </li>
              <li class="group"><a href="#" class="text-base py-2 mx-8 lg:mx-4 flex group-hover:text-yellow-500">Member</a></li>
              <li class="group">
                <div class="flex md:hidden flex-col items-center hover:scale-110 mt-4 lg:mt-0">
                  <a href="#" class="px-4 py-2 rounded-md text-black bg-yellow-400 hover:bg-yellow-500">Franchise Info</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="hidden md:flex flex-col items-center hover:scale-110 lg:mt-0">
          <a href="#" class="px-4 py-2 rounded-md bg-yellow-400 hover:bg-yellow-500">Franchise Info</a>
        </div>
      </div>
    </div>
  </div>

</nav>