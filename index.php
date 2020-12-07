<?php get_header(); ?>
      <?php if (is_active_sidebar('showcase')): ?>
        <div class="grid-x grid-padding-x">
        <div class="large-12 cell columns showcase">
          <div class="callout secondary">
           <?php dynamic_sidebar('showcase'); ?>
          </div>
        </div>
      </div>
      <?php endif ?>


      <div class="grid-x grid-padding-x">
        <div class="large-8 medium-8 cell">
          <div class="products row">
            <div class="grid-x grid-padding-x">
            
              <?php if (have_posts()): ?>
                <?php while (have_posts()): the_post();?>
                    <div class="large-4 medium-4 small-12 cell columns">
                      <div class="primary callout">
                        <h3><?php the_title(); ?></h3>
                        <?php if (has_post_thumbnail()): ?>
                          <?php the_post_thumbnail(); ?>
                        <?php endif ?><br><br>
                        <a class="button" href="<?php echo the_permalink(); ?>">Details</a>
                      </div>
                    </div>
                <?php endwhile; ?>
              <?php endif; ?>

            </div>
          </div>
        </div>

        <div class="large-4 medium-4 cell">
         <?php if (is_active_sidebar('sidebar')): ?>
           <?php dynamic_sidebar('sidebar'); ?>
         <?php endif; ?>
        </div>
      </div>
    </div>

    <?php wp_footer(); ?>