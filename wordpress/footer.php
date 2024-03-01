      <footer class="footer">
        <div class="footer__top">
          <div class="footer__main container">
            <div class="footer__row">
              <div class="footer__column">
                <div class="footer__label">Інформація</div>
                <nav class="footer__menu menu__footer">

                  <?php 
                      wp_nav_menu( [
                        'menu'            => 'Footer',
                        'container'       => 'false',
                        // 'container_class' => '',
                        // 'container_id'    => '',
                        'menu_class'      => 'menu-footer__list',
                        // 'menu_id'         => '',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        // 'before'          => '',
                        // 'after'           => '',
                        // 'link_before'     => '',
                        // 'link_after'      => '',
                        'items_wrap'      => '<ul class="menu-footer__list">%3$s</ul>',
                        'depth'           => 0,
                        'walker'          => '',
                      ] );
                  ?>

                </nav>
              </div>

              <div id="contacts" class="footer__column">
                <div class="footer__label">Контакти</div>
                <div class="footer__contacts contacts-footer">
                  <a
                    href="tel:<?php the_field ('tel');?>"
                    class="contacts-footer__item contacts-footer__phone">
                    <?php the_field ('tel', 2);?>
                  </a>
                  <a
                    href="<?php the_field ('map');?>"
                    class="contacts-footer__item contacts-footer__map"
                    target="_blank">
                    <?php the_field ('adress', 2);?>
                  </a>
                  <a
                    href="mailto:<?php the_field ('email');?>"
                    class="contacts-footer__item contacts-footer__email">
                    <?php the_field ('email', 2);?>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footter__bottom">
          <div class="footer__container container">
            <div class="footer__copy">
              Made By <a
                target="blank"
                class="evklzn"
                href="https://ev-klzn.github.io/">Ev-Klzn</a>
               @2022. All Right Reserved
            </div>
            <div class="footer__social social">
              <a
                href="https://www.facebook.com/profile.php?id=100009830414960"
                target="_blank"
                class="social__item">
                <i class="fa-brands fa-facebook iconfooter"></i>
                <span class="den">Денис Чигірьов</span>
              </a>
              <a
                href="https://www.facebook.com/pavelosikov/"
                target="_blank"
                class="social__item">
                <i class="fa-brands fa-facebook iconfooter"></i>
                <span class="den">Осіков Павло</span>
              </a>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <?php
    wp_footer();
    ?>
  </body>
</html>