 function resizeWindow() {
      let widthsidebar = $(window).width();
      
      if (widthsidebar >= 768) {
        $('.sidebar__navbar').addClass('active');
      }else{
        $('.sidebar__navbar').removeClass('active');
      }
    }

    $(window).resize(function () {
      resizeWindow();
    });

    $('.navabar__menu').click(function () {
      $('.sidebar__navbar').toggleClass('active');
    });

    $('.sidebar__navbar.active span').click(function () {
      $('.sidebar__navbar').toggleClass('active');
    });


    $(".navbar-toggler").on("click", function () {
     $('.navbar').toggleClass('expan');
    });
    $(".close-alert").on("click", function () {
     $('.dashboard-content__alert').addClass('d-none');
    });

    $('#customControlValidation2').click(function () {
      $('#cat1sub1').toggleClass('check-bg');
    });
    $('#customControlValidation3').click(function () {
      $('#cat1sub2').toggleClass('check-bg');
    });
    $('#customControlValidation4').click(function () {
      $('#cat1sub3').toggleClass('check-bg');
    });
    $('#customControlValidation5').click(function () {
      $('#cat1sub4').toggleClass('check-bg');
    });

    $('#customCat2sub1').click(function () {
      $('#cat2sub1').toggleClass('check-bg');
    });
    $('#customCat2sub2').click(function () {
      $('#cat2sub2').toggleClass('check-bg');
    });
    $('#customCat2sub3').click(function () {
      $('#cat2sub3').toggleClass('check-bg');
    });
    $('#customCat2sub4').click(function () {
      $('#cat2sub4').toggleClass('check-bg');
    });

    $('#customCat3sub1').click(function () {
      $('#cat3sub1').toggleClass('check-bg');
    });
    $('#customCat3sub2').click(function () {
      $('#cat3sub2').toggleClass('check-bg');
    });
    $('#customCat3sub3').click(function () {
      $('#cat3sub3').toggleClass('check-bg');
    });
    $('#customCat3sub4').click(function () {
      $('#cat3sub4').toggleClass('check-bg');
    });
