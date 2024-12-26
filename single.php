<?php
if ( ! defined( 'ABSPATH' ) ) {
  exit;
}
?>
<?php get_header();?>
<div class="singular">
    <header>
        <?php get_template_part('template-parts/content','header');?>
    </header>
    <main class="bg-white py-6 sm:py-8 lg:py-12">
        <div class="mx-auto max-w-screen-md px-4 md:px-8">
            <h1 class="mb-4 text-center text-2xl font-bold text-gray-800 sm:text-3xl md:mb-6">
                <?= get_the_title(); ?>
            </h1>
            <div class="mb-6 text-gray-500 sm:text-lg md:mb-8">
                <?= apply_filters('the_content', get_the_content() ); ?>
                <?php if (get_the_post_thumbnail_url() ) : ?>
                <div class="relative mt-8 mb-6 overflow-hidden rounded-lg bg-gray-100 shadow-lg md:mb-8">
                    <img src="<?= get_the_post_thumbnail_url() ; ?>" loading="lazy" alt="<?= get_the_title(); ?>" title="<?= get_the_title(); ?>"
                        class="h-full w-full object-cover object-center" />
                </div>
                <?php endif; ?>
            </div>
        </div>
    </main>
    <footer>
        <?php get_template_part('template-parts/content','footer');?>
    </footer>
</div>
<?php get_footer()?>