@php
    $dashboard = [
        'title' => 'Dashboard',
        'url' => '/dashboard'
    ]; 
    $user = [
        'title' => 'Users',
        'url' => '#',
        'icon' => 'bi bi-person-fill',
        'childrens' => [
            [
            'title' => 'List User',
            'url' => '/users/all'
            ],
            [
                'title' => 'Create Users',
                'url' => '/users/create'
            ]
        ]
    ];
    $article = [
        'title' => 'Articles',
        'url' => '#',
        'icon' => 'bi bi-person-fill',
        'childrens' => [
            [
            'title' => 'List Articles',
            'url' => '/articles/all'
            ],
            [
                'title' => 'Create Article',
                'url' => '/articles/create'
            ]
        ]
    ];
    $category= [
        'title' => 'Category',
        'url' => '#',
        'icon' => 'bi bi-person-fill',
        'childrens' => [
            [
            'title' => 'List Category',
            'url' => '/categories/all'
            ],
            [
                'title' => 'Create Category',
                'url' => '/categories/create'
            ]
        ]
    ];

    $menus = [$dashboard, $user, $article, $category];
@endphp

<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="index.html"><img src="/dist/assets/images/logo/logo.png" alt="Logo" srcset=""></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>

                @foreach ($menus as $menu)
                    @if (isset($menu['childrens']))
                        <li class="sidebar-item has-sub">
                            <a href="{{ $menu['url'] }}" class='sidebar-link'>
                                <i class="{{ $menu['icon'] }}"></i>
                                <span>{{ $menu['title'] }}</span>
                            </a>
                            
                            <ul class="submenu ">
                                @foreach ($menu['childrens'] as $item)
                                <li class="submenu-item ">
                                    <a href="{{ $item['url'] }}">{{ $item['title'] }}</a>
                                </li>
                                @endforeach
                            </ul>
                        </li>
                    @else
                        <li class="sidebar-item @yield('active1') ">
                            <a href="{{ $menu['url'] }}" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>{{ $menu['title'] }}</span>
                            </a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>