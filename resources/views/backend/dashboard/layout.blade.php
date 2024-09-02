<!-- resources/views/backend/layout.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Dashboard') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js']) <!-- Ensure Vite is set up correctly -->
</head>
<body class="bg-gray-100 text-gray-900 dark:bg-gray-900 dark:text-gray-100 flex">
    <!-- Sidebar -->
    <aside class="w-64 h-screen bg-white dark:bg-gray-800 shadow-lg">
        <div class="px-6 py-4">
            <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-200">InfoLexi</h2>
        </div>
        <nav class="mt-6">
            <ul>
                @for($i = 1; $i <= 10; $i++)
                    <li class="mb-2">
                        <a href="#" class="block px-4 py-2 text-sm font-semibold text-gray-700 dark:text-gray-300 rounded hover:bg-gray-200 dark:hover:bg-gray-700">
                            Sidebar Link {{ $i }}
                        </a>
                    </li>
                @endfor
            </ul>
        </nav>
    </aside>

    <!-- Main Content -->
    <div class="flex-1 p-6">
        <!-- Header Section -->
        <header class="flex items-center justify-between mb-6">
            <h2 class="text-3xl font-semibold">{{ $header ?? 'Dashboard' }}</h2>
            <div class="flex items-center space-x-4">
                <span class="text-gray-800 dark:text-gray-200">Logged in as <strong>{{ Auth::user()->name ?? 'User' }}</strong></span>
                <a href="{{ route('profile.edit') }}" class="text-gray-600 dark:text-gray-300 hover:text-gray-800 dark:hover:text-gray-100">Profile</a>
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="text-red-500 dark:text-red-400 hover:underline">Logout</button>
                </form>
            </div>
        </header>

        <!-- Dashboard Content -->
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 xl:grid-cols-3">
            @yield('content')
        </div>
    </div>
</body>
</html>
