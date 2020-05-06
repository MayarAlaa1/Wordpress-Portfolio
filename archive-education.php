<?php get_header();?>
<div class="container skills">

<h2>Education</h2>
<?php  if(have_posts(  )){
        while(have_posts()){
           the_post(); ?>
            
    <div class="row">
        <div class="col-md-6 data">
         
            <a href="<?php echo get_the_permalink( );?>">
            <h2><?php the_title();?></h2></a>
            <p><?php the_content();?></p>
            
        </div>
    </div>
            <?php 
           
            }
        }
        ?>
</div>


<?php get_footer();?>