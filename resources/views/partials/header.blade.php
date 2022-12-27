@php
    $categories = App\Models\Category::where('parent_id', null)->with('children')->orderBy('position','asc')->get();
@endphp

<header class="header-main headerStore">
    <div class="relative">
        <div class="header-bottom headerBottom-boxShadow">
            <div class="header-bottom-container">
                <div class="header-bottom-logo"> <a href="/">
                        <div class="header-bottom-logo-main"></div>
                    </a>
                </div>
                <div class="searchMobile">
                    <form class="searchMobile-form" action="{{route('search.search')}}" method="GET">
                        <input type="text" name="query" placeholder="Поиск по сайту">
                        <button type="submit" class="btn-searchMobile">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                class="bi bi-search" viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z">
                                </path>
                            </svg>
                        </button>
                    </form>
                </div>
                <div class="header-bottom-main">
                    <div class="header-bottom-left">
                        <div class="header-bottom-left-main">
                            <div class="modalSearch-main hidden-search">
                                <form action="{{route('search.search')}}" class="modalSearch-form" method="GET">
                                    <div class="modalSearch-form-inpt">
                                        <input class="modalSearch-form-inpt input"
                                            type="text" name="query" placeholder="Поиск по названию или артикулу">
                                        <div class="modalSearch-modalSearchBtn">
                                            <button class="modalSearchBtn" type="submit">Найти</button>
                                        </div>

                                    </div>
                                    <button type="button" class="btn-close-modal"></button>
                                </form>

                            </div>
                            <ul class="header-bottom-left-nav">
                                <li class="show-menu1 header-bottom-left-list textRed">
                                    <a href="{{route('article.sales')}}" class="header-bottom-left-list-link">Акции</a>
                                </li>
                                <li class="header-bottom-left-list textDarkBlue">
                                    <a href="/new-products" class="header-bottom-left-list-link">Новинки</a>
                                </li>
                                @if ($categories->count()>0)
                                @foreach ($categories as $key => $category)
                                <li class="show-menu{{$key+1}} header-bottom-left-list">
                                    <a href="/categories/{{$category->slug}}" class="header-bottom-left-list-link">{{$category->title}}</a>
                                    <ul class="menu-hidden-list{{$key+1}} left-249px hidden">
                                        <div class="relative-list-block">
                                            @foreach ($category->children as $key => $child)
                                            <li class="show-list{{$key+1}} py-5px w-full"> <a href="/categories/{{$category->slug}}/{{$child->slug}}" class="w-full">
                                                    <span class="w-1/2">{{$child->title}} ({{$child->products->count()}})</span>
                                                    <img class="show-img{{$key+1}}" src="/storage/{{$child->image}}">
                                                </a>
                                            </li>
                                            @endforeach
                                        </div>
                                    </ul>
                                </li>
                                @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                    <div class="header-bottom-right">
                        <div class="header-bottom-right-search">
                            <button type="button" class="btn-search">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    class="bi bi-search" viewBox="0 0 16 16">
                                    <path
                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z">
                                    </path>
                                </svg>
                            </button>
                            <div class="help-window search-help"> <span>Поиск</span> </div>
                        </div>
                        <div class="header-bottom-right-login">
                            <div class="header-bottom-right-login-main"> <a href="/account" class="btn-personalArea">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor"
                                        class="bi bi-person-circle" viewBox="0 0 16 16">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
                                        <path fill-rule="evenodd"
                                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z">
                                        </path>
                                    </svg> </a> </div>
                            <div class="help-window account-help"> <span>Кабинет</span> </div>
                        </div>
                        <div class="header-bottom-right-cart"> <a href="/cart"> <svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-bag" viewBox="0 0 16 16">
                                    <path
                                        d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z">
                                    </path>
                                </svg>
                                    @php
                                    $items = \Cart::session(1)->getContent();
                                    @endphp
                                <span class="cart-counts">{{$items->count()}}</span></a>
                            <div class="help-window cart-help"> <span>Корзина</span> </div>
                        </div>
                        <div :class="['storeHeader-burger', {show_submenu: orderCollapse == 31}]"
                    @click="toggleOrderCollapse(31)"> <button class="btnBurgerMenu" aria-label="Main Menu"> <svg
                            width="40" height="40" viewBox="0 0 100 100">
                            <path class="line line1"
                                d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058">
                            </path>
                            <path class="line line2" d="M 20,50 H 80"></path>
                            <path class="line line3"
                                d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942">
                            </path>
                        </svg> </button>
                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="burgerMenu">
        <div class="burgerMenu-main">
            <ul>
                <li class="burgerMenu-main-list">
                    <a href=" @if(auth('customer')->user()){{route('home.account')}}@else{{route('home.login')}}@endif">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                            height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                            <path
                                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z">
                            </path>
                        </svg>
                        @if(Auth::guard('customer')->user())
                        <span>{{ auth('customer')->user()->first_name }} {{ auth('customer')->user()->last_name }}</span>
                        @else
                        <span>Войти</span>
                        @endif
                    </a>
                </li>
                <li class="burgerMenu-main-list sales"> <a href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="16"
                            height="16" fill="currentColor" class="bi bi-percent" viewBox="0 0 16 16">
                            <path
                                d="M13.442 2.558a.625.625 0 0 1 0 .884l-10 10a.625.625 0 1 1-.884-.884l10-10a.625.625 0 0 1 .884 0zM4.5 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm7 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z">
                            </path>
                        </svg> <span>Акции</span> </a>
                </li>
                @if ($categories->count()>0)
                @foreach ($categories as $key => $category)
                    <li :class="['burgerMenu-main-list', {bgBlue: orderCollapse == {{$key+2}}}]" @click="toggleOrderCollapse({{$key+2}})">
                        <span class="burgerMenu-main-list-heading"> <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill="currentColor" class="bi bi-plus-circle plusIcon" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z">
                                </path>
                                <path
                                    d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z">
                                </path>
                            </svg> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-dash-circle minusIcon" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z">
                                </path>
                                <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"></path>
                            </svg> <span class="burgerMenu-main-link">{{$category->title}}</span> </span> </li>
                <ul :class="['burgerMenu-submenu', {show_submenu: orderCollapse == {{$key+2}}}]">
                        @foreach ($category->children as $child)
                            <li class="burgerMenu-submenu-list">
                                <a href="/categories/{{$category->slug}}/{{$child->slug}}">
                                    <span>{{$child->title}}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @endforeach
                @endif
                <li class="burgerMenu-main-list bg-darkness">
                    <span class="burgerMenu-main-list-heading">
                        <a href="{{route('home.contact')}}">
                        <svg
                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                            <path
                                d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z">
                            </path>
                        </svg>
                        <span class="burgerMenu-main-link">Контакты</span>
                        </a>
                    </span>
                </li>
                <li class="burgerMenu-main-list bg-darkness">
                    <span class="burgerMenu-main-list-heading">
                        <a href="{{route('cart.cart')}}">
                        <svg
                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-bag" viewBox="0 0 16 16">
                            <path
                                d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z">
                            </path>
                        </svg>
                        @php
                        $items = \Cart::session(1)->getContent();
                        @endphp
                        <span class="burgerMenu-main-link">Корзина
                            <span class="cart-counts">{{$items->count()}}</span> шт.
                        </span>
                        </a>
                    </span>
                </li>
            </ul>
        </div>
    </div>
</header>
