// new js


$(".custom-carousel").owlCarousel({
    autoWidth: true,
    loop: true
  });
  $(document).ready(function () {
});
$(".custom-carousel .item").click(function () {
  $(".custom-carousel .item").not($(this)).removeClass("active");
  $(this).toggleClass("active");
});
$(".custom-carousel .item").hover(function () {
  $(".custom-carousel .item").not($(this)).removeClass("active");
  $(this).toggleClass("active");
});



