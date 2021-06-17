<!-- Automatically attaches itself to the homepage in your wordpress -->
<!-- <?php 
	// get_header('secondary');
	?> -->
<!-- This means we are using secondary header in the front page. -->
<?php get_header();?>
<section class="page-wrap">
	<div class="container">
		<h1><?php the_title();?></h1>
		<!-- Template Part:We can make a lot of such template parts and include them in our front page file wherever we need to avoid writing a single piece of code multiple times. -->
		<?php get_template_part('includes/section','content');?>
		<?php get_search_form();?>
	</div>
</section>
<?php get_footer();?>