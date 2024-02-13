<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- csrf token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $pageTitle ?? "" }}</title>
    {{-- import tailwind with vite --}}
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen">
    {{-- show toast if available --}}
    @if (session('toast'))
        @switch(session('toast')["type"])
        {{-- show success toast --}}
            @case("success")
                <div role="alert" class="alert alert-success absolute mt-3" onclick="(this) => this.style.display = 'none'">
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    <span>{{ session('toast')["message"] }}</span>
                </div>
                @break
            @default
                {{-- show nothing --}}
                @break
        @endswitch
    @endif

    {{-- import navbar --}}
    @include('components.navbar')

    {{-- wrapper 1920px --}}
    <main class=" w-full min-h-screen mx-auto">
        {{ $slot }}
    </main>

    {{-- import footer --}}
    @include('components.footer')
</body>
</html>
