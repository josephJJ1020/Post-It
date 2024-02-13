<x-layout pageTitle="Post It - Log In">
    {{-- login form container --}}
    <section class="flex justify-center items-center h-screen w-full min-h-[800px] bg-slate-100">
        {{-- login form --}}
        <form action="{{ route('login') }}" method="POST" class="w-4/5 flex flex-col gap-5 justify-center items-center h-4/5 max-h-[800px] max-w-[600px] p-12 bg-white shadow-lg rounded-sm text-left">
            @csrf
            {{-- form heading --}}
            <div class="w-full mb-6 text-center">
                <h1 class="font-extrabold text-[42px] text-slate-700 leading-none mb-3">Log In</h1>

            </div>

            {{-- username input --}}
            <div class="w-full">
                <label for="username" class=" block font-extrabold text-[24px] text-slate-700">Username</label>
                <input name="username" type="text" class="p-3 w-full bg-white rounded-sm border-b-2 border-slate-300 bg-transparent autofill:bg-transparent" placeholder="Enter your username"/>
                {{-- show username error --}}
                @error('username')
                    <span class="d-block text-red-500 mt-2"> {{ $message }} </span>
                @enderror
            </div>

            {{-- password input --}}
            <div class="w-full">
                <label for="password" class=" block font-extrabold text-[24px] text-slate-700">Password</label>
                <input name="password" type="password" placeholder="Enter your password" class="p-3 w-full bg-transparent rounded-sm border-b-2 border-slate-300"/>
                {{-- show password error --}}
                @error('password')
                    <span class="d-block text-red-500 mt-2"> {{ $message }} </span>
                @enderror
            </div>

            {{-- login button --}}
            <div class="w-full flex flex-col justify-center items-center mt-6 gap-5">
                <button type="submit" class="btn rounded-sm bg-slate-700 hover:bg-slate-600 transition text-white ml-2 font-bo">Log In</button>
                <span class="inline-block ml-3">Don't have an account? <a href="{{ route('registerPage') }}" class="text-slate-700 font-bold hover:text-slate-600 transition">Register</a></span>
            </div>

        </form>
    </section>
</x-layout>
