jQuery(function ($) {
  $(".testimonial-slider").slick({
    autoplay: true,
    autoplaySpeed: 2000,
    speed: 600,
    draggable: true,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: false,
    responsive: [
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 575,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });
});

document.addEventListener("DOMContentLoaded", function () {
  // steps form

  const tesBtnY = document.querySelector(".yesFirst");
  const tesBtnN = document.querySelector(".noFirst");
  const tesBtn2Y = document.querySelector(".yesSecond");
  const tesBtn2N = document.querySelector(".noSecond");
  const introStartbtn = document.querySelector(".introbtn");

  const restart = document.querySelector(".restart");
  const restartSecond = document.querySelector(".restartSecond");
  const stepOne = document.querySelector(".stepOne");
  const stepTwo = document.querySelector(".stepTwo");
  const stepEnd = document.querySelector(".stepEnd");
  const stepEndTwo = document.querySelector(".stepEndTwo");
  const stepLink = document.querySelector(".stepLink");
  const introStart = document.querySelector(".intro");

  const introFunc = function () {
    stepOne.classList.remove("hidden");
    introStart.classList.add("hidden");
    introStart.classList.add("fade-out");
    stepOne.classList.add("fade-in");
  };

  const yesOne = function () {
    stepTwo.classList.remove("hidden");
    stepOne.classList.add("hidden");
    stepOne.classList.add("fade-out");
    stepTwo.classList.add("fade-in");
  };

  const noOne = function () {
    stepEnd.classList.remove("hidden");
    stepOne.classList.add("hidden");
    stepOne.classList.add("fade-out");
    stepEnd.classList.add("fade-in");
  };

  const yesTwo = function () {
    stepLink.classList.remove("hidden");
    stepTwo.classList.add("hidden");
    stepTwo.classList.add("fade-out");
    stepLink.classList.add("fade-in");
  };

  const noTwo = function () {
    stepEndTwo.classList.remove("hidden");
    stepTwo.classList.add("hidden");
    stepTwo.classList.add("fade-out");
    stepEndTwo.classList.add("fade-in");
  };

  const restartapp = function () {
    stepOne.classList.remove("hidden");
    stepEnd.classList.add("hidden");
    stepEndTwo.classList.add("hidden");
  };

  const restartAppSecond = function () {
    stepOne.classList.remove("hidden");
    stepEndTwo.classList.add("hidden");
  };

  tesBtnY.addEventListener("click", yesOne);
  tesBtnN.addEventListener("click", noOne);
  tesBtn2Y.addEventListener("click", yesTwo);
  tesBtn2N.addEventListener("click", noTwo);
  restart.addEventListener("click", restartapp);
  restartSecond.addEventListener("click", restartAppSecond);
  introStartbtn.addEventListener("click", introFunc);
});
