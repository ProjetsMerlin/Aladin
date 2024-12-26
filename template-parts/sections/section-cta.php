<div class="bg-white py-6 sm:py-8 lg:py-12">
  <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
    <div class="mx-auto flex max-w-xl flex-col items-center text-center">
      <p class="mb-4 font-semibold text-orange-500 md:mb-6 md:text-lg xl:text-xl">
        <?= get_the_excerpt();?>
    </p>
      <h1 class="mb-8 text-3xl font-bold text-black sm:text-4xl md:mb-12 md:text-5xl">
        <?= get_the_title();?>
      </h1>
      <div class="flex w-full flex-col gap-2.5 sm:flex-row sm:justify-center">
         <?php wp_nav_menu( array( "menu" => "Cta", "menu_class" => "menu_cta" ) ); ?>
      </div>
    </div>
  </div>
</div>