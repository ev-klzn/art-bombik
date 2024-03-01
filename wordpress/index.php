    <?php
    get_header();
    ?>
      <main class="page">
        <div class="page__main-block main-block">
          <div class="main-block__container container">
            <div class="main-block__body">
              <h1 class="main-block__title">
                <?php the_field ('main-block__title', 2);?>
              </h1>
              <div class="main-block__text">
                <?php the_field ('main-block__text_1', 2);?>
              </div>
              <div class="main-block__text">
                <?php the_field ('main-block__text_2', 2);?>
              </div>
            </div>
          </div>
          <div class="main-block__image ibg">
            <img src="<?php echo bloginfo('template_url');?>/img/mainblock/cover.webp" alt="cover">
          </div>
        </div>
        <section class="page__services services">
          <div class="services__container container">
            <div class="services__body">
              <div class="services__column">
                <div class="services__item item-service">
                  <div class="item-services__icon">
                    <i class="fa-solid fa-masks-theater icon"></i>
                  </div>
                  <h3 class="item-services__title">Культура і мистецтво</h3>
                  <div class="item-services__text">
                    Прикриваємо тил культурного фронту
                  </div>
                </div>
              </div>
              <div class="services__column">
                <div class="services__item item-service">
                  <div class="item-services__icon">
                    <i class="fa-regular fa-face-grin-beam icon"></i>
                  </div>
                  <h3 class="item-services__title">
                    Психологічна підтримка громадян
                  </h3>
                  <div class="item-services__text">
                    Проводимо культурні заходи
                  </div>
                </div>
              </div>
              <div class="services__column">
                <div class="services__item item-service services__item-green">
                  <div class="item-services__icon">
                    <i class="fa-regular fa-money-bill-1 icon"></i>
                  </div>
                  <h3 class="item-services__title">Допомога нашим героям</h3>
                  <div class="item-services__text">
                    Збираємо кошти і передаємо ЗСУ
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="page__advantages advantages">
          <div class="advantages__container container">
            <div class="advantages__header header-block">
              <h2 class="header-block__title">Наші досягнення</h2>
            </div>
            <div class="advantages__body">
              <div class="advantages__column">
                <div class="advantages__item">
                  <div class="advantages__icon">
                    <i class="fa-regular fa-calendar-check icon"></i>
                  </div>
                  <div class="advantages__value"><?php the_field ('events');?></div>
                  <div class="advantages__text">подій проведено</div>
                </div>
              </div>
              <div class="advantages__column">
                <div class="advantages__item">
                  <div class="advantages__icon">
                    <i class="fa-regular fa-star icon"></i>
                  </div>
                  <div class="advantages__value"><?php the_field ('stars');?></div>
                  <div class="advantages__text">
                    творчих особистостей залучено
                  </div>
                </div>
              </div>
              <div class="advantages__column">
                <div class="advantages__item">
                  <div class="advantages__icon">
                    <i class="fa-regular fa-user icon"></i>
                  </div>
                  <div class="advantages__value"><?php the_field ('guests');?></div>
                  <div class="advantages__text">відвідали наші заходи</div>
                </div>
              </div>
              <div class="advantages__column">
                <div class="advantages__item">
                  <div class="advantages__icon">
                    <i class="fa-regular fa-money-bill-1 icon"></i>
                  </div>
                  <div class="advantages__value"><?php the_field ('cash');?></div>
                  <div class="advantages__text">коштів зібрано</div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="page__practice practice">
          <div class="practice__container container">
            <div class="practice__header header-block">
              <h2 id="events" class="header-block__title">Наші заходи</h2>
            </div>
            <div class="practice__body">
              <?php               
              // параметры по умолчанию
              $my_posts = get_posts( array(
                'numberposts' => -1,
                'category_name'    => 'events',
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
                <div class="practice__column">
                  <article class="practice__item item-practice">
                    <div class="item-practice__content">
                      <a href="<?php the_field('event_link'); ?>" class="item-practice__link">
                        <h3 class="item-practice__title"><?php the_title(); ?></h3>
                      </a>
                    </div>
                    <a href="<?php the_field('event_link'); ?>" class="item-practice__image ibg">
                      <img
                        src="<?php the_field('event_img'); ?>"
                        alt="<?php the_field('event_alt'); ?>">
                    </a>
                  </article>
                </div>
              <?php
                // формат вывода the_title() ...
              }

              wp_reset_postdata(); // сброс
              ?>
            </div>
          </div>
        </section>
        <section class="page__whoweare whoweare">
          <div class="whoweare__container container">
            <div class="whoweare__header header-block">
              <h2 class="header-block__title"><?php the_field ('header-block_title');?></h2>
              <h3 class="header-block__subtitle">
                <?php the_field ('header-block_subtitle');?>
              </h3>
            </div>
            <div class="whoweare__body">
              <div class="whoweare__video">
                <iframe
                  width="560"
                  height="315"
                  src="<?php the_field ('yt');?>"
                  title="«Робимо театр з бомбосховищ» – арт-простір «Бомбік» у Кривому Розі | T-fishing"
                  frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                  allowfullscreen></iframe>
              </div>
              <div class="whoweare__content">
                <div class="whoweare__text">
                  <p>
                    <?php the_field ('whoweare_text-1');?>
                  </p>
                  <p>
                    <?php the_field ('whoweare_text-2');?>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="whoweare__2text">
              <div>
                <p>
                  <?php the_field ('whoweare_text-3');?>
                </p>
                <p>
                  <?php the_field ('whoweare_text-4');?>
                </p>
              </div>
            </div>
          </div>
        </section>

        <?php echo do_shortcode( '[wpcode id="914"]' ); ?>

      </main>
    <?php
    get_footer();
    ?>

