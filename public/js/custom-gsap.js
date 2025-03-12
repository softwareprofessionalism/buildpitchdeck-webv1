gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);

// Function to animate slides in the home banner
function animateSlides() {
  const slides = document.querySelectorAll("#home_banner .slide");
  const speed = 70;

  slides.forEach((slide, i) => {
    let angle = i * 13 + 13;
    gsap.set(slide, {
      rotation: angle,
      transformOrigin: "50% 2300px",
    });
  });

  gsap.timeline({
    scrollTrigger: {
      id: "homeBannerScroll", // Add an ID to reference
      trigger: "#home_banner",
      start: "top top",
      end: "+=3000px",
      scrub: 1,
      pin: true,
      onUpdate: (self) => {
        slides.forEach((slide, i) => {
          let baseAngle = i * 13 + 13;
          gsap.to(slide, {
            rotation: baseAngle - self.progress * speed,
            overwrite: "auto",
          });
        });
      },
    },
  });
}

// Function to fade out titles in the home banner
// function fadeOutTitles() {
//   gsap.to("#home_banner .title, #home_banner .sub_title", {
//     opacity: 0,
//     duration: 0.5,
//     scrollTrigger: {
//       trigger: "#home_banner",
//       start: "top top",
//       scrub: true,
//     },
//   });
// }

// Function to animate the SEO middle card
function animateMiddleCard() {
  const middleCard = document.querySelectorAll(".seo_card")[1];
  if (!middleCard) return;

  gsap.set(middleCard, {
    y: "-100%",
    scale: 1.2,
    rotateX: 10,
  });

  gsap.to(middleCard, {
    scrollTrigger: {
      trigger: ".cards_wrapper .seo_card",
      start: "-100% center",
      end: "+=1000px",
      scrub: true,
    },
    y: "0%",
    scale: 1,
    rotateX: 0,
    ease: "power2.out",
  });
}

// Function to fade out the SEO section title
// function fadeOutSeoTitle() {
//   gsap.to("#seo_sec .title", {
//     opacity: 0,
//     duration: 0.5,
//     scrollTrigger: {
//       trigger: "#seo_sec .title",
//       start: "top center",
//       end: "top 10%",
//       scrub: true,
//     },
//   });
// }

// Function to animate the Proven Results section
function animateProvenResults() {
  const images = gsap.utils.toArray(".provenResults_card");
  const endTime = 1000 * images.length;

  gsap.set(".provenResults_cards_wrapper", {
    height: () => {
      const offset = 40;
      const cards = document.querySelectorAll(".provenResults_card");
      const cardHeight = cards[0]?.offsetHeight || 0;
      return cardHeight + cards.length * offset;
    },
  });

  let tl = gsap.timeline({
    scrollTrigger: {
      trigger: ".proven_results_sec",
      pin: true,
      start: "50% center",
      end: `+=${endTime}px`,
      pinSpacing: true,
      scrub: 0.2,
    },
  });

  tl.from(".provenResults_card_2", { y: () => window.innerHeight }).from(
    ".provenResults_card_3",
    { y: () => window.innerHeight }
  );

  // gsap.to("#proven_results_sec .title, #proven_results_sec .title + .text", {
  //   opacity: 0,
  //   duration: 0.5,
  //   scrollTrigger: {
  //     trigger: "#proven_results_sec",
  //     start: "center center",
  //     scrub: true,
  //   },
  // });
}

// Function to animate the testimonial section
function animateTestimonial() {
  let testimonialSection = document.querySelector(".testimonial");

  // Check if testimonial section exists
  if (!testimonialSection) return;

  let scrollWidth = testimonialSection.scrollWidth * -3.5; // Only set if exists

  let tl = gsap.timeline({
    scrollTrigger: {
      trigger: "#client_reviews_sec",
      start: "center center",
      end: "+=1000px",
      pin: true,
      scrub: true,
      // markers: true,
      invalidateOnRefresh: true,
    },
  });

  tl.to(".testimonial", {
    x: scrollWidth,
    xPercent: 0,
    ease: "none",
  });

  // tl.to(
  //   "#client_reviews_sec .title, #client_reviews_sec .title + .text",
  //   {
  //     opacity: 0,
  //     duration: 0.5,
  //   },
  //   "<"
  // );
}

 //  Animate Banner Cards on small screens Start
function animateCardsVertical() {
  const images = gsap.utils.toArray("#home_banner .slide");

  if (images.length === 0) return; // Stop execution if no cards found

  // Adjusted total scroll distance
  const endTime = 1000 * (images.length - 1); // Skipping first card

  gsap.set("#home_banner .slide-container", {
    height: () => {
      const offset = 15; // Adjusted spacing
      const cards = document.querySelectorAll("#home_banner .slide");
      const cardHeight = cards[0]?.offsetHeight || 0;
      return cardHeight + (cards.length - 1) * offset;
    },
  });

  let tl = gsap.timeline({
    scrollTrigger: {
      trigger: "#home_banner",
      pin: true,
      start: "50% center",
      end: `+=${endTime}px`,
      pinSpacing: true,
      scrub: 0.5, // Smooth transition
    },
  });

  // Keep the first card visible at the start
  gsap.set(images[0], { opacity: 1, y: 0 });

  // Animate each card except the first one
  images.slice(1).forEach((card, index) => {
    tl.from(card, {
      y: () => window.innerHeight * 0.8,
      opacity: 0,
      duration: 0.5,
      ease: "power2.out",
    });
  });
}
 //  Animate Banner Cards on small screens End

  // Hide the first step title when the second step enters the viewport
 function initStepAnimation() {
  gsap.to(".banner_step_1 .title", {
    scrollTrigger: {
      trigger: ".banner_step_2",
      start: "top center",
      end: "top top",
      scrub: true,
    },
    opacity: 0,
    y: -50,
  });
}
 // Hide the first step title when the second step enters the viewport

// Initialize all animations with a single matchMedia
function initAnimations() {

    // Kill existing ScrollTriggers before reinitializing
    ScrollTrigger.getAll().forEach(trigger => trigger.kill());

  // animateHeader();
  const sm = gsap.matchMedia();
  sm.add("(min-width: 992px)", () => {
    animateSlides();
    // fadeOutTitles();
    animateMiddleCard();
    // fadeOutSeoTitle();
    animateProvenResults();
    animateTestimonial();
    initStepAnimation();
    // ScrollTrigger.refresh();
  });

  // Refresh ScrollTrigger after animations are applied
  ScrollTrigger.refresh();
}

function checkScreenSize() {
  // Kill existing ScrollTriggers to prevent conflicts
  ScrollTrigger.getAll().forEach(trigger => trigger.kill());

  if (window.innerWidth <= 991 && document.querySelector("#home_banner")) {
    animateCardsVertical();
  } else {
    initAnimations();
  }

  // Refresh GSAP ScrollTrigger after reinitialization
  ScrollTrigger.refresh();
}

// Scroll to the top on page load and reinitialize animations
// window.addEventListener("load", () => {
//   // Smoothly scroll to the top of the page on load
//   window.scrollTo({ top: 0, behavior: "smooth" });

//   // Reinitialize all animations after a slight delay
//   setTimeout(() => {
//     initAnimations();
//     checkScreenSize();
//   }, 0);
// });


// Scroll to the top on page load and reinitialize animations
window.addEventListener("load", () => {
  window.scrollTo({ top: 0, behavior: "smooth" });

  setTimeout(() => {
    checkScreenSize();
  }, 0);
});

// Debounce Resize Event
let resizeTimeout;
window.addEventListener("resize", () => {
  clearTimeout(resizeTimeout);
  resizeTimeout = setTimeout(() => {
    location.reload(); // Reloads the page automatically
  }, 300);
});