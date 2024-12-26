<div class="bg-white py-6 sm:py-8 lg:py-12">
    <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
        <div class="mb-10 md:mb-16">
            <h2 class="mb-4 text-center text-2xl font-bold text-gray-800 md:mb-6 lg:text-3xl">
                <?= get_the_title(); ?>
            </h2>
            <div class="mx-auto max-w-screen-md text-center text-gray-500 md:text-lg">
                <?= get_the_content() ; ?>
            </div>
        </div>
        <div class="grid gap-4 sm:grid-cols-2 md:gap-8 xl:grid-cols-4">
            <?php $categories = get_categories(); ?>
            <?php foreach ($categories as $categorie) : ?>
            <div class="flex flex-col rounded-lg border p-4 md:p-6">
                <h3 class="mb-2 text-lg font-semibold md:text-xl">
                    <?= $categorie->name;?>
                </h3>
                <p class="mb-4 text-gray-500">
                    <?= $categorie->description;?>
                </p>
                <a href="<?= get_category_link($categorie->term_id) ; ?>"
                    class="mt-auto font-bold text-orange-500 transition duration-100 hover:text-orange-600 active:text-orange-700">
                <?= __('En savoir plus', 'aladin') ; ?>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>