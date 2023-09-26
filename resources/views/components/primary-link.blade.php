@props(['value'])
<a href="{{$value}}" {{ $attributes->merge(['class' => 'btn text-white bg-dark-500']) }}>
    {{ $slot }}
</a>
