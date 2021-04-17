@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'alert alert-warning']) }}>
        {{ $status }}
    </div>
@endif
