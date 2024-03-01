<?php 
/*
Template Name: Шаблон event 11
*/
?>

    <?php
    get_header();
    ?>

      <main class="page">
        <section class="page__events events">
          <div class="event1">
            <div class="events__container container">
              <div class="events__header events-block">
                <h1 class="events-block__title"><?php the_field ('event-title');?></h1>
              </div>
            </div>
            <div class="events__body container">
					<?php the_field ('event-about');?>
            </div>
          </div>
        </section>

        <section class="galery container">
          <h2 class="events-block__title">Фотозвіт події</h2>
          <div class="swiper">
            <div class="swiper-wrapper">

					<?php               
					// параметры по умолчанию
					$my_posts = get_posts( array(
						'numberposts' => -1,
						'category_name'    => 'slider-11',
						'orderby'     => 'date',
						'order'       => 'ASC',
						// 'include'     => array(),
						// 'exclude'     => array(),
						// 'meta_key'    => '',
						// 'meta_value'  =>'',
						'post_type'   => 'post',
						'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
					) );

					global $post;

					foreach( $my_posts as $post ){
						setup_postdata( $post );
						?>

						<div class="swiper-slide">
						<div class="swiper-slide__img">
							<img
							src="<?php the_field('event-images'); ?>"
							alt="фото" />
						</div>
					</div>

					<?php
						// формат вывода the_title() ...
					}

					wp_reset_postdata(); // сброс
					?>
				</div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
         </div>

        </section>

        <?php echo do_shortcode( '[wpcode id="914"]' ); ?>

      </main>
    <?php
    get_footer();
    ?>