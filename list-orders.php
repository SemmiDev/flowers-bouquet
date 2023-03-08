<?php include_once 'data.php'; ?>

<!doctype html>
<html data-theme="light">

<?php
include 'koneksi.php';

$sql = "SELECT * FROM orders ORDER BY id DESC";
$result = mysqli_query($koneksi, $sql);
$ordersList = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css" rel="stylesheet">
    <link href="./fonts.css" rel="stylesheet">
</head>

<body>
    <div class="w-full mx-auto pb-20">
        <?php include_once 'navbar.php'; ?>

        <div class="relative h-20">

        </div>
        <div class="max-w-3xl w-full p-12 mx-auto">
            <h1 class="text-3xl font-semibold text-left">List Orders</h1>
            <div class="divider"></div>

            <!-- loop the data -->
            <?php foreach ($ordersList as $order) : ?>
            <div class="flex flex-col w-full p-4 my-4 bg-white rounded-lg shadow-md">
                <div class="flex flex-row justify-between">
                    <div class="flex flex-col">
                        <h1 class="text-xl font-semibold text-left"><?= $order['name'] ?></h1>
                        <p class="text-xs text-left text-slate-900"><?= 'Email: ' . $order['email'] ?></p>
                        <p class="text-xs text-left text-slate-900"><?= 'Alamat: ' . $order['address'] ?></p>
                        <p class="text-xs text-left font-bold text-sky-600">
                            <?= 'Pembayaran: ' . $order['paymentMethod'] ?></p>
                    </div>
                    <div class="flex flex-col">
                        <h1 class="text-xl font-semibold text-right"><?= $order['total'] ?></h1>
                        <?php
                            $data = json_decode($order['data'], true);
                            ?>
                        <!-- loop $data -->
                        <div class="space-y-2">
                            <?php foreach ($data as $item) : ?>
                            <div class="flex items-center gap-x-2">
                                <img src="<?= $item['picture'] ?>" alt="" class="w-6 h-6 object-cover rounded-full">
                                <p class="text-sm text-right text-green-600">
                                    <?= $item['name'] . ' ➜ ' . $item['quantity']  . ' Buah' ?></p>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>
