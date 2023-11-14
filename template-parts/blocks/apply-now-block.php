<?php 
$text = get_field('text');
$button_url = get_field('button_url');
$button_text = get_field('button_text');
?>

<section>
    <div class="container mx-auto">
        <div class="flex justify-around h-20 items-center bg-tinyblue rounded-3xl">
            <h3 class="text-white text-5xl font-medium">
                    <?php echo $text ?>
            </h3>
            <a href="<?php echo $button_url ?>">
                <button class="rounded-full bg-white bottom-2 h-12 py-4 px-12 flex justify-center flex-col text-tinyblue text-3xl">
                    <?php echo $button_text ?>
                </button>
            </a>
        </div>
    </div>
    <div class="2xl-w-2/5"></div>
</section>