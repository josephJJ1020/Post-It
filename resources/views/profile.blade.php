<x-main :pageTitle='$title'>
    {{-- user details --}}
    <x-wrapper>
    <section id="profile-details">
        <h1 class="text-[64px]"> {{ $user["firstName"]." ".$user["lastName"] }}</h1>
        <div> <h1 class="inline text-[16px] font-bold">Contact No:</h1> &nbsp; <p class="inline">{{ $user["contactNo"] ?? "N/A" }}</p>  </div>
        <div> <h1 class="inline text-[16px] font-bold">Age:</h1> &nbsp; <p class="inline">{{ $user["age"] ?? "N/A" }}</p>  </div>
    </section>

    </br>

    {{-- user posts --}}
    <section id="user-posts" class="mt-5">
        <h1 class="text-[32px] font-bold mb-5">Posts </h1>

        {{-- loop through array of user posts --}}
        @foreach ($posts as $post)
            {{-- user post component (profile page); nested folder component --}}
           <x-profile.post :post='$post'/>
        @endforeach

        {{-- sample button component --}}
        {{-- <x-sample>
            Click Me
        </x-sample> --}}
    </section>
    </x-wrapper>
</x-main>
