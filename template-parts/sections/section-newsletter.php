<div class="bg-white py-6 sm:py-8 lg:py-12">
    <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
        <div class="flex flex-col items-center rounded-lg bg-gray-100 p-4 sm:p-8 lg:flex-row lg:justify-between">
            <div class="mb-4 sm:mb-8 lg:mb-0">
                <h2 class="text-center text-xl font-bold text-orange-500 sm:text-2xl lg:text-left lg:text-3xl">
                    <?= get_the_title();?>
                </h2>
                <p class="text-center text-gray-500 lg:text-left">
                    <?= get_the_excerpt();?>
                </p>
            </div>
            <div class="flex flex-col items-center lg:items-end">
                <!-- !!! formulaire -->
                <form class="mb-3 flex w-full max-w-md gap-2">
                    <input placeholder="Email"
                        class="bg-gray-white w-full flex-1 rounded border border-gray-300 px-3 py-2 text-gray-800 placeholder-gray-400 outline-none ring-orange-300 transition duration-100 focus:ring" />
                    <button
                        class="inline-block rounded bg-orange-500 px-8 py-2 text-center text-sm font-semibold text-white outline-none ring-orange-300 transition duration-100 hover:bg-orange-600 focus-visible:ring active:bg-orange-700 md:text-base">Send</button>
                </form>
                <div class="text-center text-xs text-gray-400 lg:text-right">
                    <?= apply_filters('the_content', get_the_content(get_the_ID())) ; ?>
                </div>
            </div>
        </div>
    </div>
</div>