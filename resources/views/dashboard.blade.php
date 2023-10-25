<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="/pasien/view">{{ __("You're logged in!") }}</a>
                </div>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-green-400 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="/pasien/view">{{ __("Lihat Data Pasien") }}</a>
                </div>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-yellow-400 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p>{{ __("Lihat Data Pasien Berdasarkan Pasien") }}</p>
                    <ul>
                        @foreach ($pasienData as $patient)
                            <li><a class="text-blue-500" href="/pasien/view/{{ $patient->id }}">{{ $patient->nama }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-sky-600 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p>{{ __("Lihat Data Pasien Berdasarkan Dokter") }}</p>
                    <ul>
                        @foreach ($dokterData as $doctor)
                            <li><a class="text-blue-50" href="/pasien/view/doktor/{{ $doctor->id }}">{{ $doctor->nama }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-teal-400 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="/pasien/view">{{ __("Masukkan Data Pasien") }}</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
