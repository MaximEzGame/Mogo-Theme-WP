<?php

// Template Name: Service

?>

<?php

get_header();

?>
<div class="wrapper">
    <div class="base" style="padding: 8.5rem 0 0;">
    <section id="service" class="section">
      <h2 class="section_title"><span class="title1">
          <?php the_field('first_title_service-page'); ?>
        </span><span class="title2">
          <?php the_field('second_title_service-page'); ?>
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
          <?php the_field('first_title_what-page'); ?>
        </span><span class="title2">
          <?php the_field('second_title_what-page'); ?>
        </span>
      </h2>
      <div class="section_descr">
        <p>
          <?php the_field('description_what-page'); ?>
        </p>
      </div>
      <div class="what">
        <figure class="image_wrap what_mod"><img src="<?php the_field('image_what-page'); ?>" class="img"></figure>
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
    </div>
</div>
<?php
get_footer();

?>