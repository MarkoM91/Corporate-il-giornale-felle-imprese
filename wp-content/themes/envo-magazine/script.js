// function videoScale(me) {
//   console.log(me.index());
//   // var meIndex = me.index();
//   me.addClass('scale');
// }

function init() {
  $(".tag-video").closest("article").removeClass('article').remove();
  $('.article:first-of-type .post .news-item .news-thumb').removeClass('col-md-6');
  $('.article:first-of-type .post .news-item .news-thumb').addClass('col-md-12');
  $('.article:first-of-type .post .news-item .news-text-wrap').removeClass('col-md-6');
  $('.article:first-of-type .post .news-item .news-text-wrap').addClass('col-md-12');


  // <!-- Initialize Swiper -->  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 3,
      spaceBetween: 30,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });

   // var me = $(this).find('.swiper-slide');
   // me.click(function() {
   //   me
   //   videoScale(me);
   // });
}

$(document).ready(init);
