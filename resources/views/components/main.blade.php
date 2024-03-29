<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $pageTitle ?? "" }}</title>
    {{-- import tailwind with vite --}}
    @vite('resources/css/app.css')
</head>
<body class="h-screen">
    {{-- import navbar --}}
    @include('components.navbar')

    {{-- wrapper 1920px --}}
    <main class=" w-full h-full mx-auto">
        {{ $slot }}
    </main>

    {{-- import footer --}}
    @include('components.footer')
</body>
</html>
