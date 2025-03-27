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
 * Partner Carousel Starts
 * ==========================================
 */
partnerCarousel = () => {
  let swiper = new Swiper(".partner-slider .mySwiper", {
    loop: true,
    speed: 6000,
    autoplay: {
      delay: 0,
      disableOnInteraction: false,
    },
    slidesPerView: "auto",
    spaceBetween: 100,
    allowTouchMove: false,
  });
};
/**
 * Partner Carousel Ends
 * ==========================================
 */

/**
 * Why us Accordion Starts
 * ==========================================
 */
whyUsAccordion = () => {
  const whyUsImg = document.querySelectorAll(".why-us-img");
  const whyUsContent = document.querySelectorAll(".why-us-content");
  const accordionTitle = document.querySelectorAll(".accordion-title > a");
  const accordionContent = document.querySelectorAll(".accordion-content");

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
  partnerCarousel();
  whyUsAccordion();
  testimonialCarousel();
  getFooterHeight();
});
