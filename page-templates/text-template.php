<?php
/**
 * Template Name: Text Template
 */

get_header();
?>

    <main id="content" class="content playPage">
        <section class="innerBannerBlock">
            <div class="container">
                <div class="row justify-content-center">
                    <h1><?php echo get_the_title();?></h1>              
                </div>
            </div>
        </section>

        <section class="textTemplateBlock space">
            <div class="container">
                <div class="row">
                    <?php
                        while ( have_posts() ) : the_post(); 
                            the_content();      
                        endwhile;   
                    ?>
                </div>                                                                             
            </div>
        </section>

     </main>

<?php
get_footer();
?>
