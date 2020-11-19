<div class="copy d-flex d-lg-none <?php if(is_page(14)){echo 'header-login';} ?>">
  <p>Copyright © 2020</p>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/js/slick.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/js/setting-slick.js"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/js/main.js"></script>
</body>
</html>



  

  <div class="modal modal-question fade" id="modalQuestion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Cuestionario de entrenamiento</h5>
          <div class="close-modal">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        </div>
        <div class="modal-body">
          <div class="form-question">
            <div class="form-question__item">
              <p>Pregunta número 1</p>
              <input type="text" placeholder="Escribe algo...">
            </div>
            <div class="form-question__item">
              <p>Pregunta número 2</p>
              <input type="text" placeholder="Escribe algo...">
            </div>
            <div class="form-question__item">
              <p>Pregunta número 3</p>
              <input type="text" placeholder="Escribe algo...">
            </div>
            <div class="form-question__item">
              <p>Pregunta número 4</p>
              <input type="text" placeholder="Escribe algo...">
            </div>
              
            <div class="form-step2-afiliar__content form-question__item">
              <p>Pregunta número 5</p>
              <div class="form-step2-afiliar__content--items button-group-pills" data-toggle="buttons">
                <label class="btn btn-default btn-check-afiliar">
                  <input type="checkbox" name="options">
                    <div>
                      Selección 1
                    </div>
                </label>
                <label class="btn btn-default btn-check-afiliar">
                  <input type="checkbox" name="options">
                    <div>
                      Selección 2
                    </div>
                </label>
                <label class="btn btn-default btn-check-afiliar">
                  <input type="checkbox" name="options">
                    <div>
                      Selección 3
                    </div>
                </label>
                <label class="btn btn-default btn-check-afiliar">
                  <input type="checkbox" name="options">
                    <div>
                      Selección 4
                    </div>
                </label>
              </div>
            </div>
            <div class="form-step2-afiliar__content form-question__item">
              <p>Pregunta número 6</p>
              <div class="form-step2-afiliar__content--items button-group-pills" data-toggle="buttons">
                <label class="btn btn-default btn-check-afiliar">
                  <input type="checkbox" name="options">
                    <div>
                      Selección 1
                    </div>
                </label>
                <label class="btn btn-default btn-check-afiliar">
                  <input type="checkbox" name="options">
                    <div>
                      Selección 2
                    </div>
                </label>
                <label class="btn btn-default btn-check-afiliar">
                  <input type="checkbox" name="options">
                    <div>
                      Selección 3
                    </div>
                </label>
                <label class="btn btn-default btn-check-afiliar">
                  <input type="checkbox" name="options">
                    <div>
                      Selección 4
                    </div>
                </label>
              </div>
            </div>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-enviar">Enviar</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal modal-routine" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Dominadas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="<?php echo get_template_directory_uri();?>/assets/img/plan-workouts.jpg" alt="">
      </div>
    </div>
  </div>
</div>