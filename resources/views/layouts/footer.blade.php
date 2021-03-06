<!-- footer -->
<footer class="footer wr-color">
    <div class="container">
        <hr>
        <div class="row text-c-992">
            <div class="col-lg-3 col-md-3">
                <ul>
                    <li>
                        <img src="/img/logo.png" alt="">
                    </li>
                    <li class="d-sm-none d-sm-none d-none d-md-block">© 2020 «Goodion»</li>
                    <li class="d-sm-none d-sm-none d-none d-md-block under"><a href="/users_agreement">Пользовательское соглашение</a></li>
                </ul>
            </div>
            <div class="col-lg-1 col-md-2">
                <ul>
                    <li>
                        <a href="/">Каталог</a>
                    </li>
                    <li>
                        <a href="/about">О нас</a>
                    </li>
                    <li><a href="/feedback">Обратная связь</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-3  offset-lg-1 offset-md-1">
                <ul>
                    <li>
                        <a href="/delivery_payment">Доставка и оплата</a>
                    </li>
                    <li>
                        <a href="/offers_news">Акции и новости</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-3">
                <ul>
                    <li>
                        @guest
                            @if (Route::has('register'))
                                    <a href="{{ route('register') }}">{{ __('Регистрация') }}</a>
                                        /
                            @endif

                            <a href="{{ route('login') }}">{{ __('Вход') }}</a>
                        @else
                            {{ Auth::user()->name }}
                                /
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">{{ __('Выход') }}
                                </a>
                        @endguest
                    </li>
                    <li>
                        <a href="/cart">Корзина</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-2  offset-lg-1">
                <ul>
                    <li >
                        <a href="tel:84950154321">+7 (495) 015-43-21</a>
                    </li>
                    <li>
                        <a href="mailto:info@goodion.ru">info@goodion.ru</a>
                    </li>
                    <li class="b-soti">
                        <a href="https://www.instagram.com/goodion.ru/" target="_blank"><img src="/img/icon/instagram-b.png" alt=""></a>
                        <a href="https://www.facebook.com/" target="_blank"><img src="/img/icon/facebook-b.png" alt=""></a>
                        <a href="https://vk.com/goodion" target="_blank"><img src="/img/icon/vk-b.png" alt=""></a>
                    <li class="d-block d-md-none">© 2020 «Goodion»</li>
                    <li class="d-block d-md-none under"><a href="/users_agreement">Пользовательское соглашение</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
