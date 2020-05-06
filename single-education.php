<?php get_header();?>
<div class="container skills">
<h2> <?php the_title();?></h2>
<?php  if(have_posts(  )){
    the_post(); ?>
            
    <div class="row">
        <div class="col-md-6 data">
    
            <p><?php the_content();?></p>
            <p>Period: <?php echo get_field("period")?></p>
            </div>
        </div>
                <?php 
               
                }
           
            ?>
    </div>
    
    
    <?php get_footer();?>
