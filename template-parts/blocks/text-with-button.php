<?php

$text = get_field('text');
$text_bold = get_field('text_bold');
$button_url = get_field('button_url');
$button_text = get_field('button_text');

?>

<section>
    <div class="container mx-auto flex flex-col sm:items-center sm:flex-row px-2">
    
        <div class="text-center sm:text-left w-full sm:w-3/4">
            <h2 class="text-2xl text-tinyblue"><?php echo $text ?><span class="font-bold"> <?php echo $text_bold ?></span></h2>
        </div>
        <div class="w-full sm:w-1/4 flex justify-center">
            <a href="<?php echo $button_url ?>">
                <button class="items-center w-64 rounded-full bg-white border-2 border-tinyblue bottom-2 h-12 py-4 px-12 flex justify-center flex-col text-tinyblue text-3xl hover:bg-tinyblue hover:text-white">
                    <?php echo $button_text ?>
                </button>
            </a>
        </div>

    </div>
</section>