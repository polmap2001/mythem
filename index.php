<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> <?php bloginfo("name") ?></title>
       
    <?php wp_head() ?>

   </head>
<body <?php body_class( ) ?> >
<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="tagline">No act of kindness, no matter how small, is ever wasted</h3>
                <h1 class="align-self-center display-1 text-center heading">Hello Beautiful</h1>
            </div>
        </div>
    </div>
</div>
<div class="posts">

<?php 
while (have_posts()) {
the_post()
?>


<div class="post" <?php post_class() ?>>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="post-title">
                        <a href="<?php the_permalink();?>"> <?php the_title(); ?></a>
                        </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <p>
                        <strong><?php the_author(); ?>  </strong><br/>
                        <?php the_date(); ?>
                    </p>
                    <?php echo get_the_tag_list("<ul class=\"list-unstyled\"><li>","</li><li>","</li></ul>"); ?>
                </div>
                <div class="col-md-8">
                    <p>

                    <?php

                    if (has_post_thumbnail($post)){
                        the_post_thumbnail("large",array("class"=>"img-fluid"));
                    }
                    ?>    
            
                    </p>
                    <p>

                    <?php 
                            the_excerpt();
                    ?> 
                    </p>

                
                </div>
            </div>

        </div>
    </div>

   
</div>

<?php 
}
?>

<div class="continer post-pagination">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-8">
            <?php
                the_posts_pagination(array(
                    "screen_reader_text"=>' ',
                    "prev_text"=>"New Post",
                    "next_text"=>"Old Post"
                ));
            
            ?>

        </div>
    </div>
</div>

<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                &copy; AungonaSoft - All Rights Reserved
            </div>
        </div>
    </div>
</div>
<?php wp_footer() ?>
</body>
</html>