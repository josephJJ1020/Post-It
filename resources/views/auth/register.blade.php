<x-layout pageTitle="Post It - Register">
    {{-- register form container --}}
    <section class="flex justify-center items-center h-screen w-full min-h-[800px] bg-slate-100">
        {{-- register form --}}
        <form action="{{ route('register') }}" method="POST" class="w-4/5 flex flex-col gap-5 justify-center items-center h-4/5 max-h-[800px] max-w-[600px] p-12 bg-white shadow-lg rounded-sm text-left">
            @csrf
            {{-- form heading --}}
            <div class="w-full mb-6 text-center">
                <h1 class="font-extrabold text-[42px] text-slate-700 leading-none mb-3">Let the world know it's you</h1>
                <p class="text-slate-500 font-semibold">Create your account now</p>
            </div>

            {{-- username input --}}
            <div class="w-full">
                <label for="username" class=" block font-extrabold text-[24px] text-slate-700">Username</label>
                <input name="username" type="text" class="p-3 w-full bg-white rounded-sm border-b-2 border-slate-300 bg-transparent autofill:bg-transparent" placeholder="Enter your desired username"/>
                {{-- show username error --}}
                @error('username')
                    <span class="d-block text-red-500 mt-2"> {{ $message }} </span>
                @enderror
            </div>

            {{-- password input --}}
            <div class="w-full">
                <label for="password" class=" block font-extrabold text-[24px] text-slate-700">Password</label>
                <input name="password" type="password" placeholder="Enter your password here" class="p-3 w-full bg-transparent rounded-sm border-b-2 border-slate-300"/>
                {{-- show password error --}}
                @error('password')
                    <span class="d-block text-red-500 mt-2"> {{ $message }} </span>
                @enderror
            </div>

            {{-- confirm password input --}}
            <div class="w-full mb-8">
                <label for="password_confirmation" class=" block font-extrabold text-[24px] text-slate-700">Confirm Password</label>
                <input name="password_confirmation" type="password" placeholder="Confirm your password here" class="p-3 w-full bg-white rounded-sm border-b-2 border-slate-300"/>
                {{-- show confirm password error --}}
                @error('password_confirmation')
                    <span class="d-block text-red-500 mt-2"> {{ $message }} </span>
                @enderror
            </div>

            {{-- register button --}}
            <div class="w-full">
                <button type="submit" class="btn rounded-sm bg-slate-700 text-white ml-2 font-bo">Register</button>
                <span class="inline-block ml-3">Already have an account? <a href="" class="text-slate-700 font-bold">Log in</a></span>
            </div>

        </form>
    </section>
</x-layout>
