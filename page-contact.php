<?php get_header();?>
<div class="container " id="contact" >


<?php  if(have_posts(  )){
       
       the_post(); ?>
        
<div class="row">
    <div class="col-md-6 data">
       <p> <?php the_post_thumbnail("medium");?> </p>
 <br>
        <h2><?php the_content();?></h2>
        
    </div>
</div>
        <?php 
       
        }
   
    ?>


</div>

<?php get_footer();?>