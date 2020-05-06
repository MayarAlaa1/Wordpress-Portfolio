<?php get_header();?>
<div class="container skills">

<h2>Projects and Trainings </h2>
<?php  if(have_posts(  )){
        while(have_posts()){
           the_post(); ?>
            
    <div class="row">
        <div class="col-md-6 data">
         
            <a href="<?php echo get_the_permalink( );?>">
            <h4><?php the_title();?></h4></a>
            
            
        </div>
    </div>
 
            <?php 
       
            }
        }
        ?>
               <?php echo paginate_links(); ?> 
</div>


<?php get_footer();?>