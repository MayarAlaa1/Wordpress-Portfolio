<!-- to render the single custom post (work_experiences) -->
<?php get_header();?>
<div class="container skills">

<h2><h2><?php the_title();?></h2></a> </h2>
<?php  if(have_posts(  )){
       
           the_post(); ?>
            
    <div class="row">
        <div class="col-md-6 data">

        <h4> <?php echo get_field("project_title");?></h4>
        <p><?php the_content( )?></p>
            <p>Date: <?php echo get_field("date");?></p>
            
            
        </div>
    </div>
            <?php 
           
            }
       
        ?>
</div>


<?php get_footer();?>