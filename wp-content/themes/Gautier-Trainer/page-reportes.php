<?php login(''); get_header(); ?>
<section>
    <?php get_template_part('partials/menu/sidebar__navbar'); ?>

    <div class="sidebar__content">
      <?php get_template_part('partials/menu/sidebar__content_top'); ?>
      <div class="sidebar__content--content">
        <div class="dashboard-content padding-rl">
          <div class="reportes-content">
            <div class="reportes-content__post">
              <div class="reportes-post__new">
                <div class="accordion" id="accordionExample">
                  <div class="card">
                    <div class="card-header" id="headingOne">
                      <h2 class="mb-0">
                        <a class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          <p><span>+</span>Nuevo Reporte</p> <i class="fa fa-angle-up" aria-hidden="true"></i>
                        </a>
                      </h2>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                      <div class="card-body">
                        <div class="reportes-post__input">
                          <input type="text" placeholder="¿Cómo te has sentido con la rutina?">
                          <input type="text" placeholder="¿En que ejercicios te has sentido mejor?">
                          <input type="text" placeholder="¿En que ejercicios te has sentido peor?">
                        </div>
                        <div class="reportes-post-botones">
                          <div class="reportes-post__btn">
                            <p>Avance de:</p>
                            <select id="disabledSelect" >
                              <option>Front lever</option>
                              <option>Disabled select</option>
                              <option>Disabled select</option>
                            </select>
                            <div class="reportes-post__btn--adjuntar"><i class="fa fa-camera" aria-hidden="true"></i> Imagen/Video</div>
                          </div>  
                          <div class="reportes-post__send">
                            <button type="button" class="btn btn-enviar">Enviar</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="reportes-content__mensaje">
              <div class="reportes-content__mensaje--title">
                <p>Siguiente reporte</p>
              </div>
              <div class="reportes-mensaje__next">
                <div class="reportes-mensaje__next--day">
                  <div class="reportes-mensaje__next--items active">
                    <i class="fa fa-check" aria-hidden="true"></i>
                  </div>
                  <p>18 <span>sep</span></p>
                </div>
                <div class="reportes-mensaje__next--day">
                  <div class="reportes-mensaje__next--items active">
                    <i class="fa fa-check" aria-hidden="true"></i>
                  </div>
                  <p>19 <span>sep</span></p>
                </div>
                <div class="reportes-mensaje__next--day">
                  <div class="reportes-mensaje__next--items">
                    <i class="fa fa-check" aria-hidden="true"></i>
                  </div>
                  <p>20 <span>sep</span></p>
                </div>
              </div>
              <div class="reportes-mensaje__mensajes">
                <div class="reportes-mensaje__mensajes--title">
                  <img src="" alt=""><p>Mensajes con Gautier</p>
                </div>
                <div class="reportes-mensaje__mensajes--alert">
                  <p>*Respuestas de 24-48hrs</p>
                </div>
                <div class="reportes-mensaje__content">
                  <div class="reportes-mensaje__content--item">
                    <div class="reportes-mensaje__content--img">
                      <img src="<?php echo get_template_directory_uri();?>/assets/img/img-routine.png" alt="">
                    </div>
                    <div class="reportes-mensaje__content--text">
                      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod, eos, dolores! Dolorem repellat enim temporibus, </p>
                    </div>
                  </div>
                  <div class="reportes-mensaje__content--item">
                    <div class="reportes-mensaje__content--img">
                      <img src="<?php echo get_template_directory_uri();?>/assets/img/img-routine.png" alt="">
                    </div>
                    <div class="reportes-mensaje__content--text">
                      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod, eos, dolores! Dolorem repellat enim temporibus, </p>
                    </div>
                  </div>
                  <div class="reportes-mensaje__content--item">
                    <div class="reportes-mensaje__content--img">
                      <img src="<?php echo get_template_directory_uri();?>/assets/img/img-routine.png" alt="">
                    </div>
                    <div class="reportes-mensaje__content--text">
                      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod, eos, dolores! Dolorem repellat enim temporibus, </p>
                    </div>
                  </div>
                  <div class="reportes-mensaje__content--item">
                    <div class="reportes-mensaje__content--img">
                      <img src="<?php echo get_template_directory_uri();?>/assets/img/img-routine.png" alt="">
                    </div>
                    <div class="reportes-mensaje__content--text">
                      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod, eos, dolores! Dolorem repellat enim temporibus, </p>
                    </div>
                  </div>
                  <div class="reportes-mensaje__content--item">
                    <div class="reportes-mensaje__content--img">
                      <img src="<?php echo get_template_directory_uri();?>/assets/img/img-routine.png" alt="">
                    </div>
                    <div class="reportes-mensaje__content--text">
                      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod, eos, dolores! Dolorem repellat enim temporibus, </p>
                    </div>
                  </div>
                </div>
                <div class="reportes-mensaje__send">
                  <input type="text" placeholder="Escribe algo...">
                  <a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/icon-send-black.png" alt=""></a>
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