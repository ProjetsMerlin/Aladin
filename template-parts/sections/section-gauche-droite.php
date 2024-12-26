<div class="bg-white py-6 sm:py-8 lg:py-12">
    <div class="mx-auto max-w-screen-xl px-4 md:px-8">
        <div class="grid gap-8 md:grid-cols-2 lg:gap-12">
            <?php if ( get_the_post_thumbnail_url() ) : ?>
            <div>
                <div class="h-64 overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-auto">
                    <img src="<?= get_the_post_thumbnail_url() ; ?>"
                        loading="lazy" title="<?= get_the_title();?>" alt="<?= get_the_title();?>" class="h-full w-full object-cover object-center" />
                </div>
            </div>
            <div class="md:pt-8">
                <p class="text-center font-bold text-orange-500 md:text-left">
                    <?= get_the_excerpt();?>
                </p>
                <h1 class="mb-4 text-center text-2xl font-bold text-gray-800 sm:text-3xl md:mb-6 md:text-left">
                    <?= get_the_title();?>
                </h1>
                <div class="mb-6 text-gray-500 sm:text-lg md:mb-8">
                    <?= apply_filters('the_content', get_the_content(get_the_ID())) ; ?>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>