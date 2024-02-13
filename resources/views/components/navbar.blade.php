<nav class="w-full h-[80px] bg-slate-700 text-white">
    {{-- flex container --}}
    <div class="flex justify-between items-center h-full px-5 md:px-20">
        {{-- nav logo --}}
        <div class="">
            <a href="/">
                <h1 class="font-extrabold text-[32px] ">Post It</h1>
            </a>
        </div>

        {{-- nav links --}}
        <ul class="flex gap-5 font-bold">
            <a href="/" class="hover:text-slate-400 transition">
                Home
            </a>
            <a href="/feed" class="hover:text-slate-400 transition">
                Feed
            </a>

            {{-- divider --}}
            <span class="w-0.5 rounded-full bg-slate-500"> </span>

            {{-- guest options --}}
            @guest
                <a href="/login" class="hover:text-slate-400 transition">
                    Log In
                </a>
                <a href="/register" class="hover:text-slate-400 transition">
                    Register
                </a>
            @endguest

            {{-- authenticated user options --}}
            @auth
                <a href="/profile" class="hover:text-slate-400 transition">
                    {{-- show username --}}
                    {{ Auth::user()->username }}
                </a>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit btn btn-danger btn-small">
                        Log Out
                    </button>

                </form>
                {{-- <a href="/profile" class="hover:text-slate-400 transition">
                    Log Out
                </a> --}}
            @endauth

        </ul>
    </div>
</nav>
