<a class="app-menu__item {{ $item['class'] ?? '' }}" href="{{ $item['url'] }}" @isset($item['id']) id="{{ $item['id'] }}" @endisset @isset($item['target']) target="{{ $item['target'] }}" @endisset>
    @isset($item['icon'])
        <i class="app-menu__icon {{ $item['icon'] }}"></i>
    @endisset
    <span class="app-menu__label">{{ $item['text'] }}</span>
</a>
