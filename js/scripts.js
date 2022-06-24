(function () {
  var app = {
    initAos: function () {
      setTimeout(function () {
        AOS.init();
      }, 1000);
    },

    initNavigation: function () {
      var $nav = jQuery("#nav, #nav2");
      if ($nav.length > 0) $nav.navTabDoubleTap();
    },

    initDetectScroll: function () {
      if (jQuery(window).width() > 991 && jQuery(window).scrollTop() > 56) {
        jQuery("header.header").addClass("show-fixed");
      } else {
        jQuery("header.header").removeClass("show-fixed");
      }
    },

    initFloatingForm: function () {
      jQuery(".js-trigger-form").on("click", function (e) {
        e.stopPropagation();
        if (jQuery(this).hasClass("is-active")) {
          jQuery(this).removeClass("is-active");
          jQuery(".floating-view").removeClass("is-open");
        } else {
          jQuery(this).addClass("is-active");
          jQuery(".floating-view").addClass("is-open");
        }
      });
      jQuery(".floating-form-drop").on("click", function (e) {
        jQuery(".js-trigger-form").removeClass("is-active");
        jQuery(".floating-view").removeClass("is-open");
      });
      jQuery(".close-sidebar").on("click", function (e) {
        jQuery(".js-trigger-form").removeClass("is-active");
        jQuery(".floating-view").removeClass("is-open");
      });
    },

    initSlideshow: function () {
      //code here
    },

    initWelcome: function () {
      //code here
    },

    initTeam: function () {
      //code here

      var sectionSlick = ".team-slick";
      $(sectionSlick).slick({
        slidesToShow: 5,
        slideToScroll: 1,
        infinite: true,
        dots: false,
        autoplay: false,
        autoplaySpeed: 7000,
        speed: 1000,
        arrows: true,
        prevArrow: ".hp-team .prev",
        nextArrow: ".hp-team .next",
        rows: 1,
        responsive: [
          { breakpoint: 992, settings: { slidesToShow: 2 } },
          { breakpoint: 768, settings: { slidesToShow: 1 } },
        ],
      });
      var isSliding = false;
      jQuery(sectionSlick).on("beforeChange", function () {
        isSliding = true;
      });
      jQuery(sectionSlick).on("afterChange", function () {
        isSliding = false;
      });
      jQuery(".hp-team img").click(function (e) {
        if (isSliding) {
          e.stopImmediatePropagation();
          e.stopPropagation();
          e.preventDefault();
          return;
        }
      });
    },

    initWork: function () {
      //code here

      var performanceEl = $(".hp-work");
      var speed = 0;
      performanceEl.elementPeek({
        onViewportIn: function (object) {
          if (!performanceEl.hasClass("done-calculation")) {
            object.addClass("done-calculation");
            performanceEl.find(".count").each(function (index, value) {
              speed = 1000;
              var _this = $(this),
                value = _this.text();
              _this.animateNumber({ number: value }, speed);
            });
          }
        },
        peekAmountToTrigger: 0.1,
      });
    },

    initCommunities: function () {
      //code here

      var sectionSlick = ".communities-slick";
      $(sectionSlick).slick({
        slidesToShow: 4,
        slideToScroll: 1,
        infinite: true,
        dots: false,
        autoplay: false,
        autoplaySpeed: 7000,
        speed: 1000,
        arrows: true,
        prevArrow: ".hp-communities .prev",
        nextArrow: ".hp-communities .next",
        rows: 2,
        responsive: [
          { breakpoint: 992, settings: { slidesToShow: 2 } },
          { breakpoint: 768, settings: { slidesToShow: 1 } },
        ],
      });
      var isSliding = false;
      jQuery(sectionSlick).on("beforeChange", function () {
        isSliding = true;
      });
      jQuery(sectionSlick).on("afterChange", function () {
        isSliding = false;
      });
      jQuery(".hp-communities img").click(function (e) {
        if (isSliding) {
          e.stopImmediatePropagation();
          e.stopPropagation();
          e.preventDefault();
          return;
        }
      });
    },

    initProperties: function () {
      //code here

      var sectionSlick = ".properties-slick";
      $(sectionSlick).slick({
        slidesToShow: 1,
        slideToScroll: 1,
        infinite: true,
        dots: false,
        autoplay: false,
        autoplaySpeed: 7000,
        speed: 1000,
        arrows: true,
        prevArrow: ".hp-properties .prev",
        nextArrow: ".hp-properties .next",
        rows: 1,
        responsive: [
          { breakpoint: 992, settings: { slidesToShow: 1 } },
          { breakpoint: 768, settings: { slidesToShow: 1 } },
        ],
      });
      var isSliding = false;
      jQuery(sectionSlick).on("beforeChange", function () {
        isSliding = true;
      });
      jQuery(sectionSlick).on("afterChange", function () {
        isSliding = false;
      });
      jQuery(".hp-properties img").click(function (e) {
        if (isSliding) {
          e.stopImmediatePropagation();
          e.stopPropagation();
          e.preventDefault();
          return;
        }
      });
    },

    initTestimonials: function () {
      //code here

      var sectionSlick = ".testimonials-slick";
      $(sectionSlick).slick({
        slidesToShow: 3,
        slideToScroll: 1,
        infinite: true,
        dots: true,
        autoplay: false,
        autoplaySpeed: 7000,
        speed: 1000,
        arrows: false,
        rows: 1,
        responsive: [
          { breakpoint: 992, settings: { slidesToShow: 2 } },
          { breakpoint: 768, settings: { slidesToShow: 1 } },
        ],
      });
      var isSliding = false;
      jQuery(sectionSlick).on("beforeChange", function () {
        isSliding = true;
      });
      jQuery(sectionSlick).on("afterChange", function () {
        isSliding = false;
      });
      jQuery(".hp-testimonials img").click(function (e) {
        if (isSliding) {
          e.stopImmediatePropagation();
          e.stopPropagation();
          e.preventDefault();
          return;
        }
      });
    },

    initCta: function () {
      //code here
    },

    initNews: function () {
      //code here
    },

    initVideos: function () {
      //code here

      var sectionSlick = ".videos-slick";
      $(sectionSlick).slick({
        slidesToShow: 1,
        slideToScroll: 1,
        infinite: true,
        dots: false,
        autoplay: false,
        autoplaySpeed: 7000,
        speed: 1000,
        arrows: false,
        rows: 1,
        responsive: [
          { breakpoint: 992, settings: { slidesToShow: 1 } },
          { breakpoint: 768, settings: { slidesToShow: 1 } },
        ],
      });
      var isSliding = false;
      jQuery(sectionSlick).on("beforeChange", function () {
        isSliding = true;
      });
      jQuery(sectionSlick).on("afterChange", function () {
        isSliding = false;
      });
      jQuery(".hp-videos img").click(function (e) {
        if (isSliding) {
          e.stopImmediatePropagation();
          e.stopPropagation();
          e.preventDefault();
          return;
        }
      });
    },

    initSocial: function () {
      //code here
    },

    initContact: function () {
      //code here
    },
  };

  jQuery(document).ready(function () {
    app.initAos();
    app.initNavigation();

    app.initFloatingForm();

    app.initSlideshow();

    app.initWelcome();

    app.initTeam();

    app.initWork();

    app.initCommunities();

    app.initProperties();

    app.initTestimonials();

    app.initCta();

    app.initNews();

    app.initVideos();

    app.initSocial();

    app.initContact();
  });

  jQuery(window).on("scroll", function () {
    app.initDetectScroll();
  });

  jQuery(window).on("load", function () {});

  jQuery(window).on("resize", function () {});
})();
