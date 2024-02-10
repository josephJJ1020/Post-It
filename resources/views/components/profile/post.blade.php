@if (isset($post))
    <div class="bg-slate-100 shadow-lg rounded-md w-4/5 max-w-[1000px] p-6 mb-5">
        {{-- post title --}}
        <div class="my-2">
            <h1 class="font-bold text-[20px]"> {{ $post["title"] ?? "" }} </h1>
        </div>

        {{-- post content --}}
        <div class="">
            <p>{{ $post["content"] ?? "" }}</p>
        </div>
    </div>
@else
    <div class="">
        Post is missing. Please try again later!
    </div>
@endif
