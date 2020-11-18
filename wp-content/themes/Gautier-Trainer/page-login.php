<?php if (is_user_logged_in() != NULL ){ header('Location: '.get_home_url().'/dashboard'); } ?>
<?php get_header(); ?>
<section>
  <div class="login">
    <div class="main-login">
      <div class="main-login__content">
        <div class="content-login__img">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/plan-workouts.jpg" alt="">
          <p>condición <br> <span>gt</span></p>
          <h4>Gautier Trainer</h4>
        </div>
      </div>
      <div class="main-login__content">
        <div class="content-login__form">
          <div class="form-login__img">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/logo-gautier-desktop.png" alt="">
          </div>
          <div class="form-login__form">
                            <form class="woocommerce-form form-custom woocommerce-form-login login" method="post">
                                <!--<div class="login-img">

                                    <img class="" src="<?php echo get_template_directory_uri();?>/assets/img/user.png">
                                </div>-->
                                <br>
                                <?php do_action( 'woocommerce_login_form_start' ); ?>

                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                    <label for="username" class="label-user labels__login" >
                                    <!--<img class="" src="<?php echo get_template_directory_uri();?>/assets/img/usergray.png">-->
                                    Ingresa tu email
                                    <input type="text" placeholder="" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="username" autocomplete="off" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
                                </label>
                                </p>
                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                    <label for="password" class="labels__login">
                                    <!--<img class="" src="<?php echo get_template_directory_uri();?>/assets/img/pass.png">-->
                                    Ingresa tu clave
                                    <input placeholder="" class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password" autocomplete="off" />
                                </label>
                                </p>

                                <p class="form-row">
                                    <!-- <label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
                                        <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" /> <span><?php esc_html_e('Recuerdame', 'woocommerce' ); ?></span>
                                    </label> -->
                                    <?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>
                                    <button type="submit" class="main-general__btn main-general__button woocommerce-button woocommerce-form-login__submit" name="login" value="<?php esc_attr_e( 'Log in', 'woocommerce' ); ?>"><?php esc_html_e( 'Iniciar sesión', 'woocommerce' ); ?></button>
                                </p>
                                <div class="form-login__register" >
                                    <p class="woocommerce-LostPassword lost_password">
                                        <a href="<?php echo esc_url( wp_lostpassword_url() ); ?>"><?php esc_html_e( '¿Se te olvidó tu contraseña?', 'woocommerce' ); ?></a>
                                        <p class="woocommerce-in-account">
                                            <!--<a href="?create=account"><?='Crea una cuenta' ?></a>--></p>
                                    </p>
                                </div>

                                <!--<center>
                                    <div class="main-login__line">
                                        <p class="">Inicia sesión con</p>
                                    </div>

                                </center>-->
                                
                            </form>
                            <?php do_action( 'woocommerce_login_form' ); ?>
                            <?php do_action( 'woocommerce_login_form_end' ); ?>
          </div>
          <div class="form-login__btn">
            <a href="#">Soporte</a>
            <a href="#">Términos de Uso</a>
            <a href="#">Política de Privacidad</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>