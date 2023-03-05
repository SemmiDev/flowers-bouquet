<?php
include_once 'data.php';
$flowerId = $_GET['id'];
$flower = findFlowerById($flowerId);
if ($flower == null) {
    header('Location: index.php');
    exit();
}

$flowerInJSON = json_encode($flower);
?>

<!doctype html>
<html data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css" rel="stylesheet">
    <link href="./fonts.css" rel="stylesheet">
</head>

<body>
    <div class="w-full mx-auto pb-20">
        <?php include_once 'navbar.php'; ?>

        <script>
        localStorage.removeItem('currentProduct');
        const currentProduct = JSON.parse(localStorage.getItem('currentProduct')) || [];
        currentProduct.push(<?php echo $flowerInJSON ?>);
        localStorage.setItem('currentProduct', JSON.stringify(currentProduct));
        </script>

        <div class="relative h-20"></div>
        <input type="hidden" value="<?php echo $flower['id'] ?>" id="flowerId">
        <div
            class="pb-6 w-56 relative mx-auto overflow-hidden border border-black/20 shadow shadow-gray-300 shadow-xl rounded-2xl bg-white">
            <?php echo buildImage($flower['picture']) ?>
            <div class="px-5 mt-2 flex justify-between items-center">
                <div>
                    <?php echo buildTitle($flower['name']) ?>
                    <?php echo buildPrice($flower['price']) ?>
                </div>
            </div>
        </div>
        <div class="mx-auto mt-5 w-56">
            <div class="flex justify-between w-full items-center">
                <button id="btn-minus" class="bg-red-300 text-red-800 hover:bg-gray-400 rounded-l-lg px-2 py-1">
                    -
                </button>
                <input id="quantity" type="text"
                    class="w-12 text-center border-gray-300 focus:outline-none focus:border-blue-300 px-2 py-1"
                    value="0">
                <button id="btn-plus" class="bg-sky-300 text-green-800 hover:bg-gray-400 rounded-r-lg px-2 py-1">
                    +
                </button>
            </div>
            <button class="btn mt-2 btn-success btn-sm w-full btn-outline">
                Add to Cart
            </button>
        </div>

        <script>
        const qty = document.getElementById('quantity');
        const btnMinus = document.getElementById('btn-minus');
        const btnPlus = document.getElementById('btn-plus');

        btnMinus.addEventListener('click', () => {
            if (qty.value > 0) {
                qty.value = parseInt(qty.value) - 1;
            }
        });

        btnPlus.addEventListener('click', () => {
            qty.value = parseInt(qty.value) + 1;
        });

        // get carts key on local storage
        const carts = JSON.parse(localStorage.getItem('carts')) || [];

        // get flower id
        const flowerId = document.getElementById('flowerId').value;

        // get button add to cart
        const btnAddToCart = document.querySelector('.btn-outline');

        const flower = JSON.parse(localStorage.getItem('currentProduct'))[0];

        // add to cart
        btnAddToCart.addEventListener('click', () => {
            // check if flower already in cart
            const cart = carts.find(cart => cart.id == flowerId);

            if (cart) {
                // if flower already in cart, update quantity
                cart.quantity = parseInt(cart.quantity) + parseInt(qty.value);
            } else {
                // if flower not in cart, add to cart
                carts.push({
                    id: flower.id,
                    name: flower.name,
                    price: flower.price,
                    picture: flower.picture,
                    quantity: qty.value,
                });
            }

            // save carts to local storage
            localStorage.setItem('carts', JSON.stringify(carts));
            location.reload();
        });
        </script>
</body>

</html>
