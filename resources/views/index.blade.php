@php
    /**
     * @var array<array> $menu
     * @var array $classes
     */
@endphp

<ul @class($classes)>
    @foreach($menu as $item)
        <li>
            @if($item['url'] ?? null)
                <a href="{{ $item['url'] }}">{!! $item['title'] !!}</a>
            @else
                <span>{!! $item['title'] !!}</span>
            @endif

            @if($item['items'] ?? null)
                <ul>
                    @foreach($item['items'] as $subItem)
                        <li>
                            @if($subItem['url'] ?? null)
                                <a href="{{ $subItem['url'] }}">{!! $subItem['title'] !!}</a>
                            @else
                                <span>{!! $subItem['title'] !!}</span>
                            @endif
                        </li>
                    @endforeach
                </ul>
            @endif
        </li>
    @endforeach
</ul>
