<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
    <link href="./style.css" rel="stylesheet">
    <link href="./fonts.css" rel="stylesheet">
</head>

<body class="flex flex-col items-center min-h-screen w-full justify-center">

    <form action="process.php" method="post" class="flex flex-col gap-1">
        <input name="name" type="text" hidden value="-" id="name">
        <input name="total" type="text" hidden value="-" id="total">
        <input name="paymentMethod" type="text" hidden value="-" id="paymentMethod">
        <input name="data" type="text" hidden value="-" id="carts">
        <button class="justify-center items-center btn btn-xl btn-primary btn-outline">thank you for your order
        </button>
        <button href="index.php" class="btn btn-info mt-5">SELESAI</button>
    </form>

    <script>
        let name = localStorage.getItem('name');
        let total = localStorage.getItem('total');
        let paymentMethod = localStorage.getItem('paymentMethod');
        let cartsData = JSON.parse(localStorage.getItem('carts')) || [];

        // set value in form
        document.getElementById('name').value = name;
        document.getElementById('total').value = total;
        document.getElementById('paymentMethod').value = paymentMethod;
        document.getElementById('carts').value = JSON.stringify(cartsData);
    </script>
</body>

</html>
