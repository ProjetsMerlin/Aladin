<?php
if ( ! defined( 'ABSPATH' ) ) {
  exit;
}
?>
<?php get_header();?>
<div class="loop">
    <header>
        <?php get_template_part('template-parts/content','header');?>
    </header>
    <main>
        <div class="bg-white py-6 sm:py-8 lg:py-12">
            <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
                <div class="mb-10 md:mb-16">
                    <h2 class="mb-4 text-center text-2xl font-bold text-gray-800 md:mb-6 lg:text-3xl">
                        <?= single_post_title( '', false );?>
                    </h2>
                    <div class="mx-auto max-w-screen-md text-center text-gray-500 md:text-lg">
                        <?= get_the_content( '', false, get_option( 'page_for_posts' ) ) ; ?>
                    </div>
                </div>
                <div class="grid gap-4 sm:grid-cols-2 md:gap-6 lg:grid-cols-3 xl:grid-cols-4 xl:gap-8">
                    <?php while ( have_posts() ) :?>
                    <?php the_post();?>
                    <?php get_template_part('template-parts/content','loop');?>
                    <?php endwhile;?>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <?php get_template_part('template-parts/content','footer');?>
    </footer>
</div>
<?php get_footer()?>