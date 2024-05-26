<x-app-layout>
    <section class="section dashboard">
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>
        <div class="card-body">
             <h5 class="card-title">All Post:</span></h5>
            <div class="ps-3">
                <h1>{{ $totalPosts }}</h1>
            </div>
            <h5 class="card-title">Total Published Post:</span></h5>
            <div class="ps-3">
                <h1>{{ $totalPublishedPosts }}</h1>
            </div>
            <h5 class="card-title">Total Published Post:</span></h5>
            <div class="ps-3">
                <h1>{{ $totalUnpublishedPosts }}</h1>
            </div>
        </div>
    </section>
</x-app-layout>