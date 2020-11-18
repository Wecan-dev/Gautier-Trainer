<?php get_header(); ?>
<section>
  <div class="navabar__grub">
    
    <div class="sidebar__content">
      <?php get_template_part('partials/menu/sidebar__content_top_black'); ?>
      <div class="sidebar__content--content ">
        <div class="dashboard-content pro-content">
          <div class="pro-videos__content">

            <div class="pro-videos__description">
              <div class="slider-dashboard__text">
                <a href="#" class="slider-dashboard__cat">
                  Rehablilitación
                </a>
                <div class="slider-dashboard__title">
                  <p>Como descargar estos 3 músculos</p>
                </div>
                <div class="slider-dashboard__up">
                  <p>Hace 20min</p>
                </div>
              </div>
            </div>
            <div class="pro-videos__btn">
              <a href="#"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
            </div>
          </div>
        </div>
        <div class="video-dashboard__content">
          <div class="video-dashboard__title">
            <div class="video-dashboard__title--text">
              <p>Productos</p>
            </div>
          </div>
          <div class="video-dashboard__video">
            <div class="video-dashboard__slider">
            <?php
              $args = array (
                 'post_type' => 'product',
                 'posts_per_page' => 100,
                 'post_status' => 'publish'

              );
            $loop = new WP_Query( $args ); 
            while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>             
                <div class="slider-dashboard__content">
                  <div class="slider-dashboard__img">
                    <img src="<?php the_post_thumbnail_url('full');?>" alt="">
                  </div>
                  <div class="slider-dashboard__text">
                    <a href="?add-to-cart=<?php echo get_the_ID(); ?>" class="slider-dashboard__cat">
                      Añadir
                    </a>
                    <div class="slider-dashboard__title">
                      <a href="<?php the_permalink(); ?>"><p><?php the_title(); ?></p></a>
                    </div>
                    <div class="slider-dashboard__up">
                      <p><?php echo $product->get_price_html(); ?></p>
                    </div>
                    
                  </div>
                </div>
            <?php endwhile; ?>       
                
            </div>

          </div>
        </div>
        

      </div>
    </div>
  </div>

</section>

<?php get_footer(); ?>