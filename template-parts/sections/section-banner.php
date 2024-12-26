<div class="bg-white pb-6 sm:pb-8 lg:pb-12">
  <div class="relative flex flex-wrap bg-orange-500 px-4 py-3 sm:flex-nowrap sm:items-center sm:justify-center sm:gap-3 sm:pr-8 md:px-8">
    <div class="order-1 mb-2 inline-block w-11/12 max-w-screen-sm text-sm text-white sm:order-none sm:mb-0 sm:w-auto md:text-base">
      <?= apply_filters('the_content', get_the_content(get_the_ID())) ; ?>
    </div>
    <a href="#" class="order-last inline-block w-full whitespace-nowrap rounded-lg bg-orange-600 px-4 py-2 text-center text-xs font-semibold text-white outline-none ring-orange-300 transition duration-100 hover:bg-orange-700 focus-visible:ring active:bg-orange-800 sm:order-none sm:w-auto md:text-sm">
        <?= get_the_excerpt();?>
    </a>
    <div class="order-2 flex w-1/12 items-start justify-end sm:absolute sm:right-0 sm:order-none sm:mr-1 sm:w-auto xl:mr-3">
      <button type="button" class="text-white transition duration-100 hover:text-orange-100 active:text-orange-200">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
    </div>
  </div>
</div>