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
// banner
var TxtType = function (el, toRotate, period) {
  this.toRotate = toRotate;
  this.el = el;
  this.loopNum = 0;
  this.period = parseInt(period, 10) || 2000;
  this.txt = "";
  this.tick();
  this.isDeleting = false;
};

TxtType.prototype.tick = function () {
  var i = this.loopNum % this.toRotate.length;
  var fullTxt = this.toRotate[i];

  if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
  } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
  }

  this.el.innerHTML = '<span class="wrap">' + this.txt + "</span>";

  var that = this;
  var delta = 200 - Math.random() * 100;

  if (this.isDeleting) {
    delta /= 2;
  }

  if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
  } else if (this.isDeleting && this.txt === "") {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
  }

  setTimeout(function () {
    that.tick();
  }, delta);
};

window.onload = function () {
  var elements = document.getElementsByClassName("w-banner__run");
  for (var i = 0; i < elements.length; i++) {
    var toRotate = elements[i].getAttribute("data-type");
    var period = elements[i].getAttribute("data-period");
    if (toRotate) {
      new TxtType(elements[i], JSON.parse(toRotate), period);
    }
  }
  // INJECT CSS
  var css = document.createElement("style");
  css.type = "text/css";
  css.innerHTML = ".w-banner__run > .wrap { border-right: 0.08em solid #fff}";
  document.body.appendChild(css);
};
// end banner
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
})(jQuery);
