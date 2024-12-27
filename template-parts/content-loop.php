<div id="<?= get_the_ID(); ?>" class="flex flex-col overflow-hidden rounded-lg border bg-white">
    <?php if ( get_the_post_thumbnail_url() ) : ?>
    <a href="<?= get_the_permalink(); ?>" class="group relative block h-48 overflow-hidden bg-gray-100 md:h-64">
        <img src="<?= get_the_post_thumbnail_url(get_the_ID(), 'medium');?>"
            loading="lazy" alt="Photo by Minh Pham"
            class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
    </a>
    <?php endif; ?>
    <div class="flex flex-1 flex-col p-4 sm:p-6">
        <h2 class="mb-2 text-lg font-semibold text-gray-800">
            <a href="<?= get_the_permalink(); ?>"
                class="transition duration-100 hover:text-orange-500 active:text-orange-600">
                <?= get_the_title(); ?>
            </a>
        </h2>
        <div class="mb-8 text-gray-500">
            <?= apply_filters('the_content', get_the_excerpt(get_the_ID())) ; ?>
        </div>
        <div class="mt-auto flex items-end justify-between">
            <div class="flex items-center gap-2">
                <div class="h-10 w-10 shrink-0 overflow-hidden rounded-full bg-gray-100">
                    <img src="<?= get_avatar_url( get_the_author_meta("ID", get_query_var('author') ) ); ?>"
                        loading="lazy" alt="Photo by Brock Wegner" class="h-full w-full object-cover object-center" />
                </div>
                <div>
                    <span class="block text-orange-500">
                        <?= get_the_author_meta("display_name", get_query_var('author') ) ; ?> 
                    </span>
                    <span class="block text-sm text-gray-400">
                        <?= get_the_date('d/m/Y') ; ?>
                    </span>
                </div>
            </div>
            <?php if (get_the_category(get_the_ID())[0]) : ?>
            <span class="rounded border px-2 py-1 text-sm text-gray-500">
                <?= get_the_category(get_the_ID())[0]->name ; ?>
            </span>
            <?php endif; ?>
        </div>
    </div>
</div>