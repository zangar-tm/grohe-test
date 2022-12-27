<section class="subscribe">
    <div class="subscribe-main">
        <div class="subscribe-warning hidden">
            <span class="subscribe-response"></span>
        </div>
        <div class="subs-form">
            <x-form action="{{route('customer.subscribe')}}" class="subscribe-form">
                <div class="subscribe-left">
                    <div class="subscribe-left-title">Подписка</div>
                    <div class="subscribe-left-text">Подпишитесь, чтобы первыми узнавать о новых моделях, акциях и
                        спецпредложениях</div>
                </div>
                <div class="subscribe-right">
                    <div>
                        <input type="text" name="email" placeholder="Введите свой e-mail" value="">
                    </div>
                    <button type="submit" class="subscribe-btn submit" data-onsuccess="subscribesuccess" data-onerror="errorsubscribe" data-sitekey="{{setting('captcha_api_key')}}">Подписаться</button>
                    <div class="error-email"></div>
                    <div class="subscribe-right-desc"> Нажимая кнопку «Подписаться», вы даете <a href="">согласие на
                            обработку персональных данных</a> и получение информационных сообщений. </div>
                </div>
            </x-form>
        </div>
    </div>
</section>
