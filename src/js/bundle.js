import $ from 'jquery'

//Табы переделать в проектах
$(".fillter a").click(function (e) {
  var id = $(this).attr("data-tab"),
    content = $('.project_content_tab[data-tab="' + id + '"]');
  $(".fillter_active").removeClass("fillter_active");
  $(this).addClass("fillter_active");
  $(".project_content_tab-active").removeClass("project_content_tab-active");
  content.addClass("project_content_tab-active");
  //var fillter = $(".fillter");
  //$("html, body").animate({ scrollTop: $(fillter).offset().top }, 300);
  e.preventDefault();
});

document.addEventListener('wpcf7mailsent', function (event) {
  $('.js-notification').removeClass('translate-y-40');
  $('.js-notification').addClass('translate-y-0');
  $('.notification').text(event.detail.apiResponse.message);
  $('.notification-color').removeClass('bg-red-500 bg-green-500')
  $('.notification-color').addClass('bg-green-500')
  $(event.detail.apiResponse.into).find('.border-red-500').removeClass('border-2 border-red-500 rounded-lg')
  console.log(event.detail)
  setTimeout(hideNotification, 6000);
}, false);

document.addEventListener('wpcf7invalid', function (event) {
  $('.js-notification').removeClass('translate-y-40');
  $('.js-notification').addClass('translate-y-0');
  $('.notification').text(event.detail.apiResponse.message);
  $('.notification-color').removeClass('bg-red-500 bg-green-500')
  $('.notification-color').addClass('bg-red-500')

  let invalidFields = event.detail.apiResponse.invalid_fields
  $.each(invalidFields, function (key, data) {
    console.log('Раздел: ' + key);
    console.log(data.into)
    $(data.into).addClass('border-2 border-red-500 rounded-lg')
  });
  console.log(event.detail.apiResponse.invalid_fields)
  setTimeout(hideNotification, 6000);
}, false);

$('.js-notification').click(function (e) {
  e.preventDefault();
  $('.js-notification').removeClass('translate-y-0');
  $('.js-notification').addClass('translate-y-40');
});

function hideNotification() {
  $('.js-notification').removeClass('translate-y-0');
  $('.js-notification').addClass('translate-y-40');
}