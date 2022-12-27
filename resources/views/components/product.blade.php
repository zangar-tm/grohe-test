@props(["product", "new"])
<div class="mainStore-product-single">
    <div class="mainStore-product-item product-{{$product->id}}">
        @if ($new)
            <span class="newMark">Новинка</span>
        @elseif(isset($product->old_price))
            <span class="saleMark">Акция</span>
        @endif
        <div class="mainStore-product-item-img">
            <a href="/products/{{$product->slug}}">
                <img src="/storage/{{$product->image}}" alt="">
            </a>
        </div>
        <div class="mainStore-product-item-text">
            <h3> <a href="/products/{{$product->slug}}">{{$product->title}}</a> </h3>
            <div class="mainStore-product-item-price">
                @if(isset($product->old_price))
                <span class="oldPrice">{{number_format($product->old_price,0,","," ")}}
                    <strong class="font-light">₸</strong>
                </span>
                @endif
                <span>{{number_format($product->new_price,0,","," ")}} <strong class="font-medium">₸</strong></span> </div>
            <div class="price-and-buy">
                @if(isset($product->old_price))
                    <div class="mainStore-product-item-saving">
                        <p>экономия <span class="savingPrice">{{number_format(intval($product->old_price)-intval($product->new_price),0,","," ") }}
                                <strong class="font-light">₸</strong></span></p>
                    </div>
                @endif
                <div class="mainStore-product-item-btnBuy">
                    <x-form action="{{route('cart.addItem')}}">
                        <input type="hidden" name="product_id" value="{{$product->id}}">
                        @if(!$product->inCart)
                            <button class="btnBuy buy-product active-btn submit"
                                data-onsuccess="categoryprodsuccess"
                                data-sitekey="{{setting('captcha_api_key')}}" type="submit">
                                <span>Купить</span>
                            </button>
                            <a class="btnBuy checkout-btn hidden" href="/cart">
                                <span>Оформить</span>
                            </a>
                        @else
                            <button class="btnBuy buy-product hidden">
                                <span>Купить</span>
                            </button>
                            <a class="btnBuy checkout-btn" href="/cart">
                                <span>Оформить</span>
                            </a>
                        @endif
                    </x-form>
                    <button class="btnCredit">
                        <span class="btnCredit-numbs">0-0-12</span>
                        <span class="btnCredit-text">Расчитать</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
