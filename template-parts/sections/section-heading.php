<div class="bg-white py-6 sm:py-8 lg:py-12">
    <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
        <p class="mb-2 text-center font-semibold text-orange-500 md:mb-3 lg:text-lg">
            <?= get_the_title();?>
        </p>
        <h2 class="mb-4 text-center text-2xl font-bold text-gray-800 md:mb-6 lg:text-3xl">
            <?= get_the_excerpt();?>
        </h2>
        <div class="mx-auto max-w-screen-md text-center text-gray-500 md:text-lg">
            <?= apply_filters('the_content', get_the_content(get_the_ID())) ; ?>
        </div>
    </div>
</div>