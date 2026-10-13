
@props(['tipe' => 'info'])
<div class="alert alert-{{ $tipe }}" style="padding: 10px; margin: 10px 0; border: 1px solid #ccc; background-color: #f9f9f9;">
    {{ $slot }}
</div>