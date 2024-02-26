@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'font-medium text-sm text-pigment-green']) }}>
        {{ $status }}
    </div>
@endif
