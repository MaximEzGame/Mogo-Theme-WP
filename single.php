<?php

get_header(); ?>
<style>
    .base {
        padding: 8.5rem 0 0;
    }
    img, .entry-header, .entry-content, .entry-footer {
        margin: 0 auto;
    }
</style>
<div class="wrapper">
    <div class="base">
        <main id="main" class="site-main" role="main">
            <section id="blog" class="section">
                <h2 class="section_title"><span class="title1">
                Our stories
                    </span><span class="title2">
                    LATEST BLOG
                    </span>
                </h2>
                <?php

                while (have_posts()):
                    the_post();


                    get_template_part('content', get_post_format());

                    if (comments_open() || get_comments_number()):
                        comments_template();
                    endif;

                    the_post_navigation(
                        array(
                            'next_text' => '<span class="meta-nav" aria-hidden="true">' . __('Next', 'Mogo') . '</span> ' .
                                '<span class="screen-reader-text">' . __('Next post:', 'Mogo') . '</span> ' .
                                '<span class="post-title">%title</span>',
                            'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __('Previous', 'Mogo') . '</span> ' .
                                '<span class="screen-reader-text">' . __('Previous post:', 'Mogo') . '</span> ' .
                                '<span class="post-title">%title</span>',
                        ));

                endwhile;
                ?>
            </section>
        </main>
    </div>
</div>

<?php get_footer(); ?>