$(document).ready(() => {
  $(document).on("click", ".searchIcon", function () {
    $(".boxSearch").addClass("show");
    $("body").addClass("no-scroll");
  });

  $(document).on("click", ".boxSearch", function (e) {
    if (
      !($(e.target).is(".boxInput") || $(e.target).parents(".boxInput").length)
    ) {
      $(".boxSearch").removeClass("show");
      $("body").removeClass("no-scroll");
    }
  });

  $(document).on("click", ".openMenu", function () {
    $(".colLinks").toggleClass("show");
    $(this).toggleClass("is-active");
  });

  $(document).on("click", ".btnQuestion>span", function () {
    $(".boxQuestions").addClass("show");
    $(".boxQuestions .step1").addClass("show");
  });

  $(document).on("click", ".showStep2", function () {
    $(".boxQuestions [class*='step']").removeClass("show");
    $(".boxQuestions .step2").addClass("show");
  });

  $(document).on("click", ".showStep3", function () {
    $(".boxQuestions [class*='step']").removeClass("show");
    $(".boxQuestions .step3").addClass("show");
  });

  $(document).on("click", ".showBoxStep2", function () {
    $(".boxQuestions").addClass("show");
    $(".boxQuestions [class*='step']").removeClass("show");
    $(".boxQuestions .step2").addClass("show");
  });

  $(document).on("click", ".boxQuestions .btnClose", function () {
    $(".boxQuestions [class*='step']").removeClass("show");
    $(".boxQuestions").removeClass("show");
  });

  $(document).mousedown(function (e) {
    var container = $(".boxQuestions");
    if (!container.is(e.target) && container.has(e.target).length === 0) {
      $(".boxQuestions").removeClass("show");
      $(".boxQuestions [class*='step']").removeClass("show");
    }
  });

  $(document).on("click", ".boxInput .eye:not(.active)", function () {
    $($(this).prev()).attr("type", "text");
    $(this).addClass("active");
  });

  $(document).on("click", ".boxInput .eye.active", function () {
    $($(this).prev()).attr("type", "password");
    $(this).removeClass("active");
  });

  $(document).on("click", ".showRegisterForm", function () {
    $(".boxForm").removeClass("show");
    $(".formRegister").addClass("show");
  });

  $(document).on("click", ".showLoginForm", function () {
    $(".boxForm").removeClass("show");
    $(".formLogin").addClass("show");
  });

  $(document).on("click", ".forgetPassword", function () {
    $(".boxForm").removeClass("show");
    $(".formForgetPassword").addClass("show");
  });

  $(document).on("click", ".loginIcon", function () {
    $(".popUpLogin").addClass("show");
    $("body").addClass("no-scroll");
  });

  $(document).on("click", ".openModelPerson", function () {
    $(".popUpPerson").addClass("show");
    $("body").addClass("no-scroll");
  });

  $(document).on("click", ".popUpLogin .back", function () {
    $(".popUpLogin").removeClass("show");
    $("body").removeClass("no-scroll");
  });

  $(document).mousedown(function (e) {
    var container = $(".popUp>.container");
    if (!container.is(e.target) && container.has(e.target).length === 0) {
      $(".popUp").removeClass("show");
      $("body").removeClass("no-scroll");
    }
  });

  window.onscroll = function () {
    if (document.documentElement.scrollTop > 100) {
      $(".toUp").addClass("show");
    } else {
      $(".toUp").removeClass("show");
    }
  };

  $(document).on("click", ".toUp", function () {
    $("html, body").animate({ scrollTop: 0 }, 0);
  });

  $(document).ready(function () {
    $(".loader").fadeOut(300, function () {
      $("body").removeClass("no-scroll");
    });
  });

  if ($(".heroSection").length) {
    const swiper = new Swiper(".heroSection .swiper", {
      loop: true,
      pagination: {
        el: ".heroSection .swiper-pagination",
      },
      navigation: {
        nextEl: ".heroSection .swiper-button-next",
        prevEl: ".heroSection .swiper-button-prev",
      },
      autoplay: {
        delay: 5000,
      },
    });
  }

  $(document).on("change", `[name="poll"]:not([disabled])`, function () {
    $(`[name="poll"]`).attr("disabled", "disabled");
    $($(`[name="poll"]`).next("label")).addClass("done");
  });

  if ($(".reels").length) {
    const swiper = new Swiper(".reels .swiper", {
      loop: true,
      grabCursor: true,
      centeredSlides: true,
      breakpoints: {
        400: {
          slidesPerView: "1.5",
        },
        578: {
          slidesPerView: "2",
        },
        768: {
          slidesPerView: "2.5",
        },
        992: {
          slidesPerView: "3",
        },
      },
      pagination: {
        el: ".reels .swiper-pagination",
      },
      navigation: {
        nextEl: ".reels .swiper-button-next",
        prevEl: ".reels .swiper-button-prev",
      },
      effect: "coverflow",
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
      autoplay: {
        delay: 3000,
      },
      speed: 1500,
      on: {
        init: function () {
          let activeSlide = document.querySelector('.reels .swiper-slide-active video');
          if (activeSlide) {
            activeSlide.play();
          }
        },
        slideChange: function () {
          setTimeout(() => {
            document.querySelectorAll('.reels video').forEach(video => {
              video.pause();
              video.currentTime = 0;
            });
            let activeSlide = document.querySelector('.reels .swiper-slide-active video');
            if (activeSlide) {
              activeSlide.play();
            }
          }, 1500);
        }
      }
    });
  }

  $(document).on("click", `.btnShowFilter`, function () {
    $(`.boxFilterFatwas`).addClass("show");
  });

  $(document).on("click", `.boxFilterFatwas+.bg`, function () {
    $(`.boxFilterFatwas`).removeClass("show");
  });

  if ($(".persons").length) {
    const swiper = new Swiper(".persons .swiper", {
      loop: true,
      grabCursor: true,
      breakpoints: {
        400: {
          slidesPerView: "1.5",
        },
        578: {
          slidesPerView: "2",
        },
        768: {
          slidesPerView: "3",
        },
        992: {
          slidesPerView: "4",
        },
      },
      pagination: {
        el: ".persons .swiper-pagination",
      },
      navigation: {
        nextEl: ".persons .swiper-button-next",
        prevEl: ".persons .swiper-button-prev",
      },
      spaceBetween: 20,
    });
  }

  if ($(".titles").length) {
    const swiper = new Swiper(".titles .swiper", {
      loop: true,
      grabCursor: true,
      breakpoints: {
        400: {
          slidesPerView: "2",
        },
        578: {
          slidesPerView: "3",
        },
        768: {
          slidesPerView: "3",
        },
        992: {
          slidesPerView: "4",
        },
      },
      pagination: {
        el: ".titles .swiper-pagination",
      },
      navigation: {
        nextEl: ".titles .swiper-button-next",
        prevEl: ".titles .swiper-button-prev",
      },
      spaceBetween: 20,
    });
  }

  function updateActiveDiv() {
    var activeKey = $(".tabs span.active").attr("span-key");
    if (activeKey == 0) {
      $("[div-key]").addClass("show");
    } else {
      $("[div-key]").removeClass("show");
      $("[div-key='" + activeKey + "']").addClass("show");
    }
  }

  updateActiveDiv();

  $(document).on("click", `.tabs span`, function () {
    $(".tabs span").removeClass("active");
    $(this).addClass("active");
    updateActiveDiv();
  });

  if ($(".swiperAnotherEpisodes").length) {
    const swiper = new Swiper(".swiperAnotherEpisodes .swiper", {
      loop: false,
      grabCursor: true,
      breakpoints: {
        400: {
          slidesPerView: "2",
        },
        578: {
          slidesPerView: "3",
        },
        768: {
          slidesPerView: "3",
        },
        992: {
          slidesPerView: "4",
        },
      },
      pagination: {
        el: ".swiperAnotherEpisodes .swiper-pagination",
      },
      navigation: {
        nextEl: ".swiperAnotherEpisodes .swiper-button-next",
        prevEl: ".swiperAnotherEpisodes .swiper-button-prev",
      },
      spaceBetween: 20,
    });
  }

  $(document).on("click", ".singleReel .boxVideo>*:not(.iconSound)", function () {
    let vid = $($($(this).parents(".boxVideo")).find("video"));
    if (vid.hasClass("paused")) {
      vid[0].play();
      vid.removeClass("paused");
    } else {
      vid[0].pause();
      vid.addClass("paused");
    }
  });

  $(document).on("click", ".iconSound>span", function () {
    let vid = document.querySelectorAll("video");  
    if (vid[0].muted) {
      $(vid).removeAttr("muted");
      vid.forEach(video => {
        video.muted = false;
      });
    } else {
      $(vid).attr("muted", true);
      vid.forEach(video => {
        video.muted = true;
      });
    }
  })

  $(document).on("click", ".detailsReel .love", function () {
    $(this).toggleClass("active");
  });

  if ($(".singleReel").length) {
    const swiper = new Swiper(".singleReel .swiper", {
      loop: true,
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 1,
      spaceBetween: 50,
      pagination: {
        el: ".singleReel .swiper-pagination",
      },
      navigation: {
        nextEl: ".singleReel .next",
        prevEl: ".singleReel .prev",
      },
      speed: 500,
      on: {
        init: function () {
          let activeSlide = document.querySelector('.singleReel .swiper-slide-active video');
          if (activeSlide) {
            activeSlide.play();
            activeSlide.classList.remove("paused");
          }
        },
        slideChange: function () {
          setTimeout(() => {
            document.querySelectorAll('.singleReel video').forEach(video => {
              video.pause();
              video.currentTime = 0;
            });
            let activeSlide = document.querySelector('.singleReel .swiper-slide-active video');
            if (activeSlide) {
              activeSlide.play();
              activeSlide.classList.remove("paused");
            }
          }, 1500);
        }
      }
    });
  }

});
