@include('layouts.city_choice_modal')

<div class="container">
    <div class="headerUnder">
        <div class="row align-items-center">
            <div class="col-md-3 col-3 headerUnder__from  d-sm-none d-none d-md-block">
                <div class="headerUnder__from__city">
                    <img src="/img/icon/pin.png" alt="">
                    <a href="#" role="button" data-toggle="modal" data-target="#cityChoiceModal" onclick="$('#cityChoiceModal').modal()">
                        {{ Cookie::get('city') ?? 'Ваш город' }}
                    </a>
                </div>
            </div>
            <div class="col-md-auto col-6 mr-auto m-md-auto headerUnder__logo">
                <a href="/"><img src="/img/logo.png" alt=""></a>
            </div>
            <div class="col-md-3 col-auto headerUnder__reg d-flex align-items-center justify-content-end">
                <a href="/cart"><img src="/img/icon/supermarket.png" alt=""></a>
                <button class="hamburger hamburger--collapse menu-btn-top" type="button">
                      <span class="hamburger-box ">
                        <span class="hamburger-inner"></span>
                      </span>
                </button>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12">
            <nav class="munu-underTop">
                <ul>
                    <li class="d-block d-md-none">
                        <div class="headerUnder__from__city">
                            <img src="/img/icon/pin.png" alt="">
                            <a href="#" role="button" data-toggle="modal" data-target="#cityChoiceModal" onclick="$('#cityChoiceModal').modal()">
                                {{ Cookie::get('city') ?? 'Ваш город' }}
                            </a>
                        </div>
                    </li>
                    <li class="d-block d-md-none">
                        @guest
                            <div class="d-block d-md-none">

                                @if (Route::has('register'))
                                <div class="reg">
                                    <a href="{{ route('register') }}">{{ __('Регистрация') }}</a>
                                    /
                                @endif

                                <a href="{{ route('login') }}">{{ __('Вход') }}</a>
                                </div>
                            </div>
                        @else
                            <div class="d-block d-md-none">
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
                    </li>
                    <li class="item"><a {{ (Request::is('/') ? 'class=menu-active' : '') }} href="/">каталог</a></li>
                    <li class="item"><a {{ (Request::is('about') ? 'class=menu-active' : '') }} href="/about">о нас</a></li>
                    <li class="item"><a {{ (Request::is('feedback') ? 'class=menu-active' : '') }} href="/feedback">обратная связь</a></li>
                    <li class="item"><a {{ (Request::is('delivery_payment') ? 'class=menu-active' : '') }} href="/delivery_payment">доставка и оплата</a></li>
                    <li class="item"><a {{ (Request::is('offers_news') ? 'class=menu-active' : '') }} href="/offers_news">акции и новости</a></li>
                    <li class="item d-block d-md-none"><a href="tel:84950154321">+7 (495) 015-43-21</a></li>
                    <li class="sotioal d-block d-md-none">
                        <a href="https://wa.me/79067858470" target="_blank"><img src="/img/icon/whatsapp-black.png" alt=""></a>
                        <a href="https://telegram.im/@i_goodion" target="_blank"><img src="/img/icon/telegram-black.png" alt=""></a>
                        <a href="viber://chat?number=%2B79257203367" target="_blank"><img src="/img/icon/viber-black.png" alt=""></a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
