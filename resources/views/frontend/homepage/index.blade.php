<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InfoLexi - Homepage</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="text-center">
        <h1 class="text-4xl font-bold mb-6">InfoLexi</h1>
        <form action="{{ route('search') }}" method="GET" class="flex justify-center mb-6">
            <input type="text" name="query" placeholder="Search..." class="w-full max-w-md px-4 py-2 border border-gray-300 rounded-l-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-r-lg hover:bg-blue-600">Search</button>
        </form>
        <div class="text-gray-600">
            <a href="#" class="text-blue-500 hover:underline">About</a> |
            <a href="#" class="text-blue-500 hover:underline">Help</a>
        </div>
    </div>
</body>
</html>
