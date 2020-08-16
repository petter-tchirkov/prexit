let $ = jQuery.noConflict();
$(document).ready(function () {

  //go to registration
  $('.btn-block__reg').click(function () {
    window.location.href = 'registration.php';
  });
  //go to application
  $('.btn-block__participate').click(function () {
    window.location.href = 'application.php';
  });
  //back from registration / application
  $('.popup__to-main').click(function () {
    window.location.href = '/';
  });
  //show  popup


  $('#reg-form').validate({
    rules: {
      name: {
        required: true
      },
      email: {
        required: true,
        email: true
      },
      phone: {
        required: true
      }
    },
    messages: {
      name: {
        required: 'Пожалуйста, введите ваше имя',
      },
      email: {
        required: 'Пожалуйста, введите действующий Email',

      },
      phone: {
        required: 'Пожалуйста, введите ваш телефон'
      }
    }
  });

  let form = $('#reg-form');
  $('#submit').click(function (e) {
    if (form.valid()) {
      window.location.href = "success";
    }
  });

  $('#submit').click(function () {
    if ($('.register__form input').hasClass('error')) {
      console.log('error');
    }
  });

})