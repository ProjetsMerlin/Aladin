<?php
$comments = get_comments( array('status' => 'approve' ) );
?>
<div class="bg-white py-6 sm:py-8 lg:py-12">
    <div class="mx-auto max-w-screen-md px-4 md:px-8">
        <h2 class="mb-4 text-center text-2xl font-bold text-gray-800 md:mb-8 lg:text-3xl xl:mb-12">
            <?= get_the_title(); ?>
        </h2>
        <div class="mb-4 flex items-center justify-between border-t border-b py-4">
            <div class="flex flex-col gap-0.5">
                <span class="block font-bold">
                    <?= __("Total", 'aladin') ; ?> : <?= count($comments); ?>
                </span>
            </div>
            <a href="<?= comment_reply_link();?>"
                class="inline-block rounded-lg border bg-white px-4 py-2 text-center text-sm font-semibold text-gray-500 outline-none ring-orange-300 transition duration-100 hover:bg-gray-100 focus-visible:ring active:bg-gray-200 md:px-8 md:py-3 md:text-base">
                <?= __("Répondre", 'aladin') ; ?>
            </a>
        </div>
        <div class="comments">
            <?php foreach ( $comments as $comment ) : ?>
            <a href="<?= get_comment_link();?>" class="<?= comment_class(); ?>">
                <span class="block text-sm text-gray-500">
                    <?php printf( __( '%1$s à %2$s', 'aladin' ), get_comment_date(), get_comment_time() );?>
                </span>
                <span class="block text-sm font-bold mt-4">
                    <?php printf( __( '%s <span class="says">dit :</span>', 'aladin' ), sprintf( '<strong class="fn">%s</strong>', get_comment_author_link() ) ); ?>
                </span>
            </a>
            <div class="text-gray-400 mb-4">
                <?php comment_text(); ?>
            </div>
            <!-- !!! stars (hidden) -->
            <div class="-ml-1 flex gap-0.5 mt-4 hidden">
                <?php for ($i=0; $i < 5; $i++) : ?>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
                <?php endfor;?>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>