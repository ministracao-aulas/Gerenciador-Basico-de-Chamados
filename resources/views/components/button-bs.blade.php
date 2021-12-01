<button class="btn btn-{{ $color ?? 'info' }} btn-block btn-{{ $size ?? 'sm' }}">
    @if ($leftIcon ?? $icon ?? '')
        <i class="mdi mdi-{{ $leftIcon }}"></i>
    @endif

    {{ $content ?? $slot }}

    @if ($rightIcon ?? '')
        <i class="mdi mdi-{{ $rightIcon }}"></i>
    @endif
</button>
