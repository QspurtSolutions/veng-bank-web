@props(['status'])

@if ($status)
<div id="statusMsg" {{ $attributes->merge(['class' => 'alert bg-success border-0 alert-dismissible fade show']) }}>
    <div class="text-white">{{ $status }}</div>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif