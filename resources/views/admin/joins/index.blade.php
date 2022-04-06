<x-admin_main>
  <div class="container">
    <div class="grid row place-content-center w-full">

      {{-- <table class="items-center w-full bg-transparent border-collapse">
        <thead>
          <tr>
            <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-pink-800 text-pink-300 border-pink-700">Project</th>
            <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-pink-800 text-pink-300 border-pink-700">Budget</th>
            <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-pink-800 text-pink-300 border-pink-700">Status</th>
            <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-pink-800 text-pink-300 border-pink-700">Users</th>
            <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-pink-800 text-pink-300 border-pink-700">Completion </th>
            <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-pink-800 text-pink-300 border-pink-700"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left flex items-center">
              <img src="https://demos.creative-tim.com/notus-js/assets/img/bootstrap.jpg" class="h-12 w-12 bg-white rounded-full border" alt="...">
              <span class="ml-3 font-bold text-white"> Argon Design System </span></th>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">$2,500 USD</td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
              <i class="fas fa-circle text-orange-500 mr-2"></i>pending</td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
              <div class="flex">
                <img src="https://demos.creative-tim.com/notus-js/assets/img/team-1-800x800.jpg" alt="..." class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow">
                <img src="https://demos.creative-tim.com/notus-js/assets/img/team-2-800x800.jpg" alt="..." class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow -ml-4">
                <img src="https://demos.creative-tim.com/notus-js/assets/img/team-3-800x800.jpg" alt="..." class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow -ml-4">
                <img src="https://demos.creative-tim.com/notus-js/assets/img/team-4-470x470.png" alt="..." class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow -ml-4">
              </div>
            </td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"><div class="flex items-center">
                <span class="mr-2">60%</span>
                <div class="relative w-full">
                  <div class="overflow-hidden h-2 text-xs flex rounded bg-red-200">
                    <div style="width: 60%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-red-500"></div>
                  </div>
                </div>
              </div>
            </td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-right">
              <a href="#pablo" class="text-blueGray-500 block py-1 px-3" onclick="openDropdown(event,'table-dark-1-dropdown')">
                <i class="fas fa-ellipsis-v"></i></a>
              <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48" id="table-dark-1-dropdown">
                <a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Action</a><a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Another action</a><a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Something else here</a>
                <div class="h-0 my-2 border border-solid border-blueGray-100"></div>
                <a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Seprated link</a>
              </div>
            </td>
          </tr>
        </tbody>
      </table> --}}
      <div class="py-4 flex justify-end items-center">
        <span class="px-4">Club</span>
          <select name="club" id="club" class="block border-0 border-b-2 focus:border-black @error('nominal') border-red-300 @enderror">
            <option value="" >Select club</option> 
            @foreach ($clubs as $club)
                <option value="{{ $club['id'] }}">{{ $club['name'] }}</option> 
            @endforeach
          </select>
      </div>


      <table class="items-center w-full bg-transparent border-collapse">
        <thead>
          <tr class=" border-collapse border-b-2 border-slate-500 w-full">
            <th scope="col" class="px-6 py-3">No</th>
            <th scope="col" class="px-6 py-3">Nama</th>
            <th scope="col" class="px-6 py-3">Email</th>
            <th scope="col" class="px-6 py-3">Nomor</th>
            <th scope="col" class="px-6 py-3">Club</th>
            <th scope="col" class="px-6 py-3">Tanggal Join</th>
            <th scope="col" class="px-6 py-3">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($invoices as $invoice)
            <tr class=" border-collapse border-b-2 border-slate-500">
              <th scope="row">{{ $loop->iteration }}</th>
              <td class="px-6 py-4">{{$invoice->nama}}</td>
              <td class="px-6 py-4">{{$invoice->email}}</td>
              <td class="px-6 py-4">{{$invoice->nomor}}</td>
              @foreach ($clubs as $club)
                @if($club['id'] == $invoice->club)
                  <td class="px-6 py-4">{{$club['name']}}</td>
                @endif
              @endforeach
              <td class="px-6 py-4">{{$invoice->created_at}}</td>
              <td class="px-6 py-4">
                <button>detail</button>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</x-admin_main>