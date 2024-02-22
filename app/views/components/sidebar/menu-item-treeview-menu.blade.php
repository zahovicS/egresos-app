<li class="treeview {{ $item['submenu_class'] ?? '' }}" @isset($item['id']) id="{{ $item['id'] }}" @endisset>
    <a class="app-menu__item" href="#!" data-toggle="treeview">
        @isset($item['icon'])
            <i class="app-menu__icon {{ $item['icon'] }}"></i>
        @endisset
        <span class="app-menu__label">{{ $item['text'] }}</span><i
            class="treeview-indicator ri-arrow-drop-right-line"></i>
    </a>
    <ul class="treeview-menu">
        <li>
            @each('components.sidebar.treeview-menu-item-link', $item['submenu'], 'item')
        </li>
    </ul>
</li>
