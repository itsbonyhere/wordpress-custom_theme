<?php get_header();?>
        <div class="banner-w3pvt-info second">
            </div>
        </div>
    </div>

    <!-- //banner -->
    <!-- banner-bottom -->
	<?php
	while(have_posts()): the_post();
	?>
    <section class="about py-5" id="about">
        <div class="container py-md-5">
            <div class="row about-w3pvt-top mt-2">
                <div class="col-lg-12 about-info">
                    <h4 class="title-w3ls mb-5"><?php the_title();?></h4>
					<p><?php the_content(); ?></p>
                </div>
                

            </div>
        </div>
    </section>
	<?php endwhile; ?>
    <?php get_footer();?>
    