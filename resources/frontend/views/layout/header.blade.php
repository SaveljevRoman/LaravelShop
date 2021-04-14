<div class="header">

    <div class="header__logo">
        @if(request()->route()->getName() !== 'pages.home')
            <a class="header__logo" href="{{ routing('pages.home') }}">ShopLogo</a>
        @else
            ShopLogo
        @endif

    </div>

    <div class="header__menu">
        <div class="header__menu-item">
            @if(request()->route()->getName() !== 'pages.products')
                <a class="header__menu-item" href="{{ routing('pages.products') }}">Все товары</a>
            @else
                <span class="header__active">Все товары</span>
            @endif
        </div>
        <div class="header__menu-item">
            @if(request()->route()->getName() !== 'pages.categories')
                <a class="header__menu-item" href="{{ routing('pages.categories') }}">Категории</a>
            @else
                <span class="header__active">Категории</span>
            @endif
        </div>
    </div>

    <div class="header__right">
        <div class="header__right-item"><span class="search">Поиск</span></div>
        <div class="header__right-item"><span class="delimiter"></span></div>
        <div class="header__right-item">Корзина</div>
        <div class="header__right-item button">Войти</div>
    </div>

</div>
