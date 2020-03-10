<!-- header -->
<header class="header d-sm-none d-none d-md-block" id="header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-3 header__contact">
                <a href="#"><img src="/img/icon/whatsapp.png" alt=""></a>
                <a href="tg://resolve?domain="><img src="/img/icon/telegram.png" alt=""></a>
                <a href="viber://add?number=88001234567">
                    <img src="/img/icon/viber.png" alt=""></a>
            </div>
            <div class="col-md-auto m-auto header__tel">
                <a href="tel:84950154321">+7 (495) 015-43-21</a>
            </div>
            @guest
                <div class="col-md-3 header__reg">

                    @if (Route::has('register'))
                        <div class="reg"><a href="{{ route('register') }}">{{ __('Регистрация') }}</a>
                            /
                            @endif

                            <a href="{{ route('login') }}">{{ __('Вход') }}</a></div>
                </div>
            @else
                <div class="col-md-3 header__reg">
                    <div class="reg">{{ Auth::user()->name }}
                        /
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Выход') }}
                        </a>
                    </div>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            @endguest
        </div>
    </div>
</header>
