<?php
/* 
** Template Name: Gallery Images
*/

get_header();

while (have_posts()) : the_post();

get_template_part('template-parts/content', 'pages');

endwhile;
get_footer();