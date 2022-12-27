<div v-for="(product, index) in products.data" class="mainStore-product-single">
    <div class="mainStore-product-item">
        <span class="saleMark" v-if="product.old_price" >Акция</span>
        <span class="newMark" v-if="product.is_new && !product.old_price">Новинка</span>
        <div class="mainStore-product-item-img">
            <a :href="'/products/' + product.slug">
                <img :src="'/storage/' + product.image" alt="">
            </a>
        </div>
        <div class="mainStore-product-item-text">
            <h3> <a :href="'/products/' + product.slug">@{{product.title}}</a> </h3>
            <div class="mainStore-product-item-price">
                <span class="oldPrice" v-if="product.old_price">@{{(new Intl.NumberFormat().format(product.old_price)).toString().replace(',', ' ')}}
                    <strong class="font-light">₸</strong>
                </span>
                <span>@{{(new Intl.NumberFormat().format(product.new_price)).toString().replace(',', ' ')}}
                <strong class="font-medium">₸</strong>
            </span>
        </div>
            <div class="price-and-buy">
                <div class="mainStore-product-item-saving" v-if="product.old_price">
                    <p>экономия <span class="savingPrice">@{{(new Intl.NumberFormat().format(parseInt(product.old_price) - parseInt(product.new_price))).toString().replace(',', ' ') }}
                            <strong class="font-light">₸</strong></span></p>
                </div>
                <div class="mainStore-product-item-btnBuy">
                    <div>
                        <button v-if="!product.inCart" @click.prevent="addToCart(product)" class="btnBuy buy-product active-btn submit">
                            <span>Купить</span>
                        </button>
                        <a v-else class="btnBuy checkout-btn" :href="'/cart'">
                            <span>Оформить</span>
                        </a>
                    </div>
                    <button class="btnCredit">
                        <span class="btnCredit-numbs">0-0-12</span>
                        <span class="btnCredit-text">Расчитать</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
