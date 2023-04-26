/**
 * Process scrollbar width
 *
 */
const scrollbarWidth = window.innerWidth - document.body.clientWidth;
document.body.style.setProperty("--scrollbarWidth", `${scrollbarWidth}px`);

/**
 * Fix 100vh on iOS (When address bar is show)
 *
 * Source: https://stackoverflow.com/questions/37112218/css3-100vh-not-constant-in-mobile-browser
 */
function appHeight() {
  const doc = document.documentElement;
  doc.style.setProperty("--vh", window.innerHeight * 0.01 + "px");
}
window.addEventListener("resize", appHeight);
appHeight();

/**
 * jQuery
 *
 */
(function ($) {
  $(document).ready(function () {
    sal({
      once: false,
    });
  });

  $("#hamburger-menu").click(function () {
    $(this).toggleClass("active");
    $(".m-menu").toggleClass("show");
    $(".overlay").toggleClass("show");
  });
  $(".overlay").click(function () {
    $("#hamburger-menu").toggleClass("active");
    $(".m-menu").toggleClass("show");
    $(".overlay").toggleClass("show");
  });
  $(".m-menu button").click(function () {
    $("#hamburger-menu").toggleClass("active");
    $(".m-menu").toggleClass("show");
    $(".overlay").toggleClass("show");
  });

  $(window).on("load", function () {
    console.log($(".w-banner .slide"));

    $(".w-banner .nav .wrap").each((index, elem) => {
      $(elem).click(() => {
        console.log($(".w-banner .slide"));
        $(".w-banner .slide").slick("slickGoTo", index);
      });
    });
  });

  // slide fancy
  if (
    document.querySelector(" #mainCarousel") &&
    document.querySelector(" #thumbCarousel")
  ) {
    const mainCarousel = new Carousel(
      document.querySelector(" #mainCarousel"),
      {
        Dots: false,
      }
    );
    const thumbCarousel = new Carousel(
      document.querySelector(" #thumbCarousel"),
      {
        Sync: {
          target: mainCarousel,
          friction: 0,
        },
        Dots: false,
        Navigation: false,
        center: true,
        slidesPerPage: 1,
        infinite: false,
      }
    );
    Fancybox.bind('[data-fancybox="gallery"]', {
      dragToClose: false,
      Toolbar: true,
      closeButton: "top",
      Image: {
        zoom: false,
      },
      Carousel: {
        on: {
          change: (that) => {
            mainCarousel.slideTo(mainCarousel.findPageForSlide(that.page), {
              friction: 0,
            });
          },
        },
      },
    });
  }
})(jQuery);
