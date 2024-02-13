<x-layout pageTitle="Post It - Create Your Post Now">
    {{-- home section 1 banner --}}
    <section class="w-full h-screen max-h-[1000px] relative text-slate-800">
        {{-- background div with image --}}
        <div class="absolute top-0 left-0 h-full w-full -z-10 bg-cover bg-right-bottom" style="background-image:url('/images/home-1.jpg')"></div>
        {{-- wrapper --}}
        <div class="w-full h-full mx-auto flex justify-center items-center bg-black bg-opacity-10">
            {{-- call to action --}}
            <div class="flex flex-col items-center justify-center w-full text-center">
                {{-- heading --}}
                <h1 class="text-[40px] 2xl:text-[64px] font-extrabold leading-none mb-6 xl:mb-4">What's on your mind?</h1>
                <p>Let out your thoughts anonymously or <a href="/login" class="font-extrabold hover:text-slate-400 transition">let others know it's you</a></p>
                {{-- input form --}}
                <form method="POST" action="{{url('create-post')}}" class="mt-6 flex justify-center items-center flex-wrap gap-2 w-4/5">
                    @csrf
                    <input type="text" class="w-4/5 max-w-[500px] p-6 rounded-md shadow-lg font-bold bg-white" name="content" placeholder="Place your thoughts here"/>
                    <button type="submit" class="p-6 bg-slate-700 rounded-md shadow-lg text-white font-bold focus:outline-none focus:border-none hover:bg-slate-600 transition">Post It</button>
                </form>
            </div>
        </div>
    </section>
</x-layout>
