<div class="bg-white pt-4 sm:pt-10 lg:pt-12">
    <footer class="mx-auto max-w-screen-2xl px-4 md:px-8">
        <div class="flex flex-col items-center border-t pt-6">
            <?php wp_nav_menu( array( "menu" => "Principal", "menu_class" => 'mb-4 flex flex-wrap justify-center gap-x-4 gap-y-2 md:justify-start md:gap-6')); ?>
            <div class="flex gap-4 mt-2">
            <?php wp_nav_menu( array( "menu" => "Réseaux sociaux", "menu_class" => 'rs')); ?>
            </div>
        </div>
        <div class="py-8 text-center text-sm text-gray-400">
            <?= date('Y', time()) ; ?> - <?= get_bloginfo('description'); ?>.
        </div>
    </footer>
</div>