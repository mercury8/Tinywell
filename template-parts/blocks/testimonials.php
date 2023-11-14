<?php 
$image = get_field('image');
$title_one = get_field('title_one');
$title_two = get_field('title_two');
$testimonial_one_text = get_field('testimonial_one_text');
$testimonial_two_text = get_field('testimonial_two_text');
$testimonial_three_text = get_field('testimonial_three_text');

?>

<section id="testimonial" >
    <div class="container mx-auto flex sm:flex-row sm:content-normal sm:flex-nowrap lg:my-32 md:mb-10 flex-col flex-wrap content-center">
        <div class="mx-auto sm:mx-initial sm:w-1/3 custom-height-494 m-1 object-cover">
            <img src="<?php echo $image ?>" alt="" class="rounded-lg custom-height-494">
        </div>
        <div class="w-2/3 custom-height-494 p-4">
            <div class="text-2xl text-tinyblue w-72 leading-tight">
                <h2><?php echo $title_one ?><br><strong><?php echo $title_two ?></strong></h2>


                        <ul class="mb-0 flex justify-start">
                            <li>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960" class="w-10 text-warning">
                                <path fill="currentColor"
                                d="m233 976 65-281L80 506l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Z" />
                            </svg>
                            </li>
                            <li>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960" class="w-10 text-warning">
                                <path fill="currentColor"
                                d="m233 976 65-281L80 506l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Z" />
                            </svg>
                            </li>
                            <li>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960" class="w-10 text-warning">
                                <path fill="currentColor"
                                d="m233 976 65-281L80 506l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Z" />
                            </svg>
                            </li>
                            <li>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960" class="w-10 text-warning">
                                <path fill="currentColor"
                                d="m233 976 65-281L80 506l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Z" />
                            </svg>
                            </li>
                            <li>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960" class="w-10 text-warning">
                                <path fill="currentColor"
                                d="m480 757 157 95-42-178 138-120-182-16-71-168v387ZM233 976l65-281L80 506l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Z" />
                            </svg>
                            </li>
                        </ul>

            </div>
            <div class="h-48">

                <div class="testimonial">
                    <div class="">
                        <div class="">
                            <div class="testimonial-slider text-[2rem] text-tinyblue italic">

                                <div class="slick-slide">
                                        <p>"<?php echo $testimonial_one_text ?>"</p>
                                    </div>

                                    <div class="slick-slide">
                                        <p>"<?php echo $testimonial_two_text ?>"</p>
                                    </div>

                                    <div class="slick-slide">
                                        <p>"<?php echo $testimonial_three_text ?>"</p>
                                    </div>

                                </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>