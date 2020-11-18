<?php login(''); get_header(); ?>
<section>
  <div class="navabar__grub">
    <div class="sidebar__navbar my-sidebar active d-none d-lg-block">
      <span></span>
      <div class=" py-4 position-relative">
        <a href="#!" class="brand__sidebar"><img src="<?php echo get_template_directory_uri();?>/assets/img/logo-gautier-desktop.png" alt=""></a>

        <ul class="sidebar__list--menu pb-4 mt-5">
          <li><a href="<?php bloginfo('url'); ?>" class="active"><img src="<?php echo get_template_directory_uri();?>/assets/img/icon-home.png" alt="">Dashboard</a></li>
          <li><a href="#!"><img src="<?php echo get_template_directory_uri();?>/assets/img/icon-reports.png" alt="">Reportes</a></li>
          <li><a href="<?php bloginfo('url'); ?>/workout"><img src="<?php echo get_template_directory_uri();?>/assets/img/icon-dumbell.png" alt="">Workouts</a></li>
          <li><a href="#!"><img src="<?php echo get_template_directory_uri();?>/assets/img/icon-calendar.png" alt="">Calendario</a></li>
        </ul>
        <ul class="sidebar__list--menu py-4">
          <li><a href="<?php bloginfo('url'); ?>/pro-videos"><img src="<?php echo get_template_directory_uri();?>/assets/img/icon-video.png" alt="">Pro-videos</a></li>
          <li><a href="#!"><img src="<?php echo get_template_directory_uri();?>/assets/img/icon-library.png" alt="">Exercises List</a></li>
        </ul>
      </div>
      <div class="btn-soporte">
        <a href="#">Soporte <i class="fa fa-angle-down" aria-hidden="true"></i></a>
      </div>
    </div>
    <div class="sidebar__content">
      <div class="sidebar__content--top d-none d-lg-flex">
        <div class="title-sidebar__top">
          <p>Pro-videos</p>
        </div>
        <div class="sidebar-top__content">
          <div class="user-sidebar__top">
            <div class="user-sidebar__top--img">
              <img src="#" alt="">
            </div>
            <div class="user-sidebar__top--text">
              <div class="dropdown">
                <button class="" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Samuel95 <i class="fa fa-angle-down" aria-hidden="true"></i>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">Mi cuenta</a>
                  <a class="dropdown-item" href="#">Cerrar sesión</a>
                </div>
              </div>
            </div>  
          </div>
          <div class="notifi-sidebar__top">
            <a href="#"><i class="fa fa-bell-o" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
      <div class="sidebar__content--content ">
        <div class="dashboard-content pro-content">
          <div class="pro-videos__content">
            <div class="pro-videos__video">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/plan-workouts.jpg" alt="">
            </div>
            <div class="pro-videos__description">
              <div class="slider-dashboard__text">
                <a href="#" class="slider-dashboard__cat">
                  Rutina
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
              <p>Recientes</p>
            </div>
          </div>
          <div class="video-dashboard__video">
            <div class="video-dashboard__slider">
                <div class="slider-dashboard__content">
                  <div class="slider-dashboard__img">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/min-video-1.jpg" alt="">
                  </div>
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
                <div class="slider-dashboard__content">
                  <div class="slider-dashboard__img">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/min-video-1.jpg" alt="">
                  </div>
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
                <div class="slider-dashboard__content">
                  <div class="slider-dashboard__img">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/min-video-1.jpg" alt="">
                  </div>
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
                <div class="slider-dashboard__content">
                  <div class="slider-dashboard__img">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/min-video-1.jpg" alt="">
                  </div>
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
                <div class="slider-dashboard__content">
                  <div class="slider-dashboard__img">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/min-video-1.jpg" alt="">
                  </div>
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
                <div class="slider-dashboard__content">
                  <div class="slider-dashboard__img">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/min-video-1.jpg" alt="">
                  </div>
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
            </div>

          </div>
        </div>
        <div class="video-dashboard__content video-pro__content">
          <div class="video-dashboard__title">
            <div class="video-dashboard__title--text">
              <p>Tutoriales</p>
            </div>
            <a data-toggle="collapse" href="#collapseDesplegar" role="button" aria-expanded="false" aria-controls="collapseDesplegar" class="btn-desplegar">
              <i class="fa fa-bars" aria-hidden="true"></i>
              Desplegar
            </a>
          </div>
          <div class="video-dashboard__video">
            <div class="video-dashboard__slider">
                <div class="slider-dashboard__content">
                  <div class="slider-dashboard__img">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/min-video-1.jpg" alt="">
                  </div>
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
                <div class="slider-dashboard__content">
                  <div class="slider-dashboard__img">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/min-video-1.jpg" alt="">
                  </div>
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
                <div class="slider-dashboard__content">
                  <div class="slider-dashboard__img">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/min-video-1.jpg" alt="">
                  </div>
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
                <div class="slider-dashboard__content">
                  <div class="slider-dashboard__img">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/min-video-1.jpg" alt="">
                  </div>
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
                <div class="slider-dashboard__content">
                  <div class="slider-dashboard__img">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/min-video-1.jpg" alt="">
                  </div>
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
                <div class="slider-dashboard__content">
                  <div class="slider-dashboard__img">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/min-video-1.jpg" alt="">
                  </div>
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
            </div>
            <div class="collapse" id="collapseDesplegar">
              <div class="content-desplegar">
                <div class="slider-dashboard__content">
                  <div class="slider-dashboard__img">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/min-video-1.jpg" alt="">
                  </div>
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
                <div class="slider-dashboard__content">
                  <div class="slider-dashboard__img">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/min-video-1.jpg" alt="">
                  </div>
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
                <div class="slider-dashboard__content">
                  <div class="slider-dashboard__img">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/min-video-1.jpg" alt="">
                  </div>
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
                <div class="slider-dashboard__content">
                  <div class="slider-dashboard__img">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/min-video-1.jpg" alt="">
                  </div>
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
                <div class="slider-dashboard__content">
                  <div class="slider-dashboard__img">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/min-video-1.jpg" alt="">
                  </div>
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
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

</section>

<?php get_footer(); ?>