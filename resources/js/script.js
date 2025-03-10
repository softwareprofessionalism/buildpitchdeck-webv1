// Show loader until the page and assets are fully loaded
// document.addEventListener("DOMContentLoaded", () => {
//   document.body.classList.remove("loaded");
// });

// window.addEventListener("load", () => {
//   window.scrollTo({ top: 0, behavior: "smooth" });
//   setTimeout(() => {
//     document.body.classList.add("loaded");
//   }, 300);
// });

$(document).ready(function () {
  // Loader Script
  $("body").removeClass("loaded");

  $(window).on("load", function () {
    $("html, body").animate({ scrollTop: 0 },300);

    setTimeout(function () {
      $("body").addClass("loaded");
    }, 300);
  });
  
  var backToTop = $("#backToTop");

  // Show or hide the button based on scroll position
  $(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
      backToTop.fadeIn();
    } else {
      backToTop.fadeOut();
    }
  });

  // Scroll to top when clicked
  backToTop.click(function () {
    $("html, body").animate({ scrollTop: 0 }, 500); // 500ms animation
  });
});


$(document).ready(() => {

  // Function to initialize AOS based on screen size
  function initAOS() {
    if (window.innerWidth < 992) {
      // Initialize AOS for screens < 1199px
      AOS.init({
        once: true, // Ensures animation runs only once
        // disable: "mobile", // Remove this if you want animations on mobile
      });
    } else {
      // For screens >= 1200px: reset AOS and ensure content is visible
      AOS.refreshHard(); // Reset AOS animations
      $("[data-aos]").each(function () {
        // Make content visible for larger screens
        $(this)
          .css({
            opacity: 1,
            transform: "none",
          })
          .removeAttr("data-aos"); // Remove AOS attributes
      });
    }
  }

  // Reinitialize AOS on window resize
  $(window).on("resize", function () {
    initAOS();
  });

  // AOS Initialization
  initAOS();

  const header = $("header"); // Select the header
  const scrollThreshold = 0; // Scroll position in pixels to trigger the class

  // Scroll event
  $(window).on("scroll", function () {
    if ($(this).scrollTop() > scrollThreshold) {
      header.addClass("scroll-active");
    } else {
      header.removeClass("scroll-active");
    }
  });

  // Header Dropdown
  $("header .dropdown_item").on("click", function () {
    const isDropdownActive = header.hasClass("dropdown-active");

    if (!isDropdownActive) {
      // Add dropdown-active and remove scroll-active
      header.addClass("dropdown-active").removeClass("scroll-active");
    } else {
      // Remove dropdown-active
      header.removeClass("dropdown-active");

      // Re-add scroll-active if scroll position is greater than threshold
      if ($(window).scrollTop() > scrollThreshold) {
        header.addClass("scroll-active");
      }
    }

    $(".dropdown_content").toggleClass("active");
  });

  $(document).on("click", function (event) {
    if (!$(event.target).closest(".dropdown_item, .dropdown_content").length) {
      header.addClass("scroll-active");
      header.removeClass("dropdown-active");
      $(".dropdown_content").removeClass("active");
    }
  });

  // SideBar Enable And Disable
  $(".hamburder_icon").on("click", () => {
    // $("header").addClass("active");
    $(".sideBar").toggleClass("active");

    if ($(".sideBar").hasClass("active")) {
      $("body").addClass("no-scroll");
    } else {
      $("body").removeClass("no-scroll");
    }
  });

  $(".sideBar .dropdown_item").on("click", () => {
    $(".sideBar .dropdown_content").slideToggle();
  });

  $(".cancel_icon").on("click", () => {
    $(".sideBar").removeClass("active");
    $("body").removeClass("no-scroll");
    $(".sideBar .dropdown_content").hide();
  });

  // Function to initialize Slick sliders
  function initSlickSlider() {
    const $SeoCards = $(".cards_wrapper");
    const $testimonial = $(".testimonial_wrapper");
    const $provenResultsCard = $(".provenResults_cards_wrapper");

    if (!$SeoCards.hasClass("slick-initialized")) {
      $SeoCards.slick({
        arrows:true,
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        prevArrow: '<button class="custom_arrow prev"><i class="fa-solid fa-arrow-left-long"></i></button>',
        nextArrow: '<button class="custom_arrow next"><i class="fa-solid fa-arrow-right-long"></i></button>'
      });
    }

    if (!$testimonial.hasClass("slick-initialized")) {
      $testimonial.slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 2000,
      });
    }

    if (!$provenResultsCard.hasClass("slick-initialized")) {
      $provenResultsCard.slick({
        dots: true,
        arrows: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 2000,
        speed: 500,
        fade: true,
        cssEase: "linear",
      });
    }
  }

  // Function to destroy Slick sliders
  function destroySlickSlider() {
    const $SeoCards = $(".cards_wrapper");
    const $testimonial = $(".testimonial_wrapper");
    const $provenResultsCard = $(".provenResults_cards_wrapper");

    if ($SeoCards.hasClass("slick-initialized")) {
      $SeoCards.slick("unslick");
    }

    if ($testimonial.hasClass("slick-initialized")) {
      $testimonial.slick("unslick");
    }

    if ($provenResultsCard.hasClass("slick-initialized")) {
      $provenResultsCard.slick("unslick");
    }
  }

  // Function to manage Slick sliders based on screen width
  function handleSlickSlider() {
    const maxWidth = 991;

    if (window.innerWidth <= maxWidth) {
      initSlickSlider(); // Initialize below or equal to 1199px
    } else {
      destroySlickSlider(); // Destroy above 1199px
    }
  }

  // Initialize all functionality
  function init() {
    handleSlickSlider(); // Manage Slick sliders based on screen width

    // Recheck slider state on window resize
    $(window).on("resize", handleSlickSlider);
  }

  // Run initialization
  init();

  // Outline the third slide on .home_banner
  $(".home_banner").on("click", () => {
    if (!$(".home_banner .slide").hasClass("outlined")) {
      $(".home_banner .slide:nth-child(3)").addClass("outlined");
    }
  });

  // Outline the clicked slide and remove the outline from siblings
  $(".home_banner .slide").on("click", function () {
    $(this).addClass("outlined").siblings().removeClass("outlined");
  });

  // Remove the outline from the slide on .home_banner double-click
  $(".home_banner").on("dblclick", () => {
    $(".home_banner .slide").removeClass("outlined");
  });

  // Portfolio Page Slider
  $(".portfolio_body_slider").slick({
    dots: true,
    arrows: false,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
  });
});


// Step Forms Functionalities

document.addEventListener("DOMContentLoaded", () => {
  const steps = document.querySelectorAll(".steps");
  const stepItemsWrapper = document.getElementById("steps_items");
  const stepsContent = document.querySelector(".steps_content");
  const continueBtn = document.querySelector(".continue_btn");
  const dividerWrapper = document.querySelector(".divider_wrapper");
  let currentStepIndex = 0;
  const stepItemsStack = [];

  // Only execute if steps and stepsContent exist
  if (steps.length > 0 && stepsContent) {
    // Function to update the height of the steps_content dynamically
    const updateStepsHeight = () => {
      if (steps[currentStepIndex]) {
        const activeStep = steps[currentStepIndex];
        const activeStepHeight = activeStep.scrollHeight;
        stepsContent.style.height = `${activeStepHeight}px`;
      }
    };

    // Initialize step visibility
    steps.forEach((step, index) => {
      step.style.position = "absolute";
      step.style.transition = "left 0.3s ease";
      step.style.left = index === 0 ? "0" : "100%";
    });

    // Initialize the height for the first step
    updateStepsHeight();

    // Next step function
    window.nextStep = function (e) {
      const badgeElement = e.target.closest(".badge_title");

      if (badgeElement) {
        const color = badgeElement.getAttribute("color");
        const text = badgeElement.textContent;

        // Create the parent div element
        let stepItem = document.createElement("div");

        // Add the class name to the div
        stepItem.className = color;

        // Add the inner text content
        stepItem.textContent = text;

        if (stepItemsWrapper) {
          stepItemsWrapper.appendChild(stepItem);
          stepItemsStack.push(stepItem);
        }
      } else {
        console.error("color attribute not found.");
      }

      if (currentStepIndex < steps.length - 2) {
        steps[currentStepIndex].style.left = "-100%";
        steps[currentStepIndex + 1].style.left = "0";
        currentStepIndex++;
      } else {
        // Hide all previous steps when reaching the second last
        for (let i = 0; i < currentStepIndex; i++) {
          steps[i].style.display = "none";
        }

        // Move to the next step
        steps[currentStepIndex].style.left = "-100%";
        steps[currentStepIndex + 1].style.left = "0";

        if (continueBtn) {
          continueBtn.classList.remove("d-none");
        }

        if (stepItemsWrapper) {
          stepItemsWrapper.style.display = "none";
        }

        if (dividerWrapper) {
          dividerWrapper.style.display = "none";
        }

        currentStepIndex++;
      }

      updateStepsHeight();
    };

    // Previous step function
    window.prevStep = function () {
      if (currentStepIndex > 0) {
        if (continueBtn) {
          continueBtn.classList.add("d-none");
        }

        if (stepItemsWrapper) {
          stepItemsWrapper.style.display = "flex";
        }

        if (dividerWrapper) {
          dividerWrapper.style.display = "block";
        }

        if (steps[currentStepIndex - 1].style.display === "none") {
          steps[currentStepIndex - 1].style.display = "block";
        }

        steps[currentStepIndex].style.left = "100%";
        steps[currentStepIndex - 1].style.left = "0";
        currentStepIndex--;

        const lastStepItem = stepItemsStack.pop();
        if (lastStepItem) {
          lastStepItem.remove();
        }

        updateStepsHeight();
      } else {
        window.location.href = "/";
      }
    };
  } else {
    console.warn("No steps or steps content found on this page.");
  }

  // Handle form submission on the continue button
  if (continueBtn) {
    continueBtn.addEventListener("click", () => {
      alert("Form Submitted Successfully");
      window.location.href = "/";
    });
  }
});



