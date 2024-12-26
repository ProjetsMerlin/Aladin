<div class="bg-white lg:pb-12">
    <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
        <header class="flex items-center justify-between py-4 md:py-8">
            <a href="<?= site_url(); ?>" class="inline-flex items-center gap-2.5 text-2xl font-bold text-orange-500 md:text-3xl"
                aria-label="logo">
                <img src="<?= get_template_directory_uri() ; ?>/img/logo.png" class="h-auto w-10" title="<?= get_bloginfo('name');?>" alt="<?= get_bloginfo('name');?>">
                <?= get_bloginfo('name') ; ?>
            </a>
            <?php wp_nav_menu( array( "menu" => "Principal", "menu_class" => 'header_menu hidden gap-12 lg:flex justify-around')); ?>
            <div class="-ml-8 hidden flex-col gap-2.5 sm:flex-row sm:justify-center lg:flex lg:justify-start">
                <a href="<?= wp_login_url(); ?>"
                    class="inline-block rounded-lg px-4 py-3 text-center text-sm font-semibold text-gray-500 outline-none ring-orange-300 transition duration-100 hover:text-orange-500 focus-visible:ring active:text-orange-600 md:text-base">
                    <?= __("Me connecter", 'aladin') ; ?>
                </a>
                <a href="<?= wp_registration_url(); ?>"
                    class="inline-block rounded-lg bg-orange-500 px-8 py-3 text-center text-sm font-semibold text-white outline-none ring-orange-300 transition duration-100 hover:bg-orange-600 focus-visible:ring active:bg-orange-700 md:text-base">
                    <?= __("M'inscrire", 'aladin') ; ?>
                </a>
            </div>
            <button id="burger_menu" type="button"
                class="inline-flex items-center gap-2 rounded-lg bg-gray-200 px-2.5 py-2 text-sm font-semibold text-gray-500 ring-orange-300 hover:bg-gray-300 focus-visible:ring active:text-gray-700 md:text-base lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd" />
                </svg>
                <?= __("Menu", 'aladin') ; ?>
            </button>
        </header>
    </div>
</div>