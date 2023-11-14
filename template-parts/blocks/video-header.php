<?php

// $video_header = get_field('video_header ');
$header = get_field('header');

?>

<section class="block pt-20 sm:pt-28 relative video-header-frame-outer">
  <div class="relative overflow-hidden max-w-[90rem] object-bottom object-fill mx-auto z-0 video-header-frame">
  <div class="relative video-header-height">
  <iframe src="https://player.vimeo.com/video/880670956?h=349a6186a0&autoplay=1&loop=1&title=0&byline=0&portrait=0" class="video-header-iframe" style="" frameborder="0" allow="autoplay; picture-in-picture" allowfullscreen></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
  </div>


  <div class="max-w-[90rem] z-10 relative left-0 mx-auto h-44 video-overlay">
  <svg width="100%" height="181" viewBox="0 0 1440 181" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M1440 5.04025e-06C1294.47 106.797 1026.5 178.414 720 178.414C413.505 178.414 145.533 106.797 0 0L0 180.414H1440V5.04025e-06Z" fill="white"/>
</svg>
<div class="relative bottom-48 sm:bottom-72 text-white text-3xl sm:text-6xl mx-auto justify-center text-center stroke-black-500"><h2><?php echo $header ?></h2></div>

</div>

  
</section>