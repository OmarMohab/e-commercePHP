<?php require base_path('views/partials/header.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>

<main>
<div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <img src="https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-01.jpg" alt="Once Upon a Time in America Poster" class="w-96" style="width: 24rem">
            <div class="md:ml-24">
                <h2 class="text-4xl font-semibold"><?= $product['name'] ?></h2>
                <p class="mt-8">
                    <?= $product['description'] ?>
                </p>
                <div class="mt-12">
                    <form action="/cart" method="post">
                        <input type="hidden" name="product_id" value="<?= $product['id'] ?>">
                        <button
                            class="flex inline-flex items-center bg-blue-500 text-gray-500 rounded font-semibold  px-5 py-4 hover:bg-blue-600 transition ease-in-out duration-150">
                            <span class="ml-2 text-black">Add to cart</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require base_path('views/partials/footer.php') ?>