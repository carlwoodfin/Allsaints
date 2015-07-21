<?php

get_header();

?>

 <div class="row col-md-10 col-md-offset-1 hidden-xs hidden-sm carousel-padding">

<div id="postCarousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" role="listbox">
<ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>
<?php 
   $the_query = new WP_Query('category_name=slider&posts_per_page=1'); 
   while ( $the_query->have_posts() ) : 
   $the_query->the_post();
  ?>
  <div class="item active">
  <?php the_post_thumbnail('medium');?>

   </div><!-- item active -->
   <?php endwhile; 
   wp_reset_postdata(); ?>
  <?php 
 $the_query = new WP_Query('category_name=slider&posts_per_page=5&offset=1'); 
 while ( $the_query->have_posts() ) : 
 $the_query->the_post();
?>
<div class="item">
 <?php the_post_thumbnail('medium');?>
 <div class="carousel-caption">
 <!-- <h4><?php the_title();?></h4> -->
 </div>
</div><!-- item -->
<?php endwhile; 
 wp_reset_postdata();
?>     

      </div>
      <a class="left carousel-control" href="#postCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#postCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->

</div>
<div class="row">
<div class="col-md-9">
<?php
 
// Get the last 10 posts in the special_cat category.
 query_posts( 'pagename=Home' );

 while ( have_posts() ) : the_post();
?>
	<h3><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
	
	<p class="homecontent"><?php the_content(); ?></p>
	

 <?php endwhile; ?>
</div>  


  <div class="col-md-3">
<?php get_sidebar(); ?>
</div>

</div> <!-- Row ending -->

<?php get_footer(); ?>