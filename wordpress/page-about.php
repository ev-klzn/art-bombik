<?php 
/*
Template Name: About
*/
?>

    <?php
    get_header();
    ?>

      <main class="page">
        <section class="about">
          <div class="about__container container">
            <div class="about__content">
              <div class="about__body">
                <h1 class="about__user"><?php the_field ('about_title');?></h1>
              </div>
            </div>
          </div>

          <div class="about__container container__svetlana">
            <div class="about__content container">
              <div class="about__img">
                <img
                  src="<?php the_field ('osikov_img');?>"
                  alt="Павло Осіков фото">
              </div>
              <div class="about__body">
                <h2 class="about__title"><?php the_field ('osikov_title');?></h2>
                <div class="about__text">
                  <?php the_field ('osikov_about');?>
                </div>
              </div>
            </div>
            <div class="about__container container__osikov">
              <div class="about__content container">
                <div class="about__img">
                  <img
                    src="<?php the_field ('denis_img');?>"
                    alt="Денис Чигирьов фото">
                </div>
                <div class="about__body">
                  <h2 class="about__title"><?php the_field ('denis_title');?></h2>
                  <div class="about__text">
                    <?php the_field ('denis_about');?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="goals">
          <div class="goals__container container">
            <div class="goals__body">
              <div class="goals__content">
                <h2 class="goals-block__title"> <?php the_field ('goals-block_title');?></h2>
                <div class="goals-block__text">
                    <?php the_field ('goals-block_text');?>
                </div>
              </div>
              <div class="goals__content-2">
                <h2 class="goals-block__title">
                    <?php the_field ('check_title');?>
                </h2>
                <div class="goals-block__text">
                    <?php the_field ('check_text');?>
                </div>
              </div>
            </div>
          </div>
        </section>

        <?php echo do_shortcode( '[wpcode id="914"]' ); ?>

      </main>
    <?php
    get_footer();
    ?>