
<?php
$button_url = get_field('button_url');
$button_text = get_field('button_text');
?>

<section>
    <div class="container mx-auto flex justify-center flex-row items-center mt-16">
            <a href="<?php echo $button_url ?>">
                <button class="items-center w-64 rounded-full bg-white border-2 border-tinyblue bottom-2 h-12 py-4 px-12 flex justify-center flex-col text-tinyblue text-3xl hover:bg-tinyblue hover:text-white">
                    <?php echo $button_text ?>
                </button>
            </a>
    </div>
</section>