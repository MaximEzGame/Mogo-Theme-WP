<?php

// Template Name: About

?>

<?php

get_header();

?>
<div class="wrapper">
    <div class="base" style="padding: 8.5rem 0 0;">
        <section id="about" class="section">
            <h2 class="section_title"><span class="title1">
                    <?php the_field('first_title_about-page');
                   ?>
                </span><span class="title2">
                    <?php the_field('second_title_about-page'); ?>
                </span>
            </h2>
            <div class="section_descr">
                <p>
                    <?php the_field('description_about-page'); ?>
                </p>
            </div>

            <?php
            global $post;

            $myposts = get_posts([
                'numberposts' => 3,
                'category_name' => 'stories list'
            ]);

            if ($myposts) {
                ?>
                <ul class="stories_list">
                    <?php
                    foreach ($myposts as $post) {
                        setup_postdata($post);
                        ?>
                        <li class="stories_l_item"><a href="#" class="image_link">
                                <figure class="image_wrap effect1_mod">
                                    <?php the_post_thumbnail(
                                        array(380, 250),
                                        array(
                                            'class' => "img"
                                        )
                                    ); ?>
                                    <figcaption class="image_caption story_mod">
                                        <?php the_title(); ?>
                                    </figcaption>
                                </figure>
                            </a></li>
                    <?php } ?>
                </ul>
            <?php } else { ?>
                <?php
            }

            wp_reset_postdata();
            ?>

            <?php
            global $post;

            $myposts = get_posts([
                'numberposts' => 5,
                'category_name' => 'facts list'
            ]);

            if ($myposts) { ?>
                <ul class="facts_list">
                    <?php
                    foreach ($myposts as $post) {
                        setup_postdata($post);
                        ?>
                        <li class="facts_l_item">
                            <dl class="fact_block">
                                <dt class="fact_text">
                                    <?php the_title(); ?>
                                </dt>
                                <dd class="fact_num">
                                    <?php the_content(); ?>
                                </dd>
                            </dl>
                        </li>
                        <?php
                    } ?>
                </ul>
                <?php
            } else {

            }
            wp_reset_postdata();
            ?>
        </section>
    </div>
</div>
<?php
get_footer();

?>