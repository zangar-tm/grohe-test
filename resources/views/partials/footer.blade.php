@php
    $categories = App\Models\Category::where('parent_id', null)->with('children')->orderBy('position','asc')->get();
@endphp
<footer class="footerStore">
    <div class="footerStore-main">
        <div class="footerStore-container">
            <div class="footerStore-logo-mobile"> <a href=""> <img src="/img/store/logo2.png" alt=""> </a>
            </div>
            <div class="footerStore-top">
                <div class="footerStore-left">
                    <div class="footerStore-left-logo"> <a href=""> <img src="/img/store/logo2.png" alt=""> </a>
                    </div>
                </div>
                <div class="footerStore-right">
                    <div class="footerStore-right-main">
                        @if($categories->count()>0)
                        <div class="footerStore-right-item">
                            <div class="footerStore-item">
                                @foreach ($categories as $key => $category)
                                <a href="/categories/{{$category->slug}}" class="footerStore-main-title">{{$category->title}}</a>
                                @endforeach
                                <a href="/sales" class="footerStore-main-title">НОВИНКИ И АКЦИИ</a>
                                <a href="{{route('page.delivery')}}" class="footerStore-main-title mobile">Поддержка</a>
                            </div>
                        </div>
                        <div class="footerStore-right-item">
                            <div class="footerStore-item">
                                <a href="{{route('page.delivery')}}" class="footerStore-main-title">поддержка</a>
                                <a href="{{route('page.delivery')}}" class="footerStore-link">Доставка</a>
                                <a href="{{route('page.pickup')}}" class="footerStore-link">Самовывоз</a>
                                <a href="{{route('page.requisites')}}" class="footerStore-link">Реквизиты</a>
                                <a href="{{route('page.payment')}}" class="footerStore-link">Условия оплаты</a>
                                <a href="{{route('page.return')}}" class="footerStore-link">Возврат</a>
                                <a href="{{route('page.warranty')}}" class="footerStore-link">Гарантия</a>
                                <a href="{{route('page.installation')}}" class="footerStore-link">Установка</a>
                                <a href="{{route('page.service')}}" class="footerStore-link">Сервисные центры</a>
                            </div>
                        </div>
                        <div class="footerStore-right-item">
                            <div class="footerStore-left-contacts">
                                <span class="footerStore-left-contacts-title">Адрес</span>
                                <br>
                                <span class="footerStore-left-contacts-text">{{setting('site_address')}}</span>
                            </div>
                            <div class="footerStore-left-contacts">
                                <span class="footerStore-left-contacts-title">Телефон</span>
                                <br>
                                <a href="tel:{{setting('site_phone')}}" class="footerStore-link">{{setting('site_phone')}}</a>
                            </div>
                            <div class="footerStore-left-contacts">
                                <span class="footerStore-left-contacts-title">Email</span>
                                <br>
                                <a href="mailto:{{setting('site_email')}}" class="footerStore-link">{{setting('site_email')}}</a>
                            </div>
                            <div class="footerStore-item">
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="footerStore-bottom">
                <div class="footerStore-bottom-main">
                    <div class="footerStore-bottom-container">
                        <p class="footerStore-bottom-desc">{{now()->year}} Официальный интернет-магазин GROHE</p>
                        <div class="footerStore-bottom-text">
                            <div class="footerStore-bottom-workMode"> Время работы: <br> Пн-Вс.: 10:00-20:00
                            </div>
                            <div class="footerStore-bottom-pay"> <label>Мы принимаем:</label> <img
                                    src="/img/store/visa.png" alt=""> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
