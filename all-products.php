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
    <div class="w-full mx-auto pb-20">
        <?php include_once 'navbar.php'; ?>

        <div class="relative h-20">

        </div>
        <div id="start-shopping" class="flex py-12 items-center justify-center bg-[#EEEEEE] flex-col">
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-5 mt-5">
                <?php foreach ($flowers  as $k => $flower) : ?>
                    <div class="pb-6 w-56 relative overflow-hidden rounded-2xl bg-white">
                        <?php echo buildImage($flower['picture']) ?>
                        <div class="px-5 mt-2 flex justify-between items-center">
                            <div>
                                <?php echo buildTitle($flower['name']) ?>
                                <?php echo buildPrice($flower['price']) ?>
                            </div>
                            <?php echo buildCartIcon($flower['id']) ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>


    <?php include 'footer.php' ?>
</body>

</html>
