<?php

// references: https://www.flowerchimp.co.id/collections/pekanbaru

$flowers = [
    [
        'id' => 1,
        'name' => 'White Serenity',
        'status' => 'Popular',
        'price' => 659000,
        'rating' => 5,
        'picture' => './images/1.jpg'
    ],
    [
        'id' => 2,
        'name' => 'Purple Ibiza',
        'status' => 'Hot',
        'price' => 499000,
        'rating' => 5,
        'picture' => './images/2.jpg'
    ],

    [
        'id' => 3,
        'name' => 'Sweet Mistiral Pink',
        'status' => 'New',
        'price' => 839000,
        'rating' => 5,
        'picture' => './images/3.jpg'
    ],
    [
        'id' => 4,
        'name' => 'The innocently Baby Pink',
        'status' => 'Popular',
        'price' => 752000,
        'rating' => 4,
        'picture' => './images/4.jpg'
    ],
    [
        'id' => 5,
        'name' => 'The Blue Paradise',
        'status' => 'Popular',
        'price' => 300000,
        'rating' => 5,
        'picture' => './images/5.png'
    ],
    [
        'id' => 6,
        'name' => 'The Sunsine of angel',
        'status' => 'Popular',
        'price' => 500000,
        'rating' => 4,
        'picture' => './images/6.jpg'
    ],
    [
        'id' => 7,
        'name' => 'Romantic Rosey',
        'status' => 'Popular',
        'price' => 700000,
        'rating' => 2,
        'picture' => './images/7.jpg'
    ],

    [
        'id' => 8,
        'name' => 'Caramel Spring',
        'status' => 'Popular',
        'price' => 300000,
        'rating' => 5,
        'picture' => './images/8.jpg'
    ],
];

function findFlowerById($id)
{
    global $flowers;
    foreach ($flowers as $flower) {
        if ($flower['id'] == $id) {
            return $flower;
        }
    }
    return null;
}

function toFormatRupiah($angka)
{
    $hasil_rupiah = "Rp " . number_format($angka, 2, ',', '.');
    return $hasil_rupiah;
}

function buildRating($rating)
{
    return
        "<div class='rating rating-sm'>
        <input type='radio' name='rating-6' class='mask mask-star-2 bg-orange-400'  $rating == 1 ? 'checked' : '' />
        <input type='radio' name='rating-6' class='mask mask-star-2 bg-orange-400' $rating == 2 ? 'checked' : '' />
        <input type='radio' name='rating-6' class='mask mask-star-2 bg-orange-400'  $rating == 3 ? 'checked' : '' />
        <input type='radio' name='rating-6' class='mask mask-star-2 bg-orange-400'  $rating == 4 ? 'checked' : '' />
        <input type='radio' name='rating-6' class='mask mask-star-2 bg-orange-400' $rating == 5 ? 'checked' : '' />
    </div>";
}

function buildTitle($title)
{
    // limit two words
    $title = implode(' ', array_slice(explode(' ', $title), 0, 2));

    $title = strtolower($title);

    // each firsth character to uppercase
    $title = ucwords($title);
    return "<h1 class='font-semibold font-md'>$title</h1>";
}

function buildPrice($price)
{
    return "<h1 class='text-xs font-bold leading-relaxed'>" . toFormatRupiah($price) . "</h1>";
}


function buildToolpit($status)
{
    switch ($status) {
        case 'New': {
                return "<div class='absolute font-semibold bg-primary text-xs px-2 py-1'>New</div>";
                break;
            }
        case 'Hot': {
                return "<div class='absolute bg-error font-semibold text-xs px-2 py-1'>Hot</div>";
                break;
            }
        case 'Popular': {
                return "<div class='absolute bg-success font-semibold text-xs px-2 py-1'>Popular</div>";
                break;
            }
        default: {
                return "<div class='absolute bg-primary font-semibold text-xs px-2 py-1'>New</div>";
                break;
            }
    }
}

function buildCartIcon($id)
{
    return
        "<a href='details.php?id=$id'>
        <label tabindex='0' class='btn btn-ghost btn-circle'>
        <div class='indicator'>
            <svg xmlns='http://www.w3.org/2000/svg' class='h-5 w-5' fill='none' viewBox='0 0 24 24' stroke='currentColor'>
                <path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z' />
            </svg>
            <span class='badge badge-xs indicator-item'>+</span>
        </div>
    </label>
    </a>";
}

function buildImage($picture)
{
    return "<img src='$picture'
    class='w-full h-56 object-cover hover:scale-105 transition ease-linear duration-300'>";
}
