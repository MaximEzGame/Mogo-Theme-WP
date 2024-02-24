<div class="wrapper">
  <div class="base">
    <section id="home" class="section intro_mod" style="background-image: url('<?php the_field('bg-intro'); ?>');">
      <h2 class="section_title intro_mod"><span class="title1 intro_mod">
          <?php the_field('title1'); ?>
        </span><span class="title2 intro_mod">
          <?php the_field('title2'); ?>
        </span>
      </h2>
    </section>
    <section id="about" class="section">
      <h2 class="section_title"><span class="title1">
          <?php
          the_field('first_title_about'); ?>
        </span><span class="title2">
          <?php the_field('second_title_about'); ?>
        </span>
      </h2>
      <div class="section_descr">
        <p>
          <?php the_field('description_about'); ?>
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
    <section id="service" class="section">
      <h2 class="section_title"><span class="title1">
          <?php the_field('first_title_service'); ?>
        </span><span class="title2">
          <?php the_field('second_title_service'); ?>
        </span>
      </h2>
      <?php
      global $post;

      $myposts = get_posts([
        'numberposts' => 6,
        'category_name' => 'services list'
      ]);

      if (count($myposts) >= 3) {
        ?>
        <ul class="services_list">
          <?php
          foreach ($myposts as $post) {
            setup_postdata($post);
            ?>
            <li class="services_l_item">
              <div class="service_block <?php the_field('icons'); ?>">
                <h3 class="service_title">
                  <?php the_title() ?>
                </h3>
                <div class="service_text">
                  <p>
                    <?php the_content(); ?>
                  </p>
                </div>
              </div>
            </li>
            <?php
          }
          ?>
        </ul>
        <?php
      } else {

      }
      wp_reset_postdata();
      ?>
    </section>
    <section class="section">
      <h2 class="section_title"><span class="title1">
          <?php the_field('first_title_what_we_do'); ?>
        </span><span class="title2">
          <?php the_field('second_title_what_we_do'); ?>
        </span>
      </h2>
      <div class="section_descr">
        <p>
          <?php the_field('description_what_we_do'); ?>
        </p>
      </div>
      <div class="what">
        <figure class="image_wrap what_mod"><img src="<?php the_field('image_what_we_do'); ?>" class="img"></figure>
        <?php
        global $post;

        $myposts = get_posts([
          'numberposts' => 6,
          'category_name' => 'what we do list'
        ]);

        if (count($myposts) >= 1) { ?>
          <ul class="accordion">
            <?php
            foreach ($myposts as $post) {
              setup_postdata($post);
              ?>
              <li class="accordion_item">
                <h3 class="accordion_title <?php the_field('icons'); ?>">
                  <?php the_title() ?>
                </h3>
                <div class="accordion_content">
                  <p>
                    <?php the_content(); ?>
                  </p>
                </div>
              </li>
              <?php
            }
            ?>
          </ul>
          <?php
        } else {

        }

        wp_reset_postdata();
        ?>
      </div>
    </section>
    <section class="section">
      <h2 class="section_title"><span class="title1">
          <?php the_field('first_title_team'); ?>
        </span><span class="title2">
          <?php the_field('second_title_team'); ?>
        </span>
      </h2>
      <div class="section_descr">
        <p>
          <?php the_field('description_team'); ?>
        </p>
      </div>

      <?php
      global $post;

      $myposts = get_posts([
        'post_type' => 'team'
      ]);

      if (count($myposts) >= 3) { ?>
        <ul class="team_list">
          <?php
          foreach ($myposts as $post) {
            setup_postdata($post);
            ?>
            <li class="team_l_item">
              <div class="teammate_block">
                <figure class="image_wrap effect1_mod">
                  <?php the_post_thumbnail(
                    array(380, 470),
                    array(
                      'class' => "img"
                    )
                  ); ?>
                  <?php if (get_field('social_links')): ?>
                    <figcaption class="image_caption">
                      <ul class="teammate_socials">
                        <?php foreach (get_field('social_links') as $key => $social_link): ?>
                          <?php if (empty($social_link)) {
                            continue;
                          } ?>
                          <li class="teammate_s_item">
                            <a href="<?php echo $social_link; ?>" class="teammate_s_link <?php echo $key; ?>"></a>
                          </li>
                        <?php endforeach; ?>
                      </ul>
                    </figcaption>
                  <?php endif; ?>
                </figure><span class="image_c_title">
                  <?php the_title() ?>
                </span><span class="image_c_text">
                  <?php the_field('position_team_members'); ?>
                </span>
              </div>
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


    <?php
    global $post;

    $testimonials = get_posts([
      'post_type' => 'testimonials'
    ]);

    if (count($testimonials) >= 1): ?>
      <section class="section what_mod" style="background-image: url('<?php the_field('bg-what'); ?>');">
        <h2 class="section_title"><span class="title1">
            <?php the_field('first_title_testimonials'); ?>
          </span><span class="title2">
            <?php the_field('second_title_testimonials'); ?>
          </span>
        </h2>
        <div class="clients">
          <?php
          foreach ($testimonials as $post) {
            setup_postdata($post);
            ?>
            <div class="client_block">
              <div class="client_image">
                <?php the_post_thumbnail(
                  array(137, 159),
                  array(
                    'class' => "img"
                  )
                ); ?>
              </div>
              <div class="text_wrap">
                <div class="image_c_title">
                  <?php the_title() ?>
                </div>
                <div class="image_c_text">
                  <?php the_field('position_testimonials'); ?>
                </div>
                <div class="text">
                  <p>
                    <?php the_content(); ?>
                  </p>
                </div>
              </div>
            </div>
            <?php
          } ?>
        </div>
        <?php
    endif;
    wp_reset_postdata();
    ?>
    </section>
    <section id="blog" class="section">
      <h2 class="section_title"><span class="title1">
          <?php the_field('first_title_blog'); ?>
        </span><span class="title2">
          <?php the_field('second_title_blog'); ?>
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