<div class="navbar px-12 z-10 left-0 fixed bg-base-100">
    <div class="navbar-start">
        <div class="dropdown">
            <label tabindex="0" class="btn btn-ghost lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                </svg>
            </label>
            <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
                <li><a href="index.php#about-us">About Us</a></li>
                <li><a href="index.php#start-shopping">Shop</a></li>
                <li><a href="index.php#contact-us">Custom Order</a></li>
                <li><a href="index.php#contact-us">Contact</a></li>
            </ul>
        </div>
        <a class="btn btn-ghost normal-case text-xl">Flowereal</a>
    </div>
    <div class="navbar-center hidden lg:flex">
        <ul class="menu menu-horizontal px-1">
            <li><a href="index.php#about-us">About Us</a></li>
            <li><a href="index.php#start-shopping">Shop</a></li>
            <li><a href="index.php#contact-us">Custom Order</a></li>
            <li><a href="index.php#contact-us">Contact</a></li>
        </ul>
    </div>
    <div class="navbar-end">
        <label tabindex="0" class="btn btn-ghost btn-circle">
            <a href="cart.php" class="indicator">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
                <span id="items-count" class="badge badge-sm indicator-item">0</span>
            </a>
        </label>
    </div>
</div>


<script>
const itemsCount = document.getElementById('items-count');
const cartsNavbar = JSON.parse(localStorage.getItem('carts')) || [];
const totalCarts = cartsNavbar.length;
itemsCount.innerHTML = totalCarts;
</script>
