<?php get_header();?>
<div class="container archive">

<h1>Hello from archive page</h1>
<?php  if(have_posts(  )){
        while(have_posts()){
           the_post(); ?>
            
    <div class="row">
        <div class="col-md-6">
            <?php the_post_thumbnail("thumbnail");?>
            <a href="<?php echo get_the_permalink( );?>">
            <h2><?php the_title();?></h2>
            
        </div>
    </div>
            <?php 
           
            }
        }
        ?>
</div>


<?php get_footer();?>