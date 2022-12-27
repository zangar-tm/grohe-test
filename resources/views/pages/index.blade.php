@extends('layouts.app')

@section('title', 'Grohe - Официальный интернет-магазин')
@section('content')
<section class="storeSlider">
    <div class="storeSlider-menuSlider">
        <div class="storeSlider-menuSlider-main mainStore-container">
            <div class="storeSlider-mainSlider">
                <div class="swiper carousel storeSlider-swiper">
                    <div class="swiper-wrapper">
                        @foreach ($slides as $slide)
                        <div class="swiper-slide"> <a href="#"> <img src="/storage/{{$slide->image}}" alt=""> </a>
                        </div>
                        @endforeach
                    </div>
                    <div class="storeSlider-swiper-navsBtn">
                        <div class="swiper-button-prev main-btnPrev"> <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill="currentColor" class="bi bi-chevron-compact-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z">
                                </path>
                            </svg> </div>
                        <div class="swiper-button-next main-btnNext"> <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill="currentColor" class="bi bi-chevron-compact-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M6.776 1.553a.5.5 0 0 1 .671.223l3 6a.5.5 0 0 1 0 .448l-3 6a.5.5 0 1 1-.894-.448L9.44 8 6.553 2.224a.5.5 0 0 1 .223-.671z">
                                </path>
                            </svg> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="mainStore">
    <div class="mainStore-container">
        <div class="mainStore-main">
            <div>
                <h2 class="mainStore-main-title">ГОТОВЫЕ НАБОРЫ</h2>
                <div>
                    <div class="mainStore-product">
                        <div class="swiper carousel swiper-products">
                            <div class="swiper-wrapper">
                                @foreach ($setproducts as $sp)
                                    <div class="swiper-slide">
                                        <x-product :product="$sp" :new="$sp->is_new"/>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="products-btnPrev"></div>
                        <div class="products-btnNext"></div>
                    </div>
                </div>
                <h2 class="mainStore-main-title">ПОПУЛЯРНЫЕ ТОВАРЫ</h2>
                <div>
                    <div class="mainStore-product-popularProds">
                        <div class="swiper popularProds-swiper">
                            <div class="swiper-wrapper">
                                @foreach ($products as $prod)
                                    <div class="swiper-slide">
                                        <x-product :product="$prod" :new="$prod->is_new"/>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="popularProds-navs">
                            <div class="popularProds-btnPrev"> <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z">
                                    </path>
                                </svg>
                            </div>
                            <div class="popularProds-btnNext"> <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="mainStore-services">
    <div class="mainStore-container">
        <div class="mainStore-services-main">
            <div class="mainStore-services-item"> <a href=""> <span class="mainStore-services-icon"></span>
                    <span class="mainStore-services-desc">Бесплатная доставка по Алматы при сумме заказа от
                        50000 тенге.</span> </a>
            </div>
            <div class="mainStore-services-item"> <a href=""> <span class="mainStore-services-icon"></span>
                    <span class="mainStore-services-desc">Расширенная фирменная гарантия на всю продукцию до 10 лет.</span> </a>
            </div>
            <div class="mainStore-services-item"> <a href=""> <span class="mainStore-services-icon"></span>
                    <span class="mainStore-services-desc">Специальные условия возврата товара. Возврат по любой
                        причине в течение 14 дней.</span> </a>
            </div>
            <div class="mainStore-services-item"> <a href=""> <span class="mainStore-services-icon"></span>
                    <span class="mainStore-services-desc">Профессиональная поддержка и установка
                        квалифицированными специалистами.</span> </a>
            </div>
        </div>
    </div>
</section>
<section class="whatsApp">
    <button class="close-whatsApp">
        <svg xmlns="http://www.w3.org/2000/  svg" width="20"
            height="20" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
            <path
                d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z">
            </path>
        </svg>
    </button>
    <a href="" target="_blank"> <svg width="60" height="60"
            style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421" version="1.1"
            viewBox="0 0 24 24" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
            xmlns:serif="http://www.serif.com/" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g>
                <g>
                    <path
                        d="M4.018,17.048c-0.96,-1.484 -1.518,-3.253 -1.518,-5.151c0,-5.243 4.257,-9.5 9.5,-9.5c5.243,0 9.5,4.257 9.5,9.5c0,5.243 -4.257,9.5 -9.5,9.5c-1.777,0 -3.44,-0.489 -4.863,-1.339l-4.637,1.545l1.518,-4.555Z"
                        style="fill:#f3f3f3"></path>
                    <path
                        d="M5.795,16.304c-0.886,-1.244 -1.407,-2.765 -1.407,-4.407c0,-4.201 3.411,-7.612 7.612,-7.612c4.201,0 7.612,3.411 7.612,7.612c0,4.201 -3.411,7.611 -7.612,7.611c-1.59,0 -3.066,-0.488 -4.288,-1.323l-2.862,0.954l0.945,-2.835Z"
                        style="fill:#00a82d"></path>
                </g>
                <path
                    d="M9.714,13.873c-1.124,-1.374 -1.874,-3.056 -2.109,-4.88c-0.063,-0.508 0.106,-1.018 0.461,-1.387c0.355,-0.369 0.858,-0.558 1.368,-0.515l0.049,0.005c0,0 0.561,0.15 0.868,0.233c0.122,0.033 0.219,0.124 0.26,0.243c0.138,0.41 0.464,1.373 0.618,1.826c0.05,0.147 0.004,0.31 -0.114,0.41c-0.233,0.196 -0.618,0.52 -0.858,0.723c-0.129,0.109 -0.17,0.29 -0.1,0.443c0.279,0.608 0.635,1.176 1.057,1.69c0.434,0.502 0.933,0.949 1.485,1.327c0.14,0.095 0.325,0.085 0.454,-0.024c0.241,-0.202 0.626,-0.526 0.858,-0.722c0.119,-0.1 0.287,-0.117 0.424,-0.043c0.42,0.228 1.314,0.712 1.694,0.918c0.111,0.06 0.185,0.172 0.196,0.297c0.029,0.317 0.083,0.895 0.083,0.895l-0.004,0.049c-0.044,0.51 -0.315,0.974 -0.739,1.261c-0.424,0.288 -0.955,0.368 -1.445,0.22c-1.772,-0.545 -3.313,-1.581 -4.479,-2.937l-0.027,-0.032Z"
                    style="fill:#f3f3f3"></path>
            </g>
        </svg> </a>
</section>
@endsection
