<x-main>
    <div>
        <img src="{{ url('/image/program/personalTraining/gambar-personal.jpg') }}" alt="pt1">
    </div>

    <div>
        <h4 class="text-center text-5xl text-lime-500 my-10">TRY OUR PERSONAL TRAINING PACKAGES</h4>
    </div>

    <div class="grid md:grid-cols-3 lg:grid-cols-3 gap-0 container justify-center place-items-center">
        <img class="max-w-xl" src="{{ url('/image/program/personalTraining/body-weight-1.jpg') }}" alt="pt2">
        <img class="max-w-sm" src="{{ url('/image/program/personalTraining/muscle-gain.jpg') }}" alt="pt3">
    </div>

    <div>
        <img src="{{ url('/image/program/personalTraining/strength-and-toning.jpg') }}" alt="pt4">
        <img src="{{ url('/image/program/personalTraining/body-shaping.jpg') }}" alt="pt5">
    </div>
</x-main>

{{-- @extends('layouts.main')

@section('content')

@endsection --}}