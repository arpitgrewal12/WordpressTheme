<!-- To tell wordpress that this is a template we do the comment below: -->
<?php
	/*
	Template Name:Contact Us
	*/
	?>
<!-- Now this template is saved as contact us template in wordpress and the default template is page.php.WE can use whatever template we like for whatever page. -->
<?php get_header();?>
<section class="page-wrap">
	<div class="container">
		<h1><?php the_title();?></h1>
		<div class="row">
			<!-- <div class="col-lg-6">
				Comment:This is where the contact form goes.

				</div> -->
			<div class="col-lg-6">
				<?php get_template_part('includes/section','content');?>
			</div>
		</div>
	</div>
</section>
<?php get_footer();?>