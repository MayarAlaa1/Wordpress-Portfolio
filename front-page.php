<!-- Home page -->
<?php get_header();?>

<div class="container">
<section class = "posts">

<?php 

    $args=array(
        "post_type" => "post",
        "posts_per_page" => 1
    );
    $query= new WP_Query($args);
    
    if($query->have_posts(  )){
        while($query->have_posts()){
           $query->the_post(); ?>
            <div class="container home">
    <div class="row justify-content-center">
        <div class="col-md-6 ">
        <br>
        
      
        <p><?php the_post_thumbnail("medium");?></p> 
        <br>
        <h3><?php the_title();?></h3>
            <p><?php the_content();?></p>
            
        </div>
    </div>
        </div>
            <?php 
           
            }
        }
        ?>

</section>

<section class = "work-experience" >
<h2> Experience</h2>

<div class="container home">
<?php 

    $args=array(
        "post_type" => "work_experiences",
        "posts_per_page" => 6 
    );
    $query= new WP_Query($args);
    if($query->have_posts(  )){
        
        while($query->have_posts()){
           $query->the_post(); ?>
   
         
    <div class="row justify-content-center">
        <div class="col-md-6">
           
            
        <a href="<?php echo get_the_permalink( );?>">
            <h4><?php the_title();?></h4></a>
            
        </div>
    </div>
            <?php 
           
            }
        }
        ?>
</div>
</section>

  </div>    
<?php get_footer();?>