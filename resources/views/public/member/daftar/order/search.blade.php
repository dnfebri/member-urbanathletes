<x-main specialPage=true>
  <div class="container flex items-center justify-center mt-8">
    <div class="rounded-xl bg-gray-100 w-full mx-8 lg:w-4/6 shadow-xl overflow-hidden pb-6">
      <div class="p-4">
        <div class="flex justify-between items-center">
          <div>
            <a href="{{ url('/') }}" class="underline bg-yellow-400 rounded-md py-2 px-4"><i class="fa-solid fa-globe"></i> Kembali</a>
          </div>
          <div>
            <input class="outline-none focus:ring-0" type="text" name="kode" id="kode" placeholder="Kode order">
            <button
              url-confirm="{{ url('/order/status') }}"
              id="view-detail"
              type="button"
              class="rounded-md bg-gray-400 border border-black ml-4 hover:bg-gray-500 hover:shadow-md"
            >
              <i class="fa-solid fa-magnifying-glass"></i> Search
            </button>
          </div>
        </div>
        <div id="content"></div>
      </div>
    </div>
  </div>
  @push('script')
    <script>
      let input = document.querySelector('#kode');
      input.addEventListener("keypress", function(event) {
        if (event.key === "Enter") {
          event.preventDefault();
          document.getElementById("view-detail").click();
        }
      });
      const confirm = document.querySelector('#view-detail');
      confirm.addEventListener('click', function () {
        // console.log(confirm.getAttribute("url-confirm") + input.value);
        const content = document.querySelector('#content');
        // buat object ajax
        var xhr = new XMLHttpRequest();
        
        // cek kesiapan ajax
        xhr.onreadystatechange = function () {
          if (xhr.readyState == 4 && xhr.status == 200) {
          content.innerHTML = xhr.responseText;
          // console.log(xhr.responseText);
          }
        }
        
        // exsekusi ajax "function di atas tidak akan berjalan jika belum memanggil scrip ajax di bawah ini"
        xhr.open('GET', confirm.getAttribute("url-confirm") + '/' + input.value, true);
        xhr.send();

        setTimeout(() => {
          input.value = '';
        }, 3000);
      })
      // if (confirm) {
      // }
    </script>
  @endpush
</x-main>