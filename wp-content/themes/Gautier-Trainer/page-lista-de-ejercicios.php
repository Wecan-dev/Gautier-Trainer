<?php login(''); get_header(); ?>

<style>
  .dashboard-content{
    display: flex;
    flex-direction: column;
  }
</style>


<section>
    <?php get_template_part('partials/menu/sidebar__navbar'); ?>

    <div class="sidebar__content">
      <?php get_template_part('partials/menu/sidebar__content_top'); ?>
      <div class="sidebar__content--content ">
        <div class="dashboard-content padding-rl">
          <div class="titulo-lista">
            <p>Exercises Library</p>
          </div>
          <div class="lista-canvas">
            <div class="MenuContainer d-block d-lg-none">
              <input class="HiddenCheckbox" id="menu" type="checkbox" name="menu"/>
              <label class="MenuIcon" for="menu"><p>Filtrar</p></label>

              <nav class="Menu">
                <ul class="Menu-list">
                  <input class="HiddenCheckbox" id="menu" type="checkbox" name="menu"/>
                  <label class="MenuIcon MenuIcon-canvas" for="menu"></label>
                  <div class="lista-content__filter d-block d-lg-none">
              <div class="lista-filter__search">
                <button class="" type="submit"><img src="<?php echo get_template_directory_uri();?>/assets/img/icon-search.png" alt=""></button>
                <input class="form-control" type="search" placeholder="Buscar ejercicio" aria-label="Search">
              </div>
              <div class="lista-filter__resultado">
                <div class="lista-filter__category--title">
                  <p>Resultados para:</p>
                  <a href="#">Clear</a>
                </div>
                <div class="lista-filter__resultado--text">
                  <p>Ejercicio de hombro</p>
                </div>
              </div>
              <div class="lista-filter__category">
                <div class="lista-filter__category--title">
                  <p>Categoría 1</p>
                  <a href="#">Clear</a>
                </div>
                <div class="lista-filter__category--checks">
                  <div class="custom-control custom-checkbox" id="cat1sub1">
                    <input type="checkbox" class="custom-control-input" id="customControlValidation2" name="radio-stacked" required>
                    <label class="custom-control-label" for="customControlValidation2">Subcategoría 1</label>
                  </div>
                  <div class="custom-control custom-checkbox" id="cat1sub2">
                    <input type="checkbox" class="custom-control-input" id="customControlValidation3" name="radio-stacked" required>
                    <label class="custom-control-label" for="customControlValidation3">Subcategoría 2</label>
                  </div>
                  <div class="custom-control custom-checkbox" id="cat1sub3">
                    <input type="checkbox" class="custom-control-input" id="customControlValidation4" name="radio-stacked" required>
                    <label class="custom-control-label" for="customControlValidation4">Subcategoría 3</label>
                  </div>
                  <div class="custom-control custom-checkbox" id="cat1sub4">
                    <input type="checkbox" class="custom-control-input" id="customControlValidation5" name="radio-stacked" required>
                    <label class="custom-control-label" for="customControlValidation5">Subcategoría 4</label>
                  </div>
                </div>
              </div>
              <div class="lista-filter__category">
                <div class="lista-filter__category--title">
                  <p>Categoría 2</p>
                  <a href="#">Clear</a>
                </div>
                <div class="lista-filter__category--checks">
                  <div class="custom-control custom-checkbox" id="cat2sub1">
                    <input type="checkbox" class="custom-control-input" id="customCat2sub1" name="radio-stacked" required>
                    <label class="custom-control-label" for="customCat2sub1">Subcategoría 1</label>
                  </div>
                  <div class="custom-control custom-checkbox" id="cat2sub2">
                    <input type="checkbox" class="custom-control-input" id="customCat2sub2" name="radio-stacked" required>
                    <label class="custom-control-label" for="customCat2sub2">Subcategoría 2</label>
                  </div>
                  <div class="custom-control custom-checkbox" id="cat2sub3">
                    <input type="checkbox" class="custom-control-input" id="customCat2sub3" name="radio-stacked" required>
                    <label class="custom-control-label" for="customCat2sub3">Subcategoría 3</label>
                  </div>
                  <div class="custom-control custom-checkbox" id="cat2sub4">
                    <input type="checkbox" class="custom-control-input" id="customCat2sub4" name="radio-stacked" required>
                    <label class="custom-control-label" for="customCat2sub4">Subcategoría 4</label>
                  </div>
                </div>
              </div>
              <div class="lista-filter__category">
                <div class="lista-filter__category--title">
                  <p>Categoría 3</p>
                  <a href="#">Clear</a>
                </div>
                <div class="lista-filter__category--checks">
                  <div class="custom-control custom-checkbox" id="cat3sub1">
                    <input type="checkbox" class="custom-control-input" id="customCat3sub1" name="radio-stacked" required>
                    <label class="custom-control-label" for="customCat3sub1">Subcategoría 1</label>
                  </div>
                  <div class="custom-control custom-checkbox" id="cat3sub2">
                    <input type="checkbox" class="custom-control-input" id="customCat3sub2" name="radio-stacked" required>
                    <label class="custom-control-label" for="customCat3sub2">Subcategoría 2</label>
                  </div>
                  <div class="custom-control custom-checkbox" id="cat3sub3">
                    <input type="checkbox" class="custom-control-input" id="customCat3sub3" name="radio-stacked" required>
                    <label class="custom-control-label" for="customCat3sub3">Subcategoría 3</label>
                  </div>
                  <div class="custom-control custom-checkbox" id="cat3sub4">
                    <input type="checkbox" class="custom-control-input" id="customCat3sub4" name="radio-stacked" required>
                    <label class="custom-control-label" for="customCat3sub4">Subcategoría 4</label>
                  </div>
                </div>
              </div>
            </div>
                </ul>
              </nav>
            </div>
          </div>
          <div class="lista-content">
            <div class="lista-content__filter d-none d-lg-block">
              <div class="lista-filter__search">
                <button class="" type="submit"><img src="<?php echo get_template_directory_uri();?>/assets/img/icon-search.png" alt=""></button>
                <input class="form-control" type="search" placeholder="Buscar ejercicio" aria-label="Search">
              </div>
              <div class="lista-filter__resultado">
                <div class="lista-filter__category--title">
                  <p>Resultados para:</p>
                  <a href="#">Clear</a>
                </div>
                <div class="lista-filter__resultado--text">
                  <p>Ejercicio de hombro</p>
                </div>
              </div>
              <div class="lista-filter__category">
                <div class="lista-filter__category--title">
                  <p>Categoría 1</p>
                  <a href="#">Clear</a>
                </div>
                <div class="lista-filter__category--checks">
                  <div class="custom-control custom-checkbox" id="cat1sub1">
                    <input type="checkbox" class="custom-control-input" id="customControlValidation2" name="radio-stacked" required>
                    <label class="custom-control-label" for="customControlValidation2">Subcategoría 1</label>
                  </div>
                  <div class="custom-control custom-checkbox" id="cat1sub2">
                    <input type="checkbox" class="custom-control-input" id="customControlValidation3" name="radio-stacked" required>
                    <label class="custom-control-label" for="customControlValidation3">Subcategoría 2</label>
                  </div>
                  <div class="custom-control custom-checkbox" id="cat1sub3">
                    <input type="checkbox" class="custom-control-input" id="customControlValidation4" name="radio-stacked" required>
                    <label class="custom-control-label" for="customControlValidation4">Subcategoría 3</label>
                  </div>
                  <div class="custom-control custom-checkbox" id="cat1sub4">
                    <input type="checkbox" class="custom-control-input" id="customControlValidation5" name="radio-stacked" required>
                    <label class="custom-control-label" for="customControlValidation5">Subcategoría 4</label>
                  </div>
                </div>
              </div>
              <div class="lista-filter__category">
                <div class="lista-filter__category--title">
                  <p>Categoría 2</p>
                  <a href="#">Clear</a>
                </div>
                <div class="lista-filter__category--checks">
                  <div class="custom-control custom-checkbox" id="cat2sub1">
                    <input type="checkbox" class="custom-control-input" id="customCat2sub1" name="radio-stacked" required>
                    <label class="custom-control-label" for="customCat2sub1">Subcategoría 1</label>
                  </div>
                  <div class="custom-control custom-checkbox" id="cat2sub2">
                    <input type="checkbox" class="custom-control-input" id="customCat2sub2" name="radio-stacked" required>
                    <label class="custom-control-label" for="customCat2sub2">Subcategoría 2</label>
                  </div>
                  <div class="custom-control custom-checkbox" id="cat2sub3">
                    <input type="checkbox" class="custom-control-input" id="customCat2sub3" name="radio-stacked" required>
                    <label class="custom-control-label" for="customCat2sub3">Subcategoría 3</label>
                  </div>
                  <div class="custom-control custom-checkbox" id="cat2sub4">
                    <input type="checkbox" class="custom-control-input" id="customCat2sub4" name="radio-stacked" required>
                    <label class="custom-control-label" for="customCat2sub4">Subcategoría 4</label>
                  </div>
                </div>
              </div>
              <div class="lista-filter__category">
                <div class="lista-filter__category--title">
                  <p>Categoría 3</p>
                  <a href="#">Clear</a>
                </div>
                <div class="lista-filter__category--checks">
                  <div class="custom-control custom-checkbox" id="cat3sub1">
                    <input type="checkbox" class="custom-control-input" id="customCat3sub1" name="radio-stacked" required>
                    <label class="custom-control-label" for="customCat3sub1">Subcategoría 1</label>
                  </div>
                  <div class="custom-control custom-checkbox" id="cat3sub2">
                    <input type="checkbox" class="custom-control-input" id="customCat3sub2" name="radio-stacked" required>
                    <label class="custom-control-label" for="customCat3sub2">Subcategoría 2</label>
                  </div>
                  <div class="custom-control custom-checkbox" id="cat3sub3">
                    <input type="checkbox" class="custom-control-input" id="customCat3sub3" name="radio-stacked" required>
                    <label class="custom-control-label" for="customCat3sub3">Subcategoría 3</label>
                  </div>
                  <div class="custom-control custom-checkbox" id="cat3sub4">
                    <input type="checkbox" class="custom-control-input" id="customCat3sub4" name="radio-stacked" required>
                    <label class="custom-control-label" for="customCat3sub4">Subcategoría 4</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="lista-content__content">
              <div class="lista-content__info">
                <div class="lista-content__info--resul">
                  <p>1-30 de 250 resultados</p>
                </div>
                <div class="lista-content__info--page">
                  <p>page 1-4</p>
                </div>
              </div>
              <div class="lista-content__products">
                <div class="slider-dashboard__content">
                  <div class="slider-dashboard__img">
                    <a href="#">
                      <iframe style="width: 100%;" src="https://player.vimeo.com/video/481477273" width="640" height="100%" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                    </a>
                  </div>
                  <div class="slider-dashboard__text">
                    <div class="slider-dashboard__title">
                      <p>Ejercicio 1</p>
                    </div>
                  </div>
                </div>
                <div class="slider-dashboard__content">
                  <div class="slider-dashboard__img">
                    <a href="#">
                      <iframe style="width: 100%;" src="https://player.vimeo.com/video/481477273" width="640" height="100%" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                    </a>
                  </div>
                  <div class="slider-dashboard__text">
                    <div class="slider-dashboard__title">
                      <p>Ejercicio 1</p>
                    </div>
                  </div>
                </div>
                <div class="slider-dashboard__content">
                  <div class="slider-dashboard__img">
                    <a href="#">
                      <iframe style="width: 100%;" src="https://player.vimeo.com/video/481477273" width="640" height="100%" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                    </a>
                  </div>
                  <div class="slider-dashboard__text">
                    <div class="slider-dashboard__title">
                      <p>Ejercicio 1</p>
                    </div>
                  </div>
                </div>
                <div class="slider-dashboard__content">
                  <div class="slider-dashboard__img">
                    <a href="#">
                      <iframe style="width: 100%;" src="https://player.vimeo.com/video/481477273" width="640" height="100%" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                    </a>
                  </div>
                  <div class="slider-dashboard__text">
                    <div class="slider-dashboard__title">
                      <p>Ejercicio 1</p>
                    </div>
                  </div>
                </div>
                <div class="slider-dashboard__content">
                  <div class="slider-dashboard__img">
                    <a href="#">
                      <iframe style="width: 100%;" src="https://player.vimeo.com/video/481477273" width="640" height="100%" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                    </a>
                  </div>
                  <div class="slider-dashboard__text">
                    <div class="slider-dashboard__title">
                      <p>Ejercicio 1</p>
                    </div>
                  </div>
                </div>
                <div class="slider-dashboard__content">
                  <div class="slider-dashboard__img">
                    <a href="#">
                      <iframe style="width: 100%;" src="https://player.vimeo.com/video/481477273" width="640" height="100%" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                    </a>
                  </div>
                  <div class="slider-dashboard__text">
                    <div class="slider-dashboard__title">
                      <p>Ejercicio 1</p>
                    </div>
                  </div>
                </div>
                <div class="slider-dashboard__content">
                  <div class="slider-dashboard__img">
                    <a href="#">
                      <iframe style="width: 100%;" src="https://player.vimeo.com/video/481477273" width="640" height="100%" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                    </a>
                  </div>
                  <div class="slider-dashboard__text">
                    <div class="slider-dashboard__title">
                      <p>Ejercicio 1</p>
                    </div>
                  </div>
                </div>
                <div class="slider-dashboard__content">
                  <div class="slider-dashboard__img">
                    <a href="#">
                      <iframe style="width: 100%;" src="https://player.vimeo.com/video/481477273" width="640" height="100%" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                    </a>
                  </div>
                  <div class="slider-dashboard__text">
                    <div class="slider-dashboard__title">
                      <p>Ejercicio 1</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="lista-content__number">
                
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

</section>




  
<?php get_footer(); ?>




