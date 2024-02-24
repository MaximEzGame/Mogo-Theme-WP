<?php

// Template Name: Blog

?>

<?php

get_header();

?>
<div class="wrapper">
    <div class="base" style="padding: 8.5rem 0 0;">
    <section id="blog" class="section">
      <h2 class="section_title"><span class="title1">
          <?php the_field('first_title_blog-page'); ?>
        </span><span class="title2">
          <?php the_field('second_title_blog-page'); ?>
        </span>
      </h2>
      <?php
      global $post;

      $myposts = get_posts([
        'numberposts' => 3,
        'category_name' => 'blog list'
      ]);

      if ($myposts) { ?>
        <ul class="recent_list">
          <?php
          foreach ($myposts as $post) {
            setup_postdata($post);
            ?>
            <li class="recent_item">
              <article class="post">
                <div class="image_wrap blog_mod">
                  <?php the_post_thumbnail(
                    array(400, 300),
                    array(
                      'class' => "img blog_mod"
                    )
                  ); ?>
                </div>
                <h2 class="post_title"><a href="<?php echo get_permalink(); ?>" class="post_link">
                    <?php the_title() ?>
                  </a></h2>
                <div class="post_text">
                  <p>
                    <?php the_content(); ?>
                  </p>
                </div><a href="#" class="post_date"><span class="post_d_day">
                    <?php echo get_the_date('d', $post); ?>
                  </span><span class="post_d_month">
                    <?php echo get_the_date('M', $post); ?>
                  </span></a>
                <div class="post_stat_wrap"><a href="#views" class="post_stat views_mod">123</a><a href="<?php echo get_permalink(); ?>"
                    class="post_stat comm_mod"><?php
                    $comments = get_comments( [
                    'post_id' => $post->ID, 
                    'count'   => true 
                  ] ); echo $comments; ?></a></div>
              </article>
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