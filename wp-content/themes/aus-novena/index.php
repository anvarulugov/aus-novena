<?php
get_header();

if (have_posts()) {
	while (have_posts()) {
		the_post();
		the_content();
	}
} else {
	echo '404';
}

get_footer();