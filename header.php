<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TInywell_healthcare
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>



<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php 

$phone_number = get_field('phone_number', 'option');
?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'tinywell-healthcare' ); ?></a>

	<header id="masthead" class="main-navigation lg:flex flex md:flex flex-nowrap space-x-4 gap-x-2 items-center justify-center flex-col fixed z-20 bg-white">
		<div class="container mx-auto px-4">
					<div class="flex md:items-center sm:justify-between sm:flex-row sm:items-start flex-col items-center">
							<div class="sm:w-72 w-48 site-header__logo justify-start flex p-1">
								<?php the_custom_logo(); ?>
							</div>
						<div class="header_details text-tinyblue sm:text-xl text-right font-medium flex flex-row hidden-text">

						<svg class="animate-bounce mt-2" width="35" height="47" viewBox="0 0 35 47" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
						<rect y="0.386353" width="35" height="45.75" fill="url(#pattern0)"/>
						<defs>
						<pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
						<use xlink:href="#image0_238_24" transform="matrix(0.0111111 0 0 0.0085003 0 0.117486)"/>
						</pattern>
						<image id="image0_238_24" width="90" height="90" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAAE9ElEQVR4nO2cW4gcRRSGO0bFK95QjCjiPUzsOr30nDPjGl0ESRRFBNmggRgERbzhg0++uAo+uGymz+nJIkSEqCuKa8iDEokgJKAYfVDx8iBo1CiimAviLVGTXalZZx/CbNLTl1R1T31Qj7td/79nT1efOlWe53A4HA6Hw+FwOByDQhhuOEFRvAZItiqS3YCyV5G87FN8oem5VQageAWQ7ASS2cOHQv5OXTNxnuk5lpyx4xRyBMQzvUyG7kB+1fRMS0utNnYiIG86osHUHTzjU3Sd6TmXjtHR6cWK+LVkJkvX7M9HRsaONz33UqGQx/szWbr5+gHTcy8NQNEtR83JCxlNvKfWbJ1tWoP1hOGGUwD5mzQmw3xUy6RpHdajiB/PYjLMpY+DfrPlm9Zi9SpDIf+Y1WiYi+ptpvVYi0JemYfJML+2jleZ1mQlgCx5Gq2Id+mcb1qXdQDyu7lGNOmolqdM67IOIP4pf6N5v6L2Jaa1WQUQH8jdaOqYvcm0NqtQKH8VYjR1lnwrTeuzBv1VV5jRJF+4Osi80fJhUUYDyayP0b1mQ8kSFPFUkUYD8TumNVoBUPRQwUZ/bFqjFShcd2WRRiuS50xrtIaslTtYyGSUfwOKa6b1WQMgP1mM0RyZ1mYVy+rrLtJlzlyNRv45DJ85w7Q261DIW/LNzfEa05qsJKjHwzm+AN/zvNlFpjVZi0J+O4e8fBCQA9NarManuJlDbn7etI5SACivZDI6jK41raEUhGG0RJH8mj4/t10dOikK40fSGu03+LZCI6F6rWHpqnqK5H3986Y1lIZlYXwZoPyWcuUxbnr+pQKQ70v9UmzIPabnXyoUyXTKZd5+CFtkev6lYSmuP0ehfJvS7B/0Ksa0htIQUBsU8Z/pzJbP/OXPnmVaQ2kIUFanztfIO5SaONW0htIAJK3UZhO/6XbEE6KN0sfgIHVky4uuqpeQq4bHT9cbrhkiu+3M7qcegilXInMdp1P6oGjS5w00Q83W5Yr4lyw527X3JkQ1ZHmm3j3dMgx8ZrEhURH8Ot8MJH9nMPvToeH1F6R6drPlK5KNusdPH+vQJYNKr2yA+HZF/E/qnK3P0PTxua7/C4Ak1n0jPX7fl/qP71UV1ZA7FhCeNGcfCFDWHvkps4sU8d26lSHJO8CvR5d6VSRAWQskh9Kb3Rlxr3q2qsdDene9z9+lU1pcG5k8zasaQHx/ZrORd+h0FDTkCqD4BkX8QpYGH32AqZKnxQKU1dnSSDFDEW/XBTKvSgDGq7K8IAschwD5pSCIz/WqgkK5tbMBYN7cXulpn9+QRyuzv6kwvqnIA0nZ04l84iNf71XlCxJQ9po2deHBM/raokrcEXV12F6apRB1bKKbd1Xi9rMwjJYAykeWmz3lVaeeLVvtNVp2exXbqWlZGtF7vKqhGnInkPxhldHIW7wqAsiBTS9Jn/gur9JNOsSbTZusUL6qdD27y/8l0N/NGK2vootXeINCoCt2KB8cc6ORJ7xBY3R0ejGQPJzl5EF/Jsvr+uJbb1Cp4eT5utKW9obJRHmZePPFIxtPMq3VCiBsEZC8lXdOViRPD3QkH+V43hs5HKfe6a4hSoAu/CjiJ4D46z4N/l6hPNZstk5O8hzHYR1TQV0e7ORyvdeod8iR93XGnLHb9Od+UI9udG1oDofD4XA4HA6Hw+FwOBxeT/4D8XspmO3MkF8AAAAASUVORK5CYII="/>
						</defs>
						</svg>

						<a href="tel:+441628559905"><h2>Call: <?php echo $phone_number; ?><br>Lines open 24/7</h2></a></div>
					</div>
		</div>
		<div class="m-0 bg-tinyblue w-full nav-container text-white">
				<nav id="site-navigation" class="main-navigation container mx-auto">
						<div class="flex columns-1 mr-2.5 justify-center">
								<button class="menu-toggle border-0 w-8 h-8" aria-controls="primary-menu" aria-expanded="false">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="w-2 h-2">
									<path strokeLinecap="round" strokeLinejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
									</svg>
								<?php esc_html_e( '', 'TInywell-healthcare' ); ?></button>
							</div>						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							)
						);
						?>
				</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->
