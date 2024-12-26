<?php
if ( ! defined( 'ABSPATH' ) ) {
  exit;
}
?>
<?php get_header();?>
<div class="404">
    <main class="bg-white py-6 sm:py-0">
        <section class="mx-auto max-w-screen-xl px-4 md:px-8">
            <div class="grid gap-8 sm:grid-cols-2 sm:gap-12">
                <div
                    class="h-80 overflow-hidden rounded-lg bg-gray-100 shadow-lg sm:rounded-none sm:shadow-none md:h-auto">
                    <img src="<?= get_template_directory_uri() ; ?>/img/404.jpg"
                        loading="lazy" title="404 page" alt="404 page" class="h-full w-full object-cover object-center" />
                </div>
                <div class="flex flex-col items-center justify-center sm:items-start md:py-24 lg:py-32 xl:py-64">
                    <p class="mb-4 text-sm font-semibold uppercase text-orange-500 md:text-base">
                    <?= __('Error 404', 'aladin') ; ?>
                    </p>
                    <h1 class="mb-2 text-center text-2xl font-bold text-gray-800 sm:text-left md:text-3xl">
                        <?= __('Page non trouvée', 'aladin') ; ?>
                    </h1>
                    <p class="mb-8 text-center text-gray-500 sm:text-left md:text-lg">
                        <?= __("Désolé, cette page n'existe pas ou n'a jamais existée", 'aladin') ; ?>
                    </p>
                    <a href="<?= site_url();?>"
                        class="inline-block rounded-lg bg-gray-200 px-8 py-3 text-center text-sm font-semibold text-gray-500 outline-none ring-orange-300 transition duration-100 hover:bg-gray-300 focus-visible:ring active:text-gray-700 md:text-base">
                        <?= __("Page d'accueil", 'aladin') ; ?>
                    </a>
                </div>
            </div>
        </section>
    </main>
</div>
<?php get_footer()?>