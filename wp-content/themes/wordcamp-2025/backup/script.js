/**
 * Sticky Header Starts
 * ==========================================
 */
stickyHeader = () => {
  const header = document.querySelector(".header-default");

  if (!header) return;

  function setSticky() {
    if (window.scrollY > 0) {
      header.classList.add("sticky");
    } else {
      header.classList.remove("sticky");
    }
  }
  setSticky();
  window.addEventListener("scroll", setSticky);
};
/**
 * Sticky Header Ends
 * ==========================================
 */

/**
 * Animate Title Starts
 * ==========================================
 */
animateTitle = () => {
  const titleContainer = document.querySelector(".os-leadspace__title");
  const titles = document.querySelectorAll(".os-leadspace__title > div");
  const wrapper = document.querySelector(".os-leadspace__wrapper");

  if (titles.length === 0 || !wrapper || !titleContainer) return;

  let currentIndex = 0;
  const totalTitles = titles.length;

  // Show the Title
  setTimeout(() => {
    titleContainer.style.opacity = 1;
  }, 100);

  // Set initial title height
  wrapper.style.setProperty("--title-height", titles[0].offsetHeight + "px");

  // Clone the first title and append it to the end
  const firstTitleClone = titles[0].cloneNode(true);
  titleContainer.appendChild(firstTitleClone);

  function updateTitleIndex() {
    wrapper.style.setProperty("--active-title", currentIndex);

    if (currentIndex === totalTitles) {
      // If reaching the cloned title, reset immediately
      setTimeout(() => {
        wrapper.style.setProperty("--title-transition", "none"); // Remove transition for instant jump
        wrapper.style.setProperty("--active-title", "0");
        currentIndex = 1;
      }, 600); // Wait for transition to complete before resetting
    } else {
      wrapper.style.setProperty("--title-transition", "0.6s all ease-in-out");
    }

    currentIndex++;
    setTimeout(updateTitleIndex, 1500);
  }

  updateTitleIndex();
};
/**
 * Animate Title Ends
 * ==========================================
 */

/**
 * Project Carousel Starts
 * ==========================================
 */
projectCarousel = () => {
  let swiper = new Swiper(".os-project__slider .mySwiper", {
    loop: true,
    speed: 1500,
    spaceBetween: 30,
    grabCursor: true,
    effect: "creative",
    creativeEffect: {
      prev: {
        shadow: true,
        translate: [0, 0, -400],
      },
      next: {
        translate: ["100%", 0, 0],
      },
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });
};
/**
 * Project Carousel Ends
 * ==========================================
 */

/**
 * Why us Accordion Starts
 * ==========================================
 */
whyUsAccordion = () => {
  const whyUsImg = document.querySelectorAll(".os-why-us__figure");
  const whyUsContent = document.querySelectorAll(".os-why-us__accordion-wrapper");
  const accordionTitle = document.querySelectorAll(".os-why-us__accordion-title > a");
  const accordionContent = document.querySelectorAll(".os-why-us__accordion-content");

  const showActive = (index) => {
    whyUsImg.forEach((item) => item.classList.remove("active"));
    whyUsContent.forEach((item) => item.classList.remove("active"));
    accordionContent.forEach((item) => (item.style.maxHeight = "0"));

    if (whyUsImg[index]) whyUsImg[index].classList.add("active");
    if (whyUsContent[index]) whyUsContent[index].classList.add("active");

    const content = accordionContent[index];
    if (content) content.style.maxHeight = `${content.scrollHeight}px`;
  };

  showActive(0);

  accordionTitle.forEach((item, index) => {
    item.addEventListener("click", function (e) {
      e.preventDefault();
      showActive(index);
    });
  });
};
/**
 * Why us Accordion Ends
 * ==========================================
 */

/**
 * Testimonial Carousel Starts
 * ==========================================
 */
testimonialCarousel = () => {
  let swiper = new Swiper(".testimonial-slider .mySwiper", {
    loop: false,
    speed: 1000,
    navigation: {
      nextEl: ".custom-button-next",
      prevEl: ".custom-button-prev",
    },
    slidesPerView: 2,
    spaceBetween: 30,
  });
};
/**
 * Testimonial Carousel Ends
 * ==========================================
 */

/**
 * Get Footer Height Starts
 * ==========================================
 */
getFooterHeight = () => {
  const main = document.querySelector(".site-main");
  const footer = document.querySelector(".site-footer");

  const footerHeight = footer.offsetHeight;

  main.style.marginBottom = `${footerHeight}px`;
};
/**
 * Get Footer Height Ends
 * ==========================================
 */
document.addEventListener("DOMContentLoaded", function () {
  stickyHeader();
  animateTitle();
  projectCarousel();
  whyUsAccordion();
  testimonialCarousel();
  getFooterHeight();
});
