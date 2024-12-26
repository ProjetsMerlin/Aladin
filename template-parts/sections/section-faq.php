<?php
$params = array('post_type' => 'faq', 'orderby' => 'menu_order', 'order' => 'asc');
$faqs = get_posts( $params );
?>
<div class="bg-white py-6 sm:py-8 lg:py-12">
    <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
        <div class="mb-10 md:mb-16">
            <h2 class="mb-4 text-center text-2xl font-bold text-gray-800 md:mb-6 lg:text-3xl">
                <?= get_the_title(); ?>
            </h2>
            <p class="mx-auto max-w-screen-md text-center text-gray-500 md:text-lg">
                <?= get_the_content(); ?>
            </p>
        </div>
        <div class="mx-auto flex max-w-screen-sm flex-col border-t">
            <?php if ( $faqs ) :?>
            <?php foreach ( $faqs as $key => $faq ) : ?>
            <div id = "<?= $faq->ID; ?>" class="faq border-b">
                <div
                    class="flex cursor-pointer justify-between gap-2 py-4 text-black hover:text-orange-500 active:text-orange-600 faq_question">
                    <h4 class="font-semibold transition duration-100 md:text-lg">
                        <?= $faq->post_title; ?>
                    </h4>
                    <span class="text-orange-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </span>
                </div>
                <p class="mb-4 <?php if ( $key !== 0) : echo 'hidden'; else: echo ''; endif; ?> text-gray-500 faq_response">
                    <?= $faq->post_content; ?>
                </p>
            </div>
            <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</div>