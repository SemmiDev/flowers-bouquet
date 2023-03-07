<?php include_once 'data.php'; ?>

<!doctype html>
<html data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css" rel="stylesheet">
    <link href="./fonts.css" rel="stylesheet">
</head>

<body>
    <script>
    let cartsData = JSON.parse(localStorage.getItem('carts')) || [];

    function total() {
        let total = 0;
        cartsData.forEach((cart) => {
            total += cart.price * cart.quantity;
        });

        // save total to local storage
        localStorage.setItem('total', `Rp ${toRp(total)}`);

        return total;
    }

    function minus(id) {
        const quantityId = `quantity-${id}`;
        let quantity = document.getElementById(quantityId).value;
        if (quantity > 0) {
            quantity--;
        }
        document.getElementById(quantityId).value = quantity;

        // if 0 so remove from cart
        if (quantity == 0) {
            cartsData = cartsData.filter((cart) => cart.id != id);
            localStorage.setItem('carts', JSON.stringify(cartsData));

            // refresh page
            window.location.reload();
        }

        // update quantiy in carts
        cartsData.forEach((cart) => {
            if (cart.id == id) {
                cart.quantity = quantity;
            }
        });

        localStorage.setItem('carts', JSON.stringify(cartsData));

        // update total
        document.querySelector('.text-green-700').innerHTML = `Rp ${toRp(total())}`;

        // save total to local storage
        localStorage.setItem('total', `Rp ${toRp(total())}`);
    }

    function plus(id) {
        const quantityId = `quantity-${id}`
        let quantity = document.getElementById(quantityId).value;
        quantity++;
        document.getElementById(quantityId).value = quantity;

        // update total
        document.querySelector('.text-green-700').innerHTML = `Rp ${toRp(total())}`;

        // save total to local storage
        localStorage.setItem('total', `Rp ${toRp(total())}`);

        // update cart
        cartsData.forEach((cart) => {
            if (cart.id == id) {
                cart.quantity = quantity;
            }
        })
        localStorage.setItem('carts', JSON.stringify(cartsData));
    }

    function toRp(angka) {
        var rev = parseInt(angka, 10).toString().split('').reverse().join('');
        var rev2 = '';
        for (var i = 0; i < rev.length; i++) {
            rev2 += rev[i];
            if ((i + 1) % 3 === 0 && i !== (rev.length - 1)) {
                rev2 += '.';
            }
        }
        return rev2.split('').reverse().join('')
    }
    </script>


    <div class="w-full mx-auto pb-20">
        <?php include_once 'navbar.php'; ?>

        <div class="relative h-20">

        </div>
        <div class="max-w-3xl w-full p-12 mx-auto">
            <h1 class="text-3xl font-semibold text-left">Shopping Cart</h1>
            <div class="divider"></div>

            <div class="flex flex-col gap-y-3">
                <script>
                for (let i = 0; i < cartsData.length; i++) {
                    document.write(`
                        <div class="flex gap-x-5 justify-between">
                        <div class="flex gap-x-2">
                            <img src="${cartsData[i].picture}" alt="empty cart" class="w-12 h-14 rounded-xl object-cover">
                            <div>
                                <h1 class="font-medium text-black">${cartsData[i].name}</h1>
                                <h1 class="font-semibold text-orange-500 text-xs">Rp ${toRp(cartsData[i].price)}</h1>
                            </div>
                        </div>
                            <div class="flex ml-5 justify-between w-24 items-center">
                                <button
                                onclick="minus(${cartsData[i].id})"
                                id="btn-minus" class="bg-gray-300 text-gray-800 hover:bg-gray-400 rounded-l-lg px-2 py-1">
                                    -
                                </button>
                                <input
                                id="quantity-${cartsData[i].id}"
                                type="text" class="w-12 text-center border-gray-300 focus:outline-none focus:border-blue-300 px-2 py-1" value="${cartsData[i].quantity}">
                                <button
                                onclick="plus(${cartsData[i].id})"
                                id="btn-plus" class="bg-gray-300 text-gray-800 hover:bg-gray-400 rounded-r-lg px-2 py-1">
                                    +
                                </button>
                            </div>
                        </div>
                        `);
                }
                </script>


                <div class="form-control w-full max-w-xs">
                    <label class="label">
                        <span class="label-text">Masukkan nama anda</span>
                    </label>
                    <input type="text" id="name" onchange="saveName()" placeholder="Otong"
                        class="input input-bordered w-full input-sm max-w-xs" />
                </div>

                <div>
                    <h1 class="text-sm font-bold">Pilih Metode Pembayaran</h1>
                    <img src="./images/payment.png" class="w-56 object-cover" alt="">
                    <select onchange="savePaymentMethod()" name="payment-method" id="payment-method">
                        <option disabled selected>
                            <div class="flex items-center">
                                Pilih
                            </div>
                        </option>
                        <option value="ovo">
                            <div class="flex items-center">
                                OVO
                            </div>
                        </option>
                        <option value="dana">
                            <div class="flex items-center">
                                Dana
                            </div>
                        </option>
                        <option value="bri">
                            <div class="flex items-center">
                                BRI
                            </div>
                        </option>
                        <option value="bni">
                            <div class="flex items-center">
                                BNI
                            </div>
                        </option>
                    </select>
                </div>

                <div class="flex flex-col gap-y-2 mt-12">
                    <div>
                        <h1>Total</h1>
                        <p class="font-bold text-sm text-green-700">
                            <script>
                            document.write(`Rp ${toRp(total())}`);
                            </script>
                        </p>
                    </div>

                    <a href="checkout.php" class="btn btn-sm btn-outline w-32 btn-info">
                        Checkout
                    </a>
                </div>
            </div>

        </div>
    </div>
    <script>
    function savePaymentMethod() {
        const paymentMethod = document.getElementById('payment-method').value;
        localStorage.setItem('paymentMethod', paymentMethod);
    }

    function saveName() {
        const name = document.getElementById('name').value;
        localStorage.setItem('name', name);
    }
    </script>
</body>

</html>
