(function($) {
$(function() {

  // Проверим, есть ли запись в куках о посещении посетителя
  // Если запись есть - ничего не делаем
  if (!$.cookie('was')) {

    // Покажем всплывающее окно
    $('#boxUserFirstInfo').arcticmodal({
      closeOnOverlayClick: false,
      closeOnEsc: true
    });

  }

  // Запомним в куках, что посетитель к нам уже заходил
  $.cookie('was', true, {
    expires: 365,
    path: '/'
  });

})
})(jQuery)