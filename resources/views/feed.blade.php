<x-layout pageTitle="Feed" :toast="$toast ?? null">
    <section id="feed-posts" class="w-full flex flex-col justify-start items-center bg-slate-100 h-full pt-6">
        {{-- create post form --}}
        <form class="bg-slate-700 p-6 w-100 md:w-4/5 max-w-[800px] flex mb-6 rounded-lg shadow-lg flex-wrap gap-5">
            <input type="text" class="w-4/5 bg-slate-200 text-black p-6 rounded-lg" placeholder="What's on your mind?"/>
            <button type="submit" class="text-white grow bg-slate-900 rounded-lg">Post It</button>
        </form>


        {{-- loop through array of posts if available --}}
        @if (isset($posts) and count($posts) !== 0)
         <h1 class="font-extrabold text-[48px] mb-5">Recent Posts</h1>
            @foreach ($posts as $post)
                {{-- feed post component --}}
                <x-feed.post :post="$post" />
            @endforeach
        @else
            <h1 class="font-extrabold text-[48px] mt-12 text-slate-800">No throughts here... yet.</h1>
            <p class="font-bold">Be the first to show yours!</p>

            <img src={{ url('images/thinking.png') }} class="h-2/5 max-h-[600px]"/>
        @endif
    </section>

</x-layout>
