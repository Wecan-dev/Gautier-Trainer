<?php global $current_user; ?>
      <div class="sidebar__content--top sidebar__routine d-none d-lg-flex">
        <div class="title-sidebar__top">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/logo-gautier-desktop.png" alt=""> <p>Gautier-Trainer</p>
        </div>
        <div class="sidebar-top__content">
          <div class="user-sidebar__top">
            <div class="user-sidebar__top--img">
            <?php if (is_user_logged_in()){ 
              echo get_avatar( $current_user->user_email, 30 );
            }else{ ?>
              <img src="#" alt="">
            <?php } ?>
            </div>
            <div class="user-sidebar__top--text">
              <div class="dropdown">
                <?php if (is_user_logged_in()){ ?>
                <button class="" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <?php echo wp_get_current_user()->user_login;?> <i class="fa fa-angle-down" aria-hidden="true"></i>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="<?php echo get_home_url() ?>/dashboard">Mi cuenta</a>
                  <a class="dropdown-item" href="<?php echo wp_logout_url( home_url()); ?>">Cerrar sesión</a>
                </div>

                              
                <?php }else{ ?>
                  <a href="<?php echo get_home_url() ?>/login">Entra</a>
                <?php } ?>
 

              </div>
            </div>  
          </div>
          <div class="notifi-sidebar__top">
          <a href="<?php echo get_home_url() ?>/cart"><i class="fa fa-shopping-cart" aria-hidden="true"><?php echo wp_kses_data(WC()->cart->get_cart_contents_count()); ?></i></a>

          </div>
        </div>
      </div>