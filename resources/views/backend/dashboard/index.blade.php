<!-- resources/views/backend/dashboard/index.blade.php -->
@extends('backend.dashboard.layout')

@section('content')
    @for($i = 1; $i <= 9; $i++)
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-4">
            <h3 class="text-xl font-bold mb-2">Info Block {{ $i }}</h3>
            <p class="text-gray-600 dark:text-gray-400">Details about this section go here. Customize each block to display relevant data.</p>
        </div>
    @endfor
@endsection
