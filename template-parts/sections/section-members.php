<?php
$params = array('post_type' => 'team', 'orderby' => 'menu_order', 'order' => 'asc');
$teams = get_posts( $params );
?>
<div class="bg-white py-6 sm:py-8 lg:py-12">
    <div class="mx-auto max-w-screen-xl px-4 md:px-8">
        <div class="mb-10 md:mb-16">
            <h2 class="mb-4 text-center text-2xl font-bold text-gray-800 md:mb-6 lg:text-3xl">
                <?= get_the_title(); ?>
            </h2>
            <div class="mx-auto max-w-screen-md text-center text-gray-500 md:text-lg">
                <?= apply_filters('the_content', get_the_content(get_the_ID())) ; ?>
            </div>
        </div>
        <div class="grid grid-cols-2 gap-4 md:grid-cols-3 lg:grid-cols-4 lg:gap-8">
            <?php if ( $teams ) :?>
            <?php foreach ( $teams as $team ) : ?>
            <div class="flex flex-col items-center rounded-lg bg-gray-100 p-4 lg:p-8">
                <div class="mb-2 h-24 w-24 overflow-hidden rounded-full bg-gray-200 shadow-lg md:mb-4 md:h-32 md:w-32">
                    <img src="<?= get_the_post_thumbnail_url($team->ID, 'post-thumbnail'); ?>" loading="lazy" alt=""
                        class="h-full w-full object-cover object-center" />
                </div>
                <div>
                    <div class="text-center font-bold text-orange-500 md:text-lg">
                        <?= $team->post_title;?>
                    </div>
                    <p class="mb-3 text-center text-sm text-gray-500 md:mb-4 md:text-base">
                        <?= $team->post_excerpt;?>
                    </p>
                    <div class="flex justify-center">
                        <div class="flex gap-4">
                            <?php $links = explode(';', $team->post_content ); ?>
                            <?php foreach ( $links as $key => $link ) : ?>
                            <a href="<?= $link;?>" target="_blank"
                                class="text-gray-400 transition duration-100 hover:text-gray-500 active:text-gray-600">
                                <img src="<?= get_template_directory_uri() ; ?>/img/team_icon_<?= $key + 1 ;?>.svg"
                                    title="<?= $team->post_title;?>" alt="<?= $team->post_title;?>">
                            </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</div>