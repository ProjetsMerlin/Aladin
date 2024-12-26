<?php
$params = array('post_type' => 'price', 'orderby' => 'menu_order', 'order' => 'asc');
$prices = get_posts( $params );
?>
<div class="bg-white py-6 sm:py-8 lg:py-12">
    <div class="mx-auto max-w-screen-xl px-4 md:px-8">
        <h2 class="mb-4 text-center text-2xl font-bold text-gray-800 md:mb-8 lg:text-3xl xl:mb-12">
            <?= get_the_title(); ?>
        </h2>
        <?php if ( $prices ): ?>
        <div class="mb-6 grid gap-6 sm:grid-cols-2 md:mb-8 lg:grid-cols-3 lg:gap-8">
            <?php foreach ( $prices as $key => $price ) : ?>
            <div
                class="flex flex-col overflow-hidden rounded-lg border sm:mt-8 <?php if ($key === 1) : echo 'border-2 border-orange-500'; endif; ?>">
                <?php if ($key === 0) :?>
                <div class="h-2 bg-gray-300"></div>
                <?php elseif ($key === 1) :?>
                <div class="bg-orange-500 py-2 text-center text-sm font-semibold uppercase tracking-widest text-white">
                    <?= __("Choix conseillé", 'aladin'); ?>
                </div>
                <?php else : ?>
                <div class="h-2 bg-black"></div>
                <?php endif;?>
                <div class="flex flex-1 flex-col p-6 pt-8">
                    <div class="mb-12">
                        <div class="mb-2 text-center text-2xl font-bold text-gray-800">
                            <?= $price->post_title;?>
                        </div>
                        <p class="mb-8 px-8 text-center text-gray-500">
                            <?= $price->post_excerpt;?>
                        </p>
                        <div class="space-y-4">
                            <div class="flex items-center gap-2 text-gray-500 price_content">
                                <?= apply_filters('the_content', $price->post_content ) ; ?>
                            </div>
                        </div>
                    </div>
                    <div class="mt-auto">
                        <a href="<?= get_the_permalink( $price->ID );?>" <?php if ($key === 1) :?>
                            class="block rounded-lg bg-orange-500 px-8 py-3 text-center text-sm font-semibold text-white outline-none ring-orange-300 transition duration-100 hover:bg-gray-300 focus-visible:ring active:text-gray-700 md:text-base"
                            <?php elseif ($key === 2) :?>
                            class="block rounded-lg bg-black px-8 py-3 text-center text-sm font-semibold text-white outline-none ring-orange-300 transition duration-100 hover:bg-gray-300 focus-visible:ring active:text-gray-700 md:text-base"
                            <?php else :?>
                            class="block rounded-lg bg-gray-200 px-8 py-3 text-center text-sm font-semibold text-black outline-none ring-orange-300 transition duration-100 hover:bg-gray-300 focus-visible:ring active:text-gray-700 md:text-base"
                            <?php endif; ?>>
                            <?= get_the_title( $price->ID );?>
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php else : ?>
        <p class="text-center">
            <?= __("Aucun tarif trouvé.", 'aladin') ; ?>
        </p>
        <?php endif; ?>
        <?php wp_reset_postdata();?>
    </div>
</div>