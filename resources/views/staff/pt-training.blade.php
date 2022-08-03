<x-admin_main>
  <div class="container">
    <div class="grid row w-full">
      <div class="py-4 px-4 flex justify-start items-center border-b">
        <h1 class="text-xl">PT Training</h1>
      </div>
      {{-- isi page mulai sini --}}
      <div class="p-4 border-b-2">
        <button class="border border-neutral-600 px-4 py-1" id="btn-training" onclick="btnKlick(this)">
          <p class="text-xl">Video Training 1</p>
        </button>
        <div class="m-2 px-2 py-4 hidden" id="video-training">
          <iframe class="aspect-video w-full"
          src="https://www.youtube.com/embed/a14sO_pl33E?controls=0">
          </iframe>
        </div>
      </div>
      <div class="p-4 border-b-2">
        <button class="border border-neutral-600 px-4 py-1" id="btn-training" onclick="btnKlick(this)">
          <p class="text-xl">Video Training 2</p>
        </button>
        <div class="m-2 px-2 py-4 hidden" id="video-training">
          <iframe class="aspect-video w-full"
          src="https://www.youtube.com/embed/lUjHW6zLnoc?controls=0">
          </iframe>
        </div>
      </div>

    </div>
  </div>
  @push('script')
    <script>
      function btnKlick(btn) {
        hideVideo();
        btn.nextElementSibling.classList.remove('hidden')
      }

      function hideVideo() {
        let hideVideo = document.querySelectorAll('#video-training')
        hideVideo.forEach(hide => {
          hide.classList.add('hidden');
        });
      }
    </script>
  @endpush
</x-admin_main>