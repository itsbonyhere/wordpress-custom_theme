

<?php /* Template Name:My coach pages  */   ?>
<?php get_header();  ?>
        <!-- //header -->
        <div class="banner-w3pvt-info second">
            <div class="overlay-w3ls second">
            </div>
        </div>
    </div>

    <!-- //banner -->
    <!-- banner-bottom -->
	
    <section class="about py-5" id="about">
        <div class="container py-md-5">
        <h4 class="title-w3ls mb-5"><?php the_title(); ?></h4>
            <div class="row about-w3pvt-top mt-2">

 <?php
$arg=array(
    'post_type'=>'coach'
);
query_posts($arg);
while(have_posts()): the_post();

$image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), '' );

$g=get_post_meta(get_the_ID(),"Fees");
$p=get_post_meta(get_the_ID(),"gender");
$s=get_post_meta(get_the_ID(),"mobile_number");
?>


 <div class="col-lg-3 about-info">
                <div class="card" >
  <img class="card-img-top" src="<?php echo $image[0]; ?>" alt="Card image">
  <div class="card-body">
    <h4 class="card-title"><?php the_title(); ?></h4>
    <p class="card-text"><?php echo $g[0]; ?></p>
    <p class="card-text"><?php echo $p[0]; ?></p>
    <p class="card-text"><?php echo $s[0]; ?></p>
    <a href="<?php echo get_the_permalink(); ?>" class="btn btn-primary">See Profile</a>
  </div>
</div>
</div>
<?php endwhile;  wp_reset_query(); ?>




               


            </div>
        </div>
    </section>
	



<?php get_footer(); ?>
   
