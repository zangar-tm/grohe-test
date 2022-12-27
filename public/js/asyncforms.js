document.addEventListener("DOMContentLoaded", function() {


window.addcartsuccess = function addcartsuccess(data) {
    if(data.hasOwnProperty("success")) {
        document.querySelector('.cart-counts').innerText = data.count;
        Array.from(document.querySelectorAll('.product-' + data.id)).forEach(function ($prod) {
            $prod.querySelector('.buy-product').classList.remove('active-btn');
            $prod.querySelector('.checkout-btn').classList.remove('hidden');
        });
    }
}
window.sendcodesuccess = function sendcodesuccess(data) {
    if(data.hasOwnProperty("success")) {
        document.querySelector('.reset-code').classList.remove('hidden');
        document.querySelector('.code-email').innerHTML = data.email;
    }
}

window.promocodeerror = function promocodeerror(error) {
    const errors = error.data;
    if(errors.hasOwnProperty("promocodeError")) {
        document.querySelector('.info-ok').classList.add('hidden');
        document.querySelector('.info-err').classList.remove('hidden');
    }
}

window.cartsimilarsuccess = function cartsimilarsuccess(data) {
    if(data.hasOwnProperty("success")) {
        document.querySelector('.cart-counts').innerText = data.count;
        Array.from(document.querySelectorAll('.product-' + data.id)).forEach(function ($prod) {
            $prod.querySelector('.buy-product').classList.remove('active-btn');
            $prod.querySelector('.checkout-btn').classList.remove('hidden');
        });
    }
}

window.additemsuccess = function additemsuccess(data) {
    if(data.hasOwnProperty("success")) {
        document.querySelector('.buy-product').classList.remove('active-btn');
        document.querySelector('.checkout-btn2').classList.add('active-btn');
        document.querySelector('.cart-counts').innerText = data.count;
    }
}

window.prodsimilarsuccess = function prodsimilarsuccess(data) {
    if(data.hasOwnProperty("success")) {
        document.querySelector('.cart-counts').innerText = data.count;
        Array.from(document.querySelectorAll('.product-' + data.id)).forEach(function ($prod) {
            $prod.querySelector('.buy-product').classList.remove('active-btn');
            $prod.querySelector('.checkout-btn').classList.remove('hidden');
        });
    }
}

window.salesuccess = function salesuccess(data) {
    const promocode = data.promocode;
    const num = new Intl.NumberFormat().format(data.final_price);
    final_price = num.toString().replace(',', ' ');
    document.getElementById("predtotal").innerHTML = final_price;
    document.getElementById("finalpricefast").innerHTML = final_price;
    document.getElementById("finalpricefast2").value = final_price;
    document.getElementById("finalpriceBtn").innerHTML = final_price;
}

window.contactsuccess = function contactsuccess(success_contact) {
    console.log(success_contact);
    document.querySelector('.ok-msg').innerHTML = data.success-contact;
}

Array.from(document.querySelectorAll('.cartPage-item')).forEach(function ($item) {
    const $input = $item.querySelector('.quantity-input');
    const $minus = $item.querySelector('.minus-count');
    const $plus = $item.querySelector('.plus-count');

    $minus.addEventListener('click', function (event) {
        changeCount("-")
    });
    $plus.addEventListener('click', function (event) {
        changeCount("+")
    });
    $input.addEventListener('keyup', sendToBack);

    function changeCount(value) {
        switch (value) {
            case '+':
                $input.value = Number(parseInt($input.value) + 1);
                sendToBack();
                break;
            case '-':
                if($input.value > 1) {
                    $input.value = Number(parseInt($input.value) - 1);
                sendToBack();
                }
                break
        }
    }

    function sendToBack() {
        axios.post('/update-item', {
            id: $input.dataset.product,
            quantity: $input.value
        }).then(function (response) {
            const num = new Intl.NumberFormat().format(response.data.total);
            final_price = num.toString().replace(',', ' ');
            document.getElementById('predtotal').innerHTML = final_price;
            document.getElementById('finalpriceBtn').innerHTML = final_price;
            document.getElementById('finalpricefast').innerHTML = final_price;
            document.getElementById('finalpricefast2').value = final_price;
            document.getElementById('saletotal').value = final_price;
            document.getElementById('countitems').innerHTML = response.data.count;
        });
    }
});

window.loginsuccess = function loginsuccess() {
    location.href='/';
}

window.registersuccess = function registersuccess() {
    location.href='/login';
}

window.searchitemsuccess = function searchitemsuccess(data) {
    if(data.hasOwnProperty("success")) {
        document.querySelector('.cart-counts').innerText = data.count;
        Array.from(document.querySelectorAll('.product-' + data.id)).forEach(function ($prod) {
            $prod.querySelector('.buy-product').classList.remove('active-btn');
            $prod.querySelector('.checkout-btn').classList.remove('hidden');
        });
    }
}

function subscribestatus(data) {
    document.querySelector('.subscribe-left').classList.add('hidden');
    document.querySelector('.subscribe-right').classList.add('hidden');
    document.querySelector('.subscribe-warning').classList.remove('hidden');
    document.querySelector('.subscribe-warning').classList.add('show');
    document.querySelector('.subs-form').classList.add('hidden');
    document.querySelector('.subscribe-response').innerHTML = data;

}

window.errorsubscribe = function errorsubscribe(error) {
    const errors = error.data;
    if(errors.hasOwnProperty("exists")) {
        subscribestatus(errors.exists)
    }
}
window.subscribesuccess = function subscribesuccess(data) {
    if(data.hasOwnProperty("success")) {
        subscribestatus(data.success);
    }
}


window.categoryprodsuccess = function categoryprodsuccess(data) {
    if(data.hasOwnProperty("success")) {
        document.querySelector('.cart-counts').innerText = data.count;
        Array.from(document.querySelectorAll('.product-' + data.id)).forEach(function ($prod) {
            $prod.querySelector('.buy-product').classList.remove('active-btn');
            $prod.querySelector('.checkout-btn').classList.remove('hidden');
        });
    }
}

window.noveltyprodsuccess = function noveltyprodsuccess(data) {
    if(data.hasOwnProperty("success")) {
        document.querySelector('.cart-counts').innerText = data.count;
        Array.from(document.querySelectorAll('.product-' + data.id)).forEach(function ($prod) {
            $prod.querySelector('.buy-product').classList.remove('active-btn');
            $prod.querySelector('.checkout-btn').classList.remove('hidden');
        });
    }
}
});
