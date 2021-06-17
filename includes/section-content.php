<!-- When we want to write any info/content on the page through wordpress, our theme must be able to collect that content from the wordpress database and display it on the page.For that,we will write a function. -->
<?php if(have_posts()):while(have_posts()):the_post();?>
<!-- This means that if we have posts for the specific page that we are on, while we have the post there, show the post. -->
<?php the_content();?>
<!-- To closeß -->
<?php endwhile;else:endif;?>