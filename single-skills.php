<?php get_header();?>
<div class="container skills">
<h2> <?php the_title();?> Skill</h2>
<?php  if(have_posts(  )){
    the_post(); ?>
            
    <div class="row">
        <div class="col-md-6 skill">
        <h4><?php the_title();?></h4>
        <p>Skill level: <?php echo get_field("level")?></p>
            </div>
        </div>
                <?php 
               
                }
           
            ?>
    </div>
    
    
    <?php get_footer();?>

