<?php get_header(); ?>


<section class="section-content">

    <div class="container">

        <div class="row">
            
            <div class="col-sm-8 col-md-8">

                <?php
                if ( have_posts() ):
                    // Start the loop.
                    while ( have_posts() ) : the_post();
                        get_template_part( 'content', get_post_format() );
                    endwhile;

                // If no content, include the "No posts found" template.
                else :
                    get_template_part( 'content', 'none' );
                endif;
                ?>

                <?php
                $pagination = TPL::pagination();
                if( !empty($pagination) ){
                    echo "<div class='post-navigation mv10'>$pagination</div>";
                }
                ?>


            </div>

            <?php get_sidebar(); ?>

        </div>
    </div>
</section>



<?php get_footer(); ?>