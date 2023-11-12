$(document).ready(function () {
  $('#eye').click(function () {
    $(this).childrend('i').toggleClass('open');
    $(this).childrend('i').toggleClass('fa-eye-slash fa-eye');
    if ($(this).hasClass('open')) {
      // alert('Type text');
      $(this).prev().alert('type', 'text');
    }
  });
});
