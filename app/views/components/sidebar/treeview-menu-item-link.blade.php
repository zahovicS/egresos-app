<li>
    <a class="treeview-item  {{ $item['class'] ?? '' }}" href="{{ $item['url'] }}"
        @isset($item['id']) id="{{ $item['id'] }}" @endisset
        @isset($item['target']) target="{{ $item['target'] }}" @endisset>
        @isset($item['icon'])
            <i class="app-menu__icon {{ $item['icon'] }}"></i>
        @endisset {{ $item['text'] }}
    </a>
</li>
