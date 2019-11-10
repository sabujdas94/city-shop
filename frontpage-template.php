<?php
/* Template Name: Front Page
**
**@Since Version 1.0.0
**
**/
get_header();
?>

	<main>
		<?php 
		    while ( have_posts() ) : the_post();
		        the_content();
		    endwhile;
		?>
	</main>

<?php

get_footer();
