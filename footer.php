<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TInywell_healthcare
 */

$footer_column_one_heading = get_field('footer_column_one_heading', 'option');
$footer_column_one_heading_url = get_field('footer_column_one_heading_url', 'option');
$footer_column_two_heading = get_field('footer_column_two_heading', 'option');
$footer_column_two_heading_url = get_field('footer_column_two_heading_url', 'option');
$footer_column_three_heading = get_field('footer_column_three_heading', 'option');
$footer_column_three_heading_url = get_field('footer_column_three_heading_url', 'option');
$footer_column_four_heading = get_field('footer_column_four_heading', 'option');
$footer_column_four_heading_url = get_field('footer_column_four_heading_url', 'option');

?>

	<footer id="colophon" class="site-footer">
		<div class="text-tinyblue flex container mx-auto my-8 text-3xl sm:justify-between items-center flex-col sm:flex-row sm:px-4 px-4">
			<div class=""><P>Open hours:<br>Monday to friday: 09:00 - 17:00</div>
				<div class="flex gap-5 pt-8 sm:pt-8">
					<div>
						<a href="https://www.facebook.com/tinywellhealthcareservices"><img src="/wp-content/uploads/2023/11/fb.svg" alt="facebook" height="42px" width="42px" >
						</a>
					
					</div>
					<div>
					<!-- <a href=""><img src="/wp-content/uploads/2023/11/Linkden.svg" alt="Linkden" height="42px" width="42px" ></a> -->
					</div>
					<div>
					<a href="https://twitter.com/TinywellHealth1"><img src="/wp-content/uploads/2023/11/X.svg" alt="X" height="42px" width="42px" ></a>
					</div>
				</div>
		</div>
		<div class="sm:px-4 px-4 gap-1 flex site-info container mx-auto sm:text-right flex-wrap flex-row sm:flex-nowrap justify-center sm:justify-end text-center border border-t-tinyblue border-b-white border-l-white border-r-transparent border-solid visited:text-tinyblue">

			<a href="<?php echo $footer_column_one_heading_url ?>">
				<?php echo $footer_column_one_heading
				?>
			</a>
			<span class="sep"> | </span>
			<a href="<?php echo $footer_column_two_heading_url ?>">
				<?php echo $footer_column_two_heading
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'Tinywell-Healthcare' ), 'Tinywell-Healthcare', '<a href="https://ishmaelbennett.co.uk/">Mercury ink</a>' );
				?>
		</div>
		<div class="bg-tinyblue w-full h-3"><!-- .site-info --></div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
