<?php 
$text_bold = get_field('text_bold');
$text = get_field('text');
$phonenumber = get_field('phonenumber');
$phonenumber_url = get_field('phonenumber_url');
$phonenumbertwo = get_field('phonenumbertwo');
$phonenumbertwo_url = get_field('phonenumbertwo_url');
$email = get_field('email');
$email_url = get_field('email_url');
$icon_one = get_field('icon_one');
$icon_two = get_field('icon_two');
$icon_three = get_field('icon_three');
$title = get_field('title');

?>

<section>
    <div class="container mx-auto pb-16 sm:pt-24 pt-12">
        <div class="flex sm:h-40 h-96 items-center flex-col sm:flex-row sm:columns: 2">
            <div class="w-full sm:pl-1 px-12">
                <h2 class="text-tinyblue font-semibold text-2xl pb-3"><?php if( get_field('title') ): ?><?php echo $title ?><?php endif; ?></h2>
                <p class="text-tinyblue font-medium text-3xl ">
                        <strong><?php echo $text_bold ?></strong><br>
                        <?php echo $text ?>
                </p>
            </div>
            <div class="w-full sm:w-3/4 pl-12 pr-4 sm:px-0 pt-8 sm:pt-0">
                <div class="text-tinyblue font-medium text-3xl flex flex-row pb-2">
                <img src="<?php echo $icon_one ?>" alt="phone" height="42px" width="42px"><a href="<?php echo $phonenumber_url ?>" class="pl-3"><?php echo $phonenumber ?></a>
                </div>
                <div class="text-tinyblue font-medium text-3xl flex flex-row pb-2">
                <img src="<?php echo $icon_two ?>" alt="fax" height="42px" width="42px"><a href="<?php echo $phonenumbertwo_url ?>" class="pl-3"><?php echo $phonenumbertwo ?></a>
                </div>
                <div class="text-tinyblue font-medium text-3xl flex flex-row pb-2">
                <img src="<?php echo $icon_three ?>" alt="email" height="42px" width="42px"><a href="<?php echo $email_url ?>" class="pl-3"><?php echo $email ?></a>
                </div>
            </div>
        </div>
    </div>
</section>