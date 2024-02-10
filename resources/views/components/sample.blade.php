<button style="background-color: red; color: white; padding: 36px;" {{ $attributes->merge(["class" => ""]) }}>
    {{ $slot }}
</button>
