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

        <div class="relative top-20 w-full h-full overflow-hidden">
            <img src="./images/Petals.jpg" alt="Avatar" class="opacity-70 rotate-180 object-cover w-full h-full" />
            <div class="absolute inset-0 gap-y-5 flex flex-col items-center justify-center">
                <h1 class="text-black text-7xl font-bold">Blooming With Beauty</h1>
                <p class="text-lg">Discover the perfect bouquet at our flower shop</p>
                <a href="index.php#start-shopping" class="px-12 py-3 bg-white hover:bg-base-200 mt-8 text-black rounded-full">
                    Shop Now
                </a>
            </div>
        </div>

        <section id="about-us" class="grid py-12 grid-cols-2 text-white mt-20 px-20 w-full place-items-center self-center bg-[#9E9D89]">
            <div>
                <h1 class="text-7xl">About</h1>
                <p class="mt-12 max-w-lg break-all w-full">
                    At Flowerea, we're passionate about delivering nature's finest creations to your doorstep. Our team
                    of expert fliorists craft each arrangement with care and attention to details. ensuring that every
                    customer receives a stunning bouqet that's sure to brighten up their day. With a commitment to
                    quality and customer satisfaction ,we're deicated to making your floral dreams a reality.
                </p>
                <h1 class="text-xl mt-14">Learn More</h1>
            </div>
            <div>
                <img src="./images/Antique Passion.jpg" class="h-96 rounded-xl" alt="">
            </div>
        </section>

        <div class="flex items-center justify-center bg-[#EEEEEE] flex-col">
            <div id="start-shopping">
                <h1 class="font-bold text-center text-3xl my-12">New Release</h1>

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
            <a href="all-products.php" class="font-bold text-center text-white text-xl px-5 py-2 bg-[#9E9D89] rounded-full my-12">View All</a>
        </div>

        <div class="flex gap-x-20 items-center justify-center bg-[#FCE2DB] flex-col">
            <h1 class="font-bold text-center text-3xl my-12">Our Gallery</h1>
            <section class="overflow-hidden -mt-20 text-neutral-700">
                <div class="container mx-auto px-5 py-2 lg:px-32 lg:pt-24">
                    <div class="-m-1 flex flex-wrap md:-m-2">
                        <div class="flex w-1/2 flex-wrap">
                            <div class="w-1/2 p-1 md:p-2">
                                <img alt="gallery" class="block hover:scale-95 transition-all duration-300 ease-linear h-full w-full rounded-lg object-cover object-center" src="https://cdn.shopify.com/s/files/1/0271/5533/3229/products/IMG_6259_600x.jpg?v=1658565837" />
                            </div>
                            <div class="w-1/2 p-1 md:p-2">
                                <img alt="gallery" class="block hover:scale-95 transition-all duration-300 ease-linear h-full w-full rounded-lg object-cover object-center" src="https://cdn.shopify.com/s/files/1/0271/5533/3229/products/IMG_7573_600x.jpg?v=1658565648" />
                            </div>
                            <div class="w-full p-1 md:p-2">
                                <img alt="gallery" class="block hover:scale-95 transition-all duration-300 ease-linear h-full w-full rounded-lg object-cover object-center" src="https://cdn.shopify.com/s/files/1/1789/5809/products/Precious_Purple_400x.jpg?v=1574922828" />
                            </div>
                        </div>
                        <div class="flex w-1/2 flex-wrap">
                            <div class="w-full p-1 md:p-2">
                                <img alt="gallery" class="block hover:scale-95 transition-all duration-300 ease-linear h-full w-full rounded-lg object-cover object-center" src="https://cdn.shopify.com/s/files/1/0271/5533/3229/products/IMG_6301_600x.jpg?v=1658565376" />
                            </div>
                            <div class="w-1/2 p-1 md:p-2">
                                <img alt="gallery" class="block hover:scale-95 transition-all duration-300 ease-linear h-full w-full rounded-lg object-cover object-center" src="https://cdn.shopify.com/s/files/1/1789/5809/products/0620-Overload-Thumbnail-01_400x.jpg?v=1592275040" />
                            </div>
                            <div class="w-1/2 p-1 md:p-2">
                                <img alt="gallery" class="block hover:scale-95 transition-all duration-300 ease-linear h-full w-full rounded-lg object-cover object-center" src="https://cdn.shopify.com/s/files/1/1789/5809/products/0820-JustForYou-Thumbnail-01_400x.jpg?v=1598248788" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <section id="contact-us" class="flex gap-x-5 items-center justify-center  bg-[#FCE2DB] flex-col">
            <h1 class="font-bold text-center text-3xl my-12">Contact Us</h1>
            <div class="flex gap-x-5 w-full justify-center mb-8">
                <img src="./images/contact.jpg" class="w-56 h-96 rounded-xl object-cover" alt="">
                <div class="flex flex-col gap-y-2">
                    <input type="text" placeholder="Full Name" class="input input-bordered input-lg w-96 max-w-lg" />
                    <input type="text" placeholder="Phone Number" class="input input-bordered input-lg w-96 max-w-lg" />
                    <input type="email" placeholder="Email" class="input input-bordered input-lg w-96 max-w-lg" />
                    <textarea placeholder="Your Message" class="textarea textarea-bordered textarea-lg w-96 max-w-lg"></textarea>
                    <button class="btn btn-secondary btn-lg">Send</button>
                </div>
            </div>
        </section>
    </div>


    <?php include 'footer.php' ?>
</body>

</html>
