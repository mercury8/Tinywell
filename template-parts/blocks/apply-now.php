<?php 
$text = get_field('text');
$button_url = get_field('button_url');
$button_text = get_field('');
?>

<section>
    <div class="container ">
        <div class=""><h3><?php echo $text ?></h3><a href="<?php echo $button_url ?>"><button class="rounded-full bg-white bottom-2"><?php echo $button_text ?></button></a></div>
    </div>
    <div class="2xl-w-2/5"></div>
</section>

