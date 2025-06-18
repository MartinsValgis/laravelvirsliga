<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 maincolor border-white btn text-white']) }}>
    {{ $slot }}
</button>
