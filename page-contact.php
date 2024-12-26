<?php
/*Template Name: contact*/
if ( ! defined( 'ABSPATH' ) ) {
  exit;
}
?>
<?php get_header();?>
<div class="contact">
    <header>
        <?php get_template_part('template-parts/content','header');?>
    </header>
    <main class="bg-white py-6 sm:py-8 lg:py-12">
        <div class="mx-auto max-w-screen px-4 md:px-8">
            <div class="bg-white py-6 sm:py-8 lg:py-12">
                <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
                    <div class="mb-10 md:mb-16">
                        <h1 class="mb-4 text-center text-2xl font-bold text-gray-800 sm:text-3xl md:mb-6">
                            <?= get_the_title(); ?>
                        </h1>
                        <div class="mx-auto max-w-screen-md text-center text-gray-500 md:text-lg">
                            <?= apply_filters('the_content', get_the_content() ); ?>
                        </div>
                    </div>
                    <?php get_template_part('template-parts/sections/section','form');?>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <?php get_template_part('template-parts/content','footer');?>
    </footer>
</div>
<?php get_footer()?>